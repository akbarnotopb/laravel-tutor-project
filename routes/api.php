<?php

use App\Http\Controllers\API\v1\UserController;
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


Route::prefix("v1")->name("v1-")->group(function(){
    // api/v1/store (Post) -> nama v1-store
    Route::post("/store",[UserController::class, "store"])->name("store");
    // api/v1/store (get) -> nama v1-index
    Route::get("/store",[UserController::class, "index"])->name("index");
    
    // Route::prefix("siswa")->name("name-")->group(function(){
    //     // api/v1/siswa/index
    //     Route::get("/index",[UserController::class,"index"])->name("index");

    //     Route::prefix("siswa")->name("name-")->group(function(){
    //         // api/v1/siswa/siswa/index
    //         Route::get("/index",[UserController::class,"index"])->name("index");
    //     });
    // });
});




