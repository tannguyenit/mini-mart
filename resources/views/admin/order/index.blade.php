@extends('templates.admin.template')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Quản lý order</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>STT</th>
              <th>Fullname</th>
              <th>Email</th>
              <th>Address</th>
              <th>Time</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1?>
            @foreach ($arOrder as $element)

            <?php

// $a = DB::table('order_details')->where('id', $element['id'])->get();

$ord = DB::table('order_details')->select('*', 'order_details.quantity as soluong')->join('products', 'order_details.product_id', '=', 'products.id')->where('order_id', $element['id'])->get();

?>
            <tr>
              <td>{{$i}}</td>
              <td>{{$element['fullname']}}</td>
              <td>{{$element['email']}}</td>
              <td>{{$element['address']}}</td>
              <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($element["created_at"]))->diffForHumans() }}</td>
              <td style="width: 10%" data-name='contact' data-id={{$element["id"]}}>
                <a href="{{ route('admin.contact.delete',$element["id"])}}" title="Xóa" onclick="return xoa('Bạn chắc chắn muốn xóa')" ><i class="fa fa-trash"></i></a>
                <a class="" data-toggle="modal" href='#{{ $element["id"] }}'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <div class="modal fade" id="{{ $element["id"] }}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Chi tiết hóa đơn</h4>
                      </div>
                      <div class="modal-body">
                      <div class="well">
                        <p>Tên khách hàng : {{$element['fullname']}}</p>
                      <p>Địa chỉ : {{$element['address']}}</p>
                      <p>Email : {{$element['email']}}</p>
                      </div>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Mã hóa đơn</th>
                              <th>Tên hàng</th>
                              <th>Số lưọng</th>
                              <th>Gía bán</th>
                              <th>Thành tiền</th>
                            </tr>
                          </thead>
                          <tbody>
                           @php($tong = 0)
                            @foreach ($ord as $element)
                            @php($tong = $element->price * $element->soluong - ($element->price * $element->soluong * $element->sale) / 100 + $tong)
                            <tr>
                              <td>{{ $element->id }}</td>
                              <td>{{ $element->name }}</td>
                              <td>{{ $element->soluong }}</td>
                              <td>{{ number_format(($element->price - ($element->price*$element->sale)/100),0,',','.') }}</td>
                              <td>{{ number_format(($element->price*$element->soluong - ($element->price*$element->soluong*$element->sale)/100), 0 ,',', '.') }}</td>
                            </tr>
                            @endforeach
                            <tr><td colspan="5" rowspan="">Tổng tiền : {{number_format($tong, 0,',','.') }} VNĐ</td></tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>
              </td>

            </tr>

            <?php $i++?>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>



</div>
@stop
