<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;

class ChatRoomController extends Controller
{
    public function index()
    {
        $chatroom = ChatRoom::create([
            'name' => 'General',
        ]);

        $message = 'Hello, World!';

        $chatroom->messages()->create([
            'sender_did' => null,
            'message' => $message, // name not available at time of creation
        ]);
    }
}
