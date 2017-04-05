<div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Sửa danh mục</h4>
      </div>
      <div class="modal-body">
        <form id="edit_cat" action="{{route('admin.cat.edit')}}" class="form-horizontal" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="id" value="{{$arEdit['id']}}">
          <div class="form-group has-feedback">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Parent <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <select class="form-control" name="parent_id">
              <option value="0">Chọn loại danh mục</option>
              <?php cat_parent($parent,0,"-",$arEdit["parent_id"]);?>
            </select>
          </div>
        </div>
        <div class="form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" value="{{$arEdit['name']}}"  name="name" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
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