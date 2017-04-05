<div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">Edit Slide Header</h4>
    </div>
    <div class="modal-body">
      <form id="edit_cat" action="{{route('admin.slide.edit')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="hidden" name="id" value="{{$arEdit['id']}}">
       <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text"  name="name"  value="{{$arEdit['name']}}" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label  class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
        <label for="image2" class="uploadimg">
        <div id="anhxoa" style="display: none"></div><img id="datafile" src="{{ getImages($arEdit['image']) }}" data-img="{{getenv('FILE_UPLOAD')}}" />
          <input id="image2" onchange="test(this)" class="hide" type="file" name="hinhanh2" />
          <a href="javascript:void(0)" class="removefile" title="Xóa ảnh">&times;</a>
        </label>
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
