
@extends('frontend.layouts.apps')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<style type="text/css">
    .cell-pro-home img {
      
        height: 152px;
        width: auto;
        margin: 0 auto;
    }

    .div-prododuct{
        padding: 0;
    }

</style>

 <div class="content" style="background:#FFF">
    <div class="img-poster" style="position:relative"></div>
    <div class="c"></div>

        @if(\Request::route()->getName()!='search-product-frontend' && !empty($data))
        <div class="grid">
            <div class="crumb"><a href="../index.htm"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> <a href="{{ route('details', $link) }}">{{ $name_cate }}</a></div>
            <div class="c5"></div>
        </div>
        @endif
        <div class="c10"></div>
        <div class="grid">
            <h1 class="title-page"><a>{{ @$name_cate }}</a></h1>
            <div class="c5"></div>
           
            <div class="c20" style="border-bottom:solid 1px #CCC;"></div>
            <div class="c20"></div>
            <div>

                
                @if(!empty($data)&& $data->count()>0)
                @foreach($data as $value)
                <div class="col-md-3 col-xs-6 cell-pro-home float div-prododuct">
                    <!-- <div class='discount-tags'>-13%</div> -->
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
            @if(\Request::route()->getName()!='search-product-frontend' && !empty($data))

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php 

                        $limit =  floor(intval($numberdata)/15); 
                    ?>
                    @for($i=0; $i<=$limit; $i++)

                    @if($page>5)
                        @if($i<=$page+4 && $i>$page-6)
                        <li class="page-item {{  $page==$i+1?'active':'' }} " ><a class="page-link" href="{{ route('details',$link) }}?page={{ $i+1 }}">{{ $i+1 }}</a></li>
                        @endif
                    @else
                        @if($i<10)
                        <li class="page-item {{  $page==$i+1?'active':'' }} " ><a class="page-link" href="{{ route('details',$link) }}?page={{ $i+1 }}">{{ $i+1 }}</a></li>
                        @endif
                    @endif
                    @endfor

                    
                   
                </ul>
            </nav>

            @endif
            <div class="c5"></div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="grid">
        <div class="c30"></div>
        <div class="flex-container flex-space-between">
            <div class="cell-2-3  tab-cell-1-1 mobile-cell-1-1">
                <!-- <div class="flex-container flex-space-between">
                    <div class="cell-2-3  tab-cell-1-1 mobile-cell-1-1">
                        <div class="footer-title">
                            Bear Việt Nam - Đại lý cấp 1 chính thức của hãng gia dụng Bear tại Việt Nam
                        </div>
                        <div class="c10" style="border-bottom:solid 1px #666;"></div>
                        <div class="c15"></div>
                        <div class="footer-text">
                            <h4 condensed="" roboto="" style="box-sizing: border-box; text-align: justify;"><strong><span style="line-height:2;"><span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="box-sizing: border-box;">TH&Ocirc;NG TIN LI&Ecirc;N HỆ:</span></span></span></span></strong></h4>
                            <div style="text-align: justify;"><span style="line-height:2;"><span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Website:</strong> <u><strong><a href="index.htm" target="_blank"><span style="color:#FF8C00;">Bearvietnam.com.vn</span></a></strong></u><br>
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
                </div> -->
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

@endsection