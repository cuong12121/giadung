<!doctype html>
<html>
    <head>
        <img width="99999" height="99999" style="pointer-events: none; position: absolute; top: 0; left: 0; width: 95vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+">    
        <meta charset="utf-8">

       
        @if(!empty($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content }}"/>
        <meta property="og:title" content="{{ $meta->meta_title }}" />
        

        <meta property="og:description" content="{{ $meta->meta_content }}" /> 
        <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
       
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
        <meta http-equiv="Content-Language" content="VN">
        <meta name="description" content="">
        <meta name="keywords" content="">
       
        <meta property="og:type" name="og:type" content="website" data-app="">
        <meta property="og:description" name="og:description" content="" data-app="">
        <meta property="og:title" name="og:title" content="Gia Dụng " data-app="">
        <meta property="og:image" name="og:image" content="" data-app="">
        <link href="favicon.ico" rel="shortcut icon">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}?ver=8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/jquery-1.10.1.min.js')}}"></script>
        <script src="{{ asset('js/swiper.min.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- test thư viện bootstrap -->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            .item-cart .form-control, .cartItem, .title-cart-pro, .item-c-btn button{
                font-size: 2rem !important;
            }
            .item-c-total{
                font-size: 2rem !important;
            }

            .shopping-cart{
                margin-top: 0;
            }

            .news a{
                padding-left: 20px;
            }

            .item_in_cart{
                font-weight: bold !important;
            }

           
            .search-header{
                display: flex;
                align-items: center;
            }

            .box-head-3{
                display: flex;
                align-items: center;
            }

            .icon-cart a{
                float:left;
                font-size: 18px;
            }

            .icon-cart{
                font-size: 18px;
            }

            .hotline{
                color:#fff;
                font-size: 18px;
            }

            .shopping-cart a{
                font-size: 18px;
            }

            .item_in_cart{
                margin-left: 5px;
            }
        </style>

        
    </head>
    <body>

        <div id="page">
    <div class="header hide-on-tab hide-on-mobile">
        <div class="grid">
            <div class="flex-container flex-space-between">
                <div class="cell-3-12">
                    <div class="c5"></div>
                    <div class="logo"><a href="{{ route('homeFe') }}"><img src="../uploaded/logo/logo.png" alt="LogoSite" style="max-width:100%; margin:0 auto"></a></div>
                    <div class="c5"></div>
                </div>
                <div class="cell-5-12 search-header" style="position:relative;">
                   
                    <div class="search-pc">
                        <form action="{{ route('search-product-frontend') }}" method="get" id="searchformtab">
                            <input name="key" class="kw" placeholder="Tìm kiếm " type="text" id="kws" required>
                            <a href="#" class="fa fa-search submit-search-pc" onclick="$('#searchformtab').submit();return false;"><img style="float: left;"></a>
                        </form>
                    </div>
                   
                </div>
                <?php 

                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                                                
                    $number_cart_home = count($cart);

                ?>
               
                <div class="cell-4-12 box-head-3">
                
                    <div class="shopping-cart">
                       
                        <div class="icon-cart">

                            <span class="item_in_cart countcarts">{{ $number_cart_home }}</span>

                            <a href="{{ route('cart-tgtl') }}">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                             </a>
                            
                            
                            
                        </div>

                         <div class="hotline">
                            <span>Hotline: </span>  <a href="tel:0348949926">098.361.2828</a>
                        </div>
                    </div>
                    
                    

                    <div class="hotline news">
                        <a href="{{ route('details', 'tin-tuc') }}">Tin tức</a>
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
                <div class="logo-mobile"> </div>
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
                <ul class="nav  hide-on-tab hide-on-mobile dropdown">
                    <li class="{{ Route::currentRouteName()==='homeFe'?'active':'' }}" style="background:url() center left no-repeat; "> <a href="/" class="">Home </a>
                    </li>

                    <?php 

                        $menu = App\Models\groupProduct::select('link', 'name', 'id')->where('parent_id', 100)->get();
                    ?>
                    @if(!empty($menu) && $menu->count()>0)
                    @foreach($menu as $key=> $value)
                    <li class="{{  !empty($link)&&$link ===$value->link?'active':'' }}" style="background:url() center left no-repeat; "> 
                        <a href="{{ route('details', $value->link??'') }}"  class="parent_menu" data-id="dropdownMenuButton_{{ $key }}">{{ $value->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_{{ $key }}" id="dropdownMenuButton_{{ $key }}">

                            <?php 

                                $child_menu = App\Models\groupProduct::select('link', 'name')->where('parent_id', $value->id)->get();
                            ?>
                            @if($child_menu->count()>0)
                            @foreach($child_menu as $childmenus)
                            <a class="dropdown-item" href="{{ route('details', $childmenus->link??'') }}">{{ @$childmenus->name }}</a>

                            @endforeach
                            @endif
                        </div>

                    </li>

                    
                    @endforeach

                    @endif

                    <li class="" style="background:url() center left no-repeat; "> <a href="{{ route('details', 'may-loc-nuoc') }}" class="">Máy lọc nước </a> </li>
                   
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
                @if(!empty($menu) && $menu->count()>0)
                @foreach($menu as $key=> $value)
                <li><a href="{{ route('details', $value->link) }}">{{ $value->name }}</a>
                </li>
                @endforeach
                @endif
                
            </ul>
        </nav>
        <link rel="stylesheet" href="css/widget-call.css">
        
        <script type="text/javascript" src="{{ asset('js/300/addthis_widget.js#pubid=xa-522d562834f75590')}}"></script>

        <script>

        $(function() {
            $("#kws").autocomplete({

                minLength: 2,
                
                source: function(request, response) {
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }


                    });
                    $.ajax({

                        url: "{{  route('sugest-click')}}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            product:$('#kws').val()
                        },
                        dataType: "json",
                        success: function (data) {
                            var items = data;

                            response(items);

                            $('#ui-id-1').html();

                            $('#ui-id-1').html(data);
                        
                        }
                    });
                },
                html:true,
            });
        });  

        function showChildMenu(id) {

            console.log(id);
            
            const div = $('#'+id);

            $('.dropdown-menu').hide();

            if(div.is(':visible')){

                div.hide();
            }
            else{
                div.show();
            }
        }

        $(".parent_menu").mouseenter(function(){


            const id = $( this ).attr('data-id');

            const div = $('#'+id);

            $('.dropdown-menu').hide();

            div.show();

        })

        $(".nav li").mouseleave(function(){
            
           $('.dropdown-menu').hide();
            
        });


         function addCartFast(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('addcartfast') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
    
                $('.countcarts').text(result);
                alert('Thêm sản phẩm vào giỏ hàng thành công !');

            }
        });
        
    }

          </script>
    </body>
   
</html>