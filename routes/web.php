<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::post('/subscribe', [HomeController::class, 'Subscribe']);
Route::post('/contact', [HomeController::class, 'Contact_us']);
Route::get('/site_map.xml', [HomeController::class, 'sitemap']);

//Route::get("site_map.xml", array(
//    "as"   => "sitemap",
//    "uses" => "HomeController@sitemap", // or any other controller you want to use
//));

Route::get('lang/{lang}', function ($lang) {

    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
        App::setLocale('en');
//        Artisan::call('optimize');

    } else {
        session()->put('lang', 'ar');
        App::setLocale('ar');
//        Artisan::call('optimize');


    }
    return back();
});


Route::get('/link',function (){
   Artisan::call('storage:link');
});

