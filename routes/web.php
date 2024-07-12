<?php
use App\Http\Controllers\ViajeroController;
use App\Http\Controllers\DestinoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::post('viajero/store', [ViajeroController::class, 'store'])->name('viajero.store');
Route::get('viajero/create', [ViajeroController::class, 'create']);
Route::get('viajero/listar', [ViajeroController::class, 'index'])->name('viajero.index');
Route::get('viajero/{viajero}', [ViajeroController::class, 'show'])->name('viajero.show');
Route::delete('viajero/{viajero}', [ViajeroController::class, 'destroy'])->name('viajero.destroy');
Route::put('viajero/{viajero}', [ViajeroController::class, 'update'])->name('viajero.update');
Route::get('viajero/{viajero}/editar', [ViajeroController::class, 'edit'])->name('viajero.edit');


Route::post('destino/store', [DestinoController::class, 'store'])->name('destino.store');
Route::get('destino/create', [DestinoController::class, 'create']);
Route::get('destino/listar', [DestinoController::class, 'index'])->name('destino.index');
Route::get('destino/{destino}', [DestinoController::class, 'show'])->name('destino.show');
Route::delete('destino/{destino}', [DestinoController::class, 'destroy'])->name('destino.destroy');
Route::put('destino/{destino}', [DestinoController::class, 'update'])->name('destino.update');
Route::get('destino/{destino}/editar', [DestinoController::class, 'edit'])->name('destino.edit');
