<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CostoAdicionalController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\InsumoController;
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

Route::get("/", function () {
    return view("welcome");
})->name('home');

Route::middleware([
    "auth:sanctum",
    config("jetstream.auth_session"),
    "verified"
])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");
    Route::resource('/users', AdminUserController::class)->middleware('can:users.index');
    Route::resource("/cultivos", CultivoController::class)->middleware('can:Inicio cultivos');
    Route::resource("/fases", FaseController::class)->middleware('can:Inicio fases');
    Route::resource("/costos", CostoAdicionalController::class)->middleware('can:Inicio costos');
    Route::resource("/actividades", ActividadController::class)->middleware('can:Inicio actividades');
    Route::resource("/insumos", InsumoController::class)->middleware('can:Inicio insumos');
    Route::post("/destroy_cultivo_fase", [CultivoController::class, 'destroyCultivoFase'])->middleware('can:Inicio cultivos')->name("destroyCultivoFase");
});
