<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;

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
Route::fallback(function () {
    $code = 404;
    return response()->json(['status' => false, 'msg' => 'route not found', 'code' => $code], $code);
});

Route::get('/', function(){
    return response()->json([
        'data' =>'laravel-chat',
        'msg' => null,
    ], 200);
});

Route::prefix('/user')->group(function () {
    $class = UserController::class;

    Route::get('', [UserController::class, 'index'])->middleware('auth:sanctum');
    Route::post('/login', [UserController::class, 'loginUser']);
});