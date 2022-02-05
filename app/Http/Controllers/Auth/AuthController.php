<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Nome do usuário ou senha inválido, por favor tente novamente.'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([
            'access_token' => $user->createToken('Auth Token')->plainTextToken
        ]);
    }

    public function logout() {
        auth()->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout executado com sucesso'
        ]);
    }
}
