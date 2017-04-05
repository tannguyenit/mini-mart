<?php

namespace App\Http\Controllers\Admin;
use Storage;
use Request;
use DB;
use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
	public function header()
	{
		$arSlide=Slide::where('position',1)->get();
		return view('admin.slide.header',compact('arSlide'));
	}
	public function cat()
	{
		$arSlide=Slide::where('position',2)->get();
		return view('admin.slide.cat',compact('arSlide'));
	}
	public function image()
	{
		$arSlide=Slide::where('position',3)->get();
		return view('admin.slide.image',compact('arSlide'));
	}
	public function getEdit()
	{
		if (Request::ajax()) {
			$id=Request::get('id');
			$arEdit=Slide::find($id)->toArray();
			return view('admin.slide.edit',compact('arEdit'));
		}
	}
	public function postEdit()
	{
		$id=Request::Input('id');
		$name=Request::Input('name');
		$arDel = Slide::find($id);
		$picture = $arDel['image'];

		if (Request::file('hinhanh2')!='') {
			if ($picture != ""){
				Storage::delete("files/".$picture);
			}
			$path = Request::file('hinhanh2')->store('files');
			$arFile = explode('/', $path);
			$picture = end($arFile);
		}	
		$arUpdate=array(
			"name"=>$name,
			"image"=>$picture
			);
		DB::table('slides')->where('id',$id)->update($arUpdate);
		return redirect()->route('admin.slide.header')->with(['level'=>'success','msg'=>'Sửa thành công']);
	}
	public function add_header()
	{
		$name=Request::Input('name_slide');
		$path = Request::file('hinhanh')->store('files');
		$arFile = explode('/', $path);
		$picture = end($arFile);
		$arImage=array(
			"name"=>$name,
			"image"=>$picture,
			'position'=>1,
			);
		Slide::insert($arImage);
		return redirect()->route('admin.slide.header')->with(['level'=>'success','msg'=>'Thêm thành công']);
	}
	public function add_cat()
	{
		$name=Request::Input('name_slide');
		$path = Request::file('hinhanh')->store('files');
		$arFile = explode('/', $path);
		$picture = end($arFile);
		$arImage=array(
			"name"=>$name,
			"image"=>$picture,
			'position'=>2,
			);
		Slide::insert($arImage);
		return redirect()->route('admin.slide.cat')->with(['level'=>'success','msg'=>'Thêm thành công']);
	}
	public function add_image()
	{
		$name=Request::Input('name_slide');
		$path = Request::file('hinhanh')->store('files');
		$arFile = explode('/', $path);
		$picture = end($arFile);
		$arImage=array(
			"name"=>$name,
			"image"=>$picture,
			'position'=>3,
			);
		Slide::insert($arImage);
		return redirect()->route('admin.slide.image')->with(['level'=>'success','msg'=>'Thêm thành công']);
	}
	public function delete($id)
	{
		$arDel = Slide::find($id);
		$picture = $arDel['image'];
		if ($picture != ""){
			Storage::delete("files/".$picture);
		}
		$arDel->delete();
		return redirect()->route('admin.slide.header')->with(['level'=>'success','msg'=>'Xóa thành công']);
	}
}
