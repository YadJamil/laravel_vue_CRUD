<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CategoryController;


Route::group(['middleware' => 'auth:sanctum'], function() { 
    Route::apiResource('posts', PostController::class);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('/user', function (Request $request) { 
        return $request->user();
    });
}); 