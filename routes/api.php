<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\IncomeApiController;
use App\Http\Controllers\Api\PersonApiController;
use App\Http\Controllers\Api\SaleApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories',CategoryApiController::class);
Route::apiResource('articles',ArticleApiController::class);
Route::apiResource('people',PersonApiController::class);
Route::apiResource('incomes',IncomeApiController::class);
Route::apiResource('sales',SaleApiController::class);
