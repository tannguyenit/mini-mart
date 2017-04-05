<?php

namespace App\Http\Controllers;

use App\Models\Promotion;

class PromotionController extends Controller
{
    public function index()
    {
        $arNews = Promotion::with('user')->orderBy('id', 'desc')->paginate(5);
        $arPromotion = Promotion::orderBy('id', 'desc')->paginate(3);
        return view('news.index', compact('arNews', 'arPromotion'));
    }

    public function detail($slug, $id)
    {
        $arDetail = Promotion::with('user')->find($id);
        $arRelation = Promotion::where('id', '<>', $id)->take(4)->orderBy('id', 'desc')->get();
        $arPromotion = Promotion::orderBy('id', 'desc')->paginate(3);
        return view('news.detail', compact('arDetail', 'arRelation', 'arPromotion'));
    }
}
