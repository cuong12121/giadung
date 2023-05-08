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

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container wrap">
    <div class="clearfix" style="clear: both;"></div>
    <section class="box-cart-2021">
        <div class="box-cart-2021-bg" style="right: -351px;"></div>
        <form method="post" enctype="multipart/form-data" action="{{ route('order') }}" onsubmit="return check_field()">

            <div class="content-cart-all">
                <div class="content-cart-all-l">
                    <div class="box-cart-2021-left">
                        
                        <div class="content-cart-left-new">
                            <div class="content-cln-l">
                                <div class="title-cart-child">Thông tin nhận hàng</div>
                                <div class="item-cart">
                                    <input type="text" name="mail" id="buyer_email" value="" placeholder="Email*" class="form-control">
                                </div>
                                <div class="item-cart">
                                    <input type="text" name="name" id="buyer_name" value="" placeholder="Họ tên*" class="form-control">
                                </div>
                                <div class="item-cart">
                                    <input type="text" name="phone_number" id="buyer_tel" value="" placeholder="SĐT*" class="form-control">
                                </div>
                                <div class="item-cart">
                                    <input type="text" name="address" id="buyer_address" value="" placeholder="Địa chỉ (tên đường, số nhà)*" class="form-control">
                                </div>
                                <input type="hidden" name="sex" id="sex" value="Anh">
                                <input type="hidden" name="province"  value="1">
                            </div>
                           
                        </div>
                        <div class="cart-l-bot">
                            <a href="/">Chính sách giao hàng</a>
                            <a href="/">Điều khoản sử dụng</a>
                        </div>
                    </div>
                </div>

                <?php

                    $arrPrice = [];
                    $key = 0;
                    

                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                    

                    $number_cart = count($cart);


                   
                 ?>  

                @if($number_cart>0)
                <div class="content-cart-all-r">
                    <div class="box-cart-2021-right">
                        <div class="box-pro-cart-new">
                            <div class="title-cart-pro">
                                Đơn hàng <span>{{ $number_cart }}</span> sản phẩm
                            </div>
                            <table>
                                <!---->
                                <!---->
                                <tbody>
                                     @foreach($cart as $key => $data)

                                    <?php 

                                        $price = (int)$data->price*(int)$data->qty;
                                        $key++;
                                        array_push($arrPrice, $price);

                                        $infoProducts = App\Models\product::find($data->id);

                                    ?> 
                                    <tr class="cartItem">

                                        <td valign="top" width="80" style="text-align: center;">
                                            <img src="{{ asset($infoProducts->Image) }}" width="50"> <br>
                                            <a class="txt_999" href="javascript:" onclick="RemoveCart('{{ $data->rowId }}')">
                                            <i class="fa fa-remove"></i>
                                            Xóa</a>
                                        </td>
                                        <td>
                                            <a href="/lg-fv1413h3ba.html" class="p-c-name">{{ $infoProducts->Name }}</a>
                                            <input class="txtnum" name="quantity_pro_3570" id="quantity_pro_3570" value="1" onchange="updatePrice('pro','3570',this.value)" size="1" type="hidden">
                                        </td>
                                        <td width="120">
                                            <input type="hidden" class="buy-price" value="18690000">
                                            <?php 
                                                $prices = $data->price*$data->qty;

                                            ?>

                                                                     
                                            <span class="js-show-buy-price" id="sell_price_pro_3570">{{ @number_format($prices) }} đ</span>
                                            <span class="total-item-price" id="price_pro_3570" style="display: none;"></span>
                                            <a class="txt_999" href="javascript:deleteShoppingCartItem('pro','3570','1','18690000')" style="float:right;margin-top: 5px;display: none;">
                                            <i class="fa fa-remove"></i>
                                            Xóa</a>
                                        </td>
                                    </tr>

                                    @endforeach


                                    <?php 

                                        $totalPrice = array_sum($arrPrice);
                                    ?>
                                </tbody>
                            </table>
                            <div class="cart-total-content">
                                
                                <div class="item-c item-c-total">
                                    <span class="txt">Tổng cộng</span>
                                    <span class="price-c" id="total_value_buy">{{ number_format($totalPrice , 0, ',', '.')}} đ</span>
                                </div>
                                <div class="item-c item-c-btn">
                                    <button type="submit" id="submit-cart" class="btn btn-red float-right fw-500" style="padding:8px 30px; font-size:15px;">Đặt hàng</button>
                                    <input type="hidden" name="send_order" value="yes">
                                    <input type="hidden" name="item_update_quantity" id="item_update_quantity" value=",pro-3570,pro-2885,">
                                    <input type="hidden" name="update_quantity" value="yes">
                                    <input type="hidden" name="total_cart_value" id="total_cart_value" value="56580000">
                                    <!--<input type="hidden" name="test_mail_template" value="1">-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </form>
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
<div class="footer">
    <div class="grid">
        <div class="c30"></div>
        <div class="flex-container flex-space-between">
            <div class="cell-2-3  tab-cell-1-1 mobile-cell-1-1">
                <div class="flex-container flex-space-between">
                    <div class="cell-2-3  tab-cell-1-1 mobile-cell-1-1">
                        <div class="footer-title">
                            Bear Việt Nam - Đại lý cấp 1 chính thức của hãng gia dụng Bear tại Việt Nam
                        </div>
                        <div class="c10" style="border-bottom:solid 1px #666;"></div>
                        <div class="c15"></div>
                        <div class="footer-text">
                            <h4 condensed="" roboto="" style="box-sizing: border-box; text-align: justify;"><strong><span style="line-height:2;"><span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="box-sizing: border-box;">TH&Ocirc;NG TIN LI&Ecirc;N HỆ:</span></span></span></span></strong></h4>
                            <div style="text-align: justify;"><span style="line-height:2;"><span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Website:</strong> <u><strong><a href="../index.htm" target="_blank"><span style="color:#FF8C00;">Bearvietnam.com.vn</span></a></strong></u><br>
                                <strong>Fanpage:&nbsp;<a href="https://www.facebook.com/bearvietnam.com.vn/" target="_blank"><span style="color:#FF8C00;">https://www.facebook.com/bearvietnam.com.vn/</span></a></strong></span></span></span><br>
                                <span style="line-height:2;"><span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>HOTLINE:</strong>&nbsp; 0348 949 926<br>
                                <strong>Email:</strong> Bearvietnam.com.vn@gmail.com<br>
                                <strong>Mở cửa:</strong> 8:00 - 23:00<br>
                                <strong>Địa chỉ:&nbsp;</strong>T4 Thăng Long Capital An Kh&aacute;nh Ho&agrave;i Đức H&agrave; Nội.</span></span></span><br>
                                <br>
                                &nbsp;
                            </div>
                            <div class="company item " style="box-sizing: border-box; color: rgb(168, 168, 168); list-style: none; margin-bottom: 10px;box-sizing: border-box; margin-bottom: 5px;">&nbsp;</div>
                        </div>
                        <div class="c10" style="border-bottom:solid 1px #666;"></div>
                        <div class="c10"></div>
                        <div class="linksmo">
                            <a href="https://www.facebook.com/bearvietnam.com.vn/" class="fa fa-facebook" target="_blank" rel="nofollow"></a>
                            <a href="https://www.youtube.com/channel/UCQfSswU3l0kBrg0Utg0gWlA/" class="fa fa-youtube" target="_blank" rel="nofollow"></a>
                            <a href="" class="fa fa-google-plus" target="_blank" rel="nofollow"></a>
                        </div>
                    </div>
                    <div class="cell-1-3  tab-cell-1-1 mobile-cell-1-1" style="text-align: center;">
                        <div class="flex-container flex-space-between">
                            <div class="cell-1-2 pad-cell-1-3 tab-cell-1-2 mobile-cell-1-2">
                            </div>
                            <div class="cell-1-2 pad-cell-1-3 tab-cell-1-2 mobile-cell-1-2">
                            </div>
                            <div class="cell-1-6 pad-cell-1-3 tab-cell-1-2 mobile-cell-1-2">
                            </div>
                            <div class="cell-1-6 pad-cell-1-3 tab-cell-1-2 mobile-cell-1-2">
                            </div>
                            <div class="cell-1-6 pad-cell-1-3 tab-cell-1-2 mobile-cell-1-2">
                            </div>
                            <div class="cell-1-6 pad-cell-1-3 tab-cell-1-2 mobile-cell-1-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell-1-3 tab-cell-1-1 hide-on-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5595261426015!2d105.71971871529779!3d21.010286586008498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453335cfa80ad%3A0x19e88d2aaac499d8!2sChung%20C%C6%B0%20Th%C4%83ng%20Long%20Capital!5e0!3m2!1sen!2s!4v1667642405272!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="c20"></div>
            </div>
        </div>
        <div class="copyright">
            <div style="float:left; text-align:center;">
                &copy; 2018 , ALL RIGHTS RESERVED.
            </div>
        </div>
    </div>
    <div class="c20"></div>
</div>

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