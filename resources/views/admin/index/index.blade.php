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
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">
            <div class="row x_title">
                <div class="col-md-6">
                    <h3> Biểu đồ sản phẩm<small>Graph title sub-title</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop
