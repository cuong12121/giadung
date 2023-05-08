
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

@endsection