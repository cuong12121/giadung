
@extends('frontend.layouts.apps')
@section('content')

<link rel="stylesheet" type="text/css" href="https://thegioitulanh.com.vn/template/default/script/style.css?ver=1">

<?php 
    $data_cart = Cart::content();


?>

<div class="detail_inner cls">
    <div class="detail_inner_r shadow">
        <h1 class="page_title_cart"><span>Giỏ hàng của bạn</span></h1>
        <div id="product_cart_load_ajax">
            <div class="shopcart_product">
                <div class="table-wrap">
                    <div class="row-table">
                        <div class="col-td">
                            <a href=""> <img width="120px" src="https://voisentam.com/uploads/product/1696138437_daydien2x0500.jpg"> </a> 
                            <a href="javascript:void(0)" title="Xóa" class="del-item" onclick="removeProductCart('f777854a89e233b26cbb644a37c5dc3c')">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="-40 0 427 427.00131" width="30px">
                                    <path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path>
                                    <path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path>
                                    <path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path>
                                    <path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path>
                                </svg>
                                Xóa 
                            </a>
                        </div>
                        <div class="col-td">
                            <a class="name-item" title="Dây điện đôi VIETCAB lõi đồng 2 lớp vỏ PVC cách điện bọc dẹp an toàn kích thước 2x0.7mm2" href="https://voisentam.com/day-dien-doi-vietcab-loi-dong-2-lop-vo-pvc-cach-dien-bo-c-de-p-an-toan-kich-thuoc-2x0-5mm2-59.html"> Dây điện đôi VIETCAB lõi đồng 2 lớp vỏ PVC cách điện bọc dẹp an toàn kích thước 2x0.7mm2 </a> 
                            <div class="string_info_extent"> Giá sản phẩm: 586.000đ </div>
                        </div>
                        <div class="col-td col-td-number"> <span class="price"> 586.000đ </span> <span class="btn-minus" onclick="load_ajax_cart('5231_0_0_0_0_0','minus')">-</span> <input class="numbers-pro  " type="text" min="0" max="1000" value="1" name="quantity_5231_0_0_0_0_0" size="8px" id="quantity_5231_0_0_0_0_0"> <span class="btn-plus" onclick="load_ajax_cart('5231_0_0_0_0_0','plus')">+</span> <span class="error-number-item error_5231_0_0_0_0_0"></span> </div>
                    </div>
                </div>
                <input type="hidden" value="3449000" id="price_total"> 
                <div class="clearfix"></div>
                <input type="hidden" name="Itemid" value="11"> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="recal" id="task"> 
            </div>
            <div class="total-card-code cls">
                <div class="card_code cls">
                    <input placeholder="Nhập mã giảm giá" type="text" name="card_code" id="card_code" value="" class="input_text" size="30"> <button type="button" onclick="myFunction_code();" class="resubmit_form">Áp dụng </button> 
                    <div class="clear"></div>
                    <div id="massage_voucher"> </div>
                    <div class="note"> Lưu ý: Mỗi giỏ hàng chỉ được áp dụng 1 mã giảm giá, và chỉ giảm trên tổng số tiền của sản phẩm ( không giảm cho phí ship ). </div>
                </div>
                <div class="ship-total">
                    <div class="total-mn cls"> <font>Tổng cộng: </font> <span class="price_tongcong">586.000₫</span> </div>
                    <div class="cart-code-mn cls"> <font>Mã giảm giá: </font> <span class="price-cart-code"></span> </div>
                    <div class="ship-mn cls"> <font>Phí vận chuyển: </font> <span class="price_ship1"> Tính ngoài. </span> </div>
                    <div class="total-price-inner cls">
                        <font>Thanh toán: </font> 
                        <span class="price_thanhtoan">
                            586.000₫ 
                            <div class="display-off" id="price_thanhtoan" price_thanhtoan="3449000"></div>
                        </span>
                    </div>
                    <div class="note-payment hide">
                        <p>Xin cảm ơn quý khách đã đặt mua sản phẩm tạo hệ thống Hải Linh</p>
                        <p>Hải Linh Đại lý ủy quyền chính thức tại Việt Nam của các thương hiệu danh tiếng trên thế giới</p>
                        <p>Vì quyền lợi của mình, Quý khách vui lòng đọc kỹ những thông tin dưới đây để hoàn thành thủ tục để đặt hàng, Hải Linh có quyền từ chối giải quyết các yêu cầu .............................</p>
                        <p>Vì quyền lợi của mình, Quý khách vui lòng đọc kỹ những thông tin dưới đây để hoàn thành thủ tục để đặt hàng, Hải Linh có quyền từ chối giải quyết các yêu cầu .............................</p>
                        <p>Vì quyền lợi của mình, Quý khách vui lòng đọc kỹ những thông tin dưới đây để hoàn thành thủ tục để đặt hàng, Hải Linh có quyền từ chối giải quyết các yêu cầu .............................</p>
                    </div>
                </div>
            </div>
            <script type="text/javascript"> function myFunction_code() {
                $('.label_error').prev().remove();
                $('.label_error').remove();
                if(!notEmpty("card_code","Bạn phải nhập mã giảm giá"))
                    return false;
                
                var code_input = $('#card_code').val();
                var price_ship = $('#price_ship').val();
                
                $.ajax({
                    type: "POST",
                    url: "/index.php?module=products&view=cart&task=check_code&raw=1&code_input="+code_input,
                    data: {code_input:code_input,price_ship:price_ship},
                    dataType: 'json',
                    success: function(data) {
                        
                        if(data.error == false && data.type_down){
                            if(data.type_down == 1) {
                                text_price_chietkhau = data.price_send+ '%';
                            } else {
                                text_price_chietkhau = data.price_send+ 'đ';
                            }
                            $('.price-cart-code').html(data.total_down);    
                            $('.price_thanhtoan').html(data.total_code);
                            $('#code-sale').val(code_input);
                            
                
                        }else{
                            // $('#code-sale').val('');
                
                        }
                
                        $.ajax({
                            type: "POST",
                            url: "/index.php?module=products&view=cart&task=recal_ajax_map&raw=1",
                            cache: false,
                            success: function(html){
                                $("#product_cart_load_ajax").html(html);
                            }
                        });
                        $('#massage_voucher').html(data.message);
                        
                    }
                });
                } 
            </script> 
        </div>
    </div>
    <div class="detail_inner_l">
        <div class="buyer_info">
            <div class="title-box-cart">Thông tin người mua hàng</div>
            <div class="mb-2"><b class="fs-16">Thông tin người mua</b> (<span class="red">*</span>) <i>Thông tin bắt buộc</i></div>
            <form action="https://voisentam.com/order-product" name="eshopcart_info" method="post" id="eshopcart_info">
                <input type="hidden" name="_token" value="K6S8cwFlK2ZJ7q5CaM5tpEU8TUWayLNxnNCPo45n"> 
                <div class="shadow">
                    <div class="sex"> <label> <span class="radio"> <input type="radio" value="Nam" name="sender_sex" checked=""> <span class="icon"></span> </span> Nam </label> <label> <span class="radio"> <input type="radio" name="sender_sex" value="Nữ"> <span class="icon"></span> </span> Nữ </label> </div>
                    <div class="box-input"> <input placeholder="Họ tên (*)" type="text" name="name" id="name_user" value="" class="input_text input_text_50" size="30" required=""> <input placeholder="Điện thoại (*)" type="text" name="phone_number" id="telephone_user" value="" class="input_text input_text_50" size="30" required=""> <input placeholder="Email" type="text" name="mail" id="sender_email" value="" class="input_text" size="30" required=""> <input placeholder="Địa chỉ ( Nhập số nhà, ngõ...)" type="text" name="address" id="address_user" value="" class="input_text" size="30" required=""> <textarea placeholder="Ghi chú" name="sender_comments" id="sender_comments" class="input_text"></textarea> </div>
                </div>
                <div class="title-box-cart">Phương thức thanh toán</div>
                <div class="payment-type shadow">
                    <div class="mb-2 mt-3"><b class="fs-16">Chọn phương thức thanh toán</b></div>
                    <label class="container-rd active" id="method-cod" data-pay-method="0"> <span class="radio"> <input onclick="pay_mothod(0)" type="radio" checked="checked" name="radio" value="0"> <span class="icon"></span> </span> Thanh toán tiền mặt khi nhận hàng (COD) </label> <label class="display-off container-rd " data-pay-method="2"> <span class="radio"> <input onclick="pay_mothod(2)" type="radio" name="radio" value="2"> <span class="icon"></span> </span> Thanh toán online Alepay (ATM,VNQR,Thẻ quốc tế...) </label> <!-- danh sách STK ngân hàng --> <!-- end danh sách STK ngân hàng --> 
                    <div class="pay_mothod_4_data"> </div>
                    <div class="pay_mothod_3_data"> </div>
                    <input type="hidden" id="pay_method" value="0"> 
                </div>
                <!-- end payment-type --> 
                <div class="all-button-cart cls">
                    <a class="back-home" href="javascript:history.go(-1)">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M492,236H68.442l70.164-69.824c7.829-7.792,7.859-20.455,0.067-28.284c-7.792-7.83-20.456-7.859-28.285-0.068    l-104.504,104c-0.007,0.006-0.012,0.013-0.018,0.019c-7.809,7.792-7.834,20.496-0.002,28.314c0.007,0.006,0.012,0.013,0.018,0.019    l104.504,104c7.828,7.79,20.492,7.763,28.285-0.068c7.792-7.829,7.762-20.492-0.067-28.284L68.442,276H492    c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"></path>
                                </g>
                            </g>
                        </svg>
                        <span>Quay lại mua thêm sản phẩm khác</span> 
                    </a>
                    <button type="submit" class="btn-primary button-submit btn" href="javascript:void(0);" title=""> Thanh toán </button> 
                </div>
            </form>
        </div>
        <!-- end info --> 
    </div>
