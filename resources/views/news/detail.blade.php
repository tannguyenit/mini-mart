@extends('templates.public.template')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="{{ route('index.index') }}">Trang chủ</a></li>
			<li class="active">{{ $arDetail['title'] }}</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix col-sm-9">
				<div class="single-post nobottommargin">
					<div class="entry clearfix">
						<div class="entry-title">
							<h2>{{ $arDetail['title'] }}</h2>
						</div>
						<ul class="entry-meta clearfix">
							<li>
								<i class="fa fa-calendar"></i>{{ $arDetail['created_at'] }}
							</li>
							<li>
								<i class="fa fa-user"></i> {{ $arDetail->user->fullname }}
							</li>
						</ul>
						<div class="entry-content notopmargin">
							{!! $arDetail['content'] !!}
						</div>
						<div class="clear"></div>
						<div class="si-share noborder clearfix">
							<span>Chia sẻ:</span>
							<div class="socical-wrapper">
								<ul class="social-icons">
									<div class="item">
										<div class="fb-like" data-href="https://www.facebook.com/dongluc.195/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
									</div>
								</ul>
							</div>
							<div class="fb-comments" data-href="https://www.facebook.com/dongluc.195/" data-numposts="5" data-order-by="reverse_time"></div>
						</div>
					</div>
					<h4>Bài viết cùng danh mục:</h4>
					<div class="related-posts clearfix">
						<div class=" nobottommargin col-xs-12">
							@foreach ($arRelation as $element)
							<div class="mpost clearfix col-xs-6">
								<div class="entry-image related-posts-img">
									<a href="{{ route('news.detail',[str_slug($element['title']),$element['id']]) }}">
										<img src="{{ asset(Storage::url($element['image'])) }}" alt="{{ $element['title'] }}">
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ route('news.detail',[str_slug($element['title']),$element['id']]) }}">{{$element['title']}}</a></h4>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="fa fa-calendar"></i> {{ $element['created_at'] }}</li>
									</ul>
									<div class="entry-content"><a href="{{ route('news.detail',[str_slug($element['title']),$element['id']]) }}" class="more-link">Xem tiếp</a> </div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			@include('news.slidebar')
		</div>
	</div>
</section>
@stop
