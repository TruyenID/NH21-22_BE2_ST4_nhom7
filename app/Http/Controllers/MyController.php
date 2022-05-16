<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Manufacture;
use App\Models\Protype;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index($name = 'index'){
        $user = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view($name,compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','user'))
       ;
    }
    public function show($id, $type_id)
    {
        $shop = Product::where('id', '=', $id)->select('*')->first();
        $products = Product::where('type_id', '=',$type_id)->get();
        $des = html_entity_decode($shop->description);
        return view('single-product', compact('shop','products', 'des'));
    }
    // function register(Request $request){
    //     $request->flash();
    //     $data = $request->tname;
    //     return view('welcome',['name'=>$data]);
    // }
}
