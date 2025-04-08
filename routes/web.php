<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassPageController;
use App\Http\Controllers\LangControllerPage;
use App\Http\Controllers\MembreListePage;
use App\Http\Controllers\AdminController;

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
    return view('welcome', [
        'title' => 'Développement web',
        'datetime' => new DateTime()
        
    ]);
});

/* Route::get('/liste', function () {
    return view('liste', [
        'title' => 'Liste des membres',
        'date' => new DateTime()
        
    ]);
}); */



Route::get('/presentation', [ClassPageController::class, 'index']);
/* Route::get('/contact', [LangControllerPage::class, 'store']); */

Route::get('/contact', [LangControllerPage::class, 'showContact'])->name('contact');
Route::post('/contact', [LangControllerPage::class, 'store'])->name('contact.store');

Route::get('/liste', [MembreListePage::class, 'membre']);

# Route pour afficher le formulaire d'édition d'un membre
Route::get('/membres/{membre}/edit', [MembreListePage::class, 'edit'])->name('membres.edit');

# Route UPDATE soumission du formulaire
Route::put('/membres/{membre}', [MembreListePage::class, 'update'])->name('membres.update');
Route::get('/membres', [MembreListePage::class, 'index'])->name('membres.index');

# Route Suppression des donénes
// Route pour supprimer un membre
Route::delete('/membres/{membre}', [MembreListePage::class, 'destroy'])->name('membres.destroy');


/* routes pour la connexion admin */

Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'handleLogin']);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth.admin');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');