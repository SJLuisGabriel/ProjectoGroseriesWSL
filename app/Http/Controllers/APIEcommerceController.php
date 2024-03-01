<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class APIEcommerceController extends Controller{
    public function Products(){
        // $products = Products::all();
        $products = Products::with("category")->get();
        return response()->json($products);
    }

    public function product_td(){
        $product_td = Products::with("category")->get();
        return response()->json(["data"=>$product_td]);
    }

    public function category (){
        $categories = Category::all();
        return response()->json(["data"=>$categories]);
    }
}