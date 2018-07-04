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

        return view('phone.index', compact('sp','categories'));
    }

    public function girdProducts($type)
    {
        $id = Category::where('url_type','=',"$type")->select('id','name')->first();

        $categories_id = $id->id; //1

        $products = Product::where('categories_id','=',"$categories_id")->get();

        $categories_name = $id->name; //name of where $type
        $cate = Category::where('id_parent','=',"$categories_id")->get();

        return view('phone.girds', compact('products','type','cate','categories_name'));
    }
}
