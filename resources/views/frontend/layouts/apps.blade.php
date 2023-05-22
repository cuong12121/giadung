<!doctype html>
<html>
    <head>
        <img width="99999" height="99999" style="pointer-events: none; position: absolute; top: 0; left: 0; width: 95vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+">    
        <meta charset="utf-8">
        <title>Gia Dụng </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
        <meta http-equiv="Content-Language" content="VN">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta property="og:url" name="og:url" content="https://bearvietnam.com.vn/" data-app="">
        <meta property="og:type" name="og:type" content="website" data-app="">
        <meta property="og:description" name="og:description" content="" data-app="">
        <meta property="og:title" name="og:title" content="Gia Dụng " data-app="">
        <meta property="og:image" name="og:image" content="" data-app="">
        <link href="favicon.ico" rel="shortcut icon">
        <meta name="google-site-verification" content="iab7ppCh8CQx4bhanyoz0fN-ol-cDT4LogjVuqdO27o">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}?ver=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/jquery-1.10.1.min.js')}}"></script>
        <script src="{{ asset('js/swiper.min.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>
         <meta name="csrf-token" content="{{ csrf_token() }}">

        
    </head>
    <body>

        <div id="page">
    <div class="header hide-on-tab hide-on-mobile">
        <div class="grid">
            <div class="flex-container flex-space-between">
                <div class="cell-3-10">
                    <div class="c5"></div>
                    <div class="logo"><a href="{{ route('homeFe') }}"><img src="../uploaded/logo/logo%20%281%29.png" alt="LogoSite" style="max-width:100%; margin:0 auto"></a></div>
                    <div class="c5"></div>
                </div>
                <div class="cell-4-10" style="position:relative;">
                    <div class="c20"></div>
                    <div class="c10"></div>
                    <div class="search-pc">
                        <form action="{{ route('search-product-frontend') }}" method="get" id="searchformtab">
                            <input name="key" class="kw" placeholder="Tìm kiếm " type="text" required>
                            <a href="#" class="fa fa-search submit-search-pc" onclick="$('#searchformtab').submit();return false;"><img style="float: left;"></a>
                        </form>
                    </div>
                    <div class="c10"></div>
                    <div class="c20"></div>
                </div>

                

                <?php 

                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                                                
                    $number_cart_home = count($cart);

                ?>
                
                <div class="cell-3-10">
                    <div class="c10"></div>
                    <div class="shopping-cart">
                        <div class="icon-cart">
                            <span class="item_in_cart countcarts">{{ $number_cart_home }}</span>
                        </div>
                        <a href="{{ route('cart-tgtl') }}"> Giỏ hàng </a>
                    </div>
                    <div class="c2"></div>
                    <div class="hotline">
                        Hotline: <a href="tel:0348949926">0348949926</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="c"></div>
    </div>
    <div class="header-mobile hide-on-pc hide-on-pad">
        <div class="c5"></div>
        <div class="flex-container flex-space-between">
            <div class="cell-3-10">
                <div class="c5"></div>
                <a class="menu-mobile hide-on-pc hide-on-pad" href="#menu">
                <i class="fa fa-2x fa-bars"></i> 
                </a>
                <a href="#" class="show-search-mobile"> <i class="fa fa-search"></i> </a>
            </div>
            <div class="cell-4-10" style="position:relative;">
                <div class="logo-mobile"> <a href="../index.htm"> <img src="../uploaded/logo/logo-mobile.png">  </a> </div>
            </div>
            <div class="cell-3-10">
                <div class="c5"></div>
                <div class="shopping-cart">
                    <div class="icon-cart">
                        <a href="{{ route('cart-tgtl') }}"><span class="item_in_cart countcarts">0</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="c5"></div>
        <div class="search-mobile">
            <form action="/search/" method="get" id="searchform">
                <div style="position:relative;  ">
                    <input name="qr" class="kw" type="text">
                    <a href="#" onclick="$('#searchform').submit();return false;" class="btn-search-mobile"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".show-search-mobile").click(function () {
                $(".search-mobile").stop().slideToggle("slow");
            });
        });
    </script>           
    <div class="menubar">
        <div class="grid">
            <div class="flex-container flex-centered">
                <ul class="nav  hide-on-tab hide-on-mobile">
                    <li class="{{ Route::currentRouteName()==='homeFe'?'active':'' }}" style="background:url() center left no-repeat; "> <a href="/" class="">Home </a>
                    </li>

                    <?php 

                        $menu = App\Models\groupProduct::select('link', 'name')->where('parent_id', 100)->get();
                    ?>
                    @foreach($menu as $value)
                    <li class="{{  !empty($link)&&$link ===$value->link?'active':'' }}" style="background:url() center left no-repeat; "> <a href="{{ route('details', $value->link) }}" class="">{{ $value->name }}</a>
                    </li>
                    @endforeach

                    <li class="" style="background:url() center left no-repeat; "> <a href="{{ route('details', 'may-loc-nuoc') }}" class="">Máy lọc nước</a> </li>
                   
                </ul>
            </div>
        </div>
    </div>
    <div>
    </div>
    <div class="c"></div>
   
        @yield('content')


        <link rel="stylesheet" type="text/css" href="{{  asset('css/font.css')}}">
        <link rel="stylesheet" type="text/css" href="{{  asset('css/font-awesome-4.2.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{  asset('css/jquery.mmenu.all.css')}}">
        <link rel="stylesheet" href="{{  asset('css/jquery-ui.css')}}">
        <script src="{{ asset('js/jquery-ui.js')}}"></script>
        <script src="{{ asset('js/jquery.form.min.js')}}"></script>
        <script src="{{ asset('js/jquery.mmenu.min.all.js')}}"></script>
        <link rel="stylesheet" href="{{  asset('css/hover.css')}}">
        <link rel="stylesheet" href="{{  asset('midnight/assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{  asset('midnight/assets/css/animate.css')}}">
        <script src="{{  asset('midnight/assets/js/sscr.min.js') }}"></script>
        <script src="{{  asset('midnight/assets/js/prism.js') }}"></script>
        <script src="{{  asset('midnight/assets/js/wow.min.js')}}"></script>
        <script src="{{  asset('midnight/assets/js/viewport-units-buggyfill.js')}}"></script>
        <script src="{{  asset('midnight/midnight.jquery.js')}}"></script>
        <div id="button-btt">
            <a href="#"><i class="fa fa-chevron-up"></i> </a>
        </div>
        <script>
            function check_newsletter() {
                ok = true;
                $('#newsletterForm .error').removeClass('error');
                $('#newsletterForm .notNull').each(function () {
                    if ($(this).val() == '') {
                        $(this).addClass('error');
                        ok = false;
                    }
                }
                );
                return ok;
            }
            
            $(function () {
                $('.countcart').html('(93)');
            });
        </script>
        <nav id="menu">
            <ul>
                <li><a href="index.htm">Home</a>
                </li>
                <li><a href="gioi-thieu/index.htm">Giới thiệu</a>
                </li>
                <li><a href="noi-bear/index.htm">Mẹ và bé</a>
                </li>
                <li><a href="may-xay-bear/index.htm">Đồ dùng nhà bếp</a>
                </li>
                <li><a href="do-gia-dung-bear/index.htm">Sản phẩm HOT</a>
                </li>
                <li><a href="bep-bear/index.htm">Kinh nghiệm </a>
                </li>
                <li><a href="he-thong-chi-nhanh/index.htm">Chính sách đại lý</a>
                </li>
                <li><a href="videos/index.htm">Videos</a>
                </li>
            </ul>
        </nav>
        <link rel="stylesheet" href="css/widget-call.css">
        
        <script type="text/javascript" src="{{ asset('js/300/addthis_widget.js#pubid=xa-522d562834f75590')}}"></script>
    </body>
   
</html>