

@extends('frontend.layouts.apps')
@section('content') 

    <style type="text/css">
        
        .center-text{
            text-align: center;
            height: 20px;
            width: 100%;
        }
        .box-dom{
            overflow: hidden; 
            border:solid 1px #EEE; 
            position:relative; 
            height: 250px;
        }

        .tab-blog{
            padding: 10px;
        }


        /*.news-home-wrapper .cell-1-3{
            width: 100% !important;
        }*/


        .phone_hotline {
            width: 100%;
            background: #f5f5f5;
            display: flex;
            justify-content: space-between;
        }

        .p_hotline_item {
            width: 33.34%;
            text-align: center;
            position: relative;
        }

        .p_hotline_item span {
            width: 45%;
            display: inline-block;
            vertical-align: middle;
            font-family: Arial,Tahoma,sans-serif;
            font-size: 14px;
            color: #333;
            text-align: left;
        }



        .p_hotline_item .icon_purchase, .p_hotline_item .icon_security {
            width: 70px;
            height: 70px;
            display: inline-block;
            vertical-align: middle;
        }

        .p_hotline .icon_security {
            width: 70px;
            height: 70px;
            display: inline-block;
            vertical-align: middle;
            background-position: 99% .5%;
        }

        .p_hotline_item .icon_complain {
            width: 70px;
            height: 70px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(https://dienmaynguoiviet.vn/media/category/icon.png);
            background-position: 95.5% 14.5%;
        }

        .p_hotline_item .icon_purchase {
            width: 70px;
            height: 70px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(https://dienmaynguoiviet.vn/media/category/icon.png);
            background-position: 81.5% 14.5%;
        }

        .p_hotline_item .icon_security {
            width: 70px;
            height: 70px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(https://dienmaynguoiviet.vn/media/category/icon.png);
            background-position: 99% .5%;
        }

        .news-home-wrapper img{
            height: 254px;
            width: auto !important;
        }
        .news-home-name, .rtb-box span{
            font-family: 'Times New Roman';
        }

       
    </style>

    <div>
        <div class="swiper-container " id="slide_home">
            <div class="homeslide-next">  </div>
            <div class="homeslide-prev">  </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slideshow-img">
                        <img src="{{ asset('uploaded/logo/slider1.jpg')}}" alt="slide 2" width="100%" loading="lazy" style="display:block">
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
                                        Nhập khẩu chính hãng <br> Uy tín là số 1
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
                                        Tư vấn trực tuyến 24/7<br>Hotline: <strong>  098.361.2828 </strong>
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
            <img src="uploaded/banner-qc/bn_long.jpg" width="100%">
        </div>
        <div class="c10"></div>
        <div class="grid hide-on-tab hide-on-mobile">
            <div class="flex-container flex-space-between"></div>
            <div class="c10"></div>
            <div class="flex-container flex-space-between">
            </div>
            <div class="c10"></div>
        </div>


        @if(isset($household) && count($household)>0)
        @for($i=0; $i<count($household); $i++)
        <div class="grid">
            <div>
                <div class="c20"></div>
                <div class="cat-home-drop" style="position:relative; float:left; ">
                    <h2 class="title-cat-home">{{  $info_group[$i]->name }} </h2>
                    <div class="sub-cat">
                    </div>
                </div>
                
                <a class="view-more-home" href="{{ route('details', $info_group[$i]->link) }}">Xem tiếp <i class="fa fa-angle-right"></i></a>
                <div class="c10"></div>
                <div class="flex-container flex-space-between">

                    @if(!empty($household[$i]))
                    @foreach($household[$i] as $value)


                    <div class="cell-1-5 tab-cell-1-2 cell-pro-home float">
                        <div class='discount-tags'>-13%</div>
                        <div style="overflow: hidden; border:solid 1px #EEE; position:relative; height: 248px;"> 
                            <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}"><img src="{{ asset($value->Image)}}" alt="{{ $value->Name }}" width="100%"></a> 
                            <a class="cart-icon" href="{{ route('details', $value->Link) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                        </div>
                        <h3 class="product-name"><a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}">{{ $value->Name }}</a></h3>
                        <div class="c5"></div>
                        <div class="center-text">
                            <!-- <div class="pricekm"><s>1,490,000đ </s></div>
                            <div class="c3"></div> -->
                            <div class="price">{{ @str_replace(',' ,'.', number_format($value->Price)) }}đ</div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                </div>
                <div class="c10"></div>
                <div class="c20" style="border-bottom: solid 2px #DDD;"></div>
                <div class="c20"></div>
                <div class="c20"></div>
              
            </div>
        </div>
        @endfor
        @endif



        <div class="grid hide-on-tab" style="min-height:300px;">
            <img src="uploaded/banner-qc/slider2.jpg" width="100%">
        </div>

        <div class="c20"></div>
        <div class="news-home-wrapper">
            <div class="grid">
                <h2 class="title-cat-home" style="text-align: left;"><a href="javascript:void(0)">Kinh nghiệm </a></h2>
                <div class="c20"></div>
                <div class="flex-container flex-space-between">
                    <?php
                        $blog = App\Models\post::take(3)->Orderby('id', 'desc')->where('active', 1)->get();
                    ?>
                    @if(!empty($blog) && $blog->count()>0)
                    @foreach($blog as $value)
                    <div class="cell-1-3 tab-cell-1-1 tab-blog" style="margin-bottom:20px;">
                        <a href="{{ route('details', $value->link) }}"><img src="{{  asset($value->image) }}" width="100%" alt="{{ $value->title }}"></a> 
                        <div class="c10"></div>
                        <h3 class="news-home-name"> <a href="{{ route('details', $value->link) }}">{{ $value->title }}</a> </h3>
                        <div class="c5"></div>
                        <div class="news-home-intro text-line-4">{!!  _substrs( strip_tags($value->content), 230) !!}...</div>
                    </div>
                    @endforeach
                    @endif
                    
                </div>
                <div class="c10"></div>
            </div>
            <div class="c"></div>
            <!--
                <a class="dangkydichvu" href="">Liên hệ <b> tư vấn </b> </a>
                -->
        </div>

        <div class="max-width">
            <div class="grid">
                <div class="phone_hotline"> 
                    <a href="tel:0243.687.9145" title="Bảo Hành: 0243.687.9145" class="p_hotline_item"> 
                    <i class="icon_security"></i> 
                        <span>
                            <strong>Bảo Hành: 0243.687.9145</strong>
                            <br>

                             (8h00 - 17h00)
                        </span> 
                    </a> 
                    <a href="tel:0983612828" title="Mua hàng: 098.361.2828" class="p_hotline_item"> 
                        <i class="icon_purchase"></i> 
                        <span>
                            <strong>Mua hàng: 098.361.2828</strong> 
                            <br>
                            (8h00 - 17h00)
                        </span> 
                    </a> 
                    <a href="tel:0916917949" title="Khiếu nại:0916917949" class="p_hotline_item"> <i class="icon_complain"></i> 
                        <span>
                            <strong>Khiếu nại: 091.691.7949</strong> 

                            <br>
                            (8h00 - 17h00)
                        </span> 
                    </a> 
                </div>
            </div>
            
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

@if (session('success'))


    <script type="text/javascript">
       alert('đặt hàng thành công');
      
    </script>
    <?php
    Session::forget('success');
    ?>

    
@endif

@endsection
