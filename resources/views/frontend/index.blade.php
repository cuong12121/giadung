

@extends('frontend.layouts.apps')
@section('content') 

    <div>
        <div class="swiper-container " id="slide_home">
            <div class="homeslide-next">  </div>
            <div class="homeslide-prev">  </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slideshow-img">
                        <img src="{{ asset('uploaded/logo/z3249170928229_cdf8dfc1203e6291e064bed64e93a7d0.jpg')}}" alt="slide 2" width="100%" loading="lazy" style="display:block">
                    </div>
                    <div class="grid hide-on-tab hide-on-mobile" style="position:relative; display: none; ">
                        <div class="slide-home-item">
                            <h2>slide 2</h2>
                            <div class="c10"></div>
                            <div class="slide-home-desc">
                            </div>
                            <div class="c10"></div>
                        </div>
                        <!--<a class="slide-detail " href="" target="">Xem chi tiết</a>-->
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <div class="c20"></div>
            <div class="rtb-home hide-on-tab">
                <div class="grid">
                    <div class="flex-container flex-space-between">
                        <div class="cell-1-4 tab-cell-1-2">
                            <div class="rtb-box">
                                <div class="flex-container flex-space-between">
                                    <div class="cell-1-4" style="text-align:center;">
                                        <img src="{{ asset('uploaded/gioi-thieu/rtb%20%281%29.png')}}">
                                    </div>
                                    <div class="cell-3-4 ">
                                        <span>Bảo hành dài hạn </span>
                                        <div class="c5"></div>
                                        Bảo hành chính hãng <br> lên đến <strong>  18 tháng </strong>
                                    </div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <div class="cell-1-4 tab-cell-1-2">
                            <div class="rtb-box">
                                <div class="flex-container flex-space-between">
                                    <div class="cell-1-4" style="text-align:center;">
                                        <img src="{{ asset('uploaded/gioi-thieu/rtb%20%282%29.png')}}">
                                    </div>
                                    <div class="cell-3-4 ">
                                        <span> Hàng chính hãng </span>
                                        <div class="c5"></div>
                                        Nhập khẩu chính hãng <br> Bear tại Việt Nam
                                    </div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <div class="cell-1-4 tab-cell-1-2">
                            <div class="rtb-box">
                                <div class="flex-container flex-space-between">
                                    <div class="cell-1-4" style="text-align:center;">
                                        <img src="{{ asset('uploaded/gioi-thieu/rtb%20%283%29.png')}}">
                                    </div>
                                    <div class="cell-3-4 ">
                                        <span>Dịch vụ chuyên nghiệp </span>
                                        <div class="c5"></div>
                                        Tư vấn trực tuyến 24/7<br>Hotline: <strong> 0348949926 </strong>
                                    </div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <div class="cell-1-4 tab-cell-1-2">
                            <div class="rtb-box">
                                <div class="flex-container flex-space-between">
                                    <div class="cell-1-4" style="text-align:center;">
                                        <img src="{{ asset('uploaded/gioi-thieu/rtb%20%284%29.png')}}">
                                    </div>
                                    <div class="cell-3-4 ">
                                        <span>Giao hàng toàn quốc</span>
                                        <div class="c5"></div>
                                        Giao hàng nhanh chóng<br>trên toàn quốc
                                    </div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c"></div>
            </div>
        </div>
        <div class="c"></div>
        <script>
            $(function () {
                var swiper_slide_home = new Swiper('#slide_home', {
                    loop: true,
                    slidesPerView: 1,
                    autoplay: {
                        delay: 3000000,
                        disableOnInteraction: false,
                    },
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.homeslide-prev',
                        prevEl: '.homeslide-next',
                    },
                    speed: 500,
                    spaceBetween: 0,
                });

                
                /*
                 $('#slide_home').on('mouseover', function () {
                 swiper_slide_home.autoplay.stop();
                 });
                 $('#slide_home').on('mouseout', function () {
                 swiper_slide_home.autoplay.start();
                 });  
                 */
            });
        </script>
    </div>
    <div class="c"></div>
    <div class="content" style="background:#FFF">
        <div class="c20 hide-on-tab"></div>
        <div class="grid hide-on-tab">
            <img src="uploaded/banner-qc/bn_long.png" width="100%">
        </div>
        <div class="c10"></div>
        <div class="grid hide-on-tab hide-on-mobile">
            <div class="flex-container flex-space-between"></div>
            <div class="c10"></div>
            <div class="flex-container flex-space-between">
            </div>
            <div class="c10"></div>
        </div>


        <div class="grid">
            <div>
                <div class="c20"></div>
                <div class="cat-home-drop" style="position:relative; float:left; ">
                    <h2 class="title-cat-home">Sản phẩm gia dụng </h2>
                    <div class="sub-cat">
                    </div>
                </div>
                <a class="view-more-home" href="noi-bear/index.htm">Xem tiếp <i class="fa fa-angle-right"></i></a>
                <div class="c10"></div>
                <div class="flex-container flex-space-between">

                    @foreach($household as $value)
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
                    
                </div>
                <div class="c10"></div>
                <div class="c20" style="border-bottom: solid 2px #DDD;"></div>
                <div class="c20"></div>
                <div class="c20"></div>
              
            </div>
        </div>



        <div class="grid">
            <div>
                <div class="c20"></div>
                <div class="cat-home-drop" style="position:relative; float:left; ">
                    <h2 class="title-cat-home">Sản phẩm nhà bếp </h2>
                    <div class="sub-cat">
                    </div>
                </div>
                <a class="view-more-home" href="noi-bear/index.htm">Xem tiếp <i class="fa fa-angle-right"></i></a>
                <div class="c10"></div>
                <div class="flex-container flex-space-between">

                    @foreach($kitchen as $value)
                    <div class="cell-1-5 tab-cell-1-2 cell-pro-home float">
                        <div class='discount-tags'>-13%</div>
                        <div style="overflow: hidden; border:solid 1px #EEE; position:relative;"> 
                            <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}"><img src="{{ asset($value->Image)}}" alt="Nồi nấu cháo chậm Bear 2,5l C25R6" width="100%"></a> 
                            <a class="cart-icon" href="{{ route('details', $value->Link) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                        </div>
                        <h3 class="product-name"><a href="{{ route('details', $value->Link) }}" title="Nồi nấu cháo chậm Bear 2,5l C25R6">{{ $value->Name }}</a></h3>
                        <div class="c5"></div>
                        <div style="float: left;">
                            <!-- <div class="pricekm"><s>1,490,000đ </s></div>
                            <div class="c3"></div> -->
                            <div class="price">{{ @str_replace(',' ,'.', number_format($value->Price)) }}đ</div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="c10"></div>
                <div class="c20" style="border-bottom: solid 2px #DDD;"></div>
                <div class="c20"></div>
                <div class="c20"></div>
              
            </div>
        </div>


        <div class="grid hide-on-tab" style="min-height:300px;">
            <img src="uploaded/banner-qc/bn_long_2.png" width="100%">
        </div>

        <div class="c20"></div>
        <div class="news-home-wrapper">
            <div class="grid">
                <h2 class="title-cat-home" style="text-align: left;"><a href="bep-bear/index.htm">Kinh nghiệm </a></h2>
                <div class="c20"></div>
                <div class="flex-container flex-space-between">
                    <div class="cell-1-3 tab-cell-1-1" style="margin-bottom:20px;">
                        <a href="bep-bear/10-cong-thuc-lam-sua-hat-don-gian-thom-ngon-bang-may.html"><img src="{{ asset('temp/-uploaded_s%E1%BB%AFa%20h%E1%BA%A1t%20%289%29_cr_480x315.jpg')}}" width="100%" alt="10+ công thức làm sữa hạt đơn giản, thơm ngon bằng máy"></a> 
                        <div class="c10"></div>
                        <h3 class="news-home-name"> <a href="bep-bear/10-cong-thuc-lam-sua-hat-don-gian-thom-ngon-bang-may.html">10+ công thức làm sữa hạt đơn giản, thơm ngon bằng máy</a> </h3>
                        <div class="c5"></div>
                        <div class="news-home-intro text-line-4">Uống sữa hạt đang trở th&agrave;nh xu hướng được nhiều người quan t&acirc;m bởi nh&oacute;m dưỡng chất tuyệt vời gi&uacute;p n&acirc;ng cao sức khỏe, v&oacute;c d&aacute;ng v&agrave; l&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a ở phụ nữ. Tuy nhi&ecirc;n, mua sữa hạt ngo&agrave;i h&agrave;ng c&oacute; thể kh&ocirc;ng đảm bảo khiến bạn băn khoăn, vậy th&igrave; đừng bỏ qua b&agrave;i viết n&agrave;y nh&eacute;. Bear Việt Nam sẽ chia sẻ với bạn top những&nbsp;c&ocirc;ng thức l&agrave;m sữa hạt&nbsp;đơn giản tại nh&agrave; được y&ecirc;u th&iacute;ch nhất với những nguy&ecirc;n liệu dễ t&igrave;m. C&ugrave;ng theo d&otilde;i nh&eacute;!</div>
                    </div>
                    <div class="cell-1-3 tab-cell-1-1" style="margin-bottom:20px;">
                        <a href="bep-bear/top-5-may-xay-sinh-to-bear-duoc-mua-nhieu-nhat-2021.html"><img src="{{ asset('temp/-uploaded-san-pham-May-xay-sinh-to-bear_may-xay-sinh-to-cam-tay-bear-llj-d04a1-2-binh-5_cr_480x315.jpg') }}" width="100%" alt="Top 5 máy xay sinh tố Bear được mua nhiều nhất 2023"></a> 
                        <div class="c10"></div>
                        <h3 class="news-home-name"> <a href="bep-bear/top-5-may-xay-sinh-to-bear-duoc-mua-nhieu-nhat-2021.html">Top 5 máy xay sinh tố Bear được mua nhiều nhất 2023</a> </h3>
                        <div class="c5"></div>
                        <div class="news-home-intro text-line-4">Ngo&agrave;i c&aacute;c d&ograve;ng m&aacute;y xay thịt hay m&aacute;y xay đa năng, m&aacute;y xay sinh tố cũng l&agrave; một những sản phẩm của Bear được người ti&ecirc;u d&ugrave;ng tin tưởng lựa chọn. H&atilde;ng đồ gia dụng th&ocirc;ng minh n&agrave;y đ&atilde; cho ra mắt nhiều d&ograve;ng m&aacute;y xay sinh tố kh&aacute;c nhau đ&aacute;p ứng từng nhu cầu của kh&aacute;ch h&agrave;ng. Dưới đ&acirc;y l&agrave; Top 5 m&aacute;y xay sinh tố Bear được mua nhiều nhất trong năm vừa qua.
                            &nbsp;
                        </div>
                    </div>
                    <div class="cell-1-3 tab-cell-1-1" style="margin-bottom:20px;">
                        <a href="bep-bear/review-may-hut-chan-khong-bear-san-pham-tien-ich-hien-dai.html"><img src="{{ asset('temp/-uploaded-san-pham-May-hut-chan-khong-bear_t%E1%BA%A3i%20xu%E1%BB%91ng_cr_480x315.jpg')}}" width="100%" alt="Review máy hút chân không Bear - Sản phẩm tiện ích, hiện đại "></a> 
                        <div class="c10"></div>
                        <h3 class="news-home-name"> <a href="bep-bear/review-may-hut-chan-khong-bear-san-pham-tien-ich-hien-dai.html">Review máy hút chân không Bear - Sản phẩm tiện ích, hiện đại </a> </h3>
                        <div class="c5"></div>
                        <div class="news-home-intro text-line-4">Review m&aacute;y h&uacute;t ch&acirc;n kh&ocirc;ng Bear l&agrave; th&ocirc;ng tin được nhiều b&agrave; nội trợ gia đ&igrave;nh quan t&acirc;m, bởi đ&acirc;y l&agrave; một trong những d&ograve;ng sản phẩm tiện &iacute;ch, mang đến nhiều ưu điểm trong qu&aacute; tr&igrave;nh sử dụng. Gi&uacute;p c&aacute;c gia đ&igrave;nh dễ d&agrave;ng bảo quản thực phẩm l&acirc;u v&agrave; hiệu quả hơn. B&ecirc;n cạnh đ&oacute; thiết kế nhỏ gọn, dễ sử dụng ph&ugrave; hợp với nhiều đối tượng sử dụng. C&ugrave;ng theo d&otilde;i b&agrave;i viết n&agrave;y để c&oacute; th&ocirc;ng tin review chi tiết sản phẩm nh&eacute;.&nbsp;
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="c10"></div>
            </div>
            <div class="c"></div>
            <!--
                <a class="dangkydichvu" href="">Liên hệ <b> tư vấn </b> </a>
                -->
        </div>
        <div class="c20"></div>
        <div class="c20" style="border-bottom: solid 1px #DDD"></div>
        <div class="c20"></div>
        <div class="grid">
        </div>
        <div class="c20"></div>
        <div class="c10"></div>
        <div style="background: #1c4d99;">
            <div class="grid">
                <ul class="menufooter"></ul>
            </div>
        </div>
        <div style="border-bottom:solid 1px #DDD;"></div>
        @include('frontend.layouts.footer')
    </div>
</div>

@endsection
