<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\apiController;
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

//Route::post("delivered",[apiController::class,'delivered']);

Route::post("delivered",'App\Http\Controllers\apiController@delivered','delivered');

//Route::get(‘/delivered’, ‘API\ApiController@getDelivered’);


//Route::post(‘/cafes’, ‘API\CafesController@postNewCafe’);
//Route::get(‘/cafes/{id}’, ‘API\CafesController@getCafe’);