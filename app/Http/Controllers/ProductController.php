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
    public function edit($id)
    {
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $products =  Product::find($id);
        return view('admin_editproduct',compact('products','manufactures','protypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products =  Product::find($id);
        $products->name = $request->input('name');
        $products->manu_id = $request->input('manu');
        $products->type_id = $request->input('type');
        $products->price = $request->input('price');
        $products->image = $request->input('image');
        $products->description = $request->input('des');
        $products->feature = $request->input('feature');
        $products->update();
        return redirect('admin_products')->with("status","Data Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->delete($id);
        return Redirect::to('admin_products');
    }
}
