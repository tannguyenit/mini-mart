<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use Request;
use Session;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index($cat, $name, $id)
    {
        $arCat = Cat::find($id);
        $nameCat = $arCat->name;
        if (0 == $arCat->parent_id) {
            $arProduct = Product::with('cat')->whereIn('cat_id', function ($query) use ($id) {
                $query->select('id')->from('cats')->where('parent_id', $id)->orWhere('id', $id)->get();
            })->paginate(15);
        } else {
            $arProduct = Product::with('cat')->where('cat_id', $id)->paginate(15);
        }

        $total = $arProduct->total();
        $arPromotion = $this->product->where('cat_id', $id)->orderBy('sale', 'DESC')->paginate(3);
        $arReview = [];

        if (Session::has('arReview')) {
            $arReview = Session::get('arReview');
        }
        return view('product.index', compact('arProduct', 'arPromotion', 'arReview', 'nameCat', 'total'));
    }

    public function search()
    {
        $keyword = Request::get('query');
        $arProduct = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(15);
        $total = $arProduct->total();
        if ($arProduct) {
            $nameCat = 'Search';
            $arPromotion = [];
            $arReview = [];

            if (Session::has('arReview')) {
                $arReview = Session::get('arReview');
            }
            return view('product.index', compact('arProduct', 'arPromotion', 'arReview', 'nameCat', 'total'));
        }
    }

    public function all()
    {
        $nameCat = 'All';
        $arPromotion = [];
        $arReview = [];
        $arProduct = Product::with('cat')->paginate(15);
        $total = $arProduct->total();
        if (Session::has('arReview')) {
            $arReview = Session::get('arReview');
        }
        return view('product.index', compact('total', 'arProduct', 'arPromotion', 'arReview', 'nameCat'));
    }

    public function detail($parent, $cat, $product, $id)
    {
        $arProduct = Product::with('proImage')->find($id);

        if (Session::has('arReview')) {
            foreach (Session::get('arReview') as $value) {
                if ($value->id != $arProduct->id) {
                    Session::push('arReview', $arProduct);
                }
            }
        } else {
            Session::push('arReview', $arProduct);
        }

        return view('product.detail', compact('arProduct'));
    }

    public function review()
    {
        if (Request::ajax()) {
            $id = Request::get('id');
            $url = Request::get('url');
            $arProduct = Product::with('proImage')->find($id);
            return view('product.review', compact('arProduct', 'url'));
        }
    }
}
