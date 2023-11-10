<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

use Validator;

use DB;

use App\Imports\QuantityImport;

use Illuminate\Support\Facades\Cache;

class importQuantityController extends Controller
{
    public function index()
    {
        return view('import');
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'file' => 'required|max:1000|mimes:xls,xlsx',
           
        ]);
        
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();
        }
        else{
            $data = Excel::import(new QuantityImport,request()->file('file'));

            $datas = DB::table('check_qualtity')->get();

            $product_update = [];

            if(!empty($datas) && $datas->count()>0){
                foreach ($datas as  $value) {
                    if(!empty($value->qualtity) && $value->qualtity>0){

                         $checkPD = DB::table('products')->where('ProductSku', trim($value->model))->first();

                        if(!empty($checkPD)){
                            $update = DB::table('products')->where('ProductSku', trim($value->model))->update(['Quantily'=>$value->qualtity]);

                            array_push($product_update, $value->model);


                        }
                    }
                   
                    
                    
                }
            }

            if(Cache::has('product_update')){
                Cache::forget('product_update');
            }

            Cache::forever('product_update',$product_update);

            DB::table('check_qualtity')->delete();
            
            return back()->with('success', 'thành công');
        }
 
        
    }
}
