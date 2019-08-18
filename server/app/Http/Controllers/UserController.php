<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    //

    public function Register(Request $request)
    {

        $user = User::where('username', $request->get('username'))->first();

        if (!$user) {
            $user = User::create([
                'username' => $request->get('username'),
                'password' => Hash::make($request->get('password')),
            ]);

            return response()->json(['user' => $user], 200);
        } else {
            return response()->json(['message' => "User already exist."], 400);
        }
    }
}
