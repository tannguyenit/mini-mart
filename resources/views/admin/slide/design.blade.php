@extends('templates.admin.template')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Quản lý Slide</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="col-xs-12 row">
        <div class="col-xs-2 well">
          <h2>Category</h2>
        </div>
        <div class="col-xs-9 well pull-right">
          <h2 class="text-center">Slider header</h2><hr>
          <form action="" enctype="multipart/form-data" class="dropzone" id="drop">
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 well">
        <div class="col-xs-6">
          <h2 class="text-center">Dien tu</h2>
          <form action="" enctype="multipart/form-data" class="dropzone" >
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>
        <div class="col-xs-6">
          <h2 class="text-center">Image</h2>
          <label for="image" class="uploadimg">
            <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{ asset('admin/images/image.png') }}" data-img="{{ asset('admin/images/image.png') }}" />
            <input id="image" class="hide" type="file" name="hinhanh" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a> </label>
          </div>
        </div>
        <div class="col-xs-12 well">
          <div class="col-xs-6">
            <h2 class="text-center">Dien tu</h2>
            <form action="" enctype="multipart/form-data" class="dropzone" >
              <div class="fallback">
                <input name="file" type="file" multiple />
              </div>
            </form>
          </div>
          <div class="col-xs-6">
            <h2 class="text-center">Image</h2>
            <label for="image" class="uploadimg">
              <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{ asset('admin/images/image.png') }}" data-img="{{ asset('admin/images/image.png') }}" />
              <input id="image" class="hide" type="file" name="hinhanh" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a> </label>
            </div>
          </div>
          <div class="col-xs-12 well">
            <div class="col-xs-6">
              <h2 class="text-center">Dien tu</h2>
              <form action="" enctype="multipart/form-data" class="dropzone" >
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>
              </form>
            </div>
            <div class="col-xs-6">
              <h2 class="text-center">Image</h2>
              <label for="image" class="uploadimg">
                <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{ asset('admin/images/image.png') }}" data-img="{{ asset('admin/images/image.png') }}" />
                <input id="image" class="hide" type="file" name="hinhanh" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a> </label>
              </div>
            </div>
            <div class="col-xs-12 well">
              <div class="col-xs-6">
                <h2 class="text-center">Dien tu</h2>
                <form action="" enctype="multipart/form-data" class="dropzone" >
                  <div class="fallback">
                    <input name="file" type="file" multiple />
                  </div>
                </form>
              </div>
              <div class="col-xs-6">
                <h2 class="text-center">Image</h2>
                <label for="image" class="uploadimg">
                  <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{ asset('admin/images/image.png') }}" data-img="{{ asset('admin/images/image.png') }}" />
                  <input id="image" class="hide" type="file" name="hinhanh" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a> </label>
                </div>
              </div>
              <div class="col-xs-12 well">
                <div class="col-xs-6">
                  <h2 class="text-center">Dien tu</h2>
                  <form action="" enctype="multipart/form-data" class="dropzone" >
                    <div class="fallback">
                      <input name="file" type="file" multiple />
                    </div>
                    </form>
                </div>
                <div class="col-xs-6">
                  <h2 class="text-center">Image</h2>
                  <label for="image" class="uploadimg">
                    <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{ asset('admin/images/image.png') }}" data-img="{{ asset('admin/images/image.png') }}" />
                    <input id="image" class="hide" type="file" name="hinhanh" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a> </label>
                  </div>
                </div>

              </div>
            </div>
            @stop
@stop
