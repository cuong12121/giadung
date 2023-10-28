<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

use App\Models\groupProduct;

use App\Models\product;

class sitemapController extends Controller
{
   public function index()
   {
    
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');

   }

   public function brand()
   {
        $data        = groupProduct::where('parent_id', 35)->get();

        return response()->view('sitemap.brand', [
            'data' => $data,
        ])->header('Content-Type', 'text/xml');
   }

   public function sitemapChildProduct()
   {

    $data        = groupProduct::find(1);

    $data_household = groupProduct::find(9);

    $product_data_1  = json_decode($data->product_id);

    $product_data_2  = json_decode($data_household->product_id);

    $product_add     = array_merge($product_data_1, $product_data_2);

    $product   =  product::whereIn('id',  $product_add)->orderBy('id', 'desc')->take(280)->get();

     return response()->view('sitemap.child', [
            'product' => $product,
     ])->header('Content-Type', 'text/xml');
   }
   public function sitemapChildBlog()
   {
    $blog = post::take(160)->OrderBy('id', 'desc')->get();

    
       return response()->view('sitemap.childs_blog', [
            'blog' => $blog
        ])->header('Content-Type', 'text/xml');
   }
   



}

