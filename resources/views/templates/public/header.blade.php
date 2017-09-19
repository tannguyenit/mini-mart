<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title> Mini Market </title>
    <meta name="keywords" content="Mini Market, Theme, Egany, Bizweb">
    <meta name="language" content="vietnamese">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mini Market">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="Mini Market">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('templates/public/css/css.css') }}" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href='{{ asset('templates/public/css/smoke.min.css') }}' rel='stylesheet' type="text/css">

    <link href="{{ asset('templates/public/css/jquery.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/css/dark.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/css/jgrowl.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/css/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/public/css/custom_style.css') }}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{ asset('templates/public/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/popup-script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/analytics.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/gtm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/52691.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/bizweb_stats.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/jquery_002.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/public/js/bootstrap.js') }}" ></script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1119378164765919";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body class="stretched no-transition device-lg">
    <div class="body_overlay"></div>
    <a href="#menu-toggle" class="btn btn-default hidden-lg hidden-md" id="menu-toggle"> <i class="fa fa-bars"></i> <span>MENU</span> </a>
    <div id="menu_xs" class="hidden-lg hidden-md">
        <ul class="sidebar-nav">
            <li><a href="{{ route('index.index') }}">Trang chủ</a> </li>
            <li><a href="{{ route('product.all') }}">Sản phẩm</a> </li>
            <li><a href="{{ route('news.index') }}">Tin tức</a> </li>
            <li><a href="{{ route('intro.index') }}">Giới thiệu</a> </li>
            @foreach ($arCat_header as $key => $value)
            <li><a href="{{ route('product.indexCat',[str_slug($value['name']), $value['id']]) }}" class="menu">{{ $value['name'] }}<span>+</span></a>
                @php(showCat_header($value['id'], $value['name']))
            </li>
            @endforeach
        </ul>
    </div>
    <div id="top-bar">
        <div class="container clearfix">
            <div class="col_half col_last fright nobottommargin top_link_wrapper">
                <div class="top-links">
                    <ul class="sf-js-enabled clearfix">
                        @if (Auth::user())
                        @if (Auth::user()->is_admin==1)
                        <li><a href="{{ route('admin.index.index') }}" target="_blank">Trang quản trị</a> </li>
                        @endif
                        @endif
                        <li><a href="{{ route('index.contact') }}">Liên hệ</a> </li>
                        <li><a href="{{ route('promotion.index') }}">Khuyến mãi</a> </li>
                        <li>
                            @if (Auth::user())
                            <li><a href="{{ route('logout') }}" target="_blank">{{ Auth::user()->fullname }} > Logout</a> </li>
                            @else
                            <a href='{{ route('auth.auth.getlogin') }}'>Tài khoản</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="header">
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="logo" class="col-md-3 nopadding">
                    <h1 class="nomargin" title="Mini Market">
                        <a href="{{ route('index.index') }}" class="standard-logo" >
                            Mini Market
                            <img src="{{ asset('images/logo.png') }}" alt="Mini Market">
                        </a>
                    </h1>
                </div>
                <div class="top_search col-md-9 col-xs-12">
                    <form action="{{ route('search') }}" method="get" class="col-sm-8 form-inline nopadding nomargin">
                        <input name="query" class="form-control col-md-8 search_input" placeholder="Tìm kiếm.." type="text">
                        <button class="button">Tìm kiếm</button>
                    </form>
                    <div id="top-cart" class="top-cart-block col-md-1 nopadding">
                        <a href="javascript:void(0)" id="top-cart-trigger">
                            <img alt="Mini Market" src="{{ asset('images/cart_bg.png') }}">
                            <span class="top_cart_qty">{{ Cart::content()->count() }}</span>
                        </a>
                        @if (Cart::content()->count())
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Giỏ hàng</h4>
                            </div>
                            <div class="top-cart-items">
                                @foreach (Cart::content() as $element)
                                <div class="top-cart-item clearfix" id="{{ '__' . $element->rowId }}">
                                    <div class="top-cart-item-image">
                                        <a href="{{ $element->options->url }}">
                                            <img src="{{ asset(Storage::url($element->options->img)) }}" alt="{{ $element->name }}">
                                        </a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="{{ $element->options->url }}">{{ $element->name }}</a>
                                        {{-- <span class="top-cart-item-price">{{ number_format($element->price * $element->qty, '0', ',', '.') }} VND</span> --}}
                                        <span class="top-cart-item-quantity">x {{ $element->qty }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="top-cart-action clearfix">
{{-- <span class="fleft top-checkout-price">{{ number_format(Cart::subtotal(), 0, ',', '.') }} VND</span> --}}
                                <button onclick="window.location.href=&quot;/cart&quot;" class="button button-small nomargin fright">Xem giỏ hàng</button>
                            </div>
                        </div>
                        @else
                        <div class="top-cart-content" style="width: 200px;">
                            <div class="minicart-header">Chưa có sản phẩm nào trong giỏ!</div>
                            <div class="minicart-footer">
                                <div class="minicart-actions clearfix">
                                    <a class="button" href="{{ route('product.all') }}"><span class="text">VÀO CỬA HÀNG</span></a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <a class='top_hotline col-sm-3 hidden-sm hidden-xs nopadding' href='tel:19001267'>
                        <img alt='' src='{{ asset('images/top_hotline.png') }} ' /> </a>
                    </div>
                </div>
                            <div class="span4 pull-right" style="position: absolute;
top: 90px;
right: 0;">
    <div class="alert alert-success fade">
      <button type="button" class="close" data-dismiss="alert">×</button>
      Bạn đã đặt hàng thành công
    </div>
  </div>
            </header>

            <div class="container slide_wrapper">
                <div class="panel-group left_menu" id="left_menu">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)">DANH MỤC SẢN PHẨM <i class="fa fa-angle-down"></i></a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                @foreach ($arCats as $key => $value)
                                @php($arCount = DB::table('cats')->where('parent_id', $value['id'])->get()->count())
                                @if ($arCount > 0)
                                @php($right = '<i class="fa fa-angle-right arrow"></i>')
                                @else
                                @php($right = '')
                                @endif
                                @if ($value['parent_id'] == 0)
                                <li class=" menu">
                                    <a class="menu" href="{{ route('product.indexCat',[str_slug($value['name']), $value['id']]) }}">
                                        <img alt="{{$value['name']}}" src="{{ asset(Storage::url($value['icon'])) }}"> <span class="menu_title">{{$value['name']}}</span> {!!$right!!}
                                    </a>
                                    @php(showCategories($arCats, $value['id'], $value['name']))
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider_wrap">
                    <nav id="primary-menu" class="style-5 hidden-xs hidden-sm">
                        <ul class="sf-js-enabled">
                            <li>
                                <a href="{{ route('index.index') }}">
                                    <div>
                                        <div class="menu_icon hidden-xs hidden-sm">
                                            <img alt="Trang chủ" src="{{ asset(Storage::url('/main_menu_icon_1.png')) }}"> </div> Trang chủ
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('product.all') }}">
                                        <div>
                                            <div class="menu_icon hidden-xs hidden-sm">
                                                <img alt="Sản phẩm" src="{{ asset(Storage::url('/main_menu_icon_2.png')) }}"> </div> Sản phẩm
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('news.index') }}">
                                            <div>
                                                <div class="menu_icon hidden-xs hidden-sm">
                                                    <img alt="Tin tức" src="{{ asset(Storage::url('/main_menu_icon_3.png')) }}">
                                                </div> Tin tức
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('intro.index') }}">
                                            <div>
                                                <div class="menu_icon hidden-xs hidden-sm">
                                                    <img alt="Giới thiệu" src="{{ asset(Storage::url('/main_menu_icon_4.png')) }}">
                                                </div> Giới thiệu
                                            </div>
                                        </a>
                                    </li>
                                    @foreach ($arCat_header as $key => $value)
                                        <li class="sub-menu">
                                            <a class="menu sf-with-ul" href="{{ route('product.indexCat',[str_slug($value['name']), $value['id']]) }}">
                                                <div>
                                                    <div class="menu_icon hidden-xs hidden-sm">
                                                        <img alt="{{ $value['name'] }}" src="{{ asset(Storage::url($value['icon'])) }}">
                                                    </div> {{ $value['name'] }}
                                                </div>
                                            </a> <i class="fa fa-angle-right hidden-lg hidden-md submenu_toggle" style="position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;"></i>
                                           @php(showCat_header($value['id'], $value['name']))
                                        </li>
                                    @endforeach
                                    </ul>
                                </nav>
                                <script>
                                    $("#sidebar-wrapper ul li a span").click(function(event) {
                                        event.preventDefault();
                                        var li = $(this).parents('li');
                                        li.children('ul').toggle('slow');
                                    });
                                </script>
                                <?php if ("/" == $_SERVER['REQUEST_URI']) {?>
                                <section id="slider" class="nopadding ohidden clearfix  slide_80  slick-initialized slick-slider">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            @foreach ($arSlide as $element)
                                            <div class="item">
                                                <img src="{{ asset(Storage::url($element['image'])) }}" alt="Chania" width="775" height="400">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button class="left carousel-control slick-prev slick-arrow" href="#myCarousel" role="button" data-slide="prev" type="button"  style="display: block;"><i class="fa fa-angle-left"></i>
                                    </button>
                                    <button class="right carousel-control slick-next slick-arrow" href="#myCarousel" role="button" data-slide="next" type="button"  style="display: block;"><i class="fa fa-angle-right"></i>
                                    </button>
                                </section>

                                <div class="banner_top nopadding hidden-sm hidden-xs">
                                    <a href="http://minimart/gia-dung">
                                        <img alt="/gia-dung" src="{{ asset(Storage::url('banner_top_1.jpg')) }}">
                                    </a>
                                    <a href="http://minimart/tin-hoc">
                                        <img alt="/tin-hoc" src="{{ asset(Storage::url('banner_top_2.jpg')) }}">
                                    </a>
                                </div>
                                <?php }?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <script type="text/javascript">
                            $("#top-cart").click(function() {
                                $(".top-cart-content").toggle(100, function() {
                                    $("#top-cart").addClass("top-cart-open")
                                });
                            })
                        </script>
                        @if (Session::has("level"))
                        @if (Session::get("level")=='success')
                        <div class="modal fade in" id="moal_alert">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Thông báo</h4>
                                  </div>
                                  <div class="modal-body">
                                      {{ Session::get("msg")}}
                                  </div>
                              </div>
                          </div>
                      </div>
                      @elseif(Session::get("level")=='danger')
                      <div class="modal fade in" id="moal_alert">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Thông báo</h4>
                                  </div>
                                  <div class="modal-body">
                                      {{ Session::get("msg")}}
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endif
                      @endif

