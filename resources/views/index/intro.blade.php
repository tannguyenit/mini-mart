@extends('templates.public.template')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="{{ route('index.index') }}">Trang chủ</a></li>
			<li class="active">Giới thiệu</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			{!! $intro->content !!}
		</div>
	</div>
</section>
@stop
