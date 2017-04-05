@extends('templates.admin.template')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> News</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#list" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">List News</a>
          </li>
          <li role="presentation" class=""><a href="#add" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Add News</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="list" aria-labelledby="home-tab">
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Time</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>


                  <?php $i=1 ?>
                  @foreach ($arNews as $element)
                  <tr>
                    <td>{{$i}}</td>
                    <td>
                      <?php 
                      $url=$_SERVER["DOCUMENT_ROOT"].getenv('STORAGE').'/'.$element['image'];
                      if(file_exists($url)){
                        echo '<img class="image_slide" src="'.getenv('STORAGE').'/'.$element['image'].'" alt="">';
                      }else{
                        echo 'Lỗi ảnh gốc';
                      }?>
                    </td>
                    <td><?php
                      if (strlen($element['title']) > 80) {
                        echo mb_substr($element['title'],0,80, "utf-8"). "...";
                      } else {
                        echo $element['title'];
                      }
                      ?>
                    </td>
                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($element["created_at"]))->diffForHumans() }}</td>
                    <td style="width: 10%" data-name='other' data-id={{$element["id"]}}>
                      <a href="{{ route('admin.other.delete_news',$element["id"])}}" title="Xóa" onclick="return xoa('Bạn chắc chắn muốn xóa')" ><i class="fa fa-trash"></i></a>
                      <a style="cursor:pointer" class="edit" data-toggle="modal" data-target=".bs-example-modal-lg" title="Sửa" id="del"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <?php $i++ ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="add" aria-labelledby="profile-tab">
            <div class="x_content">
              <br />
              <form id="add_user" action="{{route('admin.other.add')}}" class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validateFile()">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group has-feedback">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Title <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text"  name="title"  class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
                  </div>
                </div>
                <div class="form-group has-feedback">
                <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>
                  <label for="image" class="uploadimg">
                    <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{getenv('FILE_UPLOAD')}}" data-img="{{getenv('FILE_UPLOAD')}}" />
                    <input id="image" class="hide" type="file" name="hinhanh" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a> 
                  </label>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" >Content <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                   <textarea name="content"  rows="5" class="form-control "></textarea>
                   
                 </div>
               </div>
               <div class="ln_solid"></div>
               <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" class="btn btn-success">Thêm</button>
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id='edit'>

</div>

</div>
@stop