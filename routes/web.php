<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;


Route::get("/",[homeController::class,"index"])->name('HomePage');
Route::get("/profiles",[ProfilController::class,"index"])->name('profiles.index');
Route::get("/profiles/create",[ProfilController::class,"create"])->name('profiles.create');
Route::post("/profiles/store",[ProfilController::class,"store"])->name('profiles.store');
Route::get("/profiles/{profile}/edit",[ProfilController::class,"edit"])->name('profiles.edit');
Route::put("/profiles/{profile}",[ProfilController::class,"update"])->name('profiles.update');
Route::get("/login",[loginController::class,"show"])->name('login.show');
Route::get("/logaut",[loginController::class,"logaut"])->name('logaut');
Route::post("/login",[loginController::class,"login"])->name('login');

Route::get("/profiles/{id}",[ProfilController::class,"show"])
->where('id',"\d+")
->name('profile.show');
Route::get("/settings",[InformationsController::class,"index"])->name('settings.index');
Route::delete("/profile/{id}",[ProfilController::class,"destroy"])->name('profile.destroy');