<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mini Market - Thanh toán đơn hàng">
    <title>Mini Market - Thanh toán đơn hàng</title>
    <link href="{{ asset('templates/public/checkout/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/checkout/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/checkout/checkout_002.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="body--custom-background-color">
    <form method="post" action="{{ action('CartController@order') }}" data-toggle="validator">
        {{ csrf_field() }}
        <div  class="container">
            <div class="header">
                <div class="wrap">
                    <div class="shop logo logo--left ">
                        <h1 class="shop__name">
                            <a href="{{ action('IndexController@index') }}">
                                Mini Market
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="wrap clearfix">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 order-info">
                            <div class="order-summary order-summary--custom-background-color ">
                                <div class="order-summary-header summary-header--thin summary-header--border">
                                    <h2>
                                        <label class="control-label">Đơn hàng</label>
                                        <label class="control-label">({{ Cart::content()->count() }})</label>
                                    </h2>
                                </div>
                                <div class="order-items mobile--is-collapsed">
                                    <div class="summary-body summary-section summary-product">
                                        <div class="summary-product-list">
                                            <ul class="product-list">
                                                @foreach (Cart::content() as $element)
                                                <li class="product product-has-image clearfix">
                                                    <div class="product-thumbnail pull-left">
                                                        <div class="product-thumbnail__wrapper">
                                                            <img src="{{ asset('images/' . $element->options->img) }}" alt="{{ $element->name }}" class="product-thumbnail__image">
                                                        </div>
                                                        <span class="product-thumbnail__quantity" >{{ $element->qty }}</span>
                                                    </div>
                                                    <div class="product-info pull-left">
                                                        <span class="product-info-name">
                                                            <strong>{{ $element->name }}</strong>
                                                        </span>
                                                    </div>
                                                    <strong class="product-price pull-right">
                                                        {{ number_format($element->price, 0, ',', '.') }} VNĐ
                                                    </strong>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-section border-top-none--mobile">
                                    <div class="total-line total-line-subtotal clearfix">
                                        <span class="total-line-name pull-left">Tạm tính</span>
                                        <span class="total-line-subprice pull-right">{{ Cart::subtotal() }} VNĐ</span>
                                    </div>
                                    <div class="total-line total-line-shipping clearfix">
                                        <span class="total-line-name pull-left">Phí vận chuyển</span>
                                        <span class="total-line-shipping pull-right">0 ₫</span>
                                    </div>
                                    <div class="total-line total-line-total clearfix">
                                        <span class="total-line-name pull-left">Tổng cộng</span>
                                        <span class="total-line-price pull-right">{{ Cart::subtotal() }} VNĐ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix hidden-sm hidden-xs">
                                <input class="btn btn-primary col-md-12 mt10 btn-checkout" value="ĐẶT HÀNG" type="submit">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 customer-info">
                            <div class="form-group m0">
                                <h2>
                                    <label class="control-label">Thông tin mua hàng</label>
                                </h2>
                            </div>
                            @if (Auth::guest())
                            <div class="form-group">
                                <a href="{{ action('Auth\LoginController@login') }}">Đăng ký tài khoản mua hàng</a>
                                <span style="padding: 0 5px;">/</span>
                                <a href="{{ action('Auth\LoginController@login') }}">Đăng nhập </a>
                            </div>
                            <hr class="divider">
                            <div class="form-group">
                                <input data-error="Vui lòng nhập email đúng định dạng" required="" name="email" class="form-control" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" type="email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="billing">
                                <div class="form-group">
                                    <a class="underline-none open" href="javascript:void(0)">
                                        <span>Thông tin thanh toán và nhận hàng</span>
                                    </a>
                                </div>
                                <div >
                                    <div class="form-group">
                                        <input data-error="Vui lòng nhập họ tên" value="" required=""  name="name" class="form-control" placeholder="Họ và tên">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <hr class="divider">
                            <div class="form-group">
                                <input name="email" class="form-control" disabled="disabled" value="{{ Auth::user()->email }}" type="email">
                                <input name="email" value="{{ Auth::user()->email }}" type="hidden">
                            </div>
                            <div class="billing">
                                <div class="form-group">
                                    <a class="underline-none open" href="javascript:void(0)">
                                        <span>Thông tin thanh toán và nhận hàng</span>
                                    </a>
                                </div>
                                <div >
                                    <div class="form-group">
                                        <input data-error="Vui lòng nhập họ tên" value="{{ Auth::user()->fullname }}"  required=""  name="name" class="form-control" placeholder="Họ và tên">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="number" maxlength="11" data-error="Vui lòng nhập số điện thoại- (10-11 số)" required=""  name="phone" class="form-control" placeholder="Số điện thoại">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input data-error="Vui lòng nhập địa chỉ của bạn" required="" name="address" class="form-control" placeholder="Địa chỉ">
                                <div class="help-block with-errors"></div>
                            </div>
                            <hr class="divider">
                            <div class="form-group">
                                <textarea name="note" value="" class="form-control" placeholder="Ghi chú"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="shipping-method">
                                <div class="form-group">
                                    <h2>
                                        <label class="control-label">Vận chuyển</label>
                                    </h2>
                                    <div class="next-select__wrapper">
                                        <select class="form-control next-select">
                                            <option selected="selected">Giao hàng tận nơi - 0₫</option>
                                        </select>
                                        <span class="next-icon next-icon--size-12">
                                            <img src="{{ asset('images/angle-down.png') }}" alt="" class="img-responsive">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group payment-method-list">
                                <h2>
                                    <label class="control-label">Thanh toán</label>
                                </h2>
                                <div class="radio">
                                    <label class="radio-wrapper">
                                        <span>Thanh toán khi giao hàng (COD)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_footer footer unprint"><span class="mt10"></span></div>
        </div>
    </form>
    <script src="{{ asset('templates/public/checkout/jquery-2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/public/checkout/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/public/checkout/validator.js') }}" type="text/javascript"></script>
</body>
</html>
