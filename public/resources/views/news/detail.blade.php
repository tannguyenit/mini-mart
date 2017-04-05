@extends('templates.public.template')
@section('content')
<!-- Content============================================ -->
<!-- Page Title	============================================= -->
<section id="page-title">
	<div class="container clearfix">
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="https://mini-market.bizwebvietnam.net/">Trang chủ</a></li>
			<li><a href="https://mini-market.bizwebvietnam.net/khuyen-mai">Khuyến mãi</a></li>
			<li class="active">{{$arDetail['title']}}</li>
		</ol>
	</div>
</section>
<!-- #page-title end -->
<section id="content" style="margin-bottom: 0px;">
	<div class="content-wrap">
		<div class="container clearfix">
			<!-- Post Content============================================= -->
			<div class="postcontent nobottommargin clearfix col-sm-9">
				<div class="single-post nobottommargin">
					<!-- Single Post======================= -->
					<div class="entry clearfix">
						<!-- Entry Title======================================= -->
						<div class="entry-title">
							<h2>{{$arDetail['title']}}</h2>
						</div><!-- .entry-title end -->
						<!-- Entry Meta========================================== -->
						<ul class="entry-meta clearfix">
							<li><i class="fa fa-calendar"></i>{{$arDetail['created_at']}}</li>
							<li><i class="fa fa-user"></i> Tân Nguyễn</li>
						</ul><!-- .entry-meta end -->
						<!-- Entry Content======================================= -->
						<div class="entry-content notopmargin">
							{!!$arDetail['content']!!}
							<!-- Post Single - Content End -->
						</div>
						<!-- Tag Cloud============================================= -->
						<div class="tagcloud clearfix bottommargin">
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/khuyen-mai">khuyến mãi</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/khai-truong">khai trương</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/giam-10">giảm 10%</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/eco">ECO</a>
						</div><!-- .tagcloud end -->
						<div class="clear"></div>
						<!-- Post Single - Share
						============================================= -->
						<div class="si-share noborder clearfix">
							<span>Chia sẻ:</span>
							<div class="socical-wrapper">
								<ul class="social-icons">
									<!-- check null: == nill -->
									<div class="item"> 
										<div class="fb-like" data-href="https://www.facebook.com/dongluc.195/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
									</div>
								</ul>
							</div>
							<div class="fb-comments" data-href="https://www.facebook.com/dongluc.195/" data-numposts="5" data-order-by="reverse_time"></div>
						</div><!-- Post Single - Share End -->
						<p class="clearfix" style="margin-top: 20px;">
							<a class="pull-left" href="https://mini-market.bizwebvietnam.net/giam-100-000d-khi-dat-mua-online-tai-nghe-bluetooth-plantronics-ml15">
								<i class="fa fa-long-arrow-left"></i>
								Bài viết cũ hơn
							</a>
						</p>
					</div><!-- .entry end -->
					<!-- related post -->
					<h4>Bài viết cùng danh mục:</h4>
					<div class="related-posts clearfix">
						<div class=" nobottommargin col-xs-12">
							@foreach ($arRelation as $element)
							<?php $url=str_slug($element['title']).'-'.$element['id'];?>
							<div class="mpost clearfix col-xs-6">
								<div class="entry-image related-posts-img">
									<a href="/tin-tuc/{{$url}}">
										<img src="{{getenv('STORAGE')}}/{{$element['image']}}" alt="{{$element['title']}}">
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="/tin-tuc/{{$url}}">{{$element['title']}}</a></h4> 
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="fa fa-calendar"></i> {{$element['created_at']}}</li>
									</ul>
									<div class="entry-content"><a href="/tin-tuc/{{$url}}" class="more-link">Xem tiếp</a> </div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- end related post -->
					<!-- Comments============================================= -->
				</div>

			</div><!-- .postcontent end -->
			<!-- Sidebar
			============================================= -->
			<div class="sidebar nobottommargin col_last clearfix hidden-xs col-sm-3">
				<div class="sidebar-widgets-wrap">
					<!-- categories -->
					<div class="widget widget_links clearfix">
						<h4>Danh mục</h4>
						<ul class="sidebar_menu">
							<li><a href="https://mini-market.bizwebvietnam.net/khuyen-mai">Khuyến mãi</a></li>
							<li><a href="https://mini-market.bizwebvietnam.net/khuyen-mai">Dịch vụ</a></li>
							<li><a href="https://mini-market.bizwebvietnam.net/khuyen-mai">Khách hàng chia sẻ</a></li>
							<li><a href="https://mini-market.bizwebvietnam.net/khuyen-mai">Tuyển dụng</a></li>
						</ul>
					</div>
					<!-- end categories -->
					<!-- recent article -->
					<div class="widget clearfix">
						<h4 style=""><a href="">Bài viết mới nhất</a></h4>
						<div class="tab-container sidebar_menu">
							<!--<div class="tab-content clearfix" id="tabs-1">-->
							<?php for ($i=0; $i < 3; $i++) {?>
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="https://mini-market.bizwebvietnam.net/mua-phu-kien-theo-combo-giam-den-30" class="nobg a-circle"><img class="img-circle-custom" src="detail_promotion/tgdd-le-hoi-pk-800-300.jpg" alt="Mua phụ kiện theo Combo giảm đến 30%"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="https://mini-market.bizwebvietnam.net/mua-phu-kien-theo-combo-giam-den-30">Mua phụ kiện theo Combo giảm đến 30%</a></h4>
									</div>
									<ul class="entry-meta">
										<li><a href="https://mini-market.bizwebvietnam.net/mua-phu-kien-theo-combo-giam-den-30#comments"><i class="fa fa-comments"></i> 0 bình luận</a></li>
									</ul>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
					<div class="widget clearfix" style="overflow:hidden;">
						<div class="fb-page" data-href="https://www.facebook.com/dongluc.195/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dongluc.195/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dongluc.195/">Hình ảnh tạo động lực</a></blockquote>
						</div>
					</div>
					<div class="widget clearfix">
						<h4>Tags</h4>
						<div class="tagcloud sidebar_menu" style="border: none; padding: 10px 0;">
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/khuyen-mai">khuyến mãi</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/khai-truong">khai trương</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/giam-10">giảm 10%</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/eco">ECO</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/pin-sac-du-phong">pin sạc dự phòng</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/khuyen-mai">Khuyến mãi</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/tet-binh-than">tết bính thân</a>
							<a href="https://mini-market.bizwebvietnam.net/khuyen-mai/an-khang-thinh-vuong">An Khang Thịnh Vượng</a>
						</div>
					</div>
				</div>
			</div>
			<!-- .sidebar end -->
		</div>
	</div>
</section>
@stop