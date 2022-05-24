<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Session;
use App\Http\Controllers\table;
use Illuminate\Support\Facades\Redirect;
use App\Models\Protype;
use App\Models\Manufacture;
session_start();

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        echo "Day la trang index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "day la trang create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "Day la trang store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "Day la trang show ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Chỉnh Sửa Sản Phẩm
    public function edit($id)
    {
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $products =  Product::find($id);
        return view('admin.admin_editproduct',compact('products','manufactures','protypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //cập Nhất Sản Phẩm
    public function update(Request $request, $id)
    {

        $data = array();
        // $iddata =  Product::find($id);
        $data['name'] = $request->name;
        $data['manu_id'] = $request->manu;
        $data['type_id'] = $request->type;
        $data['price'] = $request->price;
        $data['description'] = $request->des;
        $data['feature'] = $request->feature;
        
        // DB::table('products')->where('id',$id)->update($data);

        // return Redirect::to('admin_products')->with("status","Data Update Successfully");
        $get_image = $request->file('image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_imgae = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('../public/assets/img',$new_imgae);
            $data['image'] = $new_imgae;
            DB::table('products')->where('id',$id)->update($data);
            return Redirect::to('admin.admin_products');    
        }
        $data['image'] = '';
        DB::table('products')->where('id',$id)->update($data);
        return Redirect::to('admin.admin_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Xóa Sản phẩm
    public function destroy($id)
    {
        DB::table('products')->delete($id);
        return Redirect::to('admin.admin_products');
    }
}
