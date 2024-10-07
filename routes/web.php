<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UsersController::class, 'home']);

Route::get("/showpackage/{id}", [UsersController::class, 'showPackage']);

Route::get("/displaydestinations/{destination}", [UsersController::class, 'showDestinationWise']);

Route::get('/admin', [UsersController::class, 'totalsForAdmin']);

Route::get("/admin/users", [UsersController::class, 'getAllUser']);

Route::resource("category", CategoryController::class);

Route::get('/login', [UsersController::class, 'indexLogin']);

Route::get('/signup', [UsersController::class, 'indexRegister']);

Route::post('/registerUser', [UsersController::class, 'register']);

Route::post("/loggedin", [UsersController::class, "login"]);

Route::resource("package", PackageController::class);

Route::get('/cart', [BookController::class, 'getCartItem']);

Route::get('/confirm', [BookController::class, 'confirmBook']);

Route::get('/removecart/{id}', [BookController::class, 'removeCart']);

Route::get("/addtocart/{id}", [BookController::class, 'addToCart']);

Route::get("/packagelist", [UsersController::class, 'explore']);

Route::get("/checkout", [BookController::class, 'checkout']);

Route::post('/search', [UsersController::class, 'search']);

Route::get("/logout", [UsersController::class, 'logout']);

Route::get("/about", function () {
    return view('about');
});

Route::get("/contact", function () {
    return view('contact');
});
