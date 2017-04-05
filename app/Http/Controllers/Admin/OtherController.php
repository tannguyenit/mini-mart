<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Controllers\Controller;
use App\Other;
use DB;

class OtherController extends Controller
{
	public function introduce()
	{
		$arOther=Other::where('category',0)->get();
		return view('admin.other.introduce',compact('arOther'));
	}
	public function transport_policy()
	{
		$arOther=Other::where('category',1)->get();
		return view('admin.other.transport_policy',compact('arOther'));
	}
	public function privacy_policy()
	{
		$arOther=Other::where('category',2)->get();
		return view('admin.other.privacy_policy',compact('arOther'));
	}
	public function change_delivery()
	{
		$arOther=Other::where('category',3)->get();
		return view('admin.other.change_delivery',compact('arOther'));
	}
	public function transport()
	{
		$arOther=Other::where('category',4)->get();
		return view('admin.other.transport',compact('arOther'));
	}
	public function payment()
	{
		$arOther=Other::where('category',5)->get();
		return view('admin.other.payment',compact('arOther'));
	}
	public function transport_fee()
	{
		$arOther=Other::where('category',6)->get();
		return view('admin.other.transport_fee',compact('arOther'));
	}
	public function getEdit()
	{
		if (Request::ajax()) {
			$id=Request::get('id');
			$segment=Request::get('segment');
			$arEdit=Other::where('id',$id)->first();
			return view('admin.other.edit',compact('arEdit','segment'));
		}
	}
	public function postEdit()
	{
		$id=Request::Input('id');
		$segment=Request::Input('segment');
		$arDel=Other::find($id);
		$arNews=array(
			"content"=>Request::Input('content'),
			);
		DB::table('others')->where('id',$id)->update($arNews);
		return redirect()->route('admin.other.'.$segment.'')->with(['level'=>'success','msg'=>'Cập nhật thành công']);
	}
}
