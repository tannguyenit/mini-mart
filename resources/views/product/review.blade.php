<div class="modal-dialog modal-lg">
	<div class="modal-content" style="border: none">
		<div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1" style="padding: 15px; width: 100%; height: auto;">
			<div class="fancybox-skin" style="padding: 15px; width: 100%; height: auto;">
				<div class="fancybox-outer"><div class="fancybox-inner">
					<div id="product-pop-up" style="display: block;" class="single-product shop-quick-view-ajax clearfix">
						<div class="ajax-modal-title">
							<a href=""><h2>{{ $arProduct->name }}</h2></a>
						</div>
						<div class="product-page product modal-padding clearfix">
							<div class="row">
								<div class="col-xs-12 col-sm-6 nobottommargin">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
										<div class="carousel-inner">
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
										<ul class="thumbnails-carousel clearfix">
											@foreach ($arProduct->proImage as $element)
											<li><img src="{{ asset(Storage::url($element->images)) }}"></li>
											@endforeach
										</ul>
										<div class="sale-flash">-{{ $arProduct->sale }} %</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 nobottommargin col_last product-desc">
									<div class="product-price">
										<ins>{{ number_format($arProduct->price-( $arProduct->price*$arProduct->sale/100), '0', ',' , '.') }} </ins>
										<del>{{ number_format($arProduct->price, '0', ',', '.') }}</del>
									</div>
									<div class="clear"></div>
									<div class="line"></div>
									<form action="{{ action('CartController@buyNow') }}" method="post" enctype="multipart/form-data" id="AddToCartFormQv">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="productId" value="{{ $arProduct->id }}">
										<input type="hidden" name="url" value="{{ $url }}">
										<div class="quantity product-quantity clearfix col-sm-6 col-xs-6 noleftpadding">
											<input value="-" class="minus" type="button">
											<input id="product_quantity" readonly="readonly" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4" type="text">
											<input value="+" class="plus" type="button" data-quantity="{{ $arProduct->quantity }}">
										</div>
										<a href="javascript:void(0)" class="add_to_cart add-to-cart button nomargin col-sm-6 col-xs-6 nopadding" data-url={{ $url }} data-id="{{ $arProduct->id }}" data-price="{{ number_format($arProduct->price-( $arProduct->price*$arProduct->sale/100), '0', ',' , '.') }}" data-name="{{ $arProduct->name }}" data-toggle="tooltip" title="Thêm vào giỏ" data-placement="top">
										<i class="fa fa-shopping-cart"></i>
											<span > Thêm vào giỏ</span>
										</a>
										<button type="submit" data-role="buynow" id="buynow" class="button col-xs-12 nopadding">Mua ngay</button>
									</form>
									<div class="clear"></div>
									<div class="line"></div>
									<p class="description">{!! $arProduct->intro !!}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>
		</div>
	</div>
</div>
</div>
<style type="text/css">
	.thumbnails-carousel{border: 1px solid #ccc;}
	.thumbnails-carousel div  li img{
		width: 50px;
	}
</style>
<script>
	var quantity = parseInt($('#AddToCartFormQv .product-quantity input.qty').val());
	$('.minus').click(function() {
		if (quantity > 0) {
			if (quantity == 1) {
				$('#addtocart').attr('disabled','disabled');
			}
			quantity -= 1;
		}
		else {
			quantity = 0;
		}
		$('#AddToCartFormQv #product_quantity').val(quantity);
	});
	$('.plus').click(function() {
		$('#addtocart').removeAttr('disabled');
		var max = $(this).data('quantity')
		if (quantity < max) {
			quantity += 1;
		}
		else {
			quantity = max;
		}
		alert(quantity)
		$('#AddToCartFormQv #product_quantity').val(quantity)
	});
	$('#carousel-example-generic > div:nth-child(1) > div:nth-child(1)').addClass('active')
</script>
<script src="{{ asset('templates/public/js/custom_js.js') }}" type="text/javascript"></script>
