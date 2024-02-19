<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('page.auth.index');
    }

    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $check = User::where("email", $request->email)->first();
        $user = $request->all(); 

        if ($check) {
            if (Auth::attempt($user)) {
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back ' . Auth()->user()->name,
                ]);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Wrong Password!',
                ]);
            }
        } else {
            return response()->json([
                'alert' => 'error',
                'message' => 'Email not found!',
            ]);
        }

    }
    
    public function do_logout(){
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect()->route('index');
    }
}