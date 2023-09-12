<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SellingController;
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

Route::prefix('/books')->group(function (){
    Route::get('/', [BookController::class, 'findAll']);
    Route::get('/{id}', [BookController::class, 'findById']);
    Route::post('/', [BookController::class, 'insert']);
    Route::patch('/{id}', [BookController::class, 'update']);
});

Route::prefix('/orders')->group(function (){
    Route::get('/', [OrderController::class, 'findAll']);
    Route::get('/{id}', [OrderController::class, 'findById']);
    Route::post('/', [OrderController::class, 'insert']);
    Route::patch('/{id}', [OrderController::class, 'update']);
});

Route::prefix('/purchases')->group(function (){
    Route::get('/', [PurchaseController::class, 'findAll']);
    Route::get('/{id}', [PurchaseController::class, 'findById']);
    Route::post('/', [PurchaseController::class, 'insert']);
    Route::patch('/{id}', [PurchaseController::class, 'update']);
});

Route::prefix('/sellings')->group(function (){
    Route::get('/', [SellingController::class, 'findAll']);
    Route::get('/{id}', [SellingController::class, 'findById']);
    Route::post('/', [SellingController::class, 'insert']);
    Route::patch('/{id}', [SellingController::class, 'update']);
});
