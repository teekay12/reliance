<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\GameController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('games')->group( function(){
    Route::get('all', [GameController::class, 'Games']);
    Route::get('sort', [GameController::class, 'Game']);
    Route::post('range', [GameController::class, 'GameDateRange']);
    Route::get('summary', [GameController::class, 'GameCount']);
});