<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\universitiesController;
use App\Http\Controllers\Frontend\CritereController;

use App\Http\Controllers\Frontend\CommentairesController;
use App\Http\Controllers\Frontend\NotesController;

use App\Models\Universite;


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
Route::get('/',[FrontendController::class, 'acceuil'])->name('acceuil');


Route::get('/dashboard', function () {
    $universites = Universite::all();
    return view('website.layouts.acceuil', ['universites' => $universites]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])
    ->middleware(['auth', \App\Http\Middleware\Admin::class]);

    Route::get('/universite', [universitiesController::class,'index2'])->name('universite.index');
// Route::get('/admin/listeUniversite', [universitiesController::class,'index'])->name('admin.liste');
Route::get('/admin/listeUniversite', [universitiesController::class,'index'])->name('admin.liste');
Route::get('/universite/create', [universitiesController::class,'create'])->name('universite.create');
Route::post('/universite', [universitiesController::class,'store'])->name('universite.store');
Route::get('/admin/{universite}/edit', [universitiesController::class,'edit'])->name('universite.edit');
Route::put('/admin/{universite}/update', [universitiesController::class,'update'])->name('universite.update');
Route::delete('/universite/{universite}/destroy', [universitiesController::class,'destroy'])->name('universite.destroy');
Route::get('/universite/{id}', [universitiesController::class, 'show'])->name('universite.details');



Route::get('/admin/criteres', [CritereController::class, 'index'])->name('criteres.index');
Route::get('/admin/criteres/create', [CritereController::class, 'create'])->name('criteres.create');
Route::post('/admin/criteres', [CritereController::class, 'store'])->name('criteres.store');



Route::get('/admin/criteres/{critere}', [CritereController::class, 'show'])->name('admin.criteres.show');
Route::get('/admin/criteres/{critere}/edit', [CritereController::class, 'edit'])->name('admin.criteres.edit');
Route::put('/admin/criteres/{critere}', [CritereController::class, 'update'])->name('admin.criteres.update');
Route::delete('/admin/criteres/{critere}', [CritereController::class, 'destroy'])->name('admin.criteres.destroy');


Route::post('/commentaire', [CommentairesController::class, 'store'])->name('commentaires.store');
Route::get('/commentaire', [CommentairesController::class, 'index'])->name('commentaires');

Route::get('/note', [NotesController::class, 'create'])->name('notes.create');
Route::post('/note/rankings', [NotesController::class, 'index'])->name('notes.index');
