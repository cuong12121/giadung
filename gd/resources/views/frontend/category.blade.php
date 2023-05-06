
@extends('frontend.layouts.apps')
@section('content')


 <div class="content" style="background:#FFF">
        <div class="img-poster" style="position:relative"></div>
        <div class="c"></div>
            <div class="grid">
                <div class="crumb"><a href="../index.htm"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> <a href='index.htm'>Mẹ và bé</a></div>
                <div class="c5"></div>
            </div>
            <div class="c10"></div>
            <div class="grid">
                <h1 class="title-page"><a>Mẹ và bé</a></h1>
                <div class="c5"></div>
               
                <div class="c20" style="border-bottom:solid 1px #CCC;"></div>
                <div class="c20"></div>
                <div class="flex-container flex-space-between">

                    
                    @if(!empty($data)&& $data->count()>0)
                    @foreach($data as $value)
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
                <div class="paging">
                    <div class='paging1'><a href='page-1/index.htm' class='page disabled'><strong> <i class='fa fa-angle-double-left'></i>  </strong></a><a href='page-1/index.htm' class='page disabled'><strong> <i class='fa fa-angle-left'></i> </strong></a><a class='clicked page'>&nbsp;1&nbsp;</a><a href='page-2/index.htm' class='page'>&nbsp;2&nbsp;</a> <a href='page-2/index.htm' class='page '><strong> <i class='fa fa-angle-right'></i> </strong></a> <a href='page-2/index.htm' class='page '><strong>  <i class='fa fa-angle-double-right'></i> </strong></a></div>
                </div>
                <div class="c5"></div>
            </div>
        </div>
    </div>

@endsection