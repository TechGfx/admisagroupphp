<?php

use App\Http\Controllers\ProfileController;
use App\Models\clientes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admisangrup;
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
    return view('index');
});

Route::get('/es', function () {
    return view('es');
});

Route::get('/dashboard', function () {
    $clientes = new clientes();

    return view('dashboard', ["datos" => $clientes->all()]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post("/registro", [admisangrup::class, 'store'])->name('registro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
