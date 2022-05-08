<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\commandeController;
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
    return view('home');
});
Route::GET('login', [UsersController::class, 'index']);
Route::GET('sign', [UsersController::class, 'create']);
Route::POST('create/user', [UsersController::class, 'store']);




Route::GET('/dashbord/admin', [AdminController::class, 'index']);

Route::GET('/dashbord/commande', [commandeController::class, 'index']);
Route::GET('/dashbord/commande/form', [commandeController::class, 'create']);


Route::GET('/dashbord/article', [ArticleController::class, 'index']);

Route::GET('/dashbord/produit', [ProduitController::class, 'index']);
Route::POST('/create/produit', [ProduitController::class, 'store']);
