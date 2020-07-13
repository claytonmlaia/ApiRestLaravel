<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request, $userId){
        $user = User::find($userId);
        if ($user){
            return response()->json($user);
        }
        return response()->json(['message'=> 'Usuário não encontrado'], 404);
    }
}
