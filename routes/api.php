<?php

use App\Http\Controllers\LatihanJson;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/latihansatu',[LatihanJson::class,'latihansatu']);
Route::get('/latihandua',[LatihanJson::class,'latihandua']);
Route::get('/latihantiga',[LatihanJson::class,'latihantiga']);
