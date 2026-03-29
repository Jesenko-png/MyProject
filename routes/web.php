<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view("about","about");
Route::get("/" , [\App\Http\Controllers\HomepageController::class, "index"]);
Route::get("/shop" , [\App\Http\Controllers\ShopController::class, "index"]);
Route::get("/contact" , [\App\Http\Controllers\ContactController::class, "index"]);
Route::get("/admin/all-contacts" , [\App\Http\Controllers\ContactController::class, "getAllContacts"]);
Route::post("/send-contact" , [\App\Http\Controllers\ContactController::class, "sendContact"]);
    Route::get("/admin/add-product", [\App\Http\Controllers\ProductController::class, "index"]);
    Route::post("/admin/add-product" , [\App\Http\Controllers\ProductController::class, "addProduct"]);


