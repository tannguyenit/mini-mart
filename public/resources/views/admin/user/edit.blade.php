<div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">Sửa người dùng</h4>
    </div>
    <div class="modal-body">
      <form id="edit_cat" action="{{route('admin.user.edit')}}" class="form-horizontal" method="post">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="hidden" name="id" value="{{$arEdit['id']}}">
       <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text"  name="username" disabled="disabled" value="{{$arEdit['username']}}" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fullname <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text"  name="fullname" value="{{$arEdit['fullname']}}" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="password"  name="password" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="email"  name="email" value="{{$arEdit['email']}}" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Address <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text"  name="address" value="{{$arEdit['address']}}" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
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