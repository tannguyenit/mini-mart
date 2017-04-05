@extends('templates.public.template')

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <ol class="breadcrumb col-md-6 col-sm-6">
            <li><a href="{{ route('index.index') }}">Trang chủ</a></li>
            <li class="active">{{ $arProduct->name }}</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="postcontent nobottommargin clearfix col-sm-12">
                    <div class="product-page">
                        <div class="single-product">
                            <div class="product">
                                <div class="page_title">
                                    <h1>{{ $arProduct->name }}</h1>
                                </div>
                                <div>
                                    <div class="col-sm-8">
                                        <div class="product-image product-main-image">
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false" style="width: 100%">
                                                <div class="carousel-inner pull-right" style="width: 66.67%">
                                                    @foreach ($arProduct->proImage as $element)
                                                    <div class="item ">
                                                        <img src="{{ asset(Storage::url($element->images)) }}" class="img-responsive">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                                <ul class="thumbnails-carousel clearfix col-xs-3 pull-left">
                                                    @foreach ($arProduct->proImage as $element)
                                                    <li class="col-xs-12"><img src="{{ asset(Storage::url($element->images)) }}"></li>
                                                    @endforeach
                                                </ul>
                                                <div class="sale-flash">-{{ $arProduct->sale }} %</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 product-desc">
                                        <div class="product-price col-xs-6 col-md-6 noleftpadding">
                                           <ins>{{ number_format($arProduct->price-( $arProduct->price*$arProduct->sale/100), '0', ',' , '.') }} đ</ins>
                                           <del>{{ number_format($arProduct->price, '0', ',', '.') }} đ</del>
                                       </div>
                                       <div class="clear"></div>
                                       <div class="line"></div>
                                       <form action="{{ action('CartController@buyNow') }}" method="post" enctype="multipart/form-data" id="AddToCartFormQv">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="productId" value="{{ $arProduct->id }}">
                                        <input type="hidden" name="url" value="{{ Request::url() }}">
                                        <div class="quantity product-quantity clearfix col-sm-6 col-xs-6 noleftpadding">
                                            <input value="-" class="minus" type="button">
                                            <input id="product_quantity" readonly="readonly" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4" type="text">
                                            <input value="+" class="plus" type="button" data-qty={{ $arProduct->quantity }}>
                                        </div>

                                        <button data-url="{{ Request::url() }}" data-id="{{ $arProduct->id }}" data-price="{{ number_format($arProduct->price-( $arProduct->price*$arProduct->sale/100), '0', ',' , '.') }}" data-name="{{ $arProduct->name }}" class="add_to_cart add-to-cart button nomargin col-sm-6 col-xs-6 nopadding">Thêm vào giỏ</button>
                                        <button type="submit" data-role="buynow" id="buynow" class="button col-xs-12 nopadding">Mua ngay</button>
                                    </form>
                                    <div class="line"></div>
                                    <div class="pd_policies">
                                        <ul class="nostyled">
                                            <li class="col-sm-6 nopadding">
                                                <a href="">
                                                <img alt="Miễn phí vận chuyển" src="{{ asset('images/pd_policies_1.png') }}"> Miễn phí vận chuyển </a>
                                            </li>
                                            <li class="col-sm-6 nopadding">
                                                <a href="">
                                                <img alt="Quà tặng" src="{{ asset('images/pd_policies_2.png') }}"> Quà tặng </a>
                                            </li>
                                            <li class="col-sm-6 nopadding">
                                                <a href="">
                                                <img alt="Đổi trả hàng" src="{{ asset('images/pd_policies_3.png') }}"> Đổi trả hàng </a>
                                            </li>
                                            <li class="col-sm-6 nopadding">
                                                <a href="">
                                                <img alt="HOTLINE: 08 7300 5757" src="{{ asset('images/pd_policies_4.png') }}"> HOTLINE: 08 7300 5757 </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="line"></div>
                                    <div class="si-share noborder clearfix">
                                        <div class="socical-wrapper">
                                            <ul class="social-icons"><div class="fb-like" data-href="{{ Request::url() }}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#comment" aria-controls="tab" role="tab" data-toggle="tab">Bình luận</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">{!! $arProduct->content !!}</div>
                                    <div role="tabpanel" class="tab-pane" id="comment">
                                        <div class="fb-comments" data-href="{{ Request::url() }}" data-order-by="reverse_time" data-numposts="5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    var quantity = parseInt($('#AddToCartForm .product-quantity input.qty').val());

    $('#AddToCartForm .minus').click(function() {
        if (quantity > 1) { quantity -= 1; }
        $('#AddToCartForm .product-quantity input.qty').val(quantity);
    });
    $('#AddToCartForm  .plus').click(function() {
        quantity += 1;
        if (quantity >= $(this).data('qty')) {
            $('#AddToCartForm .product-quantity input.qty').val($(this).data('qty'))
        } else {
            $('#AddToCartForm .product-quantity input.qty').val(quantity)
        }
    });
</script>
@stop
