<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/building', [TestController::class, 'index']);

Route::get('building/{room}', function ($room) {
    return "部屋番号は" . $room . "です";
});