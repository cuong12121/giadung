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

    $tr = str_replace(['Đặc điểm nổi bật', 'Xem thêm', ' Xem th&ecirc;m','</li>'], '', trim($data->Salient_Features));

    $str =   strip_tags($tr, '<li>');

    $ar_convert_salient_features = explode('<li>', $str);


    ?>

    <style type="text/css">
        
        .special-detail ul li{
            line-height: 50px;
        }
    </style>

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

                       

                            <div class="swiper-slide"><a href="{{ asset($image->image) }}" onclick="return hs.expand(this)"><img src="{{ asset($image->image) }}" alt="Combo 2: Nồi 1.6L + máy xay 0.6L + set Quà tặng" width="100%"></a></div>

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
                            @if(isset($ar_convert_salient_features))
                            @foreach($ar_convert_salient_features as $val)

                            @if(!empty(trim($val)))
                            <p condensed="" roboto="" style="box-sizing: border-box; margin: 0px 0px 15px; font-family: ">
                                <span style="font-size:16px;">
                                    <span style="line-height:2;">
                                        <span style="font-family:arial,helvetica,sans-serif;"><b style="box-sizing: border-box;">✔️</b>{{ $val }}</span>
                                    </span>
                                </span>
                            </p>
                            @endif
                            @endforeach
                            @endif
                        
                        </div> 
                        <div class="c10"></div>
                        <!-- AddThis Button BEGIN -->
                       <!--  <div class="addthis_toolbox addthis_default_style "> 
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> 
                            <a class="addthis_counter addthis_pill_style"></a> 
                        </div> -->
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
                             Tình trạng: <strong> {{ $status }} </strong>
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
                        @if($data['Price']>0)
                        <a class="addcart-btn" href="javascript:void(0)" onclick="addToCart({{ $data->id }})">Mua hàng ngay</a>      

                        @endif           
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
                @if(!empty($other_product))
                @foreach($other_product as $value)
                <div class="cell-1-5 tab-cell-1-2 cell-pro-home float">
                        <div class='discount-tags'>-13%</div>
                        <div style="overflow: hidden; border:solid 1px #EEE; position:relative;"> 
                            <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}"><img src="{{ asset($value->Image)}}" alt="{{ $value->Name }}" width="100%"></a> 
                            <a class="cart-icon" href="{{ route('details', $value->Link) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                        </div>
                        <h3 class="product-name"><a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}">{{ $value->Name }}</a></h3>
                        <div class="c5"></div>
                        <div style="float: left;">
                            <!-- <div class="pricekm"><s>1,490,000đ </s></div>
                            <div class="c3"></div> -->
                            <div class="price">{{ @str_replace(',' ,'.', number_format($value->Price)) }}đ</div>
                        </div>
                    </div>
                @endforeach
                @endif
                
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

        @include('frontend.layouts.footer')
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