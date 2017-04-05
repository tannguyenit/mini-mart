<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Product;
use App\Models\ProductImage;
use Auth;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Request;

class ProductController extends Controller
{
    public function index()
    {
        $parent = Cat::select("*")->get()->toArray();
        $arPro = Product::orderBy('id', 'desc')->get()->toArray();
        $id = DB::table('products')->max('id');
        if ('' == $id) {
            $id = 0;
        } else {
            $id = $id + 1;
        }
        return view("admin.product.index", compact("arPro", 'parent', 'id'));
    }

    public function removeFiles()
    {
        if (Request::ajax()) {
            $filename = trim(Request::get('filename'));
            $result = ProductImage::where('images', $filename)->orderBy('id', 'DESC')->first();
            if ($result) {
                $result->delete();
            }
            if (Storage::exists('public/' . $filename)) {
                Storage::delete('public/' . $filename);
            }
        }
    }

    public function uploadFiles()
    {
        $path = Request::file('file')->store('public');
        $id = Request::get('id_product');
        $size = Request::get('size');
        $arFile = explode('/', $path);
        $picture = end($arFile);
        $arImage = [
            "images" => $picture,
            "product_id" => $id,
            "size" => $size,
        ];
        ProductImage::insert($arImage);
        echo $picture;
    }

    public function postadd(Request $request)
    {
        $picture = '';

        if (Request::file('hinhanh') != null) {
            $path = Request::file('hinhanh')->store('public');
            $arFile = explode('/', $path);
            $picture = end($arFile);
        };

        $arProduct = [
            'name' => Request::Input('name'),
            'price' => Request::Input('price'),
            'sale' => Request::Input('sale'),
            'quantity' => Request::Input('quantity'),
            'intro' => Request::Input('intro'),
            'content' => Request::Input('content'),
            'images' => $picture,
            'keyword' => changeTitle(Request::Input('name')),
            'description' => changeTitle(Request::Input('name')),
            'user_id' => Auth::user()->id,
            'cat_id' => Request::Input('cat_id'),
        ];
        $id = DB::table('products')->insertGetId($arProduct);
        return redirect()->route('admin.product.index')->with(["level" => "success", "msg" => "Thêm thành công"]);
    }

    public function delete($id)
    {
        $arDelImg = Product::find($id)->proImage()->get()->toArray();
        foreach ($arDelImg as $key => $value) {
            $picture = $value['images'];
            $id = $value["id"];
            if ("" != $picture) {
                if (Storage::exists('public/' . $picture)) {
                    Storage::delete('public/' . $picture);
                }
            }
            ProductImage::find($id)->delete();
        }
        $arDelPro = Product::find($id);
        $picture = $arDelPro['images'];
        if ("" != $picture) {
            Storage::delete("public/" . $picture);
        };
        Product::find($id)->delete();
        return redirect()->route('admin.product.index')->with(["level" => "success", "msg" => "Xóa thành công"]);
    }

    public function getEdit($id)
    {
        $arEdit = Product::find($id)->toArray();
        $arImage = ProductImage::where('product_id', $id)->get()->toArray();
        $parent = Cat::select("*")->get()->toArray();
        return view("admin.product.edit", compact("parent", "arEdit", 'arImage'));
    }

    public function postEdit(Request $request, $id)
    {
        $arUpdate = Product::find($id);
        $picture = $arUpdate['images'];
        if (Request::file('hinhanh') != null) {
            Storage::delete("public/" . $picture);
            $path = Request::file('hinhanh')->store('public');
            $arFile = explode('/', $path);
            $picture = end($arFile);
        };
        $arUpdate = [
            'name' => Request::Input('name'),
            'price' => Request::Input('price'),
            'sale' => Request::Input('sale'),
            'quantity' => Request::Input('quantity'),
            'intro' => Request::Input('intro'),
            'content' => Request::Input('content'),
            'images' => $picture,
            'keyword' => changeTitle(Request::Input('name')),
            'description' => changeTitle(Request::Input('name')),
            'cat_id' => Request::Input('cat_id'),
        ];
        if (Product::find($id)->update($arUpdate)) {
            return redirect()->route('admin.product.index')->with(["level" => "success", "msg" => "Sửa thành công"]);
        } else {
            return redirect()->route('admin.product.index')->with(["level" => "danger", "msg" => "Co loi khi sua"]);
        }
    }
}
