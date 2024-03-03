<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\VentaController;

//Route::get('/mostrar',[UserController::class,'index']);//http://localhost:8000/api/mostrar

Route::resource('/usuario',UserController::class);
Route::post('/usuario/image',[UserController::class, 'imageUpload']);
Route::get('/usuario/image/{nombre}',[UserController::class, 'image']);


Route::resource('/cliente',ClienteController::class);
Route::resource('/categoria',CategoriaController::class);
Route::resource('/producto',ProductoController::class);
Route::post('/producto/image',[UserController::class, 'imageUpload']);
Route::get('/producto/image/{nombre}',[UserController::class, 'image']);


Route::resource('/transaccion',TransaccionController::class);
Route::resource('/venta',VentaController::class);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
