@extends('templates.public.template')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <ol class="breadcrumb col-md-6 col-sm-6">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="/account">Tài khoản</a></li>
            <li class="active">Đăng nhâp - Đăng ký</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
                <div id="login">
                                    @if (count($errors) > 0)
                    <p id='thongbao' class='hidden'>{{ trans('layout.validate_error') }}</p>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="acctitle acctitlec"><i class="acc-closed fa fa-lock"></i><i class="acc-open fa fa-unlock"></i>Đăng nhập</div>
                    <div class="acc_content clearfix" style="display: block;">
                        <form accept-charset="UTF-8" action="{{ action('Auth\LoginController@postLogin') }}" id="customer_login" method="post"  data-toggle="validator">
                            {{ csrf_field() }}
                            @if (Session::has("result"))
                            <div class="note form-error">
                                <ul class="disc">
                                  <li style="color:red; margin-bottom:10px;">
                                    {{ Session::get("result")}}
                                </li>
                            </ul>
                        </div>
                        @endif
                        <input name="FormType" value="customer_login" type="hidden">
                        <input name="utf8" value="true" type="hidden">
                        <div class="col_full form-group">
                            <label for="login-form-username">Email:<span class="require_symbol">* </span></label>
                            <input data-error="Vui lòng nhập email đúng định dạng" required="" name="email" class="form-control" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" type="email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="login-form-password">Mật khẩu:<span class="require_symbol">* </span></label>
                            <input id="login-form-password" data-error="Vui lòng nhập mật khẩu" required="" name="password" value="" class="form-control" type="password">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type="submit" value="login">Đăng nhập</button>
                            <a href="#" onclick="showRecoverPasswordForm();return false;" class="fright">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div id="register">
                <div class="acctitle"><i class="acc-closed fa fa-user"></i><i class="acc-open fa fa-check-circle"></i>Người dùng mới? Đăng ký tài khoản</div>
                <div class="acc_content clearfix" style="display: none;">
                    <form accept-charset="UTF-8" action="{{ action('Auth\RegisterController@postRegister') }}" id="customer_register" method="post" data-toggle="validator">
                     {{ csrf_field() }}
                        <input name="FormType" value="customer_register" type="hidden">
                        <input name="utf8" value="true" type="hidden">
                        <div class="col_full form-group">
                            <label for="first_name">Họ tên:<span class="require_symbol">*</span></label>
                            <input id="first_name" name="username" value="" data-error="Vui lòng nhập họ tên" required="" class="form-control" type="text">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-name">Username:<span class="require_symbol">*</span></label>
                            <input id="register-form-name" name="fullname" value="" data-error="Vui lòng nhập username" required="" class="form-control" type="text">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-email">Email:<span class="require_symbol">*</span></label>
                            <input id="register-form-email" name="email" value="" data-error="Vui lòng nhập email" required="" class="form-control" type="text">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-password">Mật khẩu:<span class="require_symbol">*</span></label>
                            <input id="pasword" name="password" onchange="validatePassword()" value="" data-error="Vui lòng nhập mật khẩu" required="" class="form-control" type="password">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full form-group">
                            <label for="register-form-repassword">Nhập lại mật khẩu:<span class="require_symbol">* </span></label>
                            <span class="require_symbol repassword_warning" style="display: none;"> Mật khẩu nhập lại không đúng</span>
                            <input id="confirm_pasword" name="customer[password]" onkeyup="validatePassword()" data-error="Vui lòng nhập lại mật khẩu" required="" value="" class="form-control" type="password">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" type="submit">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="recover-password" style="display:none;" class="userbox">
                <div class="acctitle"><i class="fa fa-refresh"></i>Quên mật khẩu</div>
                <div class="" style="display: none;">
                    <form accept-charset="UTF-8" id="recover_customer_password">
                        <input name="FormType" value="recover_customer_password" type="hidden">
                        <input name="utf8" value="true" type="hidden">
                        <div class="col_full">
                            <label for="recover-email">Email:</label>
                            <input id="recover-email" name="email" value="" class="form-control" type="text">
                        </div>
                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" type="submit">Gửi</button>
                            <button class="button button-3d button-red nomargin" onclick="hideRecoverPasswordForm(); return false;" name="">Hủy</button>
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
