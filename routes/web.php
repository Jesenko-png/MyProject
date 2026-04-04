<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view("about","about");
Route::get("/" , [\App\Http\Controllers\HomepageController::class, "index"]);
Route::get("/shop" , [\App\Http\Controllers\ShopController::class, "index"]);
Route::get("/contact" , [\App\Http\Controllers\ContactController::class, "index"]);
Route::get("/admin/all-contacts" , [\App\Http\Controllers\ContactController::class, "getAllContacts"]);
Route::post("/send-contact" , [\App\Http\Controllers\ContactController::class, "sendContact"]);

    Route::get("/admin/add-product", [\App\Http\Controllers\ProductController::class, "index"]);
    Route::post("/admin/dodajProizvod" , [\App\Http\Controllers\ProductController::class, "addProduct"])->name("snimanjeProizvoda");
    Route::get("/admin/products" , [\App\Http\Controllers\ProductController::class, "products"])->name("sviProizvodi");
    Route::get("admin/edit-proizvoda/{product}" , [ProductController::class, "edit"])->name("editProizvoda");
    Route::post('/admin/update-proizvoda/{product}' , [ProductController::class, "update"])->name("updateProizvoda");

        Route::get("/admin/delete-product-now/{product}" , [\App\Http\Controllers\ProductController::class, "delete"])->name('izbrisiProduct');
    Route::get("/admin/delete-contact/{contact}" , [\App\Http\Controllers\ContactController::class, "deleteContact"])->name('izbrisiContact');


