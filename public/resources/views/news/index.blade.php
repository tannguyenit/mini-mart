@extends('templates.public.template')
@section('content')
<!-- Content============================================= -->
<!-- Page Title============================================= -->
<section id="page-title">
	<div class="container clearfix">
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="http://minimart/">Trang chủ</a> </li>
			<li class="active">Tin công nghệ</li>
		</ol>
	</div>
</section>
<!-- #page-title end -->
<section id="content" style="margin-bottom: 0px;">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<!-- Post Content============================================= -->
				<div class="postcontent nobottommargin clearfix col-sm-9">
					<!-- Posts============================================= -->
					<div id="posts" class="small-thumbs">
						<!-- single article -->
						@foreach ($arNews as $element)
						<?php $url=str_slug($element['title']).'-'.$element['id'];?>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="/tin-tuc/{{$url}}" data-lightbox="image"><img class="image_fade" src="{{getenv('STORAGE')}}/{{$element['image']}}" alt="{{$element['title']}}"> </a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="/tin-tuc/{{$url}}">{{$element['title']}}</a></h2> 
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="fa fa-calendar"></i>{{$element['created_at']}}</li>
									<li><i class="fa fa-user"></i> Tân Nguyễn</li>
								</ul>
								<div class="entry-content"><a href="/tin-tuc/{{$url}}" class="more-link">Xem tiếp</a> 
								</div>
							</div>
						</div>
						@endforeach
						<!-- end single article -->
						{{$arNews->links()}}
					</div>
				</div>
				<!-- #posts end -->
				<!-- .postcontent end -->
				<!-- Sidebar			============================================= -->
				<div class="sidebar nobottommargin col_last clearfix hidden-xs col-sm-3">
					<div class="sidebar-widgets-wrap">
						<!-- categories -->
						<div class="widget widget_links clearfix">
							<h4>Danh mục</h4>
							<ul class="sidebar_menu">
								<li><a href="http://minimart/promotion">Khuyến mãi</a> </li>
								<li><a href="http://minimart/promotion">Dịch vụ</a> </li>
								<li><a href="http://minimart/promotion">Khách hàng chia sẻ</a> </li>
								<li><a href="http://minimart/promotion">Tuyển dụng</a> </li>
							</ul>
						</div>
						<!-- end categories -->
						<!-- recent article -->
						<div class="widget clearfix">
							<h4 style=""><a href="">Tin khuyến mãi</a></h4>
							<div class="tab-container sidebar_menu">
								<!--<div class="tab-content clearfix" id="tabs-1">-->
								<?php for ($i=0; $i < 3; $i++) {?>
								<div class="spost clearfix">
									<div class="entry-image">
										<a href="http://minimart/mua-phu-kien-theo-combo-giam-den-30" class="nobg a-circle"><img class="img-circle-custom" src="{{getenv('STORAGE')}}/tgdd-le-hoi-pk-800-300.jpg" alt="Mua phụ kiện theo Combo giảm đến 30%"> </a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="http://minimart/mua-phu-kien-theo-combo-giam-den-30">Mua phụ kiện theo Combo giảm đến 30%</a></h4> 
										</div>
										<ul class="entry-meta">
											<li><a href="http://minimart/mua-phu-kien-theo-combo-giam-den-30#comments"><i class="fa fa-comments"></i> 0 bình luận</a> </li>
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
								<a href="http://minimart/promotion/khuyen-mai">khuyến mãi</a> 
								<a href="http://minimart/promotion/khai-truong">khai trương</a> 
								<a href="http://minimart/promotion/giam-10">giảm 10%</a> 
								<a href="http://minimart/promotion/eco">ECO</a> 
								<a href="http://minimart/promotion/pin-sac-du-phong">pin sạc dự phòng</a>
								<a href="http://minimart/promotion/khuyen-mai">Khuyến mãi</a>
								<a href="http://minimart/promotion/tet-binh-than">tết bính thân</a>
								<a href="http://minimart/promotion/an-khang-thinh-vuong">An Khang Thịnh Vượng</a> </div>
							</div>
						</div>
					</div>
					<!-- .sidebar end -->
				</div>
			</div>
		</div>
	</section>
	@stop