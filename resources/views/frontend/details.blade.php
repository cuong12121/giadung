@extends('frontend.layouts.apps')
@section('content')

    <?php
    if($data->Quantily==0||$data['Price']==0){
        $status ='Tạm hết hàng';
    
    }
    elseif($data->Quantily<=-1){
        $status ='Ngừng kinh doanh';
    }
    else{
        $status = 'Còn hàng';
    }
    ?>

    <div class="content" style="background:#FFF">
        <div class="c"></div>
        <div class="grid">
            <!-- <div class="crumb"><a href="../index.htm"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> <a href='index.htm'>Mẹ và bé</a></div> -->
            <div class="c5"></div>
        </div>
        <div class="c10"></div>
        <div class="grid">
            <script type="text/javascript" src="../highslide/highslide-with-gallery.js"></script>
            <link rel="stylesheet" type="text/css" href="../highslide/highslide.css">
            <script type="text/javascript">
                hs.graphicsDir = '/highslide/graphics/';
                hs.align = 'center';
                hs.transitions = ['expand', 'crossfade'];
                hs.wrapperClassName = 'dark borderless floating-caption';
                hs.fadeInOut = true;
                hs.dimmingOpacity = .75;
                if (hs.addSlideshow)
                    hs.addSlideshow({
                        interval: 5000,
                        repeat: false,
                        useControls: true,
                        fixedControls: 'fit',
                        overlayOptions: {
                            opacity: .6,
                            position: 'bottom center',
                            hideOnMouseOut: true
                        }
                    });
            </script>
            <script type="application/ld+json">
                {
                "@context": "https://schema.org/",
                "@type": "Product",
                "name": "Combo 2: Nồi 1.6L + máy xay 0.6L + set Quà tặng",
                "image": "https://bearvietnam.com.vn/temp/uploaded-abc-ava_f8bc846590c0569e0fd1 (1)_thumbcr_800x800.jpg",
                "description": "Combo ăm dặn 2: nồi nấu cháo chậm Bear 1.6L + máy xay ăn dặm Bear 0.6l HOT nhất 2022 của Bear Việt Nam. GIẢM giá 500k khi mua combo tại Bearvietnam.com.vn liên hệ ngay hotline: 0348949926",
                "sku": "Combo2001",
                "mpn": "Combo2",
                "brand": {
                "@type": "Thing",
                "name": "Bear"
                },
                "review": {
                "@type": "Review",
                "reviewRating": {
                "@type": "Rating",
                "ratingValue": "4",
                "bestRating": "5"
                },
                "author": {
                "@type": "Person",
                "name": "Administrator"
                }
                },
                "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "210"
                },
                "offers": {
                "@type": "AggregateOffer",
                "url": "",
                "availability": "https://schema.org/InStock",
                "lowPrice": "2040000",
                "highPrice": "2040000",
                "offerCount": "999",
                "priceCurrency": "VND",
                "price": "2040000",
                "seller": {
                "@type": "Organization",
                "name": "Bear"
                }
                }
                }
            </script>           
            <div class="flex-container flex-space-between">
                <div class="cell-4-12 tab-cell-1-1">
                    
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                             <?php 
                            $image_product = strstr(basename($data->Image), '_');
                        ?>

                            <?php 
                            $images_products = Cache::rememberForever('image_product'.$data->id, function() use ($data) {

                                $images = App\Models\image::where('product_id', $data->id)->where('active', 1)->select('image')->get()??'';

                                return $images;
                            
                            });


                        
                        ?>

                        @if(isset($images_products))
                       
                        @foreach( $images_products as $image)

                        @if(!empty($image->image) && '_'.basename($image->image) != $image_product)

                       

                            <div class="swiper-slide"><a href="../uploaded/abc/ava/f8bc846590c0569e0fd1%20%281%29.jpg" onclick="return hs.expand(this)"><img src="{{ asset($image->image) }}" alt="Combo 2: Nồi 1.6L + máy xay 0.6L + set Quà tặng" width="100%"></a></div>

                        @endif    

                        @endforeach   
                         
                        @endif 
                        </div>
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="c10"></div>


                    <div class="thumb-product-detail" style="position:relative;">
                        <a href="#" class="thumb-image-pro-detail-prev"></a>
                        <a href="#" class="thumb-image-pro-detail-next"></a>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">

                                @if(isset($images_products))
                       
                                @foreach( $images_products as $image)

                                @if(!empty($image->image) && '_'.basename($image->image) != $image_product)

                                <div class="swiper-slide"><img src="{{ asset($image->image) }}" width="100%"></div>

                                @endif    

                                @endforeach 

                                @endif

                               

                               
                            </div>
                        </div>
                    </div>
                    <script>
                        var galleryThumbs = new Swiper('.gallery-thumbs', {
                          spaceBetween: 10,
                          slidesPerView: 4,
                          freeMode: true,
                          watchSlidesVisibility: true,
                          watchSlidesProgress: true,
                        });
                        var galleryTop = new Swiper('.gallery-top', {
                          spaceBetween: 10,
                          navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                          },
                          thumbs: {
                            swiper: galleryThumbs
                          }
                        });
                         
                    </script>
                    <div class="c10"></div>
                </div>
                <div class="cell-5-12 tab-cell-1-1">
                    <div class="content-detail" style="position: relative;">
                        <h1 class="product-name-detail">{{ @$data->Name }}</h1>
                        <div class="c10"></div>
                        <div class="attr-item">
                            <div class="attr-name">Mã SP</div>
                            <div class="attr-value">{{ @$data->ProductSku }}</div>
                        </div>
                        <div class="c5"></div>
                        <div class="c10" style="border-top: solid 1px #EEE"></div>
                        <div class="content-text pro-intro-detail">
                            <p condensed="" roboto="" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️</b><strong style="box-sizing: border-box;">COMBO</strong>&nbsp;gồm: Nồi nấu chậm Bear 1.6L +&nbsp;m&aacute;y xay ăn dặm Bear 0.6L</span></span></span></p>
                            <p condensed="" dir="ltr" roboto="" role="presentation" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️Dễ sử dụng:&nbsp;</b>T&iacute;ch hợp nhiều chức năng xay, nấu tự động; thao t&aacute;c sử dụng đơn giản</span></span></span></p>
                            <p condensed="" dir="ltr" roboto="" role="presentation" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️Th&ocirc;ng minh:&nbsp;</b>Chế độ nấu, hấp, hầm c&aacute;ch thủy, giữ 100%&nbsp;gi&aacute; trị dinh dưỡng</span></span></span></p>
                            <p condensed="" dir="ltr" roboto="" role="presentation" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️</b><strong style="box-sizing: border-box;">Tiện lợi:</strong><b style="box-sizing: border-box;">&nbsp;</b>Tiết kiệm thời gian, c&ocirc;ng sức nấu; tiết kiệm điện hiệu quả&nbsp;</span></span></span></p>
                        </div>
                        <div class="c10"></div>
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style "> 
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> 
                            <a class="addthis_counter addthis_pill_style"></a> 
                        </div>
                        <!-- AddThis Button END -->
                        <!--
                            <a class="addcart" href="/addcart/combo-noi-nau-chao-cham-may-xay-an-dam-bear.html" >Đặt hàng</a>
                            <div class="pro-promotion"><p condensed="" roboto="" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️</b><strong style="box-sizing: border-box;">COMBO</strong>&nbsp;gồm: Nồi nấu chậm Bear 1.6L +&nbsp;m&aacute;y xay ăn dặm Bear 0.6L</span></span></span></p>
                            
                            <p condensed="" dir="ltr" roboto="" role="presentation" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️Dễ sử dụng:&nbsp;</b>T&iacute;ch hợp nhiều chức năng xay, nấu tự động; thao t&aacute;c sử dụng đơn giản</span></span></span></p>
                            
                            <p condensed="" dir="ltr" roboto="" role="presentation" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️Th&ocirc;ng minh:&nbsp;</b>Chế độ nấu, hấp, hầm c&aacute;ch thủy, giữ 100%&nbsp;gi&aacute; trị dinh dưỡng</span></span></span></p>
                            
                            <p condensed="" dir="ltr" roboto="" role="presentation" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: "><span style="font-size:16px;"><span style="line-height:2;"><span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️</b><strong style="box-sizing: border-box;">Tiện lợi:</strong><b style="box-sizing: border-box;">&nbsp;</b>Tiết kiệm thời gian, c&ocirc;ng sức nấu; tiết kiệm điện hiệu quả&nbsp;</span></span></span></p>
                            </div>
                            -->
                        <div class="c20"></div>
                        <input type="hidden" id="link_to_cart" value="/addcart/combo-noi-nau-chao-cham-may-xay-an-dam-bear.html">
                        <script>
                            $(".price-color").click(function(){
                                $(".price-color").removeClass("choose-price");
                                $(this).addClass("choose-price");
                                $("#pricekm").html($(this).attr("data-price-format") );
                                linkcart();
                                
                            });
                            
                          
                            $( function() {
                                $(".price-color").first().addClass("choose-price");
                                linkcart();
                            });
                            
                        </script>                       
                        <div class="c20"></div>
                    </div>
                </div>
                <div class="cell-3-12 tab-cell-1-1" style="    position: relative;">
                    <div class="fixed-right ">
                        <div class="product-detail-right">
                            Thương hiệu: <strong> Bear </strong> Tình trạng: <strong> {{ $status }} </strong>
                        </div>
                        <div class="c10"></div>
                        <div class="c10"></div>
                        <div class="price-detail-label">  Giá: <s>2,040,000 đ</s> </div>
                        <div class="c"></div>
                        <div class="price-detail">
                            <div class='price-detail-label'>Giá KM</div>
                            <span id='pricekm'>  {{ @str_replace(',' ,'.', number_format($data->Price)) }} đ </span> 
                        </div>
                        <div class="c20"></div>
                        <a class="addcart-btn" href="javascript:void(0)" onclick="addToCart({{ $data->id }})">Mua hàng ngay</a>                 
                        <div class="c10"></div>
                        <div class="c20"></div>
                        <div class="camket">
                            <div style="font-size:20px;">Cam Kết & Ưu Đãi</div>
                            <div class="c10"></div>
                            <ul>
                                <li><strong>MIỄN PH&Iacute; SHIP KHI ĐẶT H&Agrave;NG ONLINE</strong></li>
                                <li>H&agrave;ng Ho&aacute; Nhập Khẩu Ch&iacute;nh H&atilde;ng &amp; Ưu Đ&atilde;i Thẻ VIP t&ugrave;y chương tr&igrave;nh</li>
                                <li>Bảo H&agrave;nh 18&nbsp;Th&aacute;ng</li>
                                <li>1 đổi 1 trong v&ograve;ng 30 ng&agrave;y đầu nếu c&oacute; lỗi nh&agrave; sản xuất</li>
                            </ul>
                        </div>
                        <div class="c10"></div>
                        
                    </div>
                </div>
            </div>
            <div class="c20"></div>
            <script>
                if ($(window).width() > 1000)
                $(window).scroll(function (event) {
                
                    var fixfooter = $('.title-other-news').position();
                    if ( ($(this).scrollTop() > 200)) {
                    
                        if (($(this).scrollTop() < (fixfooter.top -  600 ) )){
                            $('.fixed-right').css({'position': 'fixed', 'top': '60px', 'z-index': '9999', 'width': '282px'});
                        }else{
                            $('.fixed-right').css( { 'position' : 'absolute', 'top' :'','bottom' : '0px'} );    
                        }
                
                        
                    } else {
                        $('.fixed-right').css({'position': 'relative', 'top': '0px', 'z-index': '9999', 'width': '100%' });
                    }
                });
                
            </script>                   
            <div class="flex-container flex-space-between">
                <div class="cell-9-12 tab-cell-1-1">
                    <div class="item-detail-tab">
                        <div class="item-tab tab-active" rel="1"> Chi tiết sản phẩm </div>
                        
                        <div class="c"></div>
                    </div>
                    <div class="c10" style="border-top:solid 1px #CCC"></div>
                    <div class="c20"></div>
                    <div class="tab-content contenttab1" style="display:block;">
                        <div class="c10"></div>
                        <div class="content-detail">
                            {!!  $data->Detail !!}
                        </div>
                    </div>
                    <div class="tab-content contenttab2" style="display:block;">
                        <div class="c10"></div>
                        <div class="content-detail">
                            <div class="c20"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(".item-tab").click(function () {
                            $(".item-tab").removeClass("tab-active");
                            $(this).addClass("tab-active");
                            $(".tab-content").hide();
                            $(".contenttab" + $(this).attr("rel")).fadeIn();
                            return false;
                        });
                        
                    </script>           
                    <div class="c20"></div>
                    <div class="fb-comments" data-width="100%" data-href="" data-numposts="5"></div>
                </div>
                <div class="cell-3-12 tab-cell-1-1">
                </div>
            </div>
            <div class="c30"></div>
            <h3 class="title-other-news">Sản phẩm cùng loại</h3>
            <div class="c20" style="border-top:solid 1px #CCC"></div>
            <div class="flex-container flex-space-between">
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-38%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="noi-com-dien-bear-dfbb20a1.html"><img src="../temp/uploaded-san-pham-Avatar%20tr%E1%BA%AFng%20chu%E1%BA%A9n_P20N5_thumbcr_400x400.jpg" alt="Nồi cơm điện 2L Bear DFB-P20N5 " width="100%"></a> </div>
                    <h2 class="product-name"><a href="noi-com-dien-bear-dfbb20a1.html">Nồi cơm điện 2L Bear DFB-P20N5 </a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>1,490,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">919,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-38%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="combo-1-noi-nau-chao-bear-08l-may-xay-an-dam-bear-03l.html"><img src="../temp/uploaded-abc-ava_27195aca4e6f8831d17e%20%281%29_thumbcr_400x400.jpg" alt="Combo 1: Nồi 0.8L + máy xay 0.3L + Quà tặng" width="100%"></a> </div>
                    <h2 class="product-name"><a href="combo-1-noi-nau-chao-bear-08l-may-xay-an-dam-bear-03l.html">Combo 1: Nồi 0.8L + máy xay 0.3L + Quà tặng</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>1,540,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">950,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-25%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="may-xay-an-dam-03l-bear-qsja01f2-grb03v2.html"><img src="../temp/uploaded-san-pham-Avatar%20tr%E1%BA%AFng%20chu%E1%BA%A9n_B03V2_thumbcr_400x400.jpg" alt="Máy xay ăn dặm Bear 0.3L GR-B03V2" width="100%"></a> </div>
                    <h2 class="product-name"><a href="may-xay-an-dam-03l-bear-qsja01f2-grb03v2.html">Máy xay ăn dặm Bear 0.3L GR-B03V2</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>790,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">590,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-13%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="noi-nau-chao-cham-bear-25l-tu-sa.html"><img src="../temp/uploaded-san-pham-AVATAR%20tr%E1%BA%AFng_T%E1%BB%AD%20sa_thumbcr_400x400.png" alt="Nồi nấu cháo chậm Bear 2,5l C25R6" width="100%"></a> </div>
                    <h2 class="product-name"><a href="noi-nau-chao-cham-bear-25l-tu-sa.html">Nồi nấu cháo chậm Bear 2,5l C25R6</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>1,490,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">1,290,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-24%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="../noi-nau-cham-bear/noi-nau-chao-cham-bear-08l-ban-quoc-te.html"><img src="../temp/uploaded-seo-ava%20sp_noi-nau-cham-08l-bear-sube001-ban-quoc-te_11012021_thumbcr_400x400.jpg" alt="Nồi nấu cháo chậm Bear 0.8L SUBE001" width="100%"></a> </div>
                    <h2 class="product-name"><a href="../noi-nau-cham-bear/noi-nau-chao-cham-bear-08l-ban-quoc-te.html">Nồi nấu cháo chậm Bear 0.8L SUBE001</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>650,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">490,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-15%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="noi-lau-nuong-3-khay-bear-3in1.html"><img src="../temp/uploaded-seo-ava%20sp_noi-lau-nuong-3-khay-bear-sube004-hang-quoc-te_15032021_thumbcr_400x400.jpg" alt="Nồi lẩu nướng 3 khay Bear SUBE004" width="100%"></a> </div>
                    <h2 class="product-name"><a href="noi-lau-nuong-3-khay-bear-3in1.html">Nồi lẩu nướng 3 khay Bear SUBE004</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>1,790,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">1,509,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-17%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="may-xay-an-dam-06l-bear-qsjd02q1.html"><img src="../temp/uploaded-san-pham-Avatar%20tr%E1%BA%AFng%20chu%E1%BA%A9n_D02Q1_thumbcr_400x400.jpg" alt="Máy xay ăn dặm 0.6L Bear QSJ-D02Q1 Bản 6 lưỡi" width="100%"></a> </div>
                    <h2 class="product-name"><a href="may-xay-an-dam-06l-bear-qsjd02q1.html">Máy xay ăn dặm 0.6L Bear QSJ-D02Q1 Bản 6 lưỡi</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>789,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">650,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-16%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="combo-3-noi-chao-cham-bear-25l-may-xay-bear-3-coi-grb03v1.html"><img src="../temp/uploaded-abc-ava_856020bf341af244ab0b%20%281%29_thumbcr_400x400.jpg" alt="Combo 3: Nồi 2.5l + máy xay 3 cối thủy tinh + Kèm quà tặng" width="100%"></a> </div>
                    <h2 class="product-name"><a href="combo-3-noi-chao-cham-bear-25l-may-xay-bear-3-coi-grb03v1.html">Combo 3: Nồi 2.5l + máy xay 3 cối thủy tinh + Kèm quà tặng</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>2,380,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">1,990,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-18%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="may-ham-sua-bear.html"><img src="../temp/uploaded-san-pham-Avatar%20tr%E1%BA%AFng%20chu%E1%BA%A9n_D12D1_thumbcr_400x400.jpg" alt="Máy đun hâm sữa đa năng Bear D12D1 " width="100%"></a> </div>
                    <h2 class="product-name"><a href="may-ham-sua-bear.html">Máy đun hâm sữa đa năng Bear D12D1 </a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>999,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">819,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home">
                    <div class='discount-tags'>-25%</div>
                    <div style="overflow: hidden;"> <a class="grow" href="noi-nau-cham-da-nang-bear-ddzd16j3-16l-kem-long-hap-.html"><img src="../temp/uploaded-san-pham-AVATAR%20tr%E1%BA%AFng_1.6_thumbcr_400x400.jpg" alt="Nồi nấu cháo chậm Bear 1.6L" width="100%"></a> </div>
                    <h2 class="product-name"><a href="noi-nau-cham-da-nang-bear-ddzd16j3-16l-kem-long-hap-.html">Nồi nấu cháo chậm Bear 1.6L</a></h2>
                    <div class="c5"></div>
                    <div style="float: left;">
                        <div class="pricekm"><s>1,190,000 đ </s></div>
                        <div class="c3"></div>
                        <div class="price">890,000 đ</div>
                    </div>
                    <a class="viewmore" style="float: right;" href="">Đặt hàng <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="cell-1-5"></div>
                <div class="cell-1-5"></div>
                <div class="cell-1-5"></div>
            </div>
            <div class="c10"></div>
        </div>
        <div class="c10"></div>
        <div style="background: #1c4d99;">
            <div class="grid">
                <ul class="menufooter"></ul>
            </div>
        </div>
        <div style="border-bottom:solid 1px #DDD;"></div>
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
    </div>

    <script type="text/javascript">
    function addToCart(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('cart') }}",
            data: {
                product_id: id,
                gift_check:''
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){
    
                window.location.href = "{{ route('cart-tgtl')  }}";
            }
        });
        
    }

</script>

@endsection