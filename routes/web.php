<?php

use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('supplier.index');
});

Route::get('/suppliers',[SupplierController::class,'index'])->name('supplier.index');

Route::get('/suppliers/create',[SupplierController::class,'create'])->name('supplier.create');

Route::post('/suppliers/store',[SupplierController::class,'store'])->name('supplier.store');

Route::get('/suppliers/edit/{id}',[SupplierController::class,'edit'])->name('supplier.edit');

Route::put('/suppliers/update/{id}',[SupplierController::class,'update'])->name('supplier.update');

Route::get('/suppliers/delete/{id}', function ($id) {
    return view('delete',compact('id'));
})->name('supplier.delete');

Route::delete('/suppliers/destroy/{id}', [SupplierController::class,'destroy'])->name('supplier.destroy');

