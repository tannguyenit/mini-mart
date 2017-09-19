<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Cat;
use Input;
use Request;

class CatController extends Controller
{
    public function index()
    {
        $parent = Cat::select("*")->get()->toArray();
        $arCat  = Cat::orderBy('id', 'desc')->get()->toArray();
        return view("admin.category.index", compact('arCat', 'parent'));
    }

    public function check_tendm()
    {
        if (Request::ajax()) {
            $name = trim(Request::get('namecat'));
            $item = Cat::where('name', $name)->first();
            echo count($item);
        }
    }

    public function postadd(Request $request)
    {
        $picture = '';
        if (Request::file('icon') != null) {
            $path    = Request::file('icon')->store('files');
            $arFile  = explode('/', $path);
            $picture = end($arFile);
        }
        $name  = trim(addslashes(Request::Input('name')));
        $arCat = [
            'name'        => $name,
            'icon'        => $picture,
            'parent_id'   => Request::Input('parent_id'),
            'keyword'     => changeTitle($name),
            'description' => changeTitle($name),
        ];
        if (Cat::insert($arCat)) {
            return redirect()->route('admin.cat.index')->with(["level" => "success", "msg" => "Thêm thành công"]);
        }
    }

    public function delete($id)
    {
        $parent = Cat::where('parent_id', $id)->count();
        if (0 == $parent) {
            $del = Cat::find($id);
            if ($del->delete()) {
                return redirect()->route('admin.cat.index')->with(["level" => "success", "msg" => "Xóa thành công"]);
            }
        } else {
            return redirect()->route('admin.cat.index')->with(["level" => "danger", "msg" => "Bạn không được phép xóa danh mục này !"]);
        }
    }

    public function getEdit()
    {
        if (Request::ajax()) {
            $id     = Request::get('id');
            $arEdit = Cat::find($id)->toArray();
            $parent = Cat::select("*")->get()->toArray();
            return view("admin.category.edit", compact("parent", "arEdit"));
        }
    }

    public function postEdit(Request $request)
    {
        $id                    = Request::Input('id');
        $name                  = trim(addslashes(Request::Input('name')));
        $arUpdate              = Cat::find($id);
        $arUpdate->name        = $name;
        $arUpdate->parent_id   = Request::Input('parent_id');
        $arUpdate->keyword     = changeTitle($name);
        $arUpdate->description = changeTitle($name);
        if ($arUpdate->update()) {
            return redirect()->route('admin.cat.index')->with(["level" => "success", "msg" => "Sửa thành công"]);
        }
    }
}
