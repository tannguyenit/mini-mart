<div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">Edit Promotion</h4>
    </div>
    <div class="modal-body">
      <form id="edit_cat" action="{{route('admin.promotion.edit')}}" class="form-horizontal" method="post" enctype="multipart/form-data" >
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="hidden" name="id" value="{{$arEdit['id']}}">
       <div class="form-group has-feedback">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Title <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
        <input type="text"  name="title" value="{{$arEdit['title']}}" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>
        <label for="image2" class="uploadimg">
          <div id="anhxoa" style="display: none"></div> <img id="datafile" src="{{ getImages($arEdit['image']) }}" data-img="{{getenv('FILE_UPLOAD')}}" />
          <input id="image2" class="hide" type="file" onchange="test(this)" name="hinhanh2" /> <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a>
        </label>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Content <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <textarea name="content" id='content'  class="form-control ">{{$arEdit['content']}}</textarea>
          <script type="text/javascript">ckfinder('content')</script>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Cập nhật</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
