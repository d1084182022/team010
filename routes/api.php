<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\EngineTypesController;
use App\Http\Controllers\MotorcyclesController;
use App\Http\Controllers\Testcontrollers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function ()
{
    // 查詢所有廠牌
    Route::get('brands', [BrandsController::class, 'api_brands']);
    // 修改指定廠牌
    Route::patch('brands', [BrandsController::class, 'api_update']);
    // 刪除指定廠牌
    Route::delete('brands', [BrandsController::class, 'api_delete']);
    // 查詢所有引擎形式
    Route::get('enginetypes', [EngineTypesController::class, 'api_enginetypes']);
    // 修改指定引擎形式
    Route::patch('enginetypes', [EngineTypesController::class, 'api_update']);
    // 刪除指定引擎形式
    Route::delete('enginetypes', [EngineTypesController::class, 'api_delete']);
    // 查詢所有重機
    Route::get('motorcycles', [MotorcyclesController::class, 'api_motorcycles']);
    // 修改指定重機
    Route::patch('motorcycles', [MotorcyclesController::class, 'api_update']);
    // 刪除指定重機
    Route::delete('motorcycles', [MotorcyclesController::class, 'api_delete']);

});
