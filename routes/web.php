<?php

use App\Models\ChatRoom;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('create_message', function () {

    $chatroom = ChatRoom::create([
        'name' => 'General',
    ]);

    $message = 'Hello, World!';

    $chatroom->messages()->create([
        'sender_id' => null,
        'message' => $message, // name not available at time of creation
    ]);
});
