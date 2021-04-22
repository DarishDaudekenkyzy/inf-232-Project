<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AddProductController;

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
    return view('home', [
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category_products', [
        'categories' => Category::all(),
        'products' => $category->products
    ]);
});

Route::get('/products/{product}', function(Product $product) {
    return view('product', [
        'categories' => Category::all(),
        'product' => $product
    ]);
});

Route::get('/add_product', [AddProductController::class, 'create']);
Route::post('/add_product', [AddProductController::class, 'store']);

Route::get('mail/send', [MailController::class, 'send']);

Route::get('/register', [RegistrationController::class,'create']);
Route::post('register', [RegistrationController::class,'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);

Route::get('/{lang}', [LocalizationController::class, 'setLocale']);
