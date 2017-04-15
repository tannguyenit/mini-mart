<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="_token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hệ thống quản lý bán hàng online</title>
  <link href="{{ asset('templates/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/admin/vendors/css/mCustomScrollbar.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/admin/build/css/custom.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/admin/build/css/dropzone.css') }}" rel="stylesheet">
  <script src="{{ asset('templates/admin/js/ckfinder/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
  <script src="{{ asset('templates/admin/js/ckfinder/ckfinder/ckfinder.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    var baseURL="{{ url('/')}}";
  </script>
  <script src="{{ asset('templates/admin/js/ckfinder/ckfinder_config.js') }}" type="text/javascript"></script>
</head>
<input type="hidden" id="segment" value="{{Request::segment(3)}}">
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title">
            <a href="/" target="_blank" class="site_title">
              <i class="fa fa-external-link-square"></i> <span>Mini-Mart</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->fullname }}</h2>
              </div>
            </div>
            <br/>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/admin/index" ><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="/admin/product/index"><i class="fa fa-edit"></i> Mananger Product </a>
                  </li>
                  <li><a href="/admin/order/index"><i class="fa fa-edit"></i> Mananger Order </a>
                  </li>
                  <li><a href="/admin/category/index"><i class="fa fa-desktop"></i>Mananger Category</a>
                  </li>
                  <li><a href="/admin/user/index"><i class="fa fa-table"></i> Mananger User </a>
                  </li>
                  <li><a href="/admin/contact/index"><i class="fa fa-bar-chart-o"></i> Contact</a>
                  </li>

   {{--              <li><a><i class="fa fa-clone"></i>Images <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/admin/slide/header">Slide header</a></li>
                    <li><a>Category<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="/admin/slide/cat">Header </a>
                        </li>
                        <li><a href="/admin/slide/image">Leftbar</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li> --}}
                <li><a><i class="fa fa-bug"></i> Orther <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/admin/other/news">News</a></li>
                    <li><a href="/admin/other/introduce">Introduce</a></li>
                    <li><a href="/admin/other/transport_policy">Transport policy</a></li>
                    <li><a href="/admin/other/privacy_policy">Privacy Policy</a></li>
                    <li><a href="/admin/other/change_delivery">Change delivery</a></li>
                    <li><a href="/admin/other/transport">Transport</a></li>
                    <li><a href="/admin/other/transport_fee">Transport fee</a></li>
                    <li><a href="/admin/other/payment">Payment</a></li>
                  </ul>
                </li>
                <li><a href="/admin/promotion/index"><i class="fa fa-windows"></i> Promotion </a></li>
              </ul>
            </div>
          </div>
          <div class="sidebar-footer hidden-small" style="display: none">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">{{ Auth::user()->fullname }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="/adminlogout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="right_col" role="main">
        <div class="x_content bs-example-popovers">
          <div class="col-xs-12" id="message">
           @include('templates.admin.thongbao')
         </div>
       </div>  <div class="right_col" role="main">
       <div class="x_content bs-example-popovers">
        @foreach ($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
      </div>
