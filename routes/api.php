<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\API\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::get('provinsi',[ProvinsiController::class, 'index']);
    //ID
    Route::get('provinsi2/{id}',[ApiController::class, 'show']);
    Route::get('indonesia/provinsi3',[ApiController::class, 'provinsi3']);
    Route::get('indonesia/data_kota',[ApiController::class, 'dkota']);
    Route::get('indonesia/data_kecamatan',[ApiController::class, 'dkecamatan']);
    Route::get('indonesia/data_kelurahan',[ApiController::class, 'dkelurahan']);
    
    Route::get('global', [ApiController::class, 'global']);  
    
    