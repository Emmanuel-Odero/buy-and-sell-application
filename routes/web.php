<?php

use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Models\Product;

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

Route::get('/dashboard',[ProductsController::class,'ShowOwnProduct'])->middleware(['auth'])->name('dashboard');

Route::get('/',[ProductsController::class,'index']);
Route::get('/product/{id}',[ProductsController::class, 'show']);
Route::get('/sell', function(){
    return view('products.sell');
})->middleware('auth');
Route::post('/product', [ProductsController::class,'store']);
Route::get('/edit/{id}', [ProductsController::class,'edit']);
Route::get('/update/{id}',[ProductsController::class,'update']);
Route::get('/delete/{id}',[ProductsController::class,'destroy']);
require __DIR__.'/auth.php';