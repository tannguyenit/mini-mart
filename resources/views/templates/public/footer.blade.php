<footer id="footer" class="dark">
    <div class="container">
        <div class="footer-widgets-wrap clearfix footer_wrap_2">
            <div class="prefooter_one col-sm-3 col-xs-6">
                <div class="widget clearfix">
                    <a href="" class="footer_logo">
                        <img alt="Mini Market" src="{{ asset('images/footer_logo.png') }}">
                    </a>
                    <p>Chúng tôi tin chất lượng là dịch vụ tốt nhất.</p>
                </div>
            </div>
            <div class="prefooter_one col-sm-3 col-xs-6">
                <div class="widget widget_links clearfix">
                    <h4>Giới thiệu</h4>
                    <ul>
                        <li><a href="{{ route('index.index') }}">Trang chủ</a></li>
                        <li><a href="{{ route('product.all') }}">Sản phẩm</a></li>
                        <li><a href="{{ route('news.index') }}">Tin tức</a></li>
                        <li><a href="{{ route('intro.index') }}">Giới thiệu</a></li>
                        @foreach ($arCat_header as $key => $value)
                        @php($url = str_slug($value['name']) . '-' . $value['id'])
                        <li>
                            <a href="/{{ $url }}">{{ $value['name'] }} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="marginbottom hidden-lg hidden-md hidden-sm">
                </div>
            </div>
            <div class="prefooter_one col-sm-3 col-xs-6">
                <div class="widget widget_links clearfix">
                    <h4>Hỗ trợ khách hàng</h4>
                    <ul>
                        <li><a href="http://minimart/chinh-sach-van-chuyen">Chính sách vận chuyển</a></li>
                        <li><a href="http://minimart/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                        <li><a href="http://minimart/doi-tra-hang">Đổi trả hàng</a></li>
                        <li><a href="http://minimart/van-chuyen">Vận chuyển</a></li>
                        <li><a href="http://minimart/phi-van-chuyen">Phí vận chuyển</a></li>
                        <li><a href="http://minimart/phuong-thuc-thanh-toan">Phương thức thanh toán</a></li>
                    </ul>
                </div>
                <div class="marginbottom hidden-lg hidden-md hidden-sm">
                </div>
            </div>
            <div class="prefooter_one col-sm-3 col-xs-6">
                <div class="widget widget_links clearfix">
                    <h4>Liên hệ</h4>
                    <p>Kênh mua sắm trực tuyến giá tốt hàng đầu Việt Nam</p>
                    <address>
                        <i class="fa fa-map-marker"></i>
                        <span> Tam Kỳ Quảng Nam</span> <br>
                        <i class="fa fa-phone"></i>
                        <a href="tel:01263751380">(84) 126 3 751 380</a> <br>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:vantancnttk13@gmail.com">vantancnttk13@gmail.com</a>
                    </address>
                </div>
                <div class="marginbottom hidden-lg hidden-md hidden-sm"></div>
            </div>
        </div>
    </div>
    <div id="copyrights">
        <div class="container clearfix">
            <div class="col_half">
                © Bản quyền thuộc về <a href="http://tan.vnsmiles.com/" rel="nofollow" target="_blank">Tân Nguyễn</a> | Cung cấp bởi
                <a rel="nofollow" target="_blank" href="http://tan.vnsmiles.com/">tannguyenit</a><br>
            </div>
            <div class="col_half col_last tright">
                TP Tam Kỳ - Quảng Nam | Email: vantancnttk13@gmail.com | Hotline: (84) 126 3 751 380
            </div>
        </div>
    </div>
</footer>

