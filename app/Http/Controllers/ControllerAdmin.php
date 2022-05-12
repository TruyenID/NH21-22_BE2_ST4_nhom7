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
    public function save_manufacture(Request $request){
        $data = array();
        $data['manu_name'] = $request->manu_name;
        DB::table('manufactures')->insert($data);
        return Redirect::to('admin_manufactures');
    }
    public function save_protype(Request $request){
        $data = array();
        $data['type_name'] = $request->type_name;
        DB::table('protypes')->insert($data);
        return Redirect::to('admin_protypes');
    }
    public function save_user(Request $request){
        $data = array();
        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        DB::table('users')->insert($data);
        return Redirect::to('admin_user');
    }
}

