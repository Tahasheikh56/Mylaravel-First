<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("user-registration",function(){
    return view("registration");
})->name("reg");

Route::post("add" , [regController::class,"addData"])->name("add");
Route::get("User-Data" , [regController::class, "dataFetch"])->name("userData");
Route::get("editFetch/{id}" , [regController::class, "editFetch"])->name("editFetch");
Route::post("update/{id}" , [regController::class, "update"])->name("update");
Route::get("delete/{id}" , [regController::class, "delete"])->name("delete");
Route::get("login-form", function(){ return view("login"); })->name("loginForm");
Route::post("loginData", [regController::class, "login"])->name("loginData");