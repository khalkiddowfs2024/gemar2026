<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index_admin');
});

//Route::resource('/categories',CategorieController::class);
Route::get('/categories/{categorie}',[CategorieController::class,'show'])->name('categories.show');
Route::get('/categories/{categorie}/edit',[CategorieController::class,'edit'])->name('categories.edit');
Route::put('/categories/{categorie}/update',[CategorieController::class,'update'])->name('categories.update');
Route::delete('/categories/{categorie}/delete',[CategorieController::class,'destroy'])->name('categories.destroy');
Route::get('/categories/create',[CategorieController::class,'create'])->name('categories.create');
Route::post('/categories',[CategorieController::class,'store'])->name('categories.store');
Route::get('/categories',[CategorieController::class,'index'])->name('categories.index');

Route::get('/admin/categories',[CategorieController::class,'index'])->name('admin_categories.index');
Route::get('/admin/categories/create',[CategorieController::class,'create'])->name('admin_categories.create');
Route::post('admin/categories',[CategorieController::class,'store'])->name('admin_categories.store');
Route::put('admin/categories/{categorie}/update',[CategorieController::class,'update'])->name('admin_categories.update');
Route::get('admin/categories/{categorie}/edit',[CategorieController::class,'edit'])->name('admin_categories.edit');
Route::delete('admin/categories/{categorie}/delete',[CategorieController::class,'destroy'])->name('admin_categories.destroy');



