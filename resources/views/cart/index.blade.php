@extends('templates.public.template')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <form action="" method="post" id="cartformpage">
                <div class="cart">
                    <div class="thead row hidden-xs">
                        <div class="col-sm-1 td cart-product-thumbnail">Sản phầm</div>
                        <div class="col-sm-4 td cart-product-name">Mô tả</div>
                        <div class="col-sm-2 td cart-product-price">Đơn giá</div>
                        <div class="col-sm-2 td cart-product-quantity">Số lượng</div>
                        <div class="col-sm-2 td cart-product-subtotal">Thành tiền</div>
                        <div class="col-sm-1 td cart-product-remove">Xoá</div>
                    </div>
                    <div class="tbody">
                        @foreach ($arCart as $element)
                        <div class="cart_item row" id="{{ $element->rowId }}">
                            <div class="col-sm-1 td cart-product-thumbnail">
                                <a href="{{ $element->options->url }}">
                                    <img src="{{ asset(Storage::url($element->options->img )) }}" alt="{{ $element->name }}">
                                </a>
                            </div>
                            <div class="col-sm-4 td cart-product-name">
                                <a href="{{ $element->options->url }}">{{ $element->name }}</a>
                            </div>
                            <div class="col-sm-2 td cart-product-price">
                                <span class="amount">{{ number_format($element->price, '0', ',', '.') }} VND</span>
                            </div>
                            <div class="col-sm-2 td cart-product-quantity">
                                <div class="quantity clearfix">
                                    <input name="quantity" data-price="{{ $element->price }}" data-max="{{ $element->options->max }}" value="{{ $element->qty }}" data-rowId="{{ $element->rowId }}"  class="qty" type="number">
                                </div>
                            </div>
                            <div class="col-sm-2 td cart-product-subtotal" data-amout="{{ $element->price * $element->qty }}">
                                <span class="amount">{{ number_format($element->price * $element->qty, '0', ',', '.') }} VND</span>
                            </div>
                            <div class="col-sm-1 td cart-product-remove">
                                <a href="javascript:void(0)" data-rowId="{{ $element->rowId }}" class="remove__cart" title="Remove this item"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        @endforeach
                        <div class="row total_price">
                            <div class="col-sm-2 col-xs-6 td col-sm-push-7">
                                <h4 class="nomargin">Tổng tiền </h4>
                            </div>
                            <div class="col-md-3 col-xs-6 td col-sm-push-7">
                                <span class="amount color lead">
                                    <strong class="total_amount">{{ number_format(Cart::subtotal(), 0, ',', '.') }}</strong> VND
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding col-sm-push-6">
                        <button type="button" onclick="window.location.href='/checkout'" class="button button-3d notopmargin fright">Thanh toán</button>
                        <button type="button"  class="button destroy_cart notopmargin fright">Hủy giỏ hàng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@stop