<div id="gotoTop" class="fa fa-angle-up" onclick="gotoTop()"></div>
<div id="product-pop-up" style="display:none;" class="single-product shop-quick-view-ajax clearfix">
</div>
<div class="modal fade" id="add_to_cart_form" >
</div>
<script>
    $(document).on('click', '.remove__cart', function(){
        if (confirm("Bạn chắc chắn muốn xóa")) {
            var id = $(this).data('rowid');
            $.ajax({
                url: '/removecart',
                type: "POST",
                cache: false,
                data: {
                    "id": id
                },
                success: function(data) {
                    var array = $.parseJSON(data)
                    if (array.count > 0) {
                        $('.top_cart_qty').html(array.count)
                        $(".total_price .amount strong").html(String(array.tongtien).replace(/(.)(?=(\d{3})+$)/g,'$1,') + ' VND');
                        $('#' + id).slideUp(300);
                        $('#__' + id).slideUp(300);
                    } else {
                        window.location.href="/";
                    }
                }
            })
        } else {
            return false
        }
    });
    $('.qty').change(function(){
        var qty =  $(this).val();
        var max =  $(this).data('max');
        var rowId =  $(this).data('rowid');
        var this_ = $(this);
        if (qty >=max) {
            var qty =  $(this).val(max)
        } else  if ( qty <= 0) {
           if (confirm("Bạn chắc chắn muốn xóa")) {
            $.ajax({
                url: '/removecart',
                type: "POST",
                cache: false,
                data: {
                    "id": rowId
                },
                success: function(data) {
                    var array = $.parseJSON(data)
                    if (array.count > 0) {
                        $('.top_cart_qty').html(array.count)
                        $(".total_price .amount strong").html(String(array.tongtien).replace(/(.)(?=(\d{3})+$)/g,'$1,') + ' VND');
                        $('#' + rowId).slideUp(300);
                        $('#__' + rowId).slideUp(300);
                    } else {
                        window.location.href="/";
                    }
                }
            })
        } else {
            return false;
            var qty =  $(this).val(1)
        }
        var qty =  $(this).val(1)
    }
    $.ajax({
        url:'/updateCart',
        type:"POST",
        cache:false,
        data: {
            qty:qty,
            rowId:rowId
        },
        success: function (data) {
            var amount = String(this_.data('price') * qty).replace(/(.)(?=(\d{3})+$)/g,'$1,') + ' VND';
            this_.closest('.cart_item').find('.cart-product-subtotal').find('.amount').html(amount);
            var sum = 0;
            $('.cart_item').each(function(){
                var qty = parseInt($(this).find('.qty').val());
                var price = parseInt($(this).find('.qty').data('price'));
                sum = qty * price + sum;
            });
            $('.total_amount').html(String(sum).replace(/(.)(?=(\d{3})+$)/g,'$1,') + ' VND')
            console.log(data)
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            }
            console.log(msg);
        },
    })
});
    var quantity = parseInt($('#AddToCartFormQv #product_quantity').val());
    $('.minus').click(function() {
        if (quantity > 0) {
            if (quantity == 1) {
                $('#addtocart').attr('disabled','disabled');
            }
            quantity -= 1;
        }
        else {
            quantity = 0;
        }
        $('#AddToCartFormQv #product_quantity').val(quantity);
    });
    $('.plus').click(function() {
        $('#addtocart').removeAttr('disabled');
        var max = $(this).data('qty');
        if (quantity < max) {
            quantity += 1;
        }
        else {
            quantity = max;
        }
        $('#AddToCartFormQv #product_quantity').val(quantity)
    });
    $('#carousel-example-generic > div:nth-child(1) > div:nth-child(1)').addClass('active')
    function gotoTop() {
        $("html, body").animate({ scrollTop: 0 }, 2000);
        return false;
    }
    $('#myScrollspy > ul > li:nth-child(1)').addClass('active');
    $('#myCarousel > div > div:nth-child(1)').addClass('active');
    $('#primary-menu > ul > li:nth-child(9) > ul').addClass('menu-pos-invert');
    $('.banner_top').css('display','block');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.item-quick-view').click(function(){
        var id = $(this).data('id');
        var url = $(this).data('url');
        $.ajax({
            url: 'review',
            method:'POST',
            data:{
                id:id,
                url:url
            },
            success:function(data){
                $('#add_to_cart_form').html(data);
            }
        })
    })
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    $(document).ready(function () {

    $('#moal_alert').modal('show');

});
    $(document).on('click', '.add_to_cart', function(e){
        e.preventDefault();
        var name = $(this).data('name');
        var price = $(this).data('price');
        var qty = $('#product_quantity').val();
        var id = $(this).data('id');
        var url = $(this).data('url');
        $.ajax({
            url: '/quickAdd',
            method:'POST',
            data:{
                id:id,
                url:url,
                qty:qty,
            },
            success:function(data) {
                $('.top_cart_qty').html(data);
                 $(".alert-success").removeClass("in").show();
                 $(".alert-success").delay(2000).addClass("in").fadeOut(3000);
            }
        })
    });
    $(document).ready(function(){
        $(".destroy_cart").click(function () {
            if (confirm("Bạn chắc chắn muốn hủy")) {
                window.location.href="destroy";
            } else {
                return false
            }
        })
    })
</script>
<script src="{{ asset('templates/public/js/custom.js') }}" type="text/javascript"></script>
<script src='{{ asset('templates/public/js/smoke.min.js') }}'></script>
<script src="{{ asset('templates/public/js/slick.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('templates/public/js/functions.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('templates/public/js/jgrowl.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/public/js/additional_scripts.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/public/js/custom_js.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/public/checkout/validator.js') }}" type="text/javascript"></script>
<div>
</body>
</html>
