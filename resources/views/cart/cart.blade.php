@extends('frontend.layouts.apps')

@section('content')

<style>

    @media screen and (min-width: 768px) {
        .wrap {
            width: 1436px;
        }
    }    
    #submit-cart{
        cursor: pointer;
    }


    .wrap {
        width: 100%;
        margin: 0 auto;
        padding: 0;
        position: relative;
    }

    .box-cart-2021 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background: #fff;
        position: relative;
        box-sizing: border-box;
        width: 100%;
        float: left;
    }

    .box-cart-2021-bg {
/*        width: 100%;*/
        height: 100%;
        float: left;
        background: #f8f8f8;
        position: absolute;
        right: 0px;
        top: 0px;
        z-index: 1;
    }

    .content-cart-all {
        width: 100%;
        float: left;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-item-align: stretch;
        align-self: stretch;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: relative;
        z-index: 10;
    }

    .content-cart-all .content-cart-all-l {
        width: 800px;
        float: left;
        padding-right: 20px
    px
    ;
        background: #fff;
    }

    .box-cart-2021 .title-cart-new {
        width: 100%;
        float: left;
        margin-bottom: 20px;
        font-size: 18px;
        color: #288ad6;
        margin-top: 20px;
    }

    .box-cart-2021 .content-cart-left-new {
        width: 100%;
        float: left;
    }

    .box-cart-2021 .content-cart-left-new .content-cln-l {
        width: calc(50% - 10px);
        float: left;
    }

    .box-cart-2021 .content-cart-left-new .title-cart-child {
        width: 100%;
        float: left;
        margin-bottom: 6px;
        font-size: 16px;
        font-weight: 700;
        color: #000000;
    }

    .content-cln-l .item-cart {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .content-cln-l .item-cart input {
        height: 40px;
        padding: 0px 10px;
        border: solid 1px #d7d7d7;
        border-radius: 3px;
        width: 100%;
        float: left;
    }

    .content-cln-l .item-cart {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .content-cln-l .item-cart input {
        height: 40px;
        padding: 0px 10px;
        border: solid 1px #d7d7d7;
        border-radius: 3px;
        width: 100%;
        float: left;
    }
    .cart-total-content{
        text-align: right;
    }

    .woocommerce-input-wrapper{
        width: 100%;
    }
    .wrap{
        max-width: 1436px;
    }

    #main-content .container{
        width:100% !important;
        max-width: 1438px !important;
    }

    #main-content .row{
        max-width: 100% !important; 
    }

    tfoot tr, thead tr{
        height: 36px!important;
    }

    form.checkout h3{
        font-size: 24px !important;
    }

    .product-name{
        text-align: left !important;
    }
    .cart_item td span{
        margin-left: 20px;
    }
    .product-quantity h5{
        margin-left: 20px;
    }
    label{
        font-size: 1.5px !important;
    }
    .p-names{
        margin-left: 0px !important;
    }


</style>

<?php

$arrPrice = [];
$key = 0;
$cart = Gloudemans\Shoppingcart\Facades\Cart::content();
$number_cart = count($cart);
?>  

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel='stylesheet' id='ghtk_styles-css' href='https://static.quatdientico.com/wp-content/plugins/devvn-woo-ghtk/assets/css/devvn_dwas_style.css' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css' href='https://static.quatdientico.com/wp-content/plugins/woocommerce/assets/css/select2.css' type='text/css' media='all' />

<link rel='stylesheet' id='search-style-css' href="{{ asset('css/styles.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='product-style-css' href='https://static.quatdientico.com/wp-content/themes/themetico-child/product-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-main-css' href='{{ asset("css/css_flatsome.css") }}?ver=3' type='text/css' media='all' />

<link rel='stylesheet' id='flatsome-shop-css' href='https://static.quatdientico.com/wp-content/themes/themetico/assets/css/flatsome-shop.css' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-style-css' href="{{ asset('css/style1.css') }}?ver1" type='text/css' media='all' />


