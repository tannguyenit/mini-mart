@extends('templates.public.template')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="{{ route('index.index') }}">Trang chủ</a> </li>
			<li class="active">Tin công nghệ</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<div class="postcontent nobottommargin clearfix col-sm-9">
					<div id="posts" class="small-thumbs">
						@foreach ($arNews as $element)
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="{{ route('news.detail',[str_slug($element['title']),$element['id']]) }}">
									<img class="image_fade" src="{{ asset(Storage::url($element['image'])) }}" alt="{{$element['title']}}">
								</a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="{{ route('news.detail',[str_slug($element['title']),$element['id']]) }}">{{ $element['title'] }}</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="fa fa-calendar"></i>{{ $element['created_at'] }}</li>
									<li><i class="fa fa-user"></i>{{ $element->user->fullname }}</li>
								</ul>
								<div class="entry-content">
								<a href="{{ route('news.detail',[str_slug($element['title']),$element['id']]) }}" class="more-link">Xem tiếp</a>
								</div>
							</div>
						</div>
						@endforeach
						{{$arNews->links()}}
					</div>
				</div>
				@include('news.slidebar')
			</div>
		</div>
	</div>
</section>
@stop
