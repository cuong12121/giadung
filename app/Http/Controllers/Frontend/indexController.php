<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banners;
use App\Models\groupProduct;
use Illuminate\Support\Facades\Cache;
use App\Models\deal;
use App\Models\product;
use Carbon\Carbon;
use Session;
use App\Models\filter;

use Auth;
use DB;



class indexController extends Controller
{
    public function index()
    {
       
        $data = groupProduct::find(1);

        $household =[];

        $info_group = [];

        $group_show_info = [1,9,19];

        foreach($group_show_info as $val){

            $datas = groupProduct::find($val);

            $ar_product = json_decode($datas->product_id);

           

            $data = product::where('Price','>', 0)->whereIn('id', $ar_product)->where('active', 1)->take(10)->get();


            array_push($household, $data);


            array_push($info_group, $datas);

        }

    
        return view('frontend.index', compact('info_group', 'household'));
    }


    public function cache()
    {
        
        // $data = json_decode(filter::find(20)->value, true);

        // dd(1);

        $deal = deal::OrderBy('order', 'desc')->get();


        $groups = groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();

        if($deal->count()>0){

            $deal_start = $deal->first()->start;

            cache::put('deal_start', $deal_start,10000);

        }
        Cache::put('groups', $groups,10000);

    }

    public function cache1()
    {
        
        cache::forget('deal_start');

    
        Cache::forget('groups');

        Cache::forget('product_sale');
        
        Cache::forget('baners');

        $banners = banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();

        $product_sale = DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->get();

        $groups = groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();

        Cache::put('groups', $groups,10000);

        Cache::put('product_sale', $product_sale,10000);
        
        Cache::put('baners',$banners,10000);

        
    }

    public function deleteCache()
    {
        Cache::flush();
        echo "thanh cong";
    }

    public function showCart()
    {
        return view('frontend.cart');
    }

    public function addClick(Request $request)
    {
        $link = $request->link;

        $sessionKey = 'banner_click_'.$link;

        $sessionView = Session::get($sessionKey);

        $count = Cache::get('visited_banner_'.$link)??0;

        if (!$sessionView) { //nếu chưa có session

            Session::put($sessionKey, 1); //set giá trị cho session

            $count = Cache::increment('visited_banner_'.$link);   

        }

    }

    public function Cart()
    {
        return view('cart.cart');
    }

     
}