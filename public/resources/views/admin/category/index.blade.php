@extends('templates.admin.template')
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Quản lý danh mục</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        
        
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#list" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">List Category</a>
          </li>
          <li role="presentation" class=""><a href="#add" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Add Category</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="list" aria-labelledby="home-tab">
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Loại danh mục</th>
                    <th>Time</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  @foreach ($arCat as $element)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$element['name']}}</td>
                    <td> <?php foreach ($parent as $value){
                      if($element['parent_id']==$value['id']){
                        echo $value['name'];
                      }
                    }
                    if ($element['parent_id']==0) {
                      echo 'Danh mục cha';
                    }?></td>
                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($element["created_at"]))->diffForHumans() }}</td>
                    <td style="width: 10%" data-name='cat' data-id={{$element["id"]}}>
                      <a href="{{ route('admin.cat.delete',$element["id"])}}" title="Xóa" onclick="return xoa('Bạn chắc chắn muốn xóa')" ><i class="fa fa-trash"></i></a>
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
              <form id="add_cat" action="{{route('admin.cat.add')}}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group has-feedback">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Parent <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                   <select onchange="icon_change()" id='cat_option' class="form-control" name="parent_id">
                    <option value="0">Chọn loại danh mục</option>
                    <?php cat_parent($parent);?>
                  </select>
                </div>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  name="name" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
                </div>
              </div>
              <div class="form-group has-feedback" id='icon_id'>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Icon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type='file' name='icon' onchange="readURL(this);" style="float: left;" />
                  <img id="blah" src="{{getenv('STORAGE')}}/2017-01-30_200807.png" alt="your image" />
                  
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