

    @extends('frontend.layouts.apps')

    @section('content') 
    @push('style')
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/dienmay.css')}}?ver=1">  -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v=8881288.8883.151">
    <link rel="stylesheet" href="{{ asset('css/customs.css') }}?v=245754.75.52928">

    <style type="text/css">
        .blog-list-item{
            display: flex;
        }


    </style>
    @endpush
   
     <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}">  -->

        <link rel="stylesheet" type="text/css" href="{{ asset('css/categories.css') }}?ver=1"> 
         <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/dienmay.css') }}?ver=1">  -->
    <style type="text/css">
        .header__top-mobile{
            height: 133px;
        }

        .main-blog-list{
            width: 50% !important;
        }
    </style>
    <!-- end header -->
    <!-- begin main -->
    <main class="bg-fff">
        <!-- Begin menu blog -->
       
        <!-- End menu blog -->
        <div class="blog-list dm_container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="sidebar-left">
                        <figure>
                            <img src="" alt="">
                        </figure>
                       <!--  <ul class="ulcatemenu">
                            <li class="active"><a>Tư vấn mua sắm</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main-blog-list">
                        <div style="width:100%; height: 50px;">
                            <h1 class="title">{{ $name_cates_cate??'Tin Tức' }}</h1>
                        </div>
                        
                        @isset($data)
                        @foreach($data as $value)
                       
                        <div class="blog-list-item">
                            <a href="{{ route('details', $value->link) }}" class="img">
                            <img src="{{ asset($value->image) }}" data-src ="{{ asset($value->image) }}" alt="{{ $value->title }}">
                            </a>
                            <div class="blog-flex">
                                <a href="{{ route('details', $value->link) }}" class="name">{{ $value->title }}</a>
                                
                            </div>
                            
                            
                        </div>
                       
                        @endforeach
                        @endisset
                        
                        {{ $data->links() }}

                       <!--  <div class="bloglist-page">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="pagingIntact"><a>Xem trang</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingViewed">1</td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=2">2</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=3">3</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=4">4</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=5">5</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=6">6</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=7">7</a></td>
                                    <td class="pagingSpace"></td>
                                    <td class="pagingFarSide" align="center">...</td>
                                    <td class="pagingIntact"><a href="/tu-van-mua-sam/?page=2">Tiếp theo</a></td>
                                </tr>
                            </table>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="banner-blog">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end main -->
    <!--<hr>-->
    <!-- begin footer -->

     @include('frontend.layouts.footer')

    @endsection
   
    


<!-- Load time: 0.126 seconds  / 4 mb-->
<!-- Powered by HuraStore 7.4.4, Released: 12-Aug-2018 / Website: www.hurasoft.vn -->