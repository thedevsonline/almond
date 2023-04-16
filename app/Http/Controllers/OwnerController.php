<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\new_product;
use App\Models\review;
use App\Models\cart;
use App\Models\order;

// use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\category;
class OwnerController extends Controller
{
    public function login()
    {
        return view("login")->with('login', ' you Have to login First To work On tHis function');
    }
    public function signup()
    {
        return view("signup");
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user()->role;

            if ($user == "owner") {
                return view("owner.index");
            } elseif ($user == "seller") {
                return view("seller.index");
            } else {
                return view("visitor.index");
            }
        } else {
            return view("visitor.index");
        }
    }

    public function productlist()
    {
        $products = new_product::all();
        $categories = category::all();
        if (Auth::check()) {

        $user = Auth::user()->role;

        // return response()->json(compact('user'));
        if ($user == "owner") {
            return view("owner.productList", compact("products", "categories"));
        } elseif ($user == "seller") {
            return view(
                "seller.productList",
                compact("products", "categories")
            );
        } elseif ($user == "visitor") {
            return view(
                "visitor.productList",
                compact("products", "categories")
            );
        }
         } else {
            return view("visitor.productList",
                compact("products", "categories"));
        }
    }

    public function productdetail($id)
    {
        $product = new_product::find($id);
        $productsid = new_product::find($id)->id;
        $reviews = review::where("productid", "=", $productsid)->get();

        if (Auth::check()) {
            $user = Auth::user()->role;

            if ($user == "owner") {
                return view(
                    "owner.productdetails",
                    compact("product", "reviews")
                );
            } elseif ($user == "seller") {
                return view(
                    "seller.productdetails",
                    compact("product", "reviews")
                );
            } elseif ($user == "visitor") {
                return view(
                    "visitor.productdetails",
                    compact("product", "reviews")
                );
            }
        } else {
            return redirect("login")->with('login', ' you Have to login First To work On tHis function');
        }
    }

    public function upload_product()
    {
        $categories = category::all();

        return view("owner.uploadproduct", compact("categories"));
    }
    public function allsellers()
    {
        $sellers = User::where("role", "=", "sellers")->get();

        if ($user == "owner") {
            return view("owner.sellers", compact("sellers"));
        } elseif ($user == "seller") {
            return view("seller.sellers", compact("sellers"));
        } else {
            return redirect("applyforseller");
        }
    }
    public function profile($id)
    {
        $profile = User::find($id);

        $user = Auth::user()->role;

        if ($user == "owner") {
            return view("owner.profile", compact("profile"));
        } elseif ($user == "seller") {
            return view("seller.profile", compact("profile"));
        } elseif ($user == "visitor") {
            return view("visitor.profile", compact("profile"));
        }
    }
    public function home()
    {
        if (Auth::check()) {
            $user = Auth::user()->role;

            if ($user == "owner") {
                return view("owner.adminHome");
            } elseif ($user == "seller") {
                return view("seller.adminHome");
            } else {
                return redirect("applyforseller");
            }
        } else {
            return redirect("login")->with('login', ' you Have to login First To work On tHis function');
        }
    }

    public function addCategory()
    {
        $user = Auth::user()->role;

        if ($user == "owner") {
            return view("owner.addCategory");
        } elseif ($user == "seller") {
            return view("seller.addCategory");
        } else {
            return redirect("applyforseller");
        }
    }
    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "category" => "required|string",
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $userid = auth()->user()->id;

        $addCategory = new Category();

        $image = $request->image;
        $imageName = time() . "." . $image->getClientOriginalExtension();
        $request->image->move("images", $imageName);

        $addCategory->categories = $request->category;
        $addCategory->userid = $userid;
        $addCategory->image = $imageName;

        $addCategory->save();

        return redirect()
            ->back()
            ->with("categoryadd", "Your category has been added successfully.");
    }

    public function store_product(Request $request)
    {
        $userid = auth()->user()->id;

        $addproduct = new new_product();

        $addproduct->product_name = $request->product_name;

        $image = $request->image;
        $imageName = time() . "." . $image->getClientOriginalExtension();
        $request->image->move("images", $imageName);

        $addproduct->image = $imageName;

        $addproduct->short_discription = $request->short_description;
        $addproduct->long_discription = $request->long_description;
        $addproduct->product_price = $request->singleProductPrice;
        $addproduct->stock = $request->totalstock;
        $addproduct->lenght = $request->length;
        $addproduct->weight = $request->weight;
        $addproduct->width = $request->width;
        $addproduct->height = $request->height;
        $addproduct->product_category = $request->category;
        $addproduct->totalprice = $request->totalprice;
        $addproduct->minmum_sell = $request->numberOfSell;

        $addproduct->totalprice =
            $request->singleProductPrice * $request->numberOfSell;
        $addproduct->sellerid = $userid;

        $addproduct->save();
        return redirect()
            ->back()
            ->with(
                "productadded",
                "Your product has been uploaded successfully."
            );
    }

    public function productbyowner()
    {
        $userid = auth()->user()->id;
        $productbyowners = new_product::where("sellerid", "=", $userid)->get();

        $user = Auth::user()->role;

        if ($user == "owner") {
            return view("owner.productbyowner", compact("productbyowners"));
        } elseif ($user == "seller") {
            return view("seller.productbyowner", compact("productbyowners"));
        } else {
            return redirect("applyforseller");
        }

        return view("owner.productbyowner", compact("productbyowners"));
    }
    public function delete_product($id)
    {
        $deleteproduct = new_product::find($id);
        $deleteproduct->delete();
        return redirect()
            ->back()
            ->with("deleteproduct", "Your product successfully deleted");
    }
    public function edit_product($id)
    {
        $editproduct = new_product::find($id);

        $categories = category::all();

        $user = Auth::user()->role;

        if ($user == "owner") {
            return view("owner.edit", compact("categories", "editproduct"));
        } elseif ($user == "seller") {
            return view("seller.edit", compact("categories", "editproduct"));
        } else {
            return redirect("applyforseller");
        }
    }

    public function OwnerUpdateproduct(Request $request, $id)
    {
        $updateproduct = new_product::find($id);

        $updateproduct->product_name = $request->product_name;

        $image = $request->image;
        if ($image) {
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $request->image->move("images", $imageName);

            $updateproduct->image = $imageName;
        }

        $updateproduct->short_discription = $request->short_description;
        $updateproduct->long_discription = $request->long_description;
        $updateproduct->product_price = $request->singleProductPrice;
        $updateproduct->stock = $request->totalstock;
        $updateproduct->lenght = $request->length;
        $updateproduct->weight = $request->weight;
        $updateproduct->width = $request->width;
        $updateproduct->height = $request->height;
        $updateproduct->product_category = $request->category;
        $updateproduct->totalprice = $request->totalprice;
        $updateproduct->minmum_sell = $request->numberOfSell;

        $updateproduct->totalprice =
            $request->singleProductPrice * $request->numberOfSell;

        $updateproduct->save();
        return redirect()
            ->back()
            ->with(
                "productupdated",
                "Your product has been updated successfully."
            );
    }

    public function storereview(Request $request)
    {
        $userid = auth()->user()->id;
        $image = auth()->user()->image;
        $name = auth()->user()->name;
        $email = auth()->user()->email;

        $addreview = new review();

        $addreview->remark = $request->reviewremark;
        $addreview->userid = $userid;
        $addreview->image = $image;
        if (auth()->user()) {
            $addreview->email = $email;
            $addreview->name = $name;
        } else {
            $addreview->email = $request->revieweremail;
            $addreview->name = $request->reviewername;
        }

        $addreview->productid = $request->productidr;

        $addreview->save();

        return redirect()
            ->back()
            ->with(
                "reviewadded",
                "Your review has been uploaded successfully."
            );
    }
    public function applyforseller()
    {
        return view("applyforseller");
    }

    public function listCategory()
    {
        $categories = category::all();

        $user = Auth::user()->role;

        if ($user == "owner") {
            return view("owner.categories", compact("categories"));
        } elseif ($user == "seller") {
            return view("seller.categories", compact("categories"));
        } else {
            return redirect("applyforseller");
        }
    }

    public function editCategories($id)
    {
        $editCategories = new_product::find($id);
        $user = Auth::user()->role;

        if ($user == "owner") {
            return view("owner.editCategories", compact("editCategories"));
        } elseif ($user == "seller") {
            return view("seller.editCategories", compact("editCategories"));
        } else {
            return redirect("applyforseller");
        }
    }

    public function add_cart(Request $request, $id)
    {
         if (Auth::check()) {
        $user = auth::user();
        $product = new_product::find($id);

        if ($product->stock > $request->quantity) {
            $addcart = new cart();
            $addcart->userName = $user->name;
            $addcart->userid = $user->id;
            $addcart->product_name = $product->product_name;
            $addcart->productid = $product->id;
            if ($product->sellPrice == null) {
                $addcart->price = $product->product_price + $request->quantity;
            } else {
                $addcart->price = $product->sellPrice * $request->quantity;
            }

            $addcart->quantity = $request->quantity;
            $addcart->image = $product->image;
            $addcart->role = $user->role;
            $addcart->save();
            return redirect()
                ->back()
                ->with(
                    "cartadd",
                    "Your Product has successfully added to Cart. to check Click on the cart-'/'"
                );
        } else {
            return redirect()
                ->back()
                ->with(
                    "stockun",
                    " Am really sorry to say that the stock is less than for Your Order"
                );
        }
        }
        else
        {
            return redirect('login')->with('login', ' you Have to login First To work On tHis function');
        }

        //      if (Auth::check()) {
        //     $user = Auth::user()->role;

        //     if($user == 'owner')
        //     {
        //         return view('owner.add_cart');
        //     }
        //     elseif ($user == 'seller')
        //     {
        //        return view('seller.add_cart');
        //     }
        //     else
        //     {
        //         return view('visitor.add_cart');
        //     }
        // }
        // else
        // {
        //     return redirect('login');
        // }
    }

    public function cart()
    {
        if (Auth::check()) {
            $userid = Auth::user()->id;

            $cart = cart::where("userid", "=", $userid)->get();

            $user = Auth::user()->role;

            if ($user == "owner") {
                return view("owner.cart", compact("cart"));
            } elseif ($user == "seller") {
                return view("seller.cart", compact("cart"));
            } else {
                return view("visitor.cart", compact("cart"));
            }
        } else {
            return redirect("login")->with('login', ' you Have to login First To work On tHis function');
        }
    }
    public function deleteCart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return redirect()
            ->back()
            ->with(
                "deletecart",
                "Your  product has been successfully REMOVED form CART"
            );
    }

    public function checkout()
    {   
         if (Auth::check()) {
             $user = Auth::user()->role;
            $userid = Auth::user()->id;

        $carts = cart::where("userid" ,"=",$userid)->get();

          if(count($carts) >0 )
        {
             
            
           
            if ($user == "owner") {
                return view("owner.checkout",compact("carts"));
            } elseif ($user == "seller") {
                return view("seller.checkout",compact("carts"));
            } else {
                return view("visitor.checkout",compact("carts"));
            }
        
}
 else{
    return redirect(route('productlist'))->with('cartempty' ,'Your Cart is empty First Add  product in the Cart and the go for checkout');
 }
 } else {
            return redirect("login")->with('login', ' you Have to login First To work On tHis function');
        }




       
    }
    public function order(Request $request){
       
        if (Auth::check()) {
             $user = Auth::user()->role;
            $userid = Auth::user()->id;
            // $product=new_product::where('sellerid','=',  )
        $carts = cart::where("userid" ,"=",$userid)->get();
            dd($carts);
//           if(count($carts) >0 )
//         {
//             foreach ($carts as $cart)
//             $order = new order;
//             $order->userName= $request->name;
//             $order->phone= $request->phoneNumber;
//             $order->address=$request->address;
//             $order->email=$request->email;
//             $order->sellerid=
            
           
//             $order->city=$request->city;
//             $order->province=$request->province
//             $order->delivery_chargers="cash On Delivery";
//             $order->delivery_status="In Processing";
//             $order->userid=$userid;
//             $order->product_name=$request->
            
//             $order->totalprice=$request->
//             $order->quantity=$request->
//             $order->image=$request->
//             $order->role=$request->
//             $order->save();
//              endforeach
           
           
           
        
// }
 // else{
 //    return redirect(route('productlist'))->with('cartempty' ,'Your Cart is empty First Add  product in the Cart and the go for checkout');
 // }
 } else {
            return redirect("login")->with('login', ' you Have to login First To work On tHis function');
        }
  
}
}
