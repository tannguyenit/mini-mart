<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DB;
use Request;

class OrderController extends Controller
{
    public function index()
    {
        $arOrder = Order::all();
        return view('admin.order.index', compact('arOrder'));
    }

    public function getEdit()
    {
        if (Request::ajax()) {
            $id      = Request::get('id');
            $segment = Request::get('segment');
            $arEdit  = Other::where('id', $id)->first();
            return view('admin.other.edit', compact('arEdit', 'segment'));
        }
    }

    public function postEdit()
    {
        $id      = Request::Input('id');
        $segment = Request::Input('segment');
        $arDel   = Other::find($id);
        $arNews  = [
            "content" => Request::Input('content'),
        ];
        DB::table('others')->where('id', $id)->update($arNews);
        return redirect()->route('admin.other.' . $segment . '')->with(['level' => 'success', 'msg' => 'Cập nhật thành công']);
    }
}
