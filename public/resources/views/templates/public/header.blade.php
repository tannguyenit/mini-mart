<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="icon" href="https://bizweb.dktcdn.net/100/052/691/themes/208078{{getenv('PUBLIC_URL')}}/favicon.png?1482744927506" type="image/x-icon">
    <!-- <meta charset="utf-8" /> -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
    <title> Mini Market </title>
    <meta name="keywords" content="Mini Market, Theme, Egany, Bizweb">
    <meta name="robots" content="noodp,{{getenv('STORAGE')}},follow">
    <meta name="revisit-after" content="1 days">
    <meta name="language" content="vietnamese">
    <link rel="canonical" href="http://mini-market.bizwebvietnam.net/">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
    <meta name="theme-color" content="#e90000">
    <meta name="msapplication-TileColor" content="#e90000">
    <!-- Product meta ================================================== -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mini Market">
    <meta property="og:image" content="http://bizweb.dktcdn.net/100/052/691/themes/208078{{getenv('PUBLIC_URL')}}/logo.png?1482744927506">
    <meta property="og:image" content="https://bizweb.dktcdn.net/100/052/691/themes/208078{{getenv('PUBLIC_URL')}}/logo.png?1482744927506">
    <meta property="og:url" content="http://mini-market.bizwebvietnam.net">
    <meta property="og:site_name" content="Mini Market">
    <!-- shop-asset -->
    <!-- Fonts START -->

    <link href="{{getenv('PUBLIC_URL')}}/css/css.css" rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel='stylesheet prefetch' href='{{getenv('PUBLIC_URL')}}/css/smoke.min.css'>
    
    <link href="{{getenv('PUBLIC_URL')}}/css/jquery.css" rel="stylesheet" type="text/css">
    <link href="{{getenv('PUBLIC_URL')}}/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{getenv('PUBLIC_URL')}}/css/dark.css" rel="stylesheet" type="text/css">
    <link href="{{getenv('PUBLIC_URL')}}/css/jgrowl.css" rel="stylesheet" type="text/css">
    <link href="{{getenv('PUBLIC_URL')}}/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="{{getenv('PUBLIC_URL')}}/css/slick.css" rel="stylesheet" type="text/css">

    <!-- Egany custom style -->
    <link href="{{getenv('PUBLIC_URL')}}/css/custom_style.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/script.js"></script>
    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/popup-script.js" id="product-recommend-app-jssdk"></script>
    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/analytics.js"></script>
    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/gtm.js"></script>
    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/52691.js"></script>
    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/bizweb_stats.js"></script>
    <script type="text/javascript" src="{{getenv('PUBLIC_URL')}}/js/jquery_002.js"></script>
    <script src="{{getenv('PUBLIC_URL')}}/js/bootstrap.js" type="text/javascript"></script>
    
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
    <!-- /#sidebar-wrapper -->
    <a href="#menu-toggle" class="btn btn-default hidden-lg hidden-md" id="menu-toggle"> <i class="fa fa-bars"></i> <span>MENU</span> </a>
    <!-- Page Content -->
    <div id="menu_xs" class="hidden-lg hidden-md">
        <!-- Sidebar -->
        <ul class="sidebar-nav">
            <li class=""><a href="http://minimart/">Trang chủ</a> </li>
            <li class=""><a href="http://minimart/products_all">Sản phẩm</a> </li>
            <li class=""><a href="http://minimart/tin-tuc.php">Tin tức</a> </li>
            <li class=""><a href="http://minimart/gioi-thieu.php">Giới thiệu</a> </li>
            <?php foreach ($arCat_header as $key => $value) {
                $url=str_slug($value['name']).'-'.$value['id'];
                ?>
                <li class=""><a href="/<?php echo $url;?>" class="menu">{{$value['name']}}<span>+</span></a>
                 <?php showCat_header($value['id']);?>
             </li>

             <?php }?>
         </ul>
         <!-- /#page-content-wrapper -->
     </div>
     <!-- Top Bar   ============================================= -->
     <div id="top-bar" class="">
        <div class="container clearfix">
            <div class="col_half col_last fright nobottommargin top_link_wrapper">
                <!-- Top Links   ============================================= -->
                <div class="top-links">
                    <ul class="sf-js-enabled clearfix">
                        <li><a href="http://minimart/admin" target="_blank">Trang quản trị</a> </li>
                        <li><a href="http://minimart/promotion.php">Dịch vụ</a> </li>
                        <li><a href="http://minimart/promotion.php">Khách hàng chia sẻ</a> </li>
                        <li><a href="http://minimart/promotion.php">Tuyển dụng</a> </li>
                        <li><a href="http://minimart/user.php" class="sf-with-ul abc">Tài khoản</a>
                            <ul>
                                <li><a href="http://minimart/user.php">Đăng nhập/Đăng ký</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- .top-links end -->
            </div>
        </div>
    </div>
    <!-- #top-bar end -->
    <!-- Header============================================= -->
    <header id="header" class="">
        <div id="header-wrap">
            <div class="container clearfix">
                <!--<div id="primary-menu-trigger"><i class="fa fa-bars"></i></div>-->
                <!-- Logo    ============================================= -->
                <div id="logo" class="col-md-3 nopadding">
                    <h1 class="nomargin" title="Mini Market">
                        <a href="http://minimart/" class="standard-logo" data-dark-logo="//bizweb.dktcdn.net/100/052/691/themes/208078{{getenv('PUBLIC_URL')}}/logo.png?1482744927506">
                            Mini Market
                            <img src="{{getenv('STORAGE')}}/logo.png" alt="Mini Market">
                        </a>
                    </h1>
                </div>
                <!-- #logo end -->
                <!-- Top Search============================================= -->
                <!-- <a href="#menu-toggle" class="btn btn-default hidden-lg hidden-md" id="menu-toggle"> <i class='fa fa-bars'></i> <span>MENU</span>  </a> -->
                <!-- Top Search ============================================= -->
                <div class="top_search col-md-9 col-xs-12">
                    <form action="/search" method="get" class="col-sm-8 form-inline nopadding nomargin">
                        <input name="query" class="form-control col-md-8 search_input" placeholder="Tìm kiếm.." type="text">
                        <button class="button">Tìm kiếm</button>
                    </form>
                    <div id="top-cart" class="top-cart-block col-md-1 nopadding">
                        <a href="javascript:void(0)" id="top-cart-trigger"><img alt="Mini Market" src="{{getenv('STORAGE')}}/cart_bg.png"><span class="top_cart_qty">97</span> 
                        </a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Giỏ hàng</h4> 
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <input class="item_id" value="2121696" type="hidden">
                                    <input class="item_qty" value="96" type="hidden">
                                    <input class="item_unit_price_not_formated" value="15890000.0000" type="hidden">
                                    <div class="top-cart-item-image">
                                        <a href="/tivi-lcd-sony-kdl-48w700c-vn3"><img src="//bizweb.dktcdn.net/thumb/small/100/052/691/products/10021803-sony-kdl-48w700c-vn3-1.jpg?v=1454323778693" alt="Tivi Lcd Sony Kdl-48w700c Vn3"> </a>
                                    </div>
                                    <div class="top-cart-item-desc"> <a href="/tivi-lcd-sony-kdl-48w700c-vn3">Tivi Lcd Sony Kdl-48w700c Vn3</a> <span class="top-cart-item-price">1.525.440.000₫</span> <span class="top-cart-item-quantity">x 96</span>
                                                <!-- <a class='top_cart_item_remove' onclick ='deleteCart(2121696);'>
                                                    <i class='fa fa-times-circle'></i>
                                                </a> -->
                                            </div>
                                        </div>
                                        <div class="top-cart-item clearfix">
                                            <input class="item_id" value="2055766" type="hidden">
                                            <input class="item_qty" value="1" type="hidden">
                                            <input class="item_unit_price_not_formated" value="4490000.0000" type="hidden">
                                            <div class="top-cart-item-image">
                                                <a href="/tu-lanh-aqua-aqr-s185an-sn"><img src="//bizweb.dktcdn.net/thumb/small/100/052/691/products/tu-lanh-aqua-aqr-s185an-sn.jpg?v=1453799631537" alt="Tủ Lạnh Aqua Aqr-S185an (Sn)"> </a>
                                            </div>
                                            <div class="top-cart-item-desc"> <a href="/tu-lanh-aqua-aqr-s185an-sn">Tủ Lạnh Aqua Aqr-S185an (Sn)</a> <span class="top-cart-item-price">4.490.000₫</span> <span class="top-cart-item-quantity">x 1</span>
                                                <a class='top_cart_item_remove' onclick = 'deleteCart(2055766);'>
                                                    <i class='fa fa-times-circle'></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action clearfix"> <span class="fleft top-checkout-price">1.529.930.000₫</span>
                                        <input class="top_cart_total_price_not_format" value="1529930000.0000" type="hidden">
                                        <button onclick="window.location.href=&quot;/cart&quot;" class="button button-small nomargin fright">Xem giỏ hàng</button>
                                    </div>
                                </div>
                            <!-- <a href="#" id="top-cart-trigger">
                        <img alt="Mini Market" src="{{getenv('STORAGE')}}/cart_bg.png">
                        <span class="top_cart_qty">0</span>
                    </a>
                    <div class="top-cart-content" style="width: 200px;">
                        <div class="minicart-header">Chưa có sản phẩm nào trong giỏ!</div>
                        <div class="minicart-footer">
                            <div class="minicart-actions clearfix">
                                <a class="button" href="http://minimart/collections/all">
                                    <span class="text">VÀO CỬA HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="top_hotline col-sm-3 hidden-sm hidden-xs nopadding" href="tel:19001267"><img alt="19001267" src="{{getenv('STORAGE')}}/top_hotline.png"></a> -->
            </div>
            <a class='top_hotline col-sm-3 hidden-sm hidden-xs nopadding' href='tel:19001267'> <img alt='19001267' src='{{getenv('STORAGE')}}/top_hotline.png' /> </a>
            <!-- #top-search end -->
                        <!-- top link trigger ---><a href="#" id="top_link_trigger" class="hidden-lg hidden-md"><i class="fa fa-ellipsis-v"></i></a>
                        <!-- end top link trigger --->
                        <script>
                            $("#sidebar-wrapper ul li a span").click(function(event) {
                                event.preventDefault();
                                var li = $(this).parents('li');
                                li.children('ul').toggle('slow');
                            });
                        </script>
                        <!-- #primary-menu end -->
                    </div>
                </div>
            </header>
            <!-- #header end -->
            <div class="container slide_wrapper">
                <!-- left menu -->
                <div class="panel-group left_menu" id="left_menu">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="">DANH MỤC SẢN PHẨM <i class="fa fa-angle-down"></i></a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <?php foreach ($arCats as $key => $value) {
                                    $url=str_slug($value['name']).'-'.$value['id'];
                                    $arCount=DB::table('cats')->where('parent_id',$value['id'])->get()->count();
                                    if ($arCount>0) {
                                        $right='<i class="fa fa-angle-right arrow"></i>';
                                    }else{
                                        $right='';
                                    }
                                    ?>
                                    @if ($value['parent_id']==0)
                                    <li class=" menu">
                                        <a class="menu" href="/<?php echo $url;?>"> <img alt="Điện tử" src="{{getenv('STORAGE')}}/{{$value['icon']}}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Điện tử"> <span class="menu_title">{{$value['name']}}</span> {!!$right!!}
                                        </a>
                                        <?php showCategories($arCats,$value['id']);?>
                                    </li>
                                    @endif
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end left menu -->
                    <div class="slider_wrap">
                        <nav id="primary-menu" class="style-5 hidden-xs hidden-sm">
                            <ul class="sf-js-enabled">
                                <li class="">
                                    <a href="http://minimart/">
                                        <div>
                                            <div class="menu_icon hidden-xs hidden-sm"> <img alt="Trang chủ" src="{{getenv('STORAGE')}}/main_menu_icon_1.png"> </div> Trang chủ 
                                        </div>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="http://minimart/products_all.php">
                                        <div>
                                            <div class="menu_icon hidden-xs hidden-sm"> <img alt="Sản phẩm" src="{{getenv('STORAGE')}}/main_menu_icon_2.png"> </div> Sản phẩm 
                                        </div>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="http://minimart/tin-tuc">
                                        <div>
                                            <div class="menu_icon hidden-xs hidden-sm"> 
                                                <img alt="Tin tức" src="{{getenv('STORAGE')}}/main_menu_icon_3.png"> 
                                            </div> Tin tức 
                                        </div>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="http://minimart/gioi-thieu">
                                        <div>
                                            <div class="menu_icon hidden-xs hidden-sm"> 
                                                <img alt="Giới thiệu" src="{{getenv('STORAGE')}}/main_menu_icon_4.png"> 
                                            </div> Giới thiệu 
                                        </div>
                                    </a>
                                </li>
                                <?php foreach ($arCat_header as $key => $value) {
                                    $url=str_slug($value['name']).'-'.$value['id'];
                                    ?>
                                    <!-- normal sub menu -->
                                    <li class="sub-menu">
                                        <a class="menu sf-with-ul" href="/<?php echo $url;?>">
                                            <div>
                                                <div class="menu_icon hidden-xs hidden-sm"> 
                                                    <img alt="{{$value['name']}}" src="{{getenv('STORAGE')}}/{{$value['icon']}}"> 
                                                </div> {{$value['name']}} 
                                            </div>
                                        </a> <i class="fa fa-angle-right hidden-lg hidden-md submenu_toggle" style="position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;"></i>
                                        <!-- end normal sub menu -->
                                        <?php showCat_header($value['id']);?>
                                    </li>
                                    <?php }?>
                                </ul>
                            </nav>
                            <script>
                                $("#sidebar-wrapper ul li a span").click(function(event) {
                                    event.preventDefault();
                                    var li = $(this).parents('li');
                                    li.children('ul').toggle('slow');
                                });
                            </script>
                            <?php if ($_SERVER['REQUEST_URI']=="/" ) {?>
                            <!-- Slider -->
                            <section id="slider" class="nopadding ohidden clearfix  slide_80  slick-initialized slick-slider">

                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                {{--     <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                      <li data-target="#myCarousel" data-slide-to="3"></li>
                                  </ol> --}}

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                    @foreach ($arSlide as $element)
                                    <div class="item">
                                      <img src="{{getenv('STORAGE')}}/{{$element['image']}}" alt="Chania" width="775" height="400">
                                  </div>
                                  @endforeach
                              </div>

                          </div>
                          <button class="left carousel-control slick-prev slick-arrow" href="#myCarousel" role="button" data-slide="prev" type="button"  style="display: block;"><i class="fa fa-angle-left"></i> 
                          </button>
                          <button class="right carousel-control slick-next slick-arrow" href="#myCarousel" role="button" data-slide="next" type="button"  style="display: block;"><i class="fa fa-angle-right"></i> 
                          </button>


                      </section>
                      <script>
                        $(document).ready(function() {
                            $('#slider').slick({
                                prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
                                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                                asNavFor: '.slider_thumb',
                            });
                        })
                    </script>
                    <!-- end slider -->
                    <div class="banner_top nopadding hidden-sm hidden-xs">
                        <a href="http://minimart/gia-dung"><img alt="/gia-dung" src="{{getenv('STORAGE')}}/banner_top_1.jpg"> </a>
                        <a href="http://minimart/tin-hoc"><img alt="/tin-hoc" src="{{getenv('STORAGE')}}/banner_top_2.jpg"> </a>
                    </div>
                    <?php }?> </div>
                    <div class="clear"></div>
                </div>
                <script type="text/javascript">
                    $("#top-cart").click(function() {
                        $(".top-cart-content").toggle(100, function() {
                            $("#top-cart").addClass("top-cart-open")
                        });
                    })
                </script>
