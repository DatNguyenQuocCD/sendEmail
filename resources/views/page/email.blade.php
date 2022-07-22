<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'VN') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>
<p>Chào khách hàng: {{$name}}</p>
<p>Xin chào quí khách đã xác nhận thanh toán đơn hàng của chúng tôi</p>
<p>Đây là địa chỉ giao hàng là  {{$address}}</p>
<p>Số tiền mà bạn phải trả {{$bill}} VNĐ</p>
<p>Số điện thoại liên hệ của quý khách hàng {{$number}}</p>
																				