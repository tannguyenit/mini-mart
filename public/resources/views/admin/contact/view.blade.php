<div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">Liên hệ</h4>
    </div>
    <div class="modal-body">
      <form id="edit_cat" action="{{route('admin.contact.send_mail')}}" class="form-horizontal" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$arView['id']}}">

        <div class="form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" value="{{$arView['username']}}" disabled="disabled"  name="username" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
          </div>
        </div>
        <div class="form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fullname <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" value="{{$arView['fullname']}}"  name="fullname" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
          </div>
        </div>
        <div class="form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" value="{{$arView['email']}}"  name="email" class="form-control col-md-7 col-xs-12"><i class='glyphicon glyphicon-ok form-control-feedback'></i>
          </div>
        </div>
        <div class="form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Content <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="" class="form-control" style="height: auto">{{$arView['content']}}</textarea>
          </div>
        </div>
        <div class="form-group has-feedback">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Reply content <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="" class="form-control ckeditor" style="height: auto"></textarea>
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>