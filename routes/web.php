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
    return view('owner.checkout');
});









//     Route::get('index', [VisiterController::class, 'index'])->name('user.index');
//     Route::get('product/{id}', [VisiterController::class, 'productdetail'])->name('user.productdetail');
//     Route::get('shop', [VisiterController::class, 'productlist'])->name('user.productlist');
   
Route::group(['middleware' => ['auth']], function () {
  Route::post('storereview', [VisiterController::class, 'storereview'])->name('storereview');
});

// Route::group(['middleware' => ['auth', 'owner'], 'prefix' => 'owner'], function () {
//     Route::get('index', [OwnerController::class, 'index'])->name('index');
//     Route::get('product/{id}', [OwnerController::class, 'productdetail'])->name('productdetail');
//     Route::get('shop', [OwnerController::class, 'productlist'])->name('owner.productlist');
//     Route::get('demo', [OwnerController::class, 'pro'])->name('owner.demo');
//     Route::get('uploadproduct', [OwnerController::class, 'upload_product'])->name('Uploadproduct');
//    Route::post('storeproduct', [OwnerController::class, 'store_product'])->name('Storeproduct');

// // Define a route for the filterProducts method in the ProductController
// Route::post('/products/filter', [OwnerController::class, 'filterProducts'])->name('products.filter');

//    Route::post('OwnerUpdateproduct/{id}', [OwnerController::class, 'Updateproduct'])->name('Updateproduct');
//   Route::any('edit/{id}', [OwnerController::class, 'edit_product'])->name('edit');
//   Route::any('delete/{id}', [OwnerController::class, 'delete_product'])->name('delete');
//     Route::get('productbyowner', [OwnerController::class, 'productbyowner'])->name('product');
//       Route::get('cartowner', [OwnerController::class, 'cartowner'])->name('cart');

//     Route::get('allsellers', [OwnerController::class, 'allsellers'])->name('allsellers');
//     Route::get('profile/{id}', [OwnerController::class, 'profile'])->name('profile');
//     Route::get('home', [OwnerController::class, 'home'])->name('OwnerHome');
//     Route::get('addCategory', [OwnerController::class, 'addCategory'])->name('AddCategory');
//     Route::post('storeCategory', [OwnerController::class, 'storeCategory'])->name('storeCategory');
// });

// Route::group(['middleware' => ['auth', 'seller'], 'prefix' => 'seller'], function () {
//      Route::get('index', [OwnerController::class, 'index'])->name('seller.index');
//     Route::get('upload', [SellerController::class, 'uploadproduct'])->name('sellerUploadproduct');
//     Route::get('home', [SellerController::class, 'home'])->name('sellerHome');    
//     Route::get('addCategory', [SellerController::class, 'addCategory'])->name('sellerAddCategory');
// });
// Route::group(['middleware' => ['auth', 'virtualassistant'], 'prefix' => 'seller'], function () {
//      Route::get('index', [OwnerController::class, 'index'])->name('virtualassistant.index');
//     Route::get('upload', [SellerController::class, 'uploadproduct'])->name('virtualassistant.Uploadproduct');
//     Route::get('home', [SellerController::class, 'home'])->name('sellerHome');    
   
// });

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::get('signup', 'signup')->name('signup');
    Route::post('signin', 'signin')->name('signin');
    Route::any('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');
      Route::get('applyforseller', 'applyforseller')->name('applyforseller');


});




        Route::get('index', [OwnerController::class, 'index'])->name('index');
        Route::get('product/{id}', [OwnerController::class, 'productdetail'])->name('productdetail');
        Route::get('Bazzar', [OwnerController::class, 'productlist'])->name('productlist');
        Route::get('demo', [OwnerController::class, 'pro'])->name('owner.demo');
        Route::get('uploadproduct', [OwnerController::class, 'upload_product'])->name('Uploadproduct');
        Route::post('storeproduct', [OwnerController::class, 'store_product'])->name('storeProduct');

        // Define a route for the filterProducts method in the ProductController
        Route::post('/products/filter', [OwnerController::class, 'filterProducts'])->name('products.filter');

        Route::post('OwnerUpdateproduct/{id}', [OwnerController::class, 'Updateproduct'])->name('Updateproduct');
        Route::any('edit/{id}', [OwnerController::class, 'edit_product'])->name('edit');
        Route::any('delete/{id}', [OwnerController::class, 'delete_product'])->name('delete');
        Route::get('productbyowner', [OwnerController::class, 'productbyowner'])->name('uploadproductbyseller');
         Route::post('storereview', [VisiterController::class, 'storereview'])->name('storereview');
        Route::get('cart', [OwnerController::class, 'cart'])->name('cart');
        Route::any('add_cart/{id}', [OwnerController::class, 'add_cart'])->name('add_cart');
        Route::any('deleteCart/{id}', [OwnerController::class, 'deleteCart'])->name('deleteCart');
         
         Route::any('checkout', [OwnerController::class, 'checkout'])->name('checkout');
         Route::any('order', [OwnerController::class, 'order'])->name('order');
        Route::get('allsellers', [OwnerController::class, 'allsellers'])->name('allsellers');
        Route::get('profile/{id}', [OwnerController::class, 'profile'])->name('profile');
        Route::get('home', [OwnerController::class, 'home'])->name('admin.Home');
        Route::get('addCategory', [OwnerController::class, 'addCategory'])->name('AddCategory');
         Route::get('listCategory', [OwnerController::class, 'listCategory'])->name('listCategory');
          Route::any('deleteCategories/{id}', [OwnerController::class, 'deleteCategories'])->name('deleteCategories');
        Route::any('editCategories/{id}', [OwnerController::class, 'editCategories'])->name('editCategories');
          Route::any('updateCategories/{id}', [OwnerController::class, 'updateCategories'])->name('updateCategories');
        Route::post('storeCategory', [OwnerController::class, 'storeCategory'])->name('storeCategory');
       









 