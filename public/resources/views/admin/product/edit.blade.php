@extends('templates.admin.template')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Edit Product</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br />
      <?php 
      if ($arEdit['images']!='') {
        $url=$_SERVER['DOCUMENT_ROOT'].'/'.getenv('STORAGE').'/'.$arEdit['images'];
        if (file_exists($url)) {
          $picture=getenv('STORAGE').'/'.$arEdit['images'];
        }else{
          $picture=getenv('FILE_UPLOAD');
        }
      }else{
        $picture=getenv('FILE_UPLOAD');
      }
      ?>
      <div class="well">
        <h2>Product</h2><hr>
        <form id="add_user"  class="form-horizontal" method="post" enctype="multipart/form-data">
          <input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">
          <div class="form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" value="{{$arEdit['name']}}" name="name" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Category <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <select class="form-control" name="cat_id">
              <option>Chọn loại danh mục</option>
              <?php cat_parent($parent,0,"-",$arEdit["cat_id"]);?></select>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Price <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" value="{{$arEdit['price']}}" name="price" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Sale <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" value="{{$arEdit['sale']}}" name="sale" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Quantity <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" value="{{$arEdit['quantity']}}" name="quantity" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>
            <label for="image" class="uploadimg">
              <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{$picture}}" data-img="{{getenv('FILE_UPLOAD')}}" />
              <input id="image" class="hide" type="file" name="hinhanh" /> </label>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" >Intro <span class="required">*</span>
              </label>
              <div class="col-md-10 col-sm-10 col-xs-12">
                <textarea name="intro"  rows="5" class="ckeditor form-control ">{{$arEdit['intro']}}</textarea>
                <script type="text/javascript">ckfinder('intro')</script>
              </div>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" >Content <span class="required">*</span>
              </label>
              <div class="col-md-10 col-sm-10 col-xs-12">
               <textarea name="content"  rows="5" class="ckeditor form-control ">{{$arEdit['content']}}</textarea>
               <script type="text/javascript">ckfinder('content')</script>
             </div>
           </div>
           <div class="ln_solid"></div>
           <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="reset" class="btn btn-primary">Reset</button>
              <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>
          </div>
        </form>
      </div>
      <div class="clearfix"></div>
      <div class="well" id="arImage" data-array={{json_encode($arImage)}}>
        <input type="hidden" id="product_id_upload" value="{{Request::segment(4)}}">
        <h2>Images</h2><hr>
        <form action="" enctype="multipart/form-data" class="dropzone" id="drop">
          <div class="fallback">
            <input name="file" type="file" multiple />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop