<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Validator;

class AuController extends Controller
{
    public function register(Request $request) {

        $data = array();
        $num = 0;

       if ($request->name != null) {
           $data['name'] = $request->name;
           $num++;
       }
       if ($request->email != null) {
            $data['email'] = $request->mail;
            $num++;
       }
       if ($request->password != null && $request->password == $request->password_confirmation) {
           $data['password'] = $request->password;
           $num++;
       }

       if ($num == 3) {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
    }

    public function login(Request $request) {

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json(Auth::user(), 200);
        }
    }

    public function logout() {
        Auth::logout();
    }
}
