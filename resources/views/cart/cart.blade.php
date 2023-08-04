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
                                            <a class="txt_999" href="javascript:void(0)" onclick="RemoveCart('{{ $data->rowId }}')">
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