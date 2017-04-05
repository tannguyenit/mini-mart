<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Cart;
use DB;
use Mail;
use Request;
use Session;

class CartController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $arCart = Cart::content();
        return view('cart.index', compact('arCart'));
    }

    public function all()
    {
        $nameCat = 'All';
        $arPromotion = [];
        $arReview = [];
        $arProduct = Product::with('cat')->paginate(15);
        if (Session::has('arReview')) {
            $arReview = Session::get('arReview');
        }
        return view('product.index', compact('arProduct', 'arPromotion', 'arReview', 'nameCat'));
    }

    public function add()
    {
        if (Request::ajax()) {
            $id = Request::get('id');
            $qty = Request::get('qty');
            $url = Request::get('url');
            $arProduct = Product::find($id);
            Cart::add([
                "id" => $id,
                "name" => $arProduct["name"],
                'qty' => $qty,
                'price' => $arProduct["price"] - ($arProduct["price"] * $arProduct["sale"] / 100),
                'options' => [
                    "img" => $arProduct["images"],
                    'url' => $url,
                    'max' => $arProduct['quantity'],
                ],
            ]);
            echo Cart::content()->count();
        }
    }

    public function buyNow()
    {
        $quantity = Request::Input('quantity');
        $productId = Request::Input('productId');
        $url = Request::Input('url');
        $arProduct = Product::find($productId);
        Cart::add([
            "id" => $productId,
            "name" => $arProduct["name"],
            'qty' => $quantity,
            'price' => $arProduct["price"] - ($arProduct["price"] * $arProduct["sale"] / 100),
            'options' => [
                "img" => $arProduct["images"],
                'url' => $url,
                'max' => $arProduct['quantity'],
            ],
        ]);
        return redirect()->action('CartController@index');
    }

    public function checkout()
    {
        if (Cart::content()->count()) {
            return view('cart.checkout');
        }
        return redirect()->action('IndexController@index');
    }

    public function destroy()
    {
        if (Cart::content()->count()) {
            Cart::destroy();
            return redirect()->action('IndexController@index');
        }
    }

    public function removecart()
    {
        if (Request::ajax()) {
            $id = Request::get("id");
            Cart::remove($id);
            $array = [
                "tongtien" => Cart::subtotal(),
                "count" => Cart::content()->count(),
            ];
            echo json_encode($array);
        }
    }

    public function order()
    {
        $input = Request::all();
        $arOrder = [
            'email' => $input['email'],
            'fullname' => $input['name'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'total' => Cart::subtotal(),
            'note' => $input['note'],
        ];

        $order_id = Order::create($arOrder)->id;

        foreach (Cart::content() as $key => $value) {
            $arOrderDetail = [
                'order_id' => $order_id,
                'product_id' => $value->id,
                'quantity' => $value->qty,
            ];
            OrderDetail::create($arOrderrderDetail);
        }

        $data = [
            "info" => $input,
        ];
        $email = $input['email'];

        Mail::send("cart.send", $data, function ($msg) use ($email) {
            $msg->from("vantancnttk13@gmail.com", "Tân Nguyễn");
            $msg->to($email, "KH")->subject("Xác nhận đơn hàng từ Mini Market");
        });
        Cart::destroy();
        echo '<script type="text/javascript">alert("Cảm ơn bạn đã đặt hàng của chúng tôi, Một email đã được gửi tới ' . $email . ' Xin vui lòng kiểm tra email của bạn "); window.location="' . url("/ ") . '"</script>';
    }

    public function updateCart()
    {

        if (Request::ajax()) {
            DB::beginTransaction();
            try {
                $rowId = Request::get('rowId');
                $qty = Request::get('qty');
                Cart::update($rowId, ['qty' => $qty]);

                DB::commit();

                return response()->json();
            } catch (\Exception $e) {
                DB::rollback();

                return response()->json([], 400);
            }
        }
    }
}
