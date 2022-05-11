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

class ControllerAdmin extends Controller
{
    public function add_product(){
        $manufactures =  DB::table('manufactures')->get();
        $getAllManu = view('addproduct')->with('all_manu', $manufactures);
        return view('addproduct');
    }
    public function save_product(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['manu_id'] = $request->manu;
        $data['type_id'] = $request->type;
        $data['price'] = $request->price;
        $data['image'] = $request->file('image')->store('', 'local');
        $data['description'] = $request->des;
        $data['feature'] = $request->feature;
        $target_dir ="../img/";
        $target_file = $target_dir . basename($request->file('image')->store('', 'local'));
        move_uploaded_file($request->file('image')->store('', 'local'), $target_file);
        DB::table('products')->insert($data);

        return Redirect::to('admin_products');
    }
    public function delete_product(){

    }
    public function getManu(){
        $manufactures = DB::table('manufactures')->get();
        return view('shop',['getAllManu'=> $manufactures]);
        
    }
    public function getProtype(){
        $protypes = DB::table('protypes','products')->get();
        $products = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        // return view('shop',['getAllprotype'=> $protypes],['data'=>$products],['topSelling'=>$topSell]);
        return view('shop',compact('protypes','products','topSell'));
        
    }
}
