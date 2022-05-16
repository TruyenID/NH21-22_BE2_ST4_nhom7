<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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

        $products = DB::table('products')->orderBy('id')->Paginate(6);

        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');
        return view($name,compact('protypes',['products'=>$products],['topSell'=>$topSell]));
    }
    // function shop(){
    //     $products = DB::table('products')->orderBy('id')->Paginate(6);
    //     $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

    //      return view('shop',
    //     ['AlltopSell'=>$topSell],   
    //     ['Allproducts'=>$products]);
    // }
    // function register(Request $request){
    //     $request->flash();
    //     $data = $request->tname;
    //     return view('welcome',['name'=>$data]);
    // }
}
