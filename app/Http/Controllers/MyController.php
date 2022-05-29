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
use App\Models\ReviewRating;
use App\Models\Post;
session_start();


class MyController extends Controller
{
    //Hiển Thị Tất Cả Sản Phẩm , Sản Phẩm Bán chạy
    function index($name = 'index'){
       
        $carts = session()->get('carts');
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        $products = DB::table('products')->orderBy('id','DESC')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');
        //Tìm kiếm sản phẩm theo key
        if($key = request()->key){
            $products = DB::table('products')->orderBy('id')->where('name', 'like','%'.$key.'%')->Paginate(6);
        }


        return view($name,compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users','carts'))

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
        // $products = DB::table('products')->orderBy('id')->Paginate(6);
        //lấy đánh giá có post_id trùng với id sản phẩm đang chọn
        $review_ratings = ReviewRating::where('post_id', '=',$id)->get();
        $des = html_entity_decode($shop->description);
        return view('single-product', compact('shop','products', 'review_ratings','des'));
    }
    public function AuthLogin(){
        $id = Session::get('name');
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
        //Tìm kiếm sp theo key
        if($key = request()->key){
            $products = DB::table('products')->orderBy('id')->where('name', 'like','%'.$key.'%')->Paginate(6);
        }
        return view('/shop',compact('protypes','topSell','products'));
    }
    //Add To Cart
    public function add_cart_ajax($id)
    {
        // session()->flush();
      
        $cart = session()->get('carts');
        $products = Product::find($id);
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }else{
            $cart[$id] = [
                'name' => $products->name,
                'price' => $products->price,
                'quantity' => 1,
                'image' => $products->image,
            ];
        }
        session()->put('carts',$cart);
        return response()->json([
            'code' => 200,
            'message'=> 'success'
        ],200);
       
    }
    //Show Cart
    public function show_cart()
    {
        $cart = session()->get('carts');
        // print_r($cart);
        return view('/cart')->with('cart');
    }
    public function update_cart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('carts');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('carts',$cart);
            $cart = session()->get('carts');
            $cartView = view('cart')->with('cart')->render();
            return response()->json(['carts'=> $cartView,code=>200],200);
        }
    } 
    public function delete_cart(Request $request)
    {
        if($request->id){
            $cart = session()->get('carts');
            unset($cart[$request->id]);
            session()->put('carts',$cart);
            $cart = session()->get('carts');
            $cartView = view('/cart')->with('cart')->render();
            return response()->json(['carts'=> $cartView,code=>200],200);
        }
    }

    public function save_placeOrder(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['phone'] = $request->tel;
        $data['saysomething'] = $request->bill;
        DB::table('billings')->insert($data);
        return Redirect::to('checkout');
    }
    public function save_question(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        DB::table('question')->insert($data);
        return view('contact');
    }
}
