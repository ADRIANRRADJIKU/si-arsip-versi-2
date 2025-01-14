<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
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

Route::get("/login",[LoginController::class,"index"])->name("account.login");
Route::post("/login",[LoginController::class,"store"])->name("account.login.store");
Route::get("/logout",[LoginController::class,"logout"])->name("logout");

    Route::middleware("multiauth")->group(function(){
        Route::get("/",[DashboardController::class,"index"])->name("account.dashboard");
        Route::get("profile",[UserController::class,"profile"])->name("account.profile");
        Route::resource("management-arsip",ArsipController::class);
    });
    
    Route::middleware("adminAuth")->group(function(){
        // crud kategori
        Route::resource("kategori",KategoriController::class);
        // crud pegawai
        Route::resource("management-pegawai",PegawaiController::class);
        // crud arsip
        // crud admin
        Route::resource("management-admin",UserController::class);
    });
