<?php

use App\Http\Controllers\MedicoController;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/medicos', [MedicoController::class, 'index']);
Route::post('/medicos', [MedicoController::class, 'store']);
Route::get('/medicos', [MedicoController::class, 'show']);
Route::put('/medicos', [MedicoController::class, 'update']);
Route::delete('/medicos',[MedicoController::class, 'delete']);
