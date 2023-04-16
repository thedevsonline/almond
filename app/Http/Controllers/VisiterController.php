<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\new_product;
use App\Models\review;
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
        $productsid= new_product::find($id)->id;
        $reviews=review::where('productid', '=', $productsid);
        
        return view ('visiter.productdetails',compact('product', 'reviews'));
   
    }





    public function storereview(Request $request) {


 
    $userid = auth()->user()->id;
    $image = auth()->user()->image;
    $name = auth()->user()->name;
    $email = auth()->user()->email;

        


        $addreview = new review;

       
        $addreview->remark = $request->reviewremark;
        $addreview->userid = $userid;
         $addreview->image = $image;
        if(auth()->user()){
        $addreview->email = $email;
        $addreview->name = $name;

        }
        else{
             $addreview->email = $request->revieweremail;
              $addreview->name = $request->reviewername;

        }
      
        $addreview->productid = $request->productidr;





        $addreview->save();
      
    return redirect()->back()->with('reviewadded','Your review has been uploaded successfully.');

   
}



}
