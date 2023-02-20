<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
// use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;

class AuthController extends Controller
{
      public function login(){
        return view ('login');
        
    }
    public function signup(){
        return view ('signup');

    }
    
   

    public function registration(Request $request)
{
    // validate the request data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'phoneNumber' => 'required',
        
        'email' =>      'required|string|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    // create a new user
    $user = new User([
        'name' => $request->name,
        'phoneNumber'  => $request->phoneNumber,
       
        'role'=>$request->role,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);
    $user->save();
    return redirect('login');

    // generate a token
    $token = Auth::fromUser($user);

    return response()->json(compact('user','token'), 201);
}
public function signin(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }



        $credentials = $request->only(['email', 'password']);

    if (! Auth::attempt($credentials)) {
        
         return redirect('login');

    }

    $user = Auth::user();

    // return response()->json(compact('user'));
    return redirect(route('user.index'));
}
    public function logout()
{
    auth()->logout();
    return redirect('/');
}


}
