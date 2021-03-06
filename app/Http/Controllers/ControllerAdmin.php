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

    //Thêm Sản Phẩm Admin
    public function save_product(Request $request){ 
        $data = array();
        $data['name'] = $request->name;
        $data['manu_id'] = $request->manu;
        $data['type_id'] = $request->type;
        $data['price'] = $request->price;

        $data['description'] = $request->des;
        $data['feature'] = $request->feature;
        $get_image = $request->file('image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_imgae = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('../public/assets/img',$new_imgae);
            $data['image'] = $new_imgae;
            DB::table('products')->insert($data);
            return Redirect::to('admin.admin_products');    
        }
        $data['image'] = '';
        DB::table('products')->insert($data);
        return Redirect::to('admin.admin_products');
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
    //Thêm Hãng Sản Xuất 
    public function save_manufacture(Request $request){
        
        $data = array();
        $data['manu_name'] = $request->manu_name;
        DB::table('manufactures')->insert($data);
        return Redirect::to('admin.admin_manufactures');
    }
    //Thêm Loại Sản Phẩm
    public function save_protype(Request $request){
        
        $data = array();
        $data['type_name'] = $request->type_name;
        DB::table('protypes')->insert($data);
        return Redirect::to('admin.admin_protypes');
    }
    //Thêm User
    public function save_user(Request $request){
        $data = array();
        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        DB::table('users')->insert($data);
        return Redirect::to('admin.admin_users');
    }
    //Chỉnh Sửa Hãng Sản Phẩm
    public function edit_manufacture($manu_id)
    {   
        $this->AuthLogin();
        $protypes = DB::table('protypes')->get();
        $manufactures =  DB::table('manufactures')->where('manu_id',$manu_id)->get();
        return view('admin.admin_editmanufacture',compact('manufactures','protypes'));
    }
    //Cập nhật Hãng Sản Phẩm
    public function update_manufacture(Request $request, $manu_id)
    {
        $this->AuthLogin();
        $data = array();
        // $iddata =  Product::find($id);
        $data['manu_name'] = $request->manu_name;
        
        DB::table('manufactures')->where('manu_id',$manu_id)->update($data);

        return Redirect::to('admin.admin_manufactures')->with("status","Data Update Successfully");
    }
    //Chỉnh Sửa Loại Sản Phẩm
    public function edit_protype($type_id)
    {   
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $protypes =  DB::table('protypes')->where('type_id',$type_id)->get();
        return view('admin.admin_editprotype',compact('protypes','manufactures'));
    }
    //Cập Nhật Loại Sản phẩm
    public function update_protype(Request $request, $type_id)
    {
        $this->AuthLogin();
        $data = array();
        // $iddata =  Product::find($id);
        $data['type_name'] = $request->type_name;
        
        DB::table('protypes')->where('type_id',$type_id)->update($data);

        return Redirect::to('admin.admin_protypes')->with("status","Data Update Successfully");
    }
    //Cập nhật User
    public function update_user(Request $request,$id)
    {
        $this->AuthLogin();
        $data = array();
        // $iddata =  Product::find($id);
        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        
        DB::table('users')->where('id',$id)->update($data);

        return Redirect::to('admin.admin_users')->with("status","Data Update Successfully");
    }
    //Chỉnh Sửa User
    public function edit_user($id)
    {   
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $users =  DB::table('users')->where('id',$id)->get();
        return view('admin.admin_edituser',compact('users','manufactures'));
    }
    //Xóa User
    public function destroy_user($id)
    {
        $this->AuthLogin();
        DB::table('users')->where('id',$id)->delete();
        return Redirect::to('admin.admin_users');
    }
     //Xóa User
     public function destroy_question($id)
     {
         $this->AuthLogin();
         DB::table('question')->where('id',$id)->delete();
         return Redirect::to('admin.admin_question');
     }
    //Xóa billing
    public function destroy_billing($id)
    {
        $this->AuthLogin();
        DB::table('billings')->where('id',$id)->delete();
        return Redirect::to('admin.admin_billings');
    }
    //Xóa Hãng Sản phẩm
    public function destroy_manu($manu_id)
    {
        $this->AuthLogin();
        DB::table('manufactures')->where('manu_id',$manu_id)->delete();
        return Redirect::to('admin.admin_manufactures');
    }
    //Xóa Loại Sản phẩm
    public function destroy_type($type_id)
    {
        $this->AuthLogin();
        DB::table('protypes')->where('type_id',$type_id)->delete();
        return Redirect::to('admin.admin_protypes');
    }
    //Xóa Admin
    public function destroy_admin($id)
    {
        $this->AuthLogin();
        DB::table('admins')->where('id',$id)->delete();
        return Redirect::to('admin.admin');
    }
    // Xóa bình luận và đánh giá
    public function destroy_review_ratings($id)
    {
        $this->AuthLogin();
        DB::table('review_ratings')->where('id',$id)->delete();
        return Redirect::to('admin.admin_reviewRatings');
    }
    // Chặn Admin
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('admin.dashboard');
        }else{
            return Redirect::to('admin.login_admin')->send();
        }
    }
    //Hiển thị review_ratings
    public function show_admin_review_ratings(){
        $this->AuthLogin();
        
        $review_ratings = DB::table('review_ratings')->get();
        $billings = DB::table('billings')->get();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');
        return view('admin.admin_reviewRating',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users','billings','review_ratings'))
       ;
    }
    // Hiện Thị Billing
    public function show_admin_billing(){
        $this->AuthLogin();
        
        $billings = DB::table('billings')->get();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');
        return view('admin.admin_billings',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users','billings'))
       ;
    }
    // Hiện Thị Billing
    public function show_admin_question(){
        $this->AuthLogin();
        $question =  DB::table('question')->get();
        $billings = DB::table('billings')->get();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');
        return view('admin.admin_question',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users','billings','question'))
       ;
    }
    // Hiện Thị Trang chủ Admin
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    // Hiển thị thêm user
    public function show_admin_adduser(){
        $this->AuthLogin();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.adduser',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    //Hiển Thị Thêm Admin
    public function show_admin_addadmin(){
        $this->AuthLogin();
        $admins = DB::table('admins')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.adduser',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','admins'))
       ;
    }
    //Lưu thêm Admin
    public function save_admin(Request $request){
        $data = array();
        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        DB::table('admins')->insert($data);
        return Redirect::to('admin.admin');
    }
    /// Hiển thị thêm sản phẩm
    public function show_admin_addproduct(){
        $this->AuthLogin();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.addproduct',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    // Hiển thị thêm Loại Sản Phẩm
    public function show_admin_addprotype(){
        $this->AuthLogin(); 
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.addprotype',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    // Hiển Thị Hãng Sản Phẩm
    public function show_admin_addmanufacture(){
        $this->AuthLogin();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.addmanufacture',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    //Hiển thị User
    public function show_admin_user(){
        $this->AuthLogin();

         $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.admin_users',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    // Hiển Thị Admin
    public function show_admin(){
        $this->AuthLogin();

        $admins = DB::table('admins')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.admins',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','admins'))
       ;
    }
    // Hiển Thị Product
    public function show_admin_product(){
        $this->AuthLogin();

       
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.admin_products',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    //Hiển Thị manufacture
    public function show_admin_manufacture(){
        $this->AuthLogin();

         $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.admin_manufactures',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    // Hiển thị protype
    public function show_admin_protype(){
        $this->AuthLogin();
        $users = DB::table('users')->get();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();
        $topSell = Product::where('feature','=',1)->get();
        //  = Product::where('manu_id','=',1)->get();
        $products = DB::table('products')->orderBy('id')->Paginate(6);
        $topSell = DB::table('products')->where('feature','=',1)->Paginate($perPage = 3, $columns = ['*'], $pageName = 'topSell');

        return view('admin.admin_protypes',compact('protypes','topSell',   
        'products','protypes','manufactures','Allproducts','users'))
       ;
    }
    //Login 
    public function dashboard(Request $request){
        $email = $request->admin_email;
        $password = md5($request->admin_password);

        $result = DB::table('admins')->where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            return Redirect::to('admin.dashboard');
        }else
        {
            Session::put('message','Incorrect email or password !');
            return Redirect::to('admin.login_admin');
        }

    }
    //Logout
    public function logout(){
        $this->AuthLogin();
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('index');
    }
}

