<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Cat;
use App\Product;
use App\ProductImage;
use DB;
use Auth;
class ProductController extends Controller
{
	public function index()
	{
		$parent=Cat::select("*")->get()->toArray();
		$arPro=Product::orderBy('id', 'desc')->get()->toArray();
		$id=DB::table('products')->max('id');
		if ($id=='') {
			$id=0;
		}else{
			$id=$id+1;
		}
		return view("admin.product.index",compact("arPro",'parent','id'));

	}
	public function ajax_remove_file()
	{
		if (Request::ajax()) {
			$filename=trim(Request::get('filename'));
			$result=ProductImage::where('images', $filename)->orderBy('id', 'DESC')->first();
			if ($result) {
				$result->delete();
			}
			if (Storage::exists('dropzone/'.$filename)) {
				Storage::delete('dropzone/'.$filename);
			}
		}
	}
	public function ajax_upload_file()
	{
		$path = Request::file('file')->store('dropzone');
		$id = Request::get('id_product');
		$size = Request::get('size');
		$arFile = explode('/', $path);
		$picture = end($arFile);
		$arImage=array(
			"images"=>$picture,
			"product_id"=>$id,
			"size"=>$size,
			);
		ProductImage::insert($arImage);
		echo $picture;
	}
	public function postadd(Request $request)
	{
		$picture = '';
		if (Request::file('hinhanh') != NULL){
			$path = Request::file('hinhanh')->store('files');
			$arFile = explode('/', $path);
			$picture = end($arFile);
		}
		$arProduct = array(
			'name' =>Request::Input('name'),
			'price' =>Request::Input('price'),
			'sale' =>Request::Input('sale'),
			'quantity' =>Request::Input('quantity'),
			'intro' =>Request::Input('intro'),
			'content' =>Request::Input('content'),
			'images' =>$picture,
			'keyword' =>changeTitle(Request::Input('name')),
			'description' =>changeTitle(Request::Input('name')),
			'user_id' =>1,//Auth::user()->id,
			'cat_id' =>Request::Input('cat_id'),
			);
		$id = DB::table('products')->insertGetId($arProduct);
		return redirect()->route('admin.product.index')->with(["level"=>"success","msg"=>"Thêm thành công"]);
	}
	public function delete($id)
	{
		$arDelImg=Product::find($id)->pro_image()->get()->toArray();
		foreach ($arDelImg as $key => $value) {
			$picture = $value['image'];
			$id=$value["id"];
			if ($picture != ""){
				if (Storage::exists('dropzone/'.$filename)) {
					Storage::delete('dropzone/'.$filename);
				}
			}
			ProductImage::find($id)->delete();
		}
		$arDelPro=Product::find($id);
		$picture = $arDelPro['images'];
		if ($picture != ""){
			Storage::delete("files/".$picture);
		};
		$arDelPro->delete();
		return redirect()->route('admin.product.index')->with(["level"=>"success","msg"=>"Xóa thành công"]);
	}
	public function getEdit($id)
	{
		$arEdit=Product::find($id)->toArray();
		$arImage=ProductImage::where('product_id',$id)->get()->toArray();
		$parent=Cat::select("*")->get()->toArray();
		return view("admin.product.edit",compact("parent","arEdit",'arImage'));
	}
	public function postEdit(Request $request,$id)
	{
		$arUpdate=Product::find($id);
		$picture = $arUpdate['images'];
		if (Request::file('hinhanh') != NULL){
			Storage::delete("files/".$picture);
			$path = Request::file('hinhanh')->store('files');
			$arFile = explode('/', $path);
			$picture = end($arFile);
		};
		$arUpdate=array(
			'name' =>Request::Input('name'),
			'price' =>Request::Input('price'),
			'sale' =>Request::Input('sale'),
			'quantity' =>Request::Input('quantity'),
			'intro' =>Request::Input('intro'),
			'content' =>Request::Input('content'),
			'images' =>$picture,
			'keyword' =>changeTitle(Request::Input('name')),
			'description' =>changeTitle(Request::Input('name')),
			'user_id' =>1,//Auth::user()->id,
			'cat_id' =>Request::Input('cat_id'),
			);
		if (DB::table('products')->where('id',$id)->update($arUpdate)){
			return redirect()->route('admin.product.index')->with(["level"=>"success","msg"=>"Sửa thành công"]);
		}


	}
}
