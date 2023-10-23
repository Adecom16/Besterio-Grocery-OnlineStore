<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\ProviderController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=> true]);
// Route::get('/generate-otp', [Controller::class, 'generateOtp']);

Route::middleware(['verified'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index'])->name('home.page');
// Route::get('/index', [PageController::class, 'index']);


// Route::group(['middleware' => ['auth', 'admin']], function () {
// Admin dashboard route
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Admin product routes
Route::post('/admin/products/post', [AdminController::class, 'post'])->name('product.post');
Route::get('/admin/add/product', [AdminController::class, 'create']);
Route::get('/admin/products', [AdminController::class, 'index']);
Route::get('/product/{id}', [AdminController::class, 'show'])->name('product.show');


Route::get('/admin/product/{id}', [AdminController::class, 'edit']);
Route::put('/admin/products/post/update', [AdminController::class, 'update'])->name('product.update');
Route::delete('/admin/products/delete', [AdminController::class, 'delete'])->name('product.delete');

// Admin user routes
Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/user/{id}', [UserController::class, 'edits']);
Route::put('/admin/user/post/update', [UserController::class, 'updates'])->name('users.update');
Route::delete('/admin/user/delete', [UserController::class, 'delete'])->name('user.delete');
// });

// User dashboard route
Route::GET('/user', [HomeController::class, 'index']);
Route::GET('/user/{id}', [HomeController::class, 'edit']);
Route::PUT('/user/post/update', [HomeController::class, 'update'])->name('use.updates');



// Cart routes
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])
    ->middleware('auth')
    ->name('cart.add');

// Route for viewing the cart
Route::get('/cart/view', [CartController::class, 'index'])
    ->middleware('auth')
    ->name('cart.view');

// Route for removing an item from the cart
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])
    ->middleware('auth')
    ->name('cart.remove');

    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');






    Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
    Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


Route::get('auth/twitter', 'TwitterController@redirectToTwitter');
Route::get('auth/twitter/callback', 'TwitterController@handleTwitterCallback');

Route::get('auth/twitter', [TwitterController::class, 'redirectToTwitter']);
Route::get('auth/twitter/callback', [TwitterController::class, 'handleTwitterCallback']);


// Route::controller(AuthOtpController::class)->group(function () {
//     Route::get('/otp/login', 'login')->name('otp.login');
//     Route::post('/otp/generate', 'generate')->name('otp.generate');
//     Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
//     Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
// });



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{id}/add-related', [ProductController::class, 'addRelatedProducts'])->name('products.addRelated');
