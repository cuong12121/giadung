<!doctype html>
<html>
    <head>
          
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
       
         <link rel="icon" href="{{ asset('uploaded/logo/favicon.ico') }}" type="image/x-icon">

         
        <meta property="og:description" name="og:description" content="" data-app="">
        <meta property="og:title" name="og:title" content="Gia Dụng " data-app="">
        <meta property="og:image" name="og:image" content="" data-app="">
       

        <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}?ver=8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css')}}?ver=1">
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
            .header{
                height: auto;
            }

            .header .grid, .header .grid, .header .flex-space-between, .header .logo, .head-logo, .header img{
                height: 100% !important;
            }
            .header img, .header .logo{
                width: 100%;
            }

            .ui-id-1{
                z-index: 9999;
            }

            #dropdownMenuButton_100 a{
                font-size: 14px !important;
            }

            #submenu-2{
                width: 1000px !important;
                display: flex;
            }

             .drop-menu{
                width: 220px;
            }

            aside{
                width: 30%;
            }

            @media only screen and (max-width: 767px) {
                .header-mobile {
                    background: #3bbcc6;
                }
            }
        </style>

        
    </head>


    <?php 

        $menu = App\Models\groupProduct::select('link', 'name', 'id', 'product_id')->where('parent_id', 0)->where('active', 1)->get();

        $menu_chunk = $menu->chunk(10);


    ?>
    <body>

        <div id="page">
    <div class="header hide-on-tab hide-on-mobile">
        <div class="grid">
            <div class="flex-container flex-space-between">
                <div class="cell-3-12 head-logo">
                   
                    <div class="logo"><a href="{{ route('homeFe') }}"><img src="../uploaded/logo/logo.png" alt="LogoSite" style="max-width:100%; margin:0 auto"></a></div>
                    
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
                <div class="logo-mobile"> 
                    <a href="{{ route('homeFe') }}"><img src="../uploaded/logo/logo.png" alt="LogoSite" style="max-width:100%; margin:0 auto"></a>

                </div>
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

                   <!--  <li class="{{ Route::currentRouteName()==='homeFe'?'active':'' }}"> 
                        <a href="/"  class="parent_menu" data-id="dropdownMenuButton_100">Tất cả danh mục </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_100" id="dropdownMenuButton_100" style="display: none;"> 

                            <div id="submenu-2" class="submenu">

                                @if(!empty($menu_chunk) && $menu_chunk->count()>0)


                                @for($i=0; $i<$menu_chunk->count(); $i++)

                                   
                                <aside>
                                    @foreach($menu_chunk[$i] as $value)
                                    <a href="{{ route('details', $value->link) }}" class="">
                                        {{ $value->name }}
                                    </a>
                                     @endforeach
                                </aside>
                               
                                @endfor
                                @endif
                            </div>
                            
                        </div>

                    </li> -->

                    <li class="{{ Route::currentRouteName()==='homeFe'?'active':'' }}"> <a href="/" class="">Home </a>
                    </li>

                 
                    
                    @if(!empty($menu) && $menu->count()>0)

                    <?php 

                        $count = 0;
                    ?>
                    @foreach($menu as $key=> $value)

                   

                    @if(!empty(json_decode($value->product_id)) && count(json_decode($value->product_id))>10 )
                     <?php 

                        $count++;
                    ?>
                    <li class="{{  !empty($link)&&$link ===$value->link?'active':'' }}"> 
                        <a href="{{ route('details', $value->link??'') }}"  class="parent_menu" data-id="dropdownMenuButton_{{ $key }}">{{ $value->name }}</a>
                        <div class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton_{{ $key }}" id="dropdownMenuButton_{{ $key }}">

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
                    <?php 

                        if($count>6){
                            break;
                        }
                    ?>


                    @endif

                    
                    @endforeach


                    @endif

                    <li> <a href="{{ route('details', 'may-loc-nuoc') }}" class="">Máy lọc nước </a> </li>
                   
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