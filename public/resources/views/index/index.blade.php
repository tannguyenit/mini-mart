@extends('templates.public.template')
@section('content')
<section id="content" style="margin-bottom: 0px;">
	<div class="scroll_menu hidden-xs hidden-sm" id="myScrollspy">
		<ul class="nav nav-pills nav-stacked">
			@foreach ($arLeftbar as $element)
			<?php 
			$color = '#'.substr(md5(rand()), 0, 6);
			?>
			<li class="">
				<a href="#index_col_group_<?php echo $element['id'];?>" data-href="#index_col_group_<?php echo $element['id'];?>"> <img alt="ĐIỆN LẠNH" src="{{getenv('STORAGE')}}/{{$element['icon']}}"> <span class="scroll_tooltip_1" style="background-color: {{$color}}; color:#ffffff">{{$element['name']}}</span> </a>
			</li>
			@endforeach

		</ul>
	</div>



	<div class="content-wrap">
		<div class="container clearfix">
			<!-- popular brand -->
			<div id="popular_brand" class="style_1 slick-initialized slick-slider">
				<button type="button" data-slide="prev" href="#nameShop" class=" carousel-control left slick-prev small_nav slick-arrow" style="display: block;background: none;"><i class="fa fa-chevron-circle-left"></i>
				</button>
				<div class="row"> 
					<div class="carousel slide" id="nameShop">
						<div class="carousel-inner">
							<div class="item active">
								<ul class="thumbnails">
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_1.png" alt=""></a>
										</div>

									</li>  
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_2.png" alt=""></a>
										</div>

									</li>  
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_3.png" alt=""></a>
										</div>

									</li>
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_4.png" alt=""></a>
										</div>

									</li>
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_5.png" alt=""></a>
										</div>

									</li>
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_6.png" alt=""></a>
										</div>

									</li>
								</ul>
							</div><!-- /Slide1 --> 
							<div class="item">
								<ul class="thumbnails">
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_1.png" alt=""></a>
										</div>

									</li>  
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_2.png" alt=""></a>
										</div>

									</li>  
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_3.png" alt=""></a>
										</div>

									</li>
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_4.png" alt=""></a>
										</div>

									</li>
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_5.png" alt=""></a>
										</div>

									</li>
									<li class="col-xs-2 over">
										<div >
											<a href="#"><img src="{{getenv('STORAGE')}}/popular_brand_img_6.png" alt=""></a>
										</div>

									</li>
								</ul>
							</div><!-- /Slide2 --> 

						</div>

					</div><!-- /#myCarousel -->

				</div><!-- /.span12 -->          



				<button type="button" href="#nameShop" data-slide="next" class="carousel-control right slick-next small_nav slick-arrow" style="display: block;background: none;"><i class="fa fa-chevron-circle-right"></i>
				</button>
			</div>
			<script>
				$(document).ready(function() {
					$('#popular_brand').slick({
						prevArrow: '<button type="button" class="slick-prev small_nav"><i class="fa fa-chevron-circle-left"></i></button>',
						nextArrow: '<button type="button" class="slick-next small_nav"><i class="fa fa-chevron-circle-right"></i></button>',
						slidesToShow: 8,
						slidesToScroll: 1,
						responsive: [{
							breakpoint: 991,
							settings: {
								arrows: false
							},
						}, {
							breakpoint: 767,
							settings: {
								slidesToShow: 3,
								arrows: false
							}
						}]
					});
				});
			</script>
			<!-- end popular brand -->

			<!-- collection group -->
			@foreach ($arLeftbar as $element)
			<?php 
			$url=str_slug($element['name']).'-'.$element['id'];
			$color = '#'.substr(md5(rand()), 0, 6);
			?>
			<div class="index_col_group" <?php echo 'id="index_col_group_'.$element['id'].'"'?>>
				<div class="col-lg-5 nopadding col-sm-3 index_col_group_left">
					<div class="index_col_title">
						<h3 style="background: {{$color}}">
							<!-- #ffffff -->
							<a href="/<?php echo $url;?>" style="color: #ffffff;">{{$element['name']}}</a>
						</h3>
						<div class="index_col_slide_wrapper hidden-xs">
							<div id="index_col_slide_1" class="owl-carousel image-carousel slick-initialized slick-slider">
								<button class="left carousel-control slick-prev small_nav slick-arrow" <?php echo 'href="#myCarousel'.$element['id'].'"';?>  role="button" data-slide="prev" type="button"  style="display: block;background: none;
									left: -18px;"><i class="fa fa-angle-left"></i></button>
									<div  <?php echo 'id="myCarousel'.$element['id'].'"';?> class="carousel slide" data-ride="carousel">

										<div class="carousel-inner" role="listbox">

											<div class="item active">
												<img src="{{getenv('STORAGE')}}/slideshow_2.jpg" alt="Chania" width="775" height="400">

											</div>

											<div class="item">
												<img src="{{getenv('STORAGE')}}/slideshow_2.jpg" alt="Chania" width="775" height="400">

											</div>

											<div class="item">
												<img src="{{getenv('STORAGE')}}/slideshow_2.jpg" alt="Flower" width="775" height="400">

											</div>

											<div class="item">
												<img src="{{getenv('STORAGE')}}/slideshow_2.jpg" alt="Flower" width="775" height="400">

											</div>

										</div>

									</div>
									<button class="right carousel-control slick-next small_nav slick-arrow" <?php echo 'href="#myCarousel'.$element['id'].'"';?> role="button" data-slide="next" type="button"  style="display: block;background: none;
										right: -18px;"><i class="fa fa-angle-right"></i></button>
									</div>
								</div>
								<div class="index_col_list hidden-xs">
									<ul>
									<?php leftbar($element['id']);?>
									</ul>
									
								</div>
							</div>
							<div class="index_col_banner hidden-xs hidden-md hidden-sm">
								<a href="http://minimart/dien-lanh"> 
									<img alt="ĐIỆN LẠNH"  src="{{getenv('STORAGE')}}/index_col_main_img_1.jpg" style="background: transparent none repeat scroll 0% 0%;"> </a>
								</div>
							</div>
							<div class="col-lg-7 nopadding index_col_main col-sm-9">
								<!-- Tủ lạnh -->
								<?php for ($j=0; $j < 6; $j++) {?>
								<div class="col-sm-4 col-xs-6 noleftpadding norightpadding product_single">
									<div class="product clearfix">
										<div class="product-desc center">
											<div class="product-title">
												<h4><a href="http://minimart/detail_product.php">Tủ Lạnh Aqua Aqr-S185an (Sn)</a></h4> <span>EGA-SKU-010</span> 
											</div>
										</div>
										<div class="product-image">
											<a href="http://minimart/detail_product.php">
												<img data-lazyload="//bizweb.dktcdn.net/thumb/compact/100/052/691/products/tu-lanh-aqua-aqr-s185an-sn.jpg?v=1453799631537" alt="Tủ Lạnh Aqua Aqr-S185an (Sn)" src="{{getenv('STORAGE')}}/tu-lanh-aqua-aqr-s185an-sn.jpg" style="background: transparent none repeat scroll 0% 0%;">
											</a>
											<div class="sale-flash">- 8%</div>
											<div class="product-overlay">
												<form id="add_to_cart_form_2055766">
													<input name="variantId" value="2055766" type="hidden">
													<input class="unit_price_not_formated" value="4490000.0000" type="hidden">
													<input class="product_url" value="/tu-lanh-aqua-aqr-s185an-sn" type="hidden">
													<input class="product_title_hd" value="Tủ Lạnh Aqua Aqr-S185an (Sn)" type="hidden">
													<input class="product_img_small" value="//bizweb.dktcdn.net/100/052/691/products/tu-lanh-aqua-aqr-s185an-sn.jpg?v=1453799631537" type="hidden"> 
													<a href="javascript:void(0)" class="add_to_cart add-to-cart" data-toggle="tooltip" title="" data-original-title="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i>
														<span class="hidden-md hidden-lg"> Thêm vào giỏ</span>
													</a> 
													<a  href="#add_to_cart_form"  class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/tu-lanh-aqua-aqr-s185an-sn" data-toggle="modal" title="" data-original-title="Xem nhanh"><i class="fa fa-eye"></i>
														<span class="hidden-md hidden-lg"> Xem nhanh</span>
													</a>

												</form>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-price"> <ins> 4.490.000₫ </ins> <del>4.900.000₫</del> </div>
										</div>
									</div>
								</div>

								<?php }?>
							</div>
							<script type="text/javascript">
								jQuery(document).ready(function($) {
									var ocClients = $("#index_col_slide_1");
									ocClients.slick({
										prevArrow: '<button type="button" class="slick-prev small_nav"><i class="fa fa-angle-left"></i></button>',
										nextArrow: '<button type="button" class="slick-next small_nav"><i class="fa fa-angle-right"></i></button>',
										lazyLoad: 'progressive',
										responsive: [{
											breakpoint: 479,
											settings: {
												slidesToShow: 2,
												arrows: false
											}
										}]
									});
								});
							</script>
						</div>
						@endforeach

						<!-- end collection group -->
					</div>
				</div>
			</section>


			<div class="modal fade" id="add_to_cart_form" >
				<div class="modal-dialog modal-lg">
					<div class="modal-content" style="border: none">
			<!-- <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
			<div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1" style="padding: 15px; width: 100%; height: auto;"><div class="fancybox-skin" style="padding: 15px; width: 100%; height: auto;"><div class="fancybox-outer"><div class="fancybox-inner"><div id="product-pop-up" style="display: block;" class="single-product shop-quick-view-ajax clearfix">

				<div class="ajax-modal-title">
					<a href=""><h2>Mền Diana 100% Polyester</h2></a>
				</div>

				<div class="product-page product modal-padding clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-6 nobottommargin">
							


							<!-- bootstrap carousel -->
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">

								<div class="carousel-inner">

									<div class="item active srle">
										<img src="http://s28.postimg.org/4237b0cjh/image.jpg" alt="1.jpg" class="img-responsive">

									</div>

									<div class="item">
										<img src="http://s29.postimg.org/xaf064313/image.jpg" alt="2.jpg" class="img-responsive">

									</div>

									<div class="item">
										<img src="http://s17.postimg.org/sv1x15jlb/image.jpg" alt="3.jpg" class="img-responsive">

									</div>

									<div class="item">
										<img src="http://s7.postimg.org/4z602gd8b/image.jpg" alt="4.jpg" class="img-responsive">

									</div>

								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>

								<!-- Thumbnails --> 
								<ul class="thumbnails-carousel clearfix">
									<li><img src="http://s2.postimg.org/h6uti3zud/1_tn.jpg" alt="1_tn.jpg"></li>
									<li><img src="http://s27.postimg.org/n4fjr7q2n/2_tn.jpg" alt="1_tn.jpg"></li>
									<li><img src="http://s29.postimg.org/afuhmf61f/3_tn.jpg" alt="1_tn.jpg"></li>
									<li><img src="http://s29.postimg.org/p45dxi6hf/4_tn.jpg" alt="1_tn.jpg"></li>
								</ul>
								<div class="sale-flash">-3%</div>
							</div>


						</div>
						<div class="col-xs-12 col-sm-6 nobottommargin col_last product-desc">
							<div class="product-price"> 

								<ins>180.000₫</ins>
								<del>265.000₫</del>

							</div>
							<div class="clear"></div>
							<div class="line"></div>
							<!-- variants -->
							<!-- end variant -->
			<!-- Product Single - Quantity & Cart Button
			============================================= -->
			<form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartFormQv" style="">
				<div class="clearfix" style="">  
					<div class="selector-wrapper" style="display: none;"><select class="single-option-selector" data-option="option1" id="product-select-qv-option-0"><option value="Default Title" selected="selected">Default Title</option></select></div><div class="selector-wrapper" style="display: none;"><select class="single-option-selector" data-option="option1" id="product-select-qv-option-0"><option value="Default Title">Default Title</option></select></div><select id="product-select-qv" name="variantId" style="display:none;"> 

					<option selected="selected" value="2129355">Default Title - 180.000₫</option>

				</select>
			</div>

			<div class="quantity product-quantity clearfix col-sm-6 col-xs-6 noleftpadding">
				<input value="-" class="minus" type="button">
				<input id="product_quantity" readonly="readonly" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4" type="text">
				<input value="+" class="plus" type="button">
			</div>
			<script>
				var quantity = parseInt($('#AddToCartFormQv .product-quantity input.qty').val());

				$('#AddToCartFormQv .minus').click(function() {
					if (quantity > 0) {
						if (quantity == 1) {
							$('#addtocart').attr('disabled','disabled');
						}
						quantity -= 1;
					}
					else {
						quantity = 0;
					}
					$('#AddToCartFormQv .product-quantity input.qty').val(quantity);
				});
				$('#AddToCartFormQv  .plus').click(function() {
					$('#addtocart').removeAttr('disabled');
					if (quantity < 100) {
						quantity += 1;
					}
					else {
						quantity = 100;
					}
					$('#AddToCartFormQv .product-quantity input.qty').val(quantity)
				});

			</script>
			<input class="unit_price_not_formated" value="180000.0000" type="hidden">
			<input class="product_url" value="/men-diana-100-polyester" type="hidden">
			<input class="product_title_hd" value="Mền Diana 100% Polyester" type="hidden">
			<input class="product_img_small" value="//bizweb.dktcdn.net/100/052/691/products/men-diana-100-polyester-kt-130180cm.jpg?v=1454463233197" type="hidden">


			<button type="submit" data-role="addtocart" id="addtocart" class="add-to-cart button nomargin col-sm-6 col-xs-6 nopadding">Thêm vào giỏ</button>
			<button type="submit" data-role="buynow" id="buynow" class="button col-xs-12 nopadding">Mua ngay</button>

		</form><!-- Product Single - Quantity & Cart Button End -->

		<div class="clear"></div>
		<div class="line"></div>
		<p class="description">  MÁY SẤY TÓC PHILIPS HP8110/22  
			Bạn là một cô gái rất yêu cái đẹp và thường xuyên chăm sóc tóc của mình 
			để luôn tự tin đối diện với bạn bè hay mọi người dùng xung quanh nhưng 
			hàng ngày việc làm ...</p>
		</div>
	</div>
</div>
</div></div></div><a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a></div></div>
</div>
</div>
</div>
@stop