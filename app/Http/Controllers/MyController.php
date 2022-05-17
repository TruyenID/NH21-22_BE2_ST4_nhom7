<?php
namespace App\Http\Controllers;
use App\Models\Manufacture;
use App\Models\Protype;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\table;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
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
        //Tìm kiếm sản phẩm theo key
        if($key = request()->key){
            $products = DB::table('products')->orderBy('id')->where('name', 'like','%'.$key.'%')->Paginate(6);
        }


        return view($name,compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))

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
    //Lấy id sản phẩm và type_id
    public function show($id, $type_id)
    {
        $shop = Product::where('id', '=', $id)->select('*')->first();
        $products = Product::where('type_id', '=',$type_id)->get();
        $des = html_entity_decode($shop->description);
        return view('single-product', compact('shop','products', 'des'));
    }
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('admin.dashboard');
        }else{
            return Redirect::to('admin.login_admin')->send();
        }
    }
    public function getProtypes($type_id)
    {
        $protypes = DB::table('protypes')->get();
        $protype_id = Protype::where('type_id',$type_id)->first();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        // $products_pt = DB::table('products')->orderBy('id')->Paginate(6);
        $products = Product::where('type_id',$protype_id->type_id)->Paginate(3);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('/shop',compact('protypes','topSell',   
        'products','protype_id'));
    }
    public function show_shop()
    {
        $protypes = DB::table('protypes')->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');
        return view('/shop',compact('protypes','topSell','products'));
    }
    public function show($id, $type_id)
    {
        $shop = Product::where('id', '=', $id)->select('*')->first();
        $products = Product::where('type_id', '=',$type_id)->get();
        $des = html_entity_decode($shop->description);
        return view('single-product', compact('shop','products', 'des'));
    }
}
