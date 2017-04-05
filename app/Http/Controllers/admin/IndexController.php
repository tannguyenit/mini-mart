<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class IndexController extends Controller
{
    protected $user;
    public function __construct(User $user, Product $product, Order $order)
    {
        $this->user = $user;
        $this->product = $product;
        $this->order = $order;
    }

    public function index()
    {
        $this->dataView['countUser'] = $this->user->count();
        $this->dataView['countProduct'] = $this->product->count();
        $this->dataView['countOder'] = $this->order->count();

        return view("admin.index.index", $this->dataView);
    }
}
