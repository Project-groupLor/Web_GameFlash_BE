<?php

use App\Http\Controllers\GameFlashController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('getdata',[GameFlashController::class,'getData']);
Route::get('getdata/{id}',[GameFlashController::class,'getDataid']);