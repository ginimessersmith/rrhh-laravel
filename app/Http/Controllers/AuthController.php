<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ];

        $validador = Validator::make($request->input(), $rules);

        if ($validador->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validador->errors()->all()
            ], 400);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => false,
                'error' => 'No esta autorizado',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([
            'status' => true,
            'mensaje' => 'Usuario loggeado con exito',
            'data' => $user,
            'token' => $user->createToken('Api_token')->plainTextToken
        ], 200);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json([
            'status'=>true,
            'mensaje'=>'Usuario cerro sesion con exito'
        ],200);
    }
}
