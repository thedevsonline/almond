<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\new_product;
// use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;

class VisiterController extends Controller
{
     public function index() {
        return view('visiter.home');
    }
    public function productlist () {
        $products=new_product::all();
         $categories=category::all();
        
        return view ('visiter.productList',compact('products','categories'));
    }
    public function productdetail($id) {
        $product=new_product::find($id);
        
        return view ('visiter.productdetails',compact('product'));
   
    }


}
