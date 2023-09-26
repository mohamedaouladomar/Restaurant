<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public routes (accessible to everyone)
Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

// User-specific routes (add more if necessary)
Route::post("/addcart/{id}",[HomeController::class,"addcart"]);
Route::get("/showcart/{id}",[HomeController::class,"showcart"]);
Route::get("/remove/{id}",[HomeController::class,"remove"]);
Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

// Routes only accessible by admins
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get("/users",[AdminController::class,"user"]);
    Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);
    Route::get("/updateview/{id}",[AdminController::class,"updateview"]);
    Route::post("/update/{id}",[AdminController::class,"update"]);
    Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
    Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
    Route::post("/uploadfood",[AdminController::class,"upload"]);
    Route::post("/reservation",[AdminController::class,"reservation"]);
    Route::get("/viewreservation",[AdminController::class,"viewreservation"]);
    Route::get("/viewchef",[AdminController::class,"viewchef"]);
    Route::post("/uploadchef",[AdminController::class,"uploadchef"]);
    Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);
    Route::post("/updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);
    Route::get("/deletechef/{id}",[AdminController::class,"deletechef"]);
    Route::get("/orders",[AdminController::class,"orders"]);
});

// Dashboard route for authenticated and verified users
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




