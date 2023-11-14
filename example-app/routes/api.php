<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/guitars",[GuitarController::class,'get_guitars']);
Route::post("/guitars",[GuitarController::class,'create_guitars']);
Route::put("/guitars/{id}/update",[GuitarController::class,'update_guitar']);
Route::delete("/guitars/{id}/delete",[GuitarController::class,'delete_guitar']);
Route::get("/test_guitars", function() {
    return response()->json([
        'message'=> 'Guitars List API'
    ]);
});