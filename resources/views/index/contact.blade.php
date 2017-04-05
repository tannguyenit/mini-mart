@extends('templates.public.template')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<ol class="breadcrumb col-md-6 col-sm-6">
			<li><a href="{{ route('index.index') }}">Trang chủ</a></li>
			<li class="active">Liên hệ</li>
		</ol>
	</div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
                <div id="register">
                    <div class="acctitle">
                    <i class="acc-closed fa fa-user"></i>
                    <i class="acc-open fa fa-check-circle"></i>Bạn muốn liên hệ với chúng tôi ! Hãy cho chúng tôi một số thông tin của bạn.</div>
                    <div class="acc_content clearfix" style="display: none;">
                        <form accept-charset="UTF-8" action="{{ action('IndexController@postContact') }}" id="customer_register" method="post" data-toggle="validator">
                           {{ csrf_field() }}
                           @if (count($errors) > 0)
                           <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="col_full form-group">
                            <label for="first_name">Họ tên:<span class="require_symbol">*</span></label>
                            <input id="first_name" name="fullname" value="" data-error="Vui lòng nhập họ tên" required="" class="form-control" type="text">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-email">Email:<span class="require_symbol">*</span></label>
                            <input id="register-form-email" name="email" value="" data-error="Vui lòng nhập email" required="" class="form-control" type="text">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-name">Địa chỉ:<span class="require_symbol">*</span></label>
                            <input id="register-form-name" name="address" value="" data-error="Vui lòng nhập địa chỉ của bạn" required="" class="form-control" type="text">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-password">Số điện thoại:<span class="require_symbol">*</span></label>
                            <input id="pasword" name="phone" value="" data-error="Vui lòng nhập số điện thoại" required="" class="form-control" type="number">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-repassword">Nội dung:<span class="require_symbol">* </span></label>
                            <textarea class="form-control" name="content" required="" data-error="Vui lòng nhập nội dung"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" type="submit">Liên hệ</button>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                $('#recover_customer_password').submit(function() {
                    $.ajax({
                        type: 'POST',
                        url: '/account/recover',
                        data: $(this).serialize(),
                        success: function() {
                            alert('Vui lòng kiểm tra mail để đổi mật khẩu');
                        }
                    });
                });
            </script>
        </div>
        <script type="text/javascript">
            function validatePassword(){
                var password = $('#pasword').val();
                var confirm_password = $('#confirm_pasword').val();
                if(password != confirm_password) {

                    $('.repassword_warning').css('display','block');
                } else {
                    $('.repassword_warning').css('display','none');
                }
            }
            function showRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'block';
                document.getElementById('login').style.display='none';
                document.getElementById('register').style.display='none';
            }
            function hideRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'none';
                document.getElementById('login').style.display = 'block';
                document.getElementById('register').style.display = 'block';
            }
            if (window.location.hash == '#recover') { showRecoverPasswordForm() }
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.repassword_warning').hide();
            $('#register-form-password, #register-form-repassword').on('keyup', function() {
                if(($('#register-form-password').val() !== '') && ($('#register-form-password').val() !== $('#register-form-repassword').val())) {
                    $('.repassword_warning').show();
                    $('#register-form-submit').prop('disabled',true);
                }
                else {
                    $('.repassword_warning').hide();
                    $('#register-form-submit').prop('disabled',false);
                }
            })
        });
    </script>
</div>
</div>
</section>
@stop
