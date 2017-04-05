<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\News;
use DB;

class NewsController extends Controller
{
	public function news()
	{
		$arNews=News::all()->sortByDesc("id");
		return view('admin.news.index',compact('arNews'));
	}
	public function add(Request $request)
	{
		$path = Request::file('hinhanh')->store('files');
		$arFile = explode('/', $path);
		$picture = end($arFile);
		$arNews=array(
			"image"=>$picture,
			"title"=>Request::Input('title'),
			"content"=>Request::Input('content'),
			);
		News::insert($arNews);
		return redirect()->route('admin.other.news')->with(['level'=>'success','msg'=>'Thêm thành công']);
	}
	public function delete_news($id)
	{
		$arDelNews=News::find($id);
		$picture = $arDelNews['image'];
		if ($picture != ""){
			Storage::delete("files/".$picture);
		};
		$arDelNews->delete();
		return redirect()->route('admin.other.news')->with(["level"=>"success","msg"=>"Xóa thành công"]);
	}
	public function getEdit()
	{
		if (Request::ajax()) {
			$id=Request::get('id');
			$arEdit=News::where('id',$id)->first();
			return view('admin.news.edit',compact('arEdit'));
		}
	}
	public function postEdit()
	{
		$id=Request::Input('id');
		$arDel=News::find($id);
		$picture=$arDel['image'];
		if (Request::file('hinhanh2')!='') {
			Storage::delete('files/'.$picture);
			$path = Request::file('hinhanh2')->store('files');
			$arFile = explode('/', $path);
			$picture = end($arFile);
		}
		$arNews=array(
			"image"=>$picture,
			"content"=>Request::Input('content'),
			"title"=>Request::Input('title'),
			);
		DB::table('news')->where('id',$id)->update($arNews);
		return redirect()->route('admin.other.news')->with(['level'=>'success','msg'=>'Cập nhật thành công']);
	}
}
