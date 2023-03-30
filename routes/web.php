<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\InvoiceController;


// Frontend

Route::get('/', function () {
    return view('welcome');
});

// Backemd
// resource route
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('client', ClientController::class);



    Route::resource('task', TaskController::class);
    Route::get('task/client/{client:username}', [ClientController::class, 'searchTaskByClient'])->name('searchTaskByClient');
    Route::put('task/{task}/complete', [TaskController::class, 'markAsComplete'])->name('markAsComplete');


    // route for invoice model
    Route::get('invoices', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('invoices/create', [InvoiceController::class, 'create'])->name('invoice.create');
    Route::get('invoices/{invoice}', [InvoiceController::class, 'show'])->name('invoice.show');
    Route::get('invoices/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoice.edit');
    Route::post('invoices/store', [InvoiceController::class, 'store'])->name('invoice.store');
    Route::put('invoices/{invoice}/update', [InvoiceController::class, 'update'])->name('invoice.update');
    Route::delete('invoices/{invoice}/delete', [InvoiceController::class, 'destroy'])->name('invoice.destroy');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
