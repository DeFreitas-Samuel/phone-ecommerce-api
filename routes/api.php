<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\SandboxController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserOrdersController;

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

Route::post('/register', [RegisteredUserController::class, 'store']);
Route::middleware(['sanctum'])->group(function () {
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});



Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{productId}', [ProductController::class, 'show']);
Route::get('/images/{filename}', [ImageController::class, 'show']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/session', [SandboxController::class, 'show']);
    Route::post('/purchase', [PurchaseController::class, 'store']);
    Route::get('/orders/{userId}', [UserOrdersController::class, 'show']);
});
