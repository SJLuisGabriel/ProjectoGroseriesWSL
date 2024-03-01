<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class SiteController extends Controller {

    public function index(){
        return view("index");
    }
    public function service(){
        return view("service");
    }   

    public function product(){
        return view("product");
    }

    public function contact(){
        return view("contact");
    }
}
