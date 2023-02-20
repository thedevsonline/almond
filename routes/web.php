<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\VisiterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jj', function () {
    return view('visiter.home');
});









Route::group(['middleware' => ['auth'], 'prefix' => 'user'], function () {
    Route::get('index', [VisiterController::class, 'index'])->name('user.index');
    Route::get('product/{id}', [VisiterController::class, 'productdetail'])->name('user.productdetail');
    Route::get('shop', [VisiterController::class, 'productlist'])->name('user.productlist');
    Route::get('demo', [VisiterController::class, 'pro'])->name('user.demo');
});

Route::group(['middleware' => ['auth', 'owner'], 'prefix' => 'owner'], function () {
    Route::get('index', [OwnerController::class, 'index'])->name('owner.index');
    Route::get('product/{id}', [OwnerController::class, 'productdetail'])->name('owner.productdetail');
    Route::get('shop', [OwnerController::class, 'productlist'])->name('owner.productlist');
    Route::get('demo', [OwnerController::class, 'pro'])->name('owner.demo');
    Route::get('uploadproduct', [OwnerController::class, 'upload_product'])->name('OwnerUploadproduct');
    Route::get('sellers', [OwnerController::class, 'sellers'])->name('sellers');
    Route::get('profile/{id}', [OwnerController::class, 'profile'])->name('profile');
    Route::get('home', [OwnerController::class, 'home'])->name('OwnerHome');
    Route::get('addCategory', [OwnerController::class, 'addCategory'])->name('OwnerAddCategory');
    Route::post('storeCategory', [OwnerController::class, 'storeCategory'])->name('storeCategory');
});

Route::group(['middleware' => ['auth', 'seller'], 'prefix' => 'seller'], function () {
    Route::get('upload', [SellerController::class, 'uploadproduct'])->name('sellerUploadproduct');
    Route::get('home', [SellerController::class, 'home'])->name('sellerHome');    
    Route::get('addCategory', [SellerController::class, 'addCategory'])->name('sellerAddCategory');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::get('signup', 'signup')->name('signup');
    Route::post('signin', 'signin')->name('signin');
    Route::any('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');

});
 