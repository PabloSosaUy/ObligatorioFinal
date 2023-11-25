<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChivitoController;
use App\Http\Middleware\Autenticacion;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/chivito", [ChivitoController::class, "Mostrar"])->middleware(Autenticacion::class);
Route::post("/chivito", [ChivitoController::class, "Crear"])->middleware(Autenticacion::class);
