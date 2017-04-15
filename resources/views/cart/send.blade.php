<div style="font-family:&quot;Arial&quot;,Helvetica Neue,Helvetica,sans-serif;line-height:18pt">
    <div class="adM"> </div>
    <p>Xin chào {{ $info['name'] }}</p>
    <p>Cảm ơn Anh/chị đã đặt hàng tại <strong>Mini Market</strong>!</p>
    <p>Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.</p>
    <div>
        <table style="width:100%;border-collapse:collapse">
            <thead>
                <tr>
                    <th style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-top:1px solid #d7d7d7;padding:5px 10px;text-align:left">
                        <strong>Thông tin người mua</strong>
                    </th>
                    <th style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-top:1px solid #d7d7d7;padding:5px 10px;text-align:left">
                        <strong>Thông tin người nhận</strong>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td>Họ tên:</td>
                                    <td>{{ $info['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Điện thoại:</td>
                                    <td>{{ $info['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>
                                        <a href="mailto:{{ $info['email'] }}" target="_blank">{{ $info['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td>{{ $info['address'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td>Họ tên:</td>
                                    <td>{{ $info['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Điện thoại:</td>
                                    <td>{{ $info['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td>{{ $info['address'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
                        <p><strong>Hình thức thanh toán: </strong>Thanh toán khi giao hàng (COD)</p>
                        <p><strong>Hình thức vận chuyển: </strong> Giao hàng tận nơi<br></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <div style="font-size:18px;padding-top:10px">
            <strong>Thông tin đơn hàng</strong>
        </div>
        <table>
            <tbody>
                <tr>
                    <td style="padding-left:40px">Ngày tạo: {{ date("d-m-Y") }}</td>
                </tr>
            </tbody>
        </table>
        <table style="width:100%;border-collapse:collapse">
            <thead>
                <tr style="border:1px solid #d7d7d7;background-color:#f8f8f8">
                    <th style="padding:5px 10px;text-align:left">
                        <strong>Sản phẩm</strong>
                    </th>
                    <th style="text-align:center;padding:5px 10px">
                        <strong>Số lượng</strong>
                    </th>
                    <th style="text-align:center;padding:5px 10px">
                        <strong>Giá</strong>
                    </th>
                    <th style="padding:5px 10px;text-align:right">
                        <strong>Tổng</strong>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach (Cart::content() as $element)
                <tr style="border:1px solid #d7d7d7">
                    <td style="padding:5px 10px">{{ $element->name }}</td>
                    <td style="text-align:center;padding:5px 10px">{{ $element->qty }}</td>
                    <td style="text-align:center;padding:5px 10px">{{ $element->price }}</td>
                    <td style="padding:5px 10px;text-align:right">{{ number_format($element->price * $element->qty, 0, ',', '.') }} VND</td>
                </tr>
                @endforeach
                <tr style="border:1px solid #d7d7d7">
                    <td colspan="2">&nbsp;</td>
                    <td colspan="2">
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td><strong>Giảm giá</strong>
                                    </td>
                                    <td style="text-align:right">0 VND</td>
                                </tr>
                                <tr>
                                    <td><strong>Phí vận chuyển:</strong>
                                    </td>
                                    <td style="text-align:right">0 VND</td>
                                </tr>
                                <tr>
                                    <td><strong>Thành tiền</strong>
                                    </td>
                                    <td style="text-align:right">{{ Cart::subtotal() }} VND</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>Để kiểm tra trạng thái đơn hàng, Anh/chị vui lòng:</p>
    <div style="font-size:18px">
        <a href="{{ action('Auth\LoginController@login') }}" style="padding:15px;background-color:#7fc142;color:#fff" target="_blank">Đăng nhập vào tài khoản</a>
    </div> &nbsp;
    <hr>
    <p style="text-align:right">
        Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại
        <span style="color:#17a3dd">
            <a href="mailto:vantancnttk13@gmail.com" target="_blank">vantancnttk13@gmail.com</a>
        </span>
    </p>
    <p style="text-align:right">
        <i>Trân trọng,</i>
    </p>
    <p style="text-align:right">
        <strong>Ban quản trị cửa hàng Mini Market</strong>
    </p>
</div>
