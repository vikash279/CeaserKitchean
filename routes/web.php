<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $cleardebugbar = Artisan::call('route:clear');
    echo "Routes cleared<br>";
});

Route::get('/index',[MainController::class, 'index'])->name('index');
Route::get('/aboutus',[MainController::class, 'aboutUs'])->name('aboutus');
Route::get('/menu',[MainController::class, 'menu'])->name('menu');
Route::get('/productdetails/{id}',[MainController::class, 'productdetails'])->name('productdetails');
Route::get('/contact',[MainController::class, 'contact'])->name('contact');
Route::get('/contactus',[MainController::class, 'contactus'])->name('contactus');
Route::get('/book',[MainController::class, 'book'])->name('book');
Route::get('/event',[MainController::class, 'event'])->name('event');
Route::get('/blog',[MainController::class, 'blog'])->name('blog');
Route::get('/cart',[MainController::class, 'cart'])->name('cart');
Route::get('/wishlist',[MainController::class, 'wishlist'])->name('wishlist');
Route::get('/checkout',[MainController::class, 'checkout'])->name('checkout');
Route::get('/login',[MainController::class, 'login'])->name('login');
Route::get('/myprofile',[MainController::class, 'myprofile'])->name('myprofile');
Route::get('/signup',[MainController::class, 'signup'])->name('signup');
Route::get('/store',[MainController::class, 'store'])->name('store');
Route::get('/wheretobuy',[MainController::class, 'whereToBuy'])->name('wheretobuy');

Route::post('/dosignup',[MainController::class, 'doSignUp']);
Route::post('/dologin',[MainController::class, 'doLogin']);

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/index');
})->name('logout');
