@extends('templates.admin.template')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Privacy Policy</h2>
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
              <th>Content</th>
              <th>Time</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1 ?>
            @foreach ($arOther as $element)
            <tr>
              <td>{{$i}}</td>
              <td><?php
                if (strlen($element['content']) > 80) {
                  echo mb_substr($element['content'],0,80, "utf-8"). "...";
                } else {
                  echo $element['content'];
                };
                ?>
              </td>
              <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($element["created_at"]))->diffForHumans() }}</td>
              <td style="width: 10%" data-name='other' data-segment='{{Request::segment(3)}}' data-id={{$element["id"]}}>
                <a style="cursor:pointer" class="edit_other" data-toggle="modal" data-target=".bs-example-modal-lg" title="Sửa" id="del"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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