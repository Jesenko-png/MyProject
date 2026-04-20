<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::view("about", "about");
Route::get("/", [HomepageController::class, "index"]);
Route::get("/shop", [ShopController::class, "index"]);
Route::get("/contact", [ContactController::class, "index"]);
Route::get("/all-contacts", [ContactController::class, "getAllContacts"])->name("all-contacts");
Route::post("/send-contact", [ContactController::class, "sendContact"])->name("sendContact");

Route::get("/add-product", [ProductController::class, "index"]);
Route::post("/dodajProizvod", [ProductController::class, "addProduct"])->name("snimanjeProizvoda");

Route::get("/products", [ProductController::class, "products"])->name("sviProizvodi");
Route::get("/edit-proizvoda/{product}", [ProductController::class, "edit"])->name("editProizvoda");
Route::post('/update-proizvoda/{product}', [ProductController::class, "update"])->name("updateProizvoda");

Route::get("/delete-product-now/{product}", [ProductController::class, "delete"])->name('izbrisiProduct');
Route::get("/delete-contact/{contact}", [ContactController::class, "deleteContact"])->name('izbrisiContact');
Route::get("/edit-contact/{contact}", [ContactController::class, "editContact"])->name('editContact');
Route::post("/update-contact/{contact}", [ContactController::class, "updateContact"])->name('updateContact');

});
require __DIR__.'/auth.php';
