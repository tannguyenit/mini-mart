<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use DB;
use Illuminate\Support\Facades\Storage;
use Request;

class PromotionController extends Controller
{
    public function index()
    {
        $arNews = Promotion::all();
        return view('admin.promotion.index', compact('arNews'));
    }

    public function add(Request $request)
    {
        $path    = Request::file('hinhanh')->store('files');
        $arFile  = explode('/', $path);
        $picture = end($arFile);
        $arNews  = [
            "image"   => $picture,
            "title"   => Request::Input('title'),
            "content" => Request::Input('content'),
        ];
        Promotion::insert($arNews);
        return redirect()->route('admin.promotion.index')->with(['level' => 'success', 'msg' => 'Thêm thành công']);
    }

    public function delete_news($id)
    {
        $arDelNews = Promotion::find($id);
        $picture   = $arDelNews['image'];
        if ("" != $picture) {
            Storage::delete("files/" . $picture);
        };
        $arDelNews->delete();
        return redirect()->route('admin.other.news')->with(["level" => "success", "msg" => "Xóa thành công"]);
    }

    public function getEdit()
    {
        if (Request::ajax()) {
            $id     = Request::get('id');
            $arEdit = Promotion::where('id', $id)->first();
            return view('admin.promotion.edit', compact('arEdit'));
        }
    }

    public function postEdit()
    {
        $id      = Request::Input('id');
        $arDel   = Promotion::find($id);
        $picture = $arDel['image'];
        if (Request::file('hinhanh2') != '') {
            Storage::delete('files/' . $picture);
            $path    = Request::file('hinhanh2')->store('files');
            $arFile  = explode('/', $path);
            $picture = end($arFile);
        }
        $arNews = [
            "image"   => $picture,
            "title"   => Request::Input('title'),
            "content" => Request::Input('content'),
        ];
        DB::table('promotion')->where('id', $id)->update($arNews);
        return redirect()->route('admin.promotion.index')->with(['level' => 'success', 'msg' => 'Cập nhật thành công']);
    }
}
