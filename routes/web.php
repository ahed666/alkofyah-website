<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;



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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/menu', [MenuController::class,'index'])->name('menu');

Route::get('/categories/{slug}', [CategoryController::class,'productByCategory'])->name('category.show');

Route::get('/products/{slug}', [ProductController::class,'productDetails'])->name('product.show');

Route::get('/contact', [ContactController::class,'index'])->name('contact.show');
Route::post('/contact/submit', [ContactController::class,'submitContactForm'])->name('contact.submit');

Route::get('/changelocale/{locale}', [HomeController::class,'changeLocale'])->name('locale.change');




Route::get('/aboutus', function () {
    return view('about');
})->name('about');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
