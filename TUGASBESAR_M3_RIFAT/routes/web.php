
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmadaController;

// Rute awal langsung diarahkan ke halaman daftar armada
Route::get('/', function () {
    return redirect()->route('armada.index');
});

// Kumpulan rute untuk CRUD Armada
Route::get('/armada', [ArmadaController::class, 'index'])->name('armada.index');
Route::post('/armada', [ArmadaController::class, 'store'])->name('armada.store');
Route::delete('/armada/{id}', [ArmadaController::class, 'destroy'])->name('armada.destroy');

Route::get('/', function () {
    return view('welcome');
});
