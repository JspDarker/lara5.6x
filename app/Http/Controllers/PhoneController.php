<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class PhoneController extends Controller
{
    public function index()
    {
        $sp = Product::all();
        $categories = Category::where('id_parent',`is null`)->get();
        //go to view $sp->category->url_type;
        return view('phone.index', compact('sp','categories'));
    }

    public function girdProducts($type)
    {
        $id = Category::where('url_type','=',"$type")->select('id','name','id_parent')->first();

        $categories_id = $id->id; //1

        $id_line = $id->id_parent;

        if($categories_id <= 3) {
            $products = Product::where('categories_id','=',"$categories_id")->get();
            $cate = Category::where('id_parent','=',"$categories_id")->get();
        } else {
            $products = Product::where('product_line','=',"$categories_id")->get();
            $cate = Category::where('id_parent','=',"$id_line")->get();
        }

        $categories_name = $id->name; //name of where $type

        return view('phone.girds', compact('products','type','cate','categories_name'));
    }


    public function singleProduct($type, $alias, $id)
    {

        $single = Product::find($id);

        if($single) {
            $single->first();
            return view('phone.single', compact('single'));
        }
        return redirect()->back();
    }
}
