<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => bcrypt($request->password),
            'password' => Hash::make($request->password),
            'team_id'  => request()->input('team', null),
        ]);

        if (! request()->has('team')) {
            $team = \App\Models\Team::create([
                'owner_id' => $user->id,
                'name'     => $request->email,
            ]);

            $user->update(['team_id' => $team->id]);
        }

        // Berikan token autentikasi kepada pengguna
        $token = $user->createToken('API Token')->plainTextToken;

        // Kirim respons dengan token
        $accessToken = substr($token, strpos($token, '|') + 1);
        return response()->json(['token' => $accessToken], 201);
    }

    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Coba melakukan otentikasi
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Otentikasi berhasil, dapatkan pengguna yang terotentikasi
        $user = Auth::user();

        // Buat token autentikasi baru
        $token = $user->createToken('API Token')->plainTextToken;

        // Kirim respons dengan token
        $accessToken = substr($token, strpos($token, '|') + 1);
        return response()->json(['token' => $accessToken], 200);
    }
}
