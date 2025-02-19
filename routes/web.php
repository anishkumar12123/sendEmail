<?php

use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('send-mail',[mailController::class,'sendmail']);
