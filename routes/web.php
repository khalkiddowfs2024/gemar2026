<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModeReglementController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\SousFamilleController;


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


Route::get('/admin/familles',[FamilleController::class,'index'])->name('admin_familles.index');
Route::get('/admin/familles/create',[FamilleController::class,'create'])->name('admin_familles.create');
Route::post('admin/familles',[FamilleController::class,'store'])->name('admin_familles.store');
Route::put('admin/familles/{famille}/update',[FamilleController::class,'update'])->name('admin_familles.update');
Route::get('admin/familles/{famille}/edit',[FamilleController::class,'edit'])->name('admin_familles.edit');
Route::delete('admin/familles/{famille}/delete',[FamilleController::class,'destroy'])->name('admin_familles.destroy');

Route::get('/admin/sous_familles',[SousFamilleController::class,'index'])->name('admin_sous_familles.index');
Route::get('/admin/sous_familles/create',[SousFamilleController::class,'create'])->name('admin_sous_familles.create');
Route::post('admin/sous_familles',[SousFamilleController::class,'store'])->name('admin_sous_familles.store');
Route::put('admin/sous_familles/{sous_famille}/update',[SousFamilleController::class,'update'])->name('admin_sous_familles.update');
Route::get('admin/sous_familles/{sous_famille}/edit',[SousFamilleController::class,'edit'])->name('admin_sous_familles.edit');
Route::delete('admin/sous_familles/{sous_famille}/delete',[SousFamilleController::class,'destroy'])->name('admin_sous_familles.destroy');

Route::get('/admin/marques',[MarqueController::class,'index'])->name('admin_marques.index');
Route::get('/admin/marques/create',[MarqueController::class,'create'])->name('admin_marques.create');
Route::post('admin/marques',[MarqueController::class,'store'])->name('admin_marques.store');
Route::put('admin/marques/{marque}/update',[MarqueController::class,'update'])->name('admin_marques.update');
Route::get('admin/marques/{marque}/edit',[MarqueController::class,'edit'])->name('admin_marques.edit');
Route::delete('admin/marques/{marque}/delete',[MarqueController::class,'destroy'])->name('admin_marques.destroy');

Route::get('/admin/unites',[UniteController::class,'index'])->name('admin_unites.index');
Route::get('/admin/unites/create',[UniteController::class,'create'])->name('admin_unites.create');
Route::post('admin/unites',[UniteController::class,'store'])->name('admin_unites.store');
Route::put('admin/unites/{unite}/update',[UniteController::class,'update'])->name('admin_unites.update');
Route::get('admin/unites/{unite}/edit',[UniteController::class,'edit'])->name('admin_unites.edit');
Route::delete('admin/unites/{unite}/delete',[UniteController::class,'destroy'])->name('admin_unites.destroy');

Route::get('/admin/mode_reglements',[ModeReglementController::class,'index'])->name('admin_mode_reglements.index');
Route::get('/admin/mode_reglements/create',[ModeReglementController::class,'create'])->name('admin_mode_reglements.create');
Route::post('admin/mode_reglements',[ModeReglementController::class,'store'])->name('admin_mode_reglements.store');
Route::put('admin/mode_reglements/{mode_reglement}/update',[ModeReglementController::class,'update'])->name('admin_mode_reglements.update');
Route::get('admin/mode_reglements/{mode_reglement}/edit',[ModeReglementController::class,'edit'])->name('admin_mode_reglements.edit');
Route::delete('admin/mode_reglements/{mode_reglement}/delete',[ModeReglementController::class,'destroy'])->name('admin_mode_reglements.destroy');

Route::get('/admin/produits',[ProduitController::class,'index'])->name('admin_produits.index');
Route::get('/admin/produits/create',[ProduitController::class,'create'])->name('admin_produits.create');
Route::post('admin/produits',[ProduitController::class,'store'])->name('admin_produits.store');
Route::put('admin/produits/{produit}/update',[ProduitController::class,'update'])->name('admin_produits.update');
Route::get('admin/produits/{produit}/edit',[ProduitController::class,'edit'])->name('admin_produits.edit');
Route::delete('admin/produits/{produit}/delete',[ProduitController::class,'destroy'])->name('admin_produits.destroy');

Route::get('/admin/fournisseurs',[FournisseurController::class,'index'])->name('admin_fournisseurs.index');
Route::get('/admin/fournisseurs/create',[FournisseurController::class,'create'])->name('admin_fournisseurs.create');
Route::post('admin/fournisseurs',[FournisseurController::class,'store'])->name('admin_fournisseurs.store');
Route::put('admin/fournisseurs/{fournisseur}/update',[FournisseurController::class,'update'])->name('admin_fournisseurs.update');
Route::get('admin/fournisseurs/{fournisseur}/edit',[FournisseurController::class,'edit'])->name('admin_fournisseurs.edit');
Route::delete('admin/fournisseurs/{fournisseur}/delete',[FournisseurController::class,'destroy'])->name('admin_fournisseurs.destroy');
