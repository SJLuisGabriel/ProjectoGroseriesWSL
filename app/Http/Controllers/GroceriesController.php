<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Products;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class GroceriesController extends Controller {

    public function index(){
        return view("groceries.index");
    }
    public function shop(){
        $categories = Category::all();
        $product = Products::all();

        $categoryMeats = Category::where('name', 'Meats')->first();
        if ($categoryMeats) $meatsCategory = Products::where('category_id', $categoryMeats->id)->get();
        else $meatsCategory = [];

        $categoryVegetables = Category::where('name', 'Vegetables')->first();
        if ($categoryVegetables) $vegatablesCategory = Products::where('category_id', $categoryVegetables->id)->get();
        else $vegatablesCategory = [];

        $categoryFishes = Category::where('name', 'Fishes')->first();
        if ($categoryFishes) $fishesCategory = Products::where('category_id', $categoryFishes->id)->get();
        else $fishesCategory = [];

        $categoryFruits = Category::where('name', 'Fruits')->first();
        if ($categoryFruits) $fruitsCategory = Products::where('category_id', $categoryFruits->id)->get();
        else $fruitsCategory = [];

        return view("groceries.shop", 
        compact('categories','product','meatsCategory','vegatablesCategory','fishesCategory','fruitsCategory') );
    }   

    public function register(){
        return view("groceries.register");
    }

    public function login(){
        return view("groceries.login");
    }

    public function about(){
        return view("groceries.about");
    }

    public function cart(){
        return view("groceries.cart");
    }

    public function checkout(){
        return view("groceries.checkout");
    }

    public function contact(){
        return view("groceries.contact");
    }

    public function detailproduct($id){
        $product = Products::with('category')->find($id);
        $category = $product->category;
        $categoryProducts = Products::where('category_id', $category->id)
                                ->where('id', '!=', $product->id)
                                ->get();
    
        $comments = Comment::where('product_id', $product->id)->get();

        $categories = Category::all();

        return view("groceries.detailproduct", compact('product','categoryProducts','categories','comments'));
    }

    public function faq(){
        return view("groceries.faq");
    }

    public function privacy(){
        return view("groceries.privacy");
    }

    public function setting(){
        return view("groceries.setting");
    }

    public function terms(){
        return view("groceries.terms");
    }

    public function transaction(){
        return view("groceries.transaction");
    }

    public function admin(){
        return view("groceries.admin");
    }
    
}
