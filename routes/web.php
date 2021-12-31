<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get("/", [HomeController::class, "index"]);

Route::get("/redirectslogin", [HomeController::class, "redirectslogin"]);

Route::get("/account", [AdminController::class, "account"]);

Route::get("/deleteaccount/{id}", [AdminController::class, "deleteaccount"]);

Route::get("/foodmenu", [AdminController::class, "foodmenu"]);

Route::get("/addfoodpage", [AdminController::class, "addfoodpage"]);

Route::post("/uploadfood", [AdminController::class, "uploadfood"]);

Route::get("/deletefood/{id}", [AdminController::class, "deletefood"]);

Route::get("/editfoodpage/{id}", [AdminController::class, "editfoodpage"]);

Route::post("/editfood/{id}", [AdminController::class, "editfood"]);

Route::get("/activeorderpage", [AdminController::class, "activeorderpage"]);

Route::get("/admincart", [AdminController::class, "admincart"]);

Route::get("/changestatusorder/{id}", [AdminController::class, "changestatusorder"]);

Route::post("/addtocart/{id}", [HomeController::class, "addtocart"]);

Route::get("/showcart/{id}", [HomeController::class, "showcart"]);

Route::get("/showorderpage/{id}", [HomeController::class, "showorderpage"]);

Route::get("/removefromcart/{id}/{userid}", [HomeController::class, "removefromcart"]);

Route::post("/orderconfirm/{id}", [HomeController::class, "orderconfirm"]);

Route::get("/showmenu", [HomeController::class, "showmenu"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
