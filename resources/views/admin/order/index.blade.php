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
                    <th>Name</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Time</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  @foreach ($arOrder as $element)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$element['username']}}</td>
                    <td>{{$element['fullname']}}</td>
                    <td>{{$element['email']}}</td>
                    <td>{{$element['address']}}</td>
                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($element["created_at"]))->diffForHumans() }}</td>
                    <td style="width: 10%" data-name='contact' data-id={{$element["id"]}}>
                      <a href="{{ route('admin.contact.delete',$element["id"])}}" title="Xóa" onclick="return xoa('Bạn chắc chắn muốn xóa')" ><i class="fa fa-trash"></i></a>
                      <a style="cursor:pointer" class="edit" data-toggle="modal" data-target=".bs-example-modal-lg" title="Sửa" id="del"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <?php $i++ ?>
                  @endforeach
                </tbody>
              </table>
            </div>

  </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id='edit'>

</div>

</div>
@stop