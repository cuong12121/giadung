@extends('frontend.layouts.apps')

@section('content')

<style>
    #submit-cart{
        cursor: pointer;
    }

    .wrap {
        width: 1200px;
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

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel='stylesheet' id='ghtk_styles-css' href='https://static.quatdientico.com/wp-content/plugins/devvn-woo-ghtk/assets/css/devvn_dwas_style.css' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css' href='https://static.quatdientico.com/wp-content/plugins/woocommerce/assets/css/select2.css' type='text/css' media='all' />

<link rel='stylesheet' id='search-style-css' href="{{ asset('css/styles.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='product-style-css' href='https://static.quatdientico.com/wp-content/themes/themetico-child/product-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-main-css' href='{{ asset("css/css_flatsome.css") }}?ver=3' type='text/css' media='all' />

<link rel='stylesheet' id='flatsome-shop-css' href='https://static.quatdientico.com/wp-content/themes/themetico/assets/css/flatsome-shop.css' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-style-css' href="{{ asset('css/style1.css') }}?ver1" type='text/css' media='all' />


<div class="container wrap">
    <div class="clearfix" style="clear: both;"></div>

    <div id="main-content" class="site-main">
        <div id="main" class="page-checkout-simple ">
            <div id="content" role="main">
                <div class="container">
                    
                    <div class="woocommerce">
                       
                        <form name="checkout" method="post" class="checkout woocommerce-checkout " action="https://quatdientico.com/checkout" enctype="multipart/form-data">
                            <div class="row pt-0 ">
                                <div class="large-7 col  ">
                                    <div id="customer_details">
                                        <div class="clear">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Thông tin giao hàng</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="Nhập đầy đủ họ và tên"  value=""  /></span></p>
                                                    <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="20"><label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Số điện thoại"  value="" autocomplete="tel" /></span></p>
                                                    <p class="form-row form-row-last validate-email" id="billing_email_field" data-priority="21"><label for="billing_email" class="">Địa chỉ email&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Email của bạn"  value="" autocomplete="email username" /></span></p>
                                                    <p class="form-row form-row-first devvn-address-field validate-required" id="billing_state_field" data-priority="30">
                                                        <label for="billing_state" class="">Tỉnh/Thành phố&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <select name="billing_state" id="billing_state" class="select " data-allow_clear="true" data-placeholder="Chọn tỉnh/thành phố">
                                                                <option value="" >Chọn tỉnh/thành phố</option>
                                                                <option value="HANOI"  selected='selected'>Thành phố Hà Nội</option>
                                                                <option value="HOCHIMINH" >Thành phố Hồ Chí Minh</option>
                                                                <option value="ANGIANG" >An Giang</option>
                                                                <option value="BACGIANG" >Bắc Giang</option>
                                                                <option value="BACKAN" >Bắc Kạn</option>
                                                                <option value="BACLIEU" >Bạc Liêu</option>
                                                                <option value="BACNINH" >Bắc Ninh</option>
                                                                <option value="BARIAVUNGTAU" >Bà Rịa - Vũng Tàu</option>
                                                                <option value="BENTRE" >Bến Tre</option>
                                                                <option value="BINHDINH" >Bình Định</option>
                                                                <option value="BINHDUONG" >Bình Dương</option>
                                                                <option value="BINHPHUOC" >Bình Phước</option>
                                                                <option value="BINHTHUAN" >Bình Thuận</option>
                                                                <option value="CAMAU" >Cà Mau</option>
                                                                <option value="CANTHO" >Thành phố Cần Thơ</option>
                                                                <option value="CAOBANG" >Cao Bằng</option>
                                                                <option value="DAKLAK" >Đắk Lắk</option>
                                                                <option value="DAKNONG" >Đắk Nông</option>
                                                                <option value="DANANG" >Thành phố Đà Nẵng</option>
                                                                <option value="DIENBIEN" >Điện Biên</option>
                                                                <option value="DONGNAI" >Đồng Nai</option>
                                                                <option value="DONGTHAP" >Đồng Tháp</option>
                                                                <option value="GIALAI" >Gia Lai</option>
                                                                <option value="HAGIANG" >Hà Giang</option>
                                                                <option value="HAIDUONG" >Hải Dương</option>
                                                                <option value="HAIPHONG" >Thành phố Hải Phòng</option>
                                                                <option value="HANAM" >Hà Nam</option>
                                                                <option value="HATINH" >Hà Tĩnh</option>
                                                                <option value="HAUGIANG" >Hậu Giang</option>
                                                                <option value="HOABINH" >Hòa Bình</option>
                                                                <option value="HUNGYEN" >Hưng Yên</option>
                                                                <option value="KHANHHOA" >Khánh Hòa</option>
                                                                <option value="KIENGIANG" >Kiên Giang</option>
                                                                <option value="KONTUM" >Kon Tum</option>
                                                                <option value="LAICHAU" >Lai Châu</option>
                                                                <option value="LAMDONG" >Lâm Đồng</option>
                                                                <option value="LANGSON" >Lạng Sơn</option>
                                                                <option value="LAOCAI" >Lào Cai</option>
                                                                <option value="LONGAN" >Long An</option>
                                                                <option value="NAMDINH" >Nam Định</option>
                                                                <option value="NGHEAN" >Nghệ An</option>
                                                                <option value="NINHBINH" >Ninh Bình</option>
                                                                <option value="NINHTHUAN" >Ninh Thuận</option>
                                                                <option value="PHUTHO" >Phú Thọ</option>
                                                                <option value="PHUYEN" >Phú Yên</option>
                                                                <option value="QUANGBINH" >Quảng Bình</option>
                                                                <option value="QUANGNAM" >Quảng Nam</option>
                                                                <option value="QUANGNGAI" >Quảng Ngãi</option>
                                                                <option value="QUANGNINH" >Quảng Ninh</option>
                                                                <option value="QUANGTRI" >Quảng Trị</option>
                                                                <option value="SOCTRANG" >Sóc Trăng</option>
                                                                <option value="SONLA" >Sơn La</option>
                                                                <option value="TAYNINH" >Tây Ninh</option>
                                                                <option value="THAIBINH" >Thái Bình</option>
                                                                <option value="THAINGUYEN" >Thái Nguyên</option>
                                                                <option value="THANHHOA" >Thanh Hóa</option>
                                                                <option value="THUATHIENHUE" >Thừa Thiên Huế</option>
                                                                <option value="TIENGIANG" >Tiền Giang</option>
                                                                <option value="TRAVINH" >Trà Vinh</option>
                                                                <option value="TUYENQUANG" >Tuyên Quang</option>
                                                                <option value="VINHLONG" >Vĩnh Long</option>
                                                                <option value="VINHPHUC" >Vĩnh Phúc</option>
                                                                <option value="YENBAI" >Yên Bái</option>
                                                            </select>
                                                        </span>
                                                    </p>
                                                   
                                                    <p class="form-row form-row-last validate-required" id="billing_address_1_field" data-priority="60"><label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Ví dụ: Số 20, ngõ 90, đường Cầu Diễn"  value="" autocomplete="address-line1" /></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear">
                                            <div class="woocommerce-shipping-fields">
                                            </div>
                                            <div class="woocommerce-additional-fields">
                                                <h3>Thông tin bổ sung</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Không bắt buộc"  rows="5" cols="10" style="height: 120px; font-size: 1.5em;"></textarea></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                                         
                                                                            <th class="">Sản phẩm</th>
                                                                            <th class="product-quantity">Số lượng</th>
                                                                            <th class="product-subtotal">Tổng</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="cart_item">
                                                                            <td class="product-remove">
                                                                                <a href="https://quatdientico.com/cart?remove_item=c850371fda6892fbfd1c5a5b457e5777&#038;_wpnonce=36d646c551" class="remove" aria-label="Xóa sản phẩm này" data-product_id="1270" data-product_sku="TCN-B500" data-cart_item_key="c850371fda6892fbfd1c5a5b457e5777">&times;</a>                     
                                                                            </td>
                                                                            <td class="product-thumbnail">
                                                                                <a href="https://quatdientico.com/sp/quat-treo-tuong-tico-b500"><img width="300" height="360" src="https://static.quatdientico.com/wp-content/uploads/2017/01/quat-treo-tuong-b5-300x360.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Quạt treo tường Tico B500" decoding="async" fetchpriority="high" /></a>                      
                                                                            </td>
                                                                            <td class="product-name" data-title="Sản phẩm">
                                                                                Quạt treo tường Tico B500&nbsp;                              <strong class="product-quantity">&times; 1</strong>                                                        
                                                                            </td>
                                                                            <td class="product-quantity" data-title="Số lượng">
                                                                                <div class="quantity buttons_added">
                                                                                    <input type="button" value="-" class="minus button is-form">                <label class="screen-reader-text" for="quantity_651fce2c3c7f5">Quạt treo tường Tico B500 số lượng</label>
                                                                                    <input
                                                                                        type="number"
                                                                                        id="quantity_651fce2c3c7f5"
                                                                                        class="input-text qty text"
                                                                                        name="cart[c850371fda6892fbfd1c5a5b457e5777][qty]"
                                                                                        value="1"
                                                                                        aria-label="Product quantity"
                                                                                        size="4"
                                                                                        min="0"
                                                                                        max=""
                                                                                        step="1"
                                                                                        placeholder=""
                                                                                        inputmode="numeric"
                                                                                        autocomplete="off"
                                                                                        />
                                                                                    <input type="button" value="+" class="plus button is-form"> 
                                                                                </div>
                                                                            </td>
                                                                            <td class="product-subtotal" data-title="Tổng">
                                                                                <span class="woocommerce-Price-amount amount"><bdi>360.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>                        
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th colspan="4">Tạm tính</th>
                                                            <td><span class="woocommerce-Price-amount amount"><bdi>360.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                                        </tr>
                                                        <tr class="woocommerce-shipping-totals shipping
                                                            ">
                                                            <td class="shipping__inner" colspan="2">
                                                                <table class="shipping__table ">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th >Giao hàng</th>
                                                                            <td data-title="Giao hàng">
                                                                                <ul id="shipping_method" class="shipping__list woocommerce-shipping-methods">
                                                                                    <li class="shipping__list_item">
                                                                                        <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_ghtk_shipping_method_baophiship" value="ghtk_shipping_method_baophiship" class="shipping_method" /><label class="shipping__list_label" for="shipping_method_0_ghtk_shipping_method_baophiship">Phí vận chuyển sẽ báo sau.</label>                               
                                                                                    </li>
                                                                                </ul>
                                                                            </td>
                                                                    </tbody>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th colspan="4">Tổng</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><bdi>360.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  checked='checked' data-order_button_text="" />
                                                            <label for="payment_method_cod">
                                                            Thanh toán khi nhận hàng    </label>
                                                            <div class="payment_box payment_method_cod" >
                                                                <p><img alt="thanh toán" src="https://static.quatdientico.com/wp-content/uploads/2019/11/thanh-toan-cod.jpg"></p>
                                                            </div>
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