@extends('templates.public.template')

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <ol class="breadcrumb col-md-6 col-sm-6">
            <li><a href="/">Trang chủ</a></li>
            <li class="active">{{ $nameCat }}</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="collection_banner">
                <img alt="{{ Request::segment(1) }}" src="{{ asset('images/'.Request::segment(1).'.jpg') }}">
            </div>
            <div class="row">
                <div class="postcontent nobottommargin col_last col-sm-9">
                    <div id="shop" class="product-3 clearfix">
                        <div class="row sort-wrapper">
                        @if ($total > 0)
                            <span>Có <strong class="color">{{ $total }}</strong> sản phẩm được tìm thấy</span>
                            @else
                            <span>Không tìm thấy sản phẩm nào</span>
                        @endif
                            <div class="browse-tags col-md-8 col-sm-12 col-xs-12 pull-right" style="margin-bottom: 20px;">
                                <div class="col-md-9 col-sm-9 col-xs-7 text-right yespadding">
                                    <span>Sắp xếp theo:</span>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-5 yespadding">
                                    <span class="custom-dropdown custom-dropdown--white pull-right">
                                        <select id="sortControl" class="sort-by custom-dropdown__select custom-dropdown__select--white form-control input-sm">
                                            <option value="" selected="selected">Thứ tự</option>
                                            <option value="?sortby=manual">Mặc định</option>
                                            <option value="?sortby=best-selling">Bán chạy nhất</option>
                                            <option value="?sortby=alpha-asc">A → Z</option>
                                            <option value="?sortby=alpha-desc">Z → A</option>
                                            <option value="?sortby=price-asc">Giá tăng dần</option>
                                            <option value="?sortby=price-desc">Giá giảm dần</option>
                                            <option value="?sortby=created-desc">Hàng mới nhất</option>
                                            <option value="?sortby=created-asc">Hàng cũ nhất</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="grid_pagination">
                            <div class="grid">
                                <div class="product_wrapper">
                                    @foreach ($arProduct as $element)
                                        <div class="col-sm-3 col-xs-6 ">
                                            <div class="product clearfix product_single">
                                                <div class="product-image">
                                                    <a href="{{ route('product.detail',[Request::segment(1),str_slug($element->cat->name),str_slug($element->name),$element->id]) }}">
                                                        <img alt="{{ $element->name }}" src="{{ asset(Storage::url($element->images)) }}" style="background: transparent none repeat scroll 0% 0%;">
                                                    </a>
                                                    <div class="sale-flash">- {{ $element->sale }} %</div>
                                                    <div class="product-overlay">
                                                        <form >
                                                            <a href="javascript:void(0)" class="add_to_cart add-to-cart" data-url="{{ route('product.detail',[str_slug($element['name']), str_slug($element->namecat), str_slug($element->name), $element->id]) }}" data-id="{{ $element->id }}" data-price="{{ number_format($element->price-( $element->price*$element->sale/100), '0', ',' , '.') }}" data-name="{{ $element->name }}" data-toggle="tooltip" title="Thêm vào giỏ" data-placement="top"><i class="fa fa-shopping-cart"></i>
                                                                <span class="hidden-md hidden-lg"> Thêm vào giỏ</span>
                                                            </a>
                                                            <a  href="#add_to_cart_form"  class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" data-id="{{ $element->id }}" data-url="{{ route('product.detail',[str_slug($element['name']), str_slug($element->namecat), str_slug($element->name), $element->id]) }}" data-toggle="modal" title="Xem nhanh"><i class="fa fa-eye"></i>
                                                                <span class="hidden-md hidden-lg"> Xem nhanh</span>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-desc center">
                                                    <div class="product-title">
                                                        <h4><a href="{{ route('product.detail',[Request::segment(1),str_slug($element->cat->name),str_slug($element->name),$element->id]) }}" title="{{ $element->name }}">{{ $element->name }}</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins>{{ number_format($element->price-( $element->price*$element->sale/100), '0', ',' , '.') }} VNĐ</ins>
                                                        <del>{{ number_format($element->price, '0', ',', '.') }} VNĐ</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{ $arProduct->links() }}
                        </div>
                    </div>
                </div>
                <div class="sidebar nobottommargin  left-sidebar hidden-sm hidden-xs col-sm-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget clearfix">
                            <h4><a>Sản phẩm khuyến mãi</a></h4>
                            <div id="post-list-footer" class="sidebar_menu">
                                @foreach ($arPromotion as $element)
                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="">
                                            <img alt="{{ $element->name }}" src="{{ asset(Storage::url($element->images)) }}">
                                        </a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="">{{ $element->name }}</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">
                                                <ins>{{ number_format($element->price-( $element->price*$element->sale/100), '0', ',' , '.') }} VNĐ</ins>
                                                <del>{{ number_format($element->price, '0', ',', '.') }} VNĐ</del>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget clearfix">
                            <h4>Sản phẩm vừa xem</h4>
                            <div class="widget-last-view sidebar_menu">
                                @foreach ($arReview as $element)
                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="" title="{{ $element->name }}">
                                            <img src="{{ asset(Storage::url($element->images)) }}" alt="{{ $element->name }}"  data-title="{{ $element->name }}" data-description="{{ $element->name }}">
                                        </a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4>
                                                <a href="">{{ $element->name }}</a>
                                            </h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">
                                                <ins>{{ number_format($element->price-( $element->price*$element->sale/100), '0', ',' , '.') }} VNĐ</ins>
                                                <del>{{ number_format($element->price, '0', ',', '.') }} VNĐ</del>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
