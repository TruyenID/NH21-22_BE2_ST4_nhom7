<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers\table;
use Illuminate\Support\Facades\Redirect;
use App\Models\Protype;
use App\Models\Manufacture;
session_start();

class MyController extends Controller
{
    function index($name = 'index')
    {
        $protypes = DB::table('protypes','products')->get();
        $products = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();

        return view($name,compact('Allprotypes','Allproducts','AlltopSell'));
    }
    function shop(){
        $protypes = DB::table('protypes','products')->get();
        $products = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        return view('shop',['getAllprotype'=> $protypes],['data'=>$products],['topSelling'=>$topSell]);
        
        // return view('shop',compact('protypes','products','topSell'));
    }
    // function register(Request $request){
    //     $request->flash();
    //     $data = $request->tname;
    //     return view('welcome',['name'=>$data]);
    // }
}
