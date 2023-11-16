<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    dd(array_column(SupportStatus::cases(), 'name'));
});

Route::delete('/supports/{id}', [SupportController::class, 'delete'])->name('supports.delete');

Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'details'])->name('supports.details');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);
Route::get('/', function () {
    return view('welcome');
});
