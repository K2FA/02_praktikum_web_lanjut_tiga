<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home']);

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        echo 'Halaman ini menampilkan Marbel Education Games Page';
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        echo 'Halaman ini menampilkan Marbel and Friends Kids Games Page';
    });
    Route::get('/riri-story-books', function(){
        echo 'Halaman ini menampilkan Riri Story Books Page';
    });
    Route::get('/kolak-kids-songs', function(){
        echo 'Halaman ini menampilkan Kolak Kids Songs Page';
    });
});
