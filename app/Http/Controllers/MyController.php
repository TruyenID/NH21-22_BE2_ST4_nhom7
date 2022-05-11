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
        $protypes = Protype::where('type_id','>',0)->get();
        $products = Product::where('id','>',0)->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view($name,
        ['topSelling'=>$topSell],   
        ['data'=>$products],
        ['protype'=> $protypes]);
    }
    // function register(Request $request){
    //     $request->flash();
    //     $data = $request->tname;
    //     return view('welcome',['name'=>$data]);
    // }
}
