<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// for inventory manager -- Login and create new products

Route::get('/inventory' , [\App\Http\Controllers\InventoryController::class, 'show'] )->middleware(['auth'])->name('inventory');

Route::get('/add-to-inventory' ,  [\App\Http\Controllers\InventoryController::class, 'index']);

Route::post('/add-to-inventory' ,  [\App\Http\Controllers\InventoryController::class, 'store']);


Route::get('/update/{id}', function ($id) {
    return view('inventory.update', compact('id'));
})->middleware(['auth'])->name('update');


Route::post('/update' ,  [\App\Http\Controllers\InventoryController::class, 'update']);

Route::get('/delete/{id}', function ($id) {

    $i = \App\Models\Inventory::find($id);

    $i->products()->delete();
    $i->delete();

    return redirect()->to('/inventory');

})->middleware(['auth'])->name('delete');
