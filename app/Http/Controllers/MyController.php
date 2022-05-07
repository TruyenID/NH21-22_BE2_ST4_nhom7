<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Manufacture;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index($name = 'index'){
        $products = Product::where('id','>',0)->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $manufactures = Manufacture::where('manu_id','>',1)->get();
        return view($name,
        ['topSelling'=>$topSell],
        ['data'=>$products],
        ['manufacturesAll'=>$manufactures]);
    }
    // function register(Request $request){
    //     $request->flash();
    //     $data = $request->tname;
    //     return view('welcome',['name'=>$data]);
    // }
}
