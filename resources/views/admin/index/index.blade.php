@extends('templates.admin.template')

@section('content')
<div class="rơ tile_count">
    <div class="col-sm-4 col-xs-12 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Tổng thành viên</span>
        <div class="count green">{{ $countUser }}</div>
    </div>
    <div class="col-sm-4 col-xs-12 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i>Tổng sản phẩm</span>
        <div class="count green">{{ $countProduct }}</div>
    </div>
    <div class="col-sm-4 col-xs-12 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Tổng đơn hàng</span>
        <div class="count green">{{ $countOder }}</div>
    </div>
</div>
<div>
    <img src="http://localhost:8000/storage/d60c0d55df00d4309d18f7d4831240ed.jpeg" alt="" style="width: 100%;">
</div>
@stop