</div>



<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="loader"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin giỏ hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="tbl_list_cartss">
                    @include('frontend.ajax.cart')
                </div>

                <div class="c3_col_1">
                    <form class="c3_box" id="form-sub" method="post"  action="{{ route('order') }}">
                        {{ csrf_field() }}
                        <div class="title_box_cart"> Thông tin khách hàng</div>
                        <div class="item-form">
                            <div class="option-group clearfix">
                                <div class="step_option">
                                    <span class="st_opt st_opt_active" data-value="Anh" data-name="sex"></span><span>Anh</span>
                                </div>
                                <div class="step_option">
                                    <span class="st_opt" data-value="Chị" data-name="sex"></span><span>Chị</span>
                                </div>
                                <input type="hidden" name="sex" id="sex" value="Nam">
                            </div>
                            <!--option-group-->
                        </div>
                        <div class="item-form">
                            <input type="text" name="name" id="buyer_name" placeholder="Họ tên">
                        </div>
                        <div class="item-form">
                            <input type="text" name="phone_number" id="buyer_tel" value="" placeholder="Số điện thoại">
                        </div>
                        <div class="item-form">
                            <input type="text" name="mail" id="buyer_email" value="" placeholder="Email">
                        </div>
                        <div class="item-form">
                            <textarea name="address" placeholder="Địa chỉ" id="buyer_address"></textarea>
                        </div>
                        <div class="item-form" style="width: 50%;display: inline-block;color: #0083d1;">
                            <select name="province" class="form-control" id="ship_to_province" onchange="getDistrict(this.value)">
                                <option value="0">--Lựa chọn--</option>
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
                        </div>
                        <div id="district-holder-login" style="width: 49%;display: inline-block;color: #0083d1;"></div>
                        <!-- <div id="ajxTaxInvoice" class="item-form">
                            <div class="ng_ml">
                                <input type="checkbox" onclick="showTap('pnlTaxInvoice')" name="chkTaxInvoice" id="chkTaxInvoice">
                                <label id="bale_ml" for="chkTaxInvoice">Xuất hóa đơn công ty</label>
                            </div>
                            <div style="width: 100%; margin-top:10px; padding: 0px;display: none;" id="pnlTaxInvoice">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="120" align="left">Công ty/Tổ chức:
                                            </td>
                                            <td align="left">
                                                <input type="text" id="txtTaxName" value="" size="50" name="user_info[tax_company]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="120" align="left">Địa chỉ:
                                            </td>
                                            <td align="left">
                                                <input type="text" id="txtTaxAddress" value="" size="50" name="user_info[tax_address]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="120" align="left">Mã số thuế:
                                            </td>
                                            <td align="left">
                                                <input type="text" id="txtTaxCode" name="user_info[tax_code]" value="">
                                                <span class="cmt" id="txtTaxCodeView">&nbsp;</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                        <!--ajxTaxInvoice-->
                        <div class="item-form">
                            <h4 style="font-size:15px; margin-top:20px;">Hình thức thanh toán:</h4>
                            <table style="width:100%;">
                                <tbody>
                                  
                                    <tr class="item-paymethod">
                                        <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" name="pay_method" value="3" class="pay_option" id="paymethod_3" checked></td>
                                        <td>
                                            <label for="paymethod_3">Trả tiền khi nhận hàng</label>
                                            <div id="pay_2" style="display:none;" class="pay_content">Trả tiền khi nhận hàng</div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="clear"></div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary order1">Đặt hàng</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                        </div>


                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div> -->
@endsection