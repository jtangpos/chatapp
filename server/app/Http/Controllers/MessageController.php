<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function all()
    {
        $messages =  Message::all();
        return response()->json($messages, 200);
        return response()->json(['data' => 'Coolness'], 200);
    }
}