<div class="wrap">
    <div class="clearfix" style="clear: both;"></div>

    <div id="main-content" class="site-main">
        <div id="main" class="page-checkout-simple ">
            <div id="content" role="main">
                <div class="container">
                    
                    <div class="woocommerce">
                       
                        <form name="checkout" method="post" class="checkout woocommerce-checkout " action="{{ route('order') }}" enctype="multipart/form-data">
                            <div class="row pt-0 rows">
                                <div class="large-7 col  ">
                                    <div id="customer_details">
                                        <div class="clear">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Thông tin giao hàng</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required" id="billing_first_name_field" data-priority="10">
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text " name="name" id="billing_first_name" placeholder="Nhập đầy đủ họ và tên"  value=""  required />
                                                    </span>
                                                    </p>
                                                    <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="20">
                                                        <span class="woocommerce-input-wrapper">
                                                        <input type="tel" class="input-text " name="phone_number" id="billing_phone" placeholder="Số điện thoại"  value="" autocomplete="tel" required/></span>
                                                    </p>

                                                    <p class="form-row form-row-last validate-email" id="billing_email_field" data-priority="21"><span class="woocommerce-input-wrapper">
                                                        <input type="email" class="input-text " name="mail" id="billing_email" placeholder="Email của bạn"  value="" autocomplete="email username" required/></span>
                                                    </p>

                                                    <p class="form-row form-row-first devvn-address-field validate-required" id="billing_state_field" data-priority="30">
                                                        
                                                        <span class="woocommerce-input-wrapper">

                                                            <select name="province" class="select" id="ship_to_province" onchange="getDistrict(this.value)" aria-invalid="false">
                                                                <option value="0">--Chọn thành phố--</option>
                                                                <option value="1">Hà nội</option>
                                                                <option value="2">TP HCM</option>
                                                                <option value="5">Hải Phòng</option>
                                                                <option value="4">Đà Nẵng</option>
                                                                <option value="6">An Giang</option>
                                                                <option value="7">Bà Rịa-Vũng Tàu</option>
                                                                <option value="13">Bình Dương</option>
                                                                <option value="15">Bình Phước</option>
                                                                <option value="16">Bình Thuận</option>
                                                                <option value="14">Bình Định</option>
                                                                <option value="8">Bạc Liêu</option>
                                                                <option value="10">Bắc Giang</option>
                                                                <option value="9">Bắc Kạn</option>
                                                                <option value="11">Bắc Ninh</option>
                                                                <option value="12">Bến Tre</option>
                                                                <option value="18">Cao Bằng</option>
                                                                <option value="17">Cà Mau</option>
                                                                <option value="3">Cần Thơ</option>
                                                                <option value="24">Gia Lai</option>
                                                                <option value="25">Hà Giang</option>
                                                                <option value="26">Hà Nam</option>
                                                                <option value="27">Hà Tĩnh</option>
                                                                <option value="30">Hòa Bình</option>
                                                                <option value="28">Hải Dương</option>
                                                                <option value="29">Hậu Giang</option>
                                                                <option value="31">Hưng Yên</option>
                                                                <option value="32">Khánh Hòa</option>
                                                                <option value="33">Kiên Giang</option>
                                                                <option value="34">Kon Tum</option>
                                                                <option value="35">Lai Châu</option>
                                                                <option value="38">Lào Cai</option>
                                                                <option value="36">Lâm Đồng</option>
                                                                <option value="37">Lạng Sơn</option>
                                                                <option value="39">Long An</option>
                                                                <option value="40">Nam Định</option>
                                                                <option value="41">Nghệ An</option>
                                                                <option value="42">Ninh Bình</option>
                                                                <option value="43">Ninh Thuận</option>
                                                                <option value="44">Phú Thọ</option>
                                                                <option value="45">Phú Yên</option>
                                                                <option value="46">Quảng Bình</option>
                                                                <option value="47">Quảng Nam</option>
                                                                <option value="48">Quảng Ngãi</option>
                                                                <option value="49">Quảng Ninh</option>
                                                                <option value="50">Quảng Trị</option>
                                                                <option value="51">Sóc Trăng</option>
                                                                <option value="52">Sơn La</option>
                                                                <option value="53">Tây Ninh</option>
                                                                <option value="56">Thanh Hóa</option>
                                                                <option value="54">Thái Bình</option>
                                                                <option value="55">Thái Nguyên</option>
                                                                <option value="57">Thừa Thiên-Huế</option>
                                                                <option value="58">Tiền Giang</option>
                                                                <option value="59">Trà Vinh</option>
                                                                <option value="60">Tuyên Quang</option>
                                                                <option value="61">Vĩnh Long</option>
                                                                <option value="62">Vĩnh Phúc</option>
                                                                <option value="63">Yên Bái</option>
                                                                <option value="19">Đắk Lắk</option>
                                                                <option value="22">Đồng Nai</option>
                                                                <option value="23">Đồng Tháp</option>
                                                                <option value="21">Điện Biên</option>
                                                                <option value="20">Đăk Nông</option>
                                                            </select>
                                                        </span>
                                                    </p>
                                                   
                                                    <p class="form-row form-row-last validate-required" id="billing_address_1_field" data-priority="60"><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Ví dụ: Số 20, ngõ 90, đường Cầu Diễn"  value="" autocomplete="address-line1" /></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear">
                                            <div class="woocommerce-shipping-fields">
                                            </div>
                                            <div class="woocommerce-additional-fields">
                                                <h3>Thông tin bổ sung</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="form-row notes" id="order_comments_field" data-priority=""><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Không bắt buộc"  rows="5" cols="10" style="height: 120px; font-size: 1.5em;"></textarea></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if($number_cart>0)
                                <div class="large-5 col">
                                    <div class="col-inner is-well">
                                        <div class="checkout-sidebar sm-touch-scroll">
                                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table ">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="100%" style="
                                                                border: none;
                                                                padding: 0;
                                                                margin: 0;
                                                                ">
                                                                <table class="shop_table shop_table_responsive cart" style="
                                                                    border: 0;
                                                                    margin: 0;
                                                                    padding: 0;
                                                                    ">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="product-remove">&nbsp;</th>
                                                                         
                                                                            <th class=""><h5>Sản phẩm</h5></th>
                                                                            <th class="product-quantity">
                                                                                <h5>Số lượng</h5>
                                                                               
                                                                            </th>
                                                                            <th class="product-subtotal"><h5>Tổng</h5></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        @foreach($cart as $key => $data)

                                                                        <?php 

                                                                            $price = (int)$data->price*(int)$data->qty;
                                                                            $key++;
                                                                            array_push($arrPrice, $price);

                                                                            $infoProducts = App\Models\product::find($data->id);

                                                                            $prices = $data->price*$data->qty;

                                           

                                                                        ?> 
                                                                        <tr class="cart_item">
                                                                            <td class="product-remove">
                                                                                <a href="javascript:void(0)" class="remove" aria-label="Xóa sản phẩm này" data-product_id="1270"  onclick="RemoveCart('{{ $data->rowId }}')">&times;</a>                     
                                                                            </td>
                                                                            <td class="product-thumbnail">
                                                                                <a href="{{ route('details', $infoProducts->Link) }}"><img width="300" height="360" src="{{ asset($infoProducts->Image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Quạt treo tường Tico B500" decoding="async" fetchpriority="high" /></a>                      
                                                                            </td>
                                                                            <td class="product-name" data-title="Sản phẩm">
                                                                                <span class="p-names"> {{ $infoProducts->Name }} </span>
                                                                                                          
                                                                            </td>
                                                                           
                                                                            <td class="product-subtotal" data-title="Tổng">
                                                                                <span class="woocommerce-Price-amount amount"><bdi>{{ @number_format($prices) }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>                        
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach

                                                                        <?php 

                                                                            $totalPrice = array_sum($arrPrice);
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th colspan="4">Tạm tính</th>
                                                            <td><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($totalPrice , 0, ',', '.')}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                                        </tr>
                                                        
                                                        <tr class="order-total">
                                                            <th colspan="4">Tổng</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($totalPrice , 0, ',', '.')}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  checked='checked' data-order_button_text="" />
                                                            <label for="payment_method_cod">
                                                            Thanh toán khi nhận hàng    </label>
                                                            
                                                        </li>
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <noscript>
                                                            Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.          <br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật tổng</button>
                                                        </noscript>
                                                        <div class="woocommerce-terms-and-conditions-wrapper">
                                                        </div>
                                                        <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                                        <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="11fe9b9002" /><input type="hidden" name="_wp_http_referer" value="/checkout?add-to-cart=1270&#038;quantity=1" />  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="woocommerce-privacy-policy-text"></div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>

    <div class="c10"></div>
        <div style="background: #1c4d99;">
            <div class="grid">
                <ul class="menufooter"></ul>
            </div>
        </div>
        <div style="border-bottom:solid 1px #DDD;"></div>
        
    <div class="clearfix" style="clear: both;"></div>
    <div class="clear"></div>
</div>
@include('frontend.layouts.footer')

<script type="text/javascript">
    function RemoveCart(id) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('removeCart') }}",
            data: {
                product_id: id,
               
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){

              window.location.href = "{{ route('cart-tgtl') }}"; 
                
            }
        });

    }

    function RemoveCart(id) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('removeCart') }}",
            data: {
                product_id: id,
               
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){

               

              window.location.href = "{{ route('cart-tgtl') }}"; 
                
            }
        });

    }

</script>
@endsection