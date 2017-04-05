@extends('templates.public.template')

@section('content')
<section id="content">
    <div class="scroll_menu hidden-xs hidden-sm" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
            @foreach ($arLeftbar as $element)
            @php($color = '#' . substr(md5(rand()), 0, 6))
            <li>
                <a href="#index_col_group_{{ $element['id'] }}" data-href="#index_col_group_{{ $element['id'] }}">
                    <img alt="{{ $element['name'] }}" src="{{ asset(Storage::url($element['icon'])) }}">
                    <span class="scroll_tooltip_1" style="background-color: {{$color}}; color:#ffffff">{{ $element['name'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="content-wrap">
        <div class="container clearfix">
            @foreach ($arLeftbar as $element)
            @php($url = str_slug($element['name']) . '-' . $element['id'])
            @php($color = '#' . substr(md5(rand()), 0, 6))
            <div class="index_col_group" <?php echo 'id="index_col_group_' . $element['id'] . '"' ?>>
                <div class="col-lg-5 nopadding col-sm-3 index_col_group_left">
                    <div class="index_col_title col-xs-6">
                        <h3 style="background: {{ $color }}">
                            <a href="/{{ $url }}" style="color: #ffffff;">{{ $element['name'] }}</a>
                        </h3>
                        <div class="index_col_list hidden-xs">
                            <ul>
                                {{ leftbar($element['id'], $element['name']) }}
                            </ul>
                        </div>
                    </div>
                    <div class="index_col_banner hidden-xs col-xs-6 hidden-md hidden-sm">
                        <a href="/{{ $url }}">
                            <img alt="{{ $element['name'] }}"  src="{{ asset('images/index_col_main_img_'.$element['id'].'.jpg') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 nopadding index_col_main col-sm-9">
                    @php($id = $element['id'])
                    @php($arProducts = DB::table('products')->join('cats', 'cats.id', '=', 'products.cat_id')->whereIn('cat_id', function ($query) use ($id) {
                        $query->select('id')->from('cats')->where('parent_id', $id)->orWhere('id', $id)->get();
                    })->select('cats.name as namecat', 'products.*')->paginate(6))

                    @foreach ($arProducts as $value)
                    <div class="col-sm-4 col-xs-6 ">
                        <div class="product clearfix product_single">
                            <div class="product-desc center">
                                <div class="product-title">
                                    <h4>
                                        <a href="{{ route('product.detail',[str_slug($element['name']), str_slug($value->namecat), str_slug($value->name), $value->id]) }}">{{ $value->name }}</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{ route('product.detail',[str_slug($element['name']), str_slug($value->namecat), str_slug($value->name), $value->id]) }}">
                                    <img alt="{{ $value->name }}" src="{{ asset(Storage::url($value->images)) }}">
                                </a>
                                <div class="sale-flash">- {{ $value->sale }} %</div>
                                <div class="product-overlay">
                                    <form>
                                        <input id="product_quantity" value="1" type="hidden">
                                        <a href="javascript:void(0)" class="add_to_cart add-to-cart" data-qty="1" data-url="{{ route('product.detail',[str_slug($element['name']), str_slug($value->namecat), str_slug($value->name), $value->id]) }}" data-id="{{ $value->id }}" data-price="{{ number_format($value->price-( $value->price*$value->sale/100), '0', ',' , '.') }}" data-name="{{ $value->name }}" data-toggle="tooltip" title="Thêm vào giỏ" data-placement="top">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="hidden-md hidden-lg"> Thêm vào giỏ</span>
                                        </a>
                                        <a  href="#add_to_cart_form"  class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" data-id="{{ $value->id }}" data-url="{{ route('product.detail',[str_slug($element['name']), str_slug($value->namecat), str_slug($value->name), $value->id]) }}" data-toggle="modal" title="Xem nhanh"><i class="fa fa-eye"></i>
                                            <span class="hidden-md hidden-lg"> Xem nhanh</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-price">
                                    <ins>{{ number_format($value->price-( $value->price*$value->sale/100), '0', ',' , '.') }} VNĐ</ins>
                                    <del>{{ number_format($value->price, '0', ',', '.') }} VNĐ</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop
