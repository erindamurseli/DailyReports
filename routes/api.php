<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContenttController;
use App\Http\Controllers\EditAboutController;
use App\Http\Controllers\EditCarddController;
use App\Http\Controllers\EditContactController;
use App\Http\Controllers\RaportetDitoreController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|php
*/
   



Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);

Route::get('/content',[ContenttController::class, 'index']);
Route::get('/editcontent/{id}', [ContenttController::class, 'show']);
Route::put('/editcontent/{id}', [ContenttController::class, 'update']);

Route::get('/cardd',[EditCarddController::class, 'index']);
Route::get('/editcardd/{id}', [EditCarddController::class, 'show']);
Route::put('/editcardd/{id}', [EditCarddController::class, 'update']);



Route::get('/contact',[EditContactController::class, 'index']);
Route::get('/editcontact/{id}', [EditContactController::class, 'show']);
Route::put('/editcontact/{id}', [EditContactController::class, 'update']);

Route::get('/card',[EditController::class, 'index']);
Route::get('/editcard/{id}', [EditController::class, 'show']);
Route::put('/editcard/{id}', [EditController::class, 'update']);

Route::get('/about',[EditAboutController::class, 'index']);
Route::get('/editabout/{id}', [EditAboutController::class, 'show']);
Route::put('/editabout/{id}', [EditAboutController::class, 'update']);

Route::delete('/deletecard/{id}', [EditController::class, 'destroy']);

Route::post('/addcontent', [ContenttController::class, 'store']);
Route::delete('/deletecontent/{id}', [ContenttController::class, 'destroy']);

Route::get('/get-raportet-ditore',[RaportetDitoreController::class, 'index']);
Route::get('/get-raportet-ditore/{Prioriteti}',[RaportetDitoreController::class, 'RDPrioriteti']);
Route::get('/get-raportet-ditore/{LlDoc}',[RaportetDitoreController::class, 'LlDoc']);
Route::get('/get-raportet-ditore/{LlojiDet}',[RaportetDitoreController::class, 'LlojiDet']);
Route::get('/get-raportet-ditore/{Detyruesi}',[RaportetDitoreController::class, 'Detyruesi']);
Route::get('/get-raportet-ditore/{iDetyruari}',[RaportetDitoreController::class, 'iDetyruari']);
Route::get('/get-raportet-ditore/{KNP}',[RaportetDitoreController::class, 'KNP']);
Route::get('/get-raportet-ditore/{Titulli}',[RaportetDitoreController::class, 'Titulli']);

Route::get('/get-raportet-ditore/{v}',[RaportetDitoreController::class, 'v']);

Route::get('/get-raportet-ditore/{Prog_PNT}',[RaportetDitoreController::class, 'Prog_PNT']);


Route::get('/get-raportet-ditore/{Prog_adm}',[RaportetDitoreController::class, 'Prog_adm']);

Route::get('/get-raportet-ditore/{Kryer}',[RaportetDitoreController::class, 'Kryer']);
Route::get('/get-raportet-ditore/{DataKryer}',[RaportetDitoreController::class, 'DataKryer']);
Route::get('/get-raportet-ditore/{DataCaktuar}',[RaportetDitoreController::class, 'DataCaktuar']);
Route::get('/get-raportet-ditore/{Sektori}',[RaportetDitoreController::class, 'Sektori']);


Route::patch('/home/{id}', [AdminController::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    
});

