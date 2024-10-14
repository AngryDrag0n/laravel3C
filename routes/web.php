<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use App\Models\Support;
use App\Http\Controllers\Admin\{ItensController};
use Illuminate\Support\Facades\Route;

//rotas dos exploradores
Route::put('//supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/create',[SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

//rotas dos itens
Route::put('/itens/{id}', [ItensController::class, 'update'])->name('itens.update');
Route::get('/itens/{id}/edit', [ItensController::class, 'edit'])->name('itens.edit');
Route::get('itens/{explorer}/create', [ItensController::class, 'create'])->name('itens.create');
Route::get('/itens/{id}', [ItensController::class, 'show'])->name('itens.show');
Route::post('/itens/{explorer}', [ItensController::class, 'store'])->name('itens.store');
Route::get('/itens', [SupportController::class, 'index'])->name('itens.index');


Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

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
