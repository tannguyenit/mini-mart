@if (Session::has("level"))
  @if (Session::get("level")=='success')
  <div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>OK! {{ Session::get("msg")}}</strong> 
  </div>
  @elseif(Session::get("level")=='danger')
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Sorry! {{ Session::get("msg")}}</strong> 
  </div>
  @elseif(Session::get("level")=='error')
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Sorry! Bạn không được quyền xóa admin.</strong> 
  </div>
  @endif
@endif



