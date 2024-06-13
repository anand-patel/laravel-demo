<?php

use App\Models\ChatRoom;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
