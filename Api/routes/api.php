<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\StreamerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VereinController;
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
//public 

Route::get('/partner',[PartnerController::class,'index']);
Route::get('/verein',[VereinController::class,'index']);
Route::get('/team',[TeamController::class,'index']);
Route::get('/streamer',[StreamerController::class,'index']);
Route::post('/kontakt',[ContactController::class,'store']);
Route::post('/bewerben',[ApplyController::class,'store']);
Route::post('/login',[AuthController::class,'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('/register',[AuthController::class,'register']); // entfernen

//protected 
Route::middleware(['auth:sanctum'])->group(function () {
; 
Route::post('/partner',[PartnerController::class,'create']);
Route::delete('/partner/{partner}',[PartnerController::class,'destroy']);
Route::patch('/partner/{partner}',[PartnerController::class,'update']);
Route::get('/partner/{partner}',[PartnerController::class,'show']);


Route::post('/team',[TeamController::class,'create']);
Route::delete('/team/{team}',[TeamController::class,'destroy']);
Route::patch('/team/{team}',[TeamController::class,'update']);
Route::get('/team/{team}',[TeamController::class,'show']);


Route::post('/verein',[VereinController::class,'create']);
Route::delete('/verein/{verein}',[VereinController::class,'destroy']);
Route::patch('/verein/{verein}',[VereinController::class,'update']);
Route::get('/verein/{verein}',[VereinController::class,'show']);

Route::post('/streamer',[StreamerController::class,'store']);
Route::delete('/streamer/{streamer}',[StreamerController::class,'destroy']);
Route::get('/bewerben',[ApplyController::class,'index']);

Route::delete('/bewerben/{apply}',[ApplyController::class,'destroy']);
Route::get('/bewerben/{apply}',[ApplyController::class,'show']);

Route::get('/kontakt',[ContactController::class,'index']);
Route::get('/kontakt/{contact}',[ContactController::class,'show']);
Route::delete('/kontakt/{contact}',[ContactController::class,'destroy']);
});


