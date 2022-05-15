<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Manufacture;
use App\Models\Protype;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\table;
use Illuminate\Support\Facades\Redirect;
session_start();


class MyController extends Controller
{
    //Hiển Thị Tất Cả Sản Phẩm , Sản Phẩm Bán chạy
    function index($name = 'index'){
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

<<<<<<< HEAD
        return view($name,compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
=======
        return view($name,compact('protypes','topSell', 'products','protypes','manufactures','Allproducts','user'))
>>>>>>> a085b691cc2fe5dd8c2310fee7b49db7e30ab8ea
       ;
    }
    function admin($name = 'dashboard'){
        // $this->AuthLogin();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view($name,compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('admin.dashboard');
        }else{
            return Redirect::to('admin.login_admin')->send();
        }
    }
    // function register(Request $request){
    //     $request->flash();
    //     $data = $request->tname;
    //     return view('welcome',['name'=>$data]);
    //}
}
