<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
// use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
class OwnerController extends Controller
{
    



    public function login(){
        return view ('login');
        
    }
    public function signup(){
        return view ('signup');

    }
    
    public function index() {
        return view('owner.home');
    }
    public function productlist () {
        $products=Product::all();
        
        return view ('owner.productList',compact('products'));
    }
    public function productdetail($id) {
        $product=Product::find($id);
        
        return view ('owner.productDetails',compact('product'));
   
    }
    // public function pro(){
    //     return view('owner.pro');
    // }
        public function upload_product(){
        return view('owner.uploadproduct');
    }
    public function sellers(){
        $sellers=User::where("role", "=", "seller")->get();
        return view('owner.sellers',compact('sellers'));
    }
    public function profile($id){
        $profile=User::find($id);
        return view('owner.profile',compact('profile'));
    }
    public function home (){
    


        return view('owner.adminHome');
    }


    
    public function addCategory(){
        return view ('owner.addCategory');
    }
   public function storeCategory(Request $request) {
    $validator = Validator::make($request->all(), [
        'category' => 'required|string',
    ]);
    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }
    $userid = auth()->user()->id;
    $addCategory = new Category([
        'categories' => $request->input('category'),
        'userid' => $userid,
    ]);
    $addCategory->save();
    return redirect('/');
}
s
}
