<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller {

    public function showProfile(Request $request) {
        return view('profile');
    }

    public function registration(Request $request) {
        $fields = [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
        $validator = Validator::make($request->all(), $fields);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                        'status' => 'invalid',
                        'message' => implode('<br/>', $errors)
            ]);
        }
        $saved = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
        ]);
        if ($saved) {
            return response()->json([
                        'status' => 'success',
                        'message' => 'You have been registered successfully.'
            ]);
        } else {
            return response()->json([
                        'status' => 'error',
                        'message' => 'Error occured, please try again!'
            ]);
        }
    }

    public function loginRegistration(Request $request) {
        $fields = [
            'email_address' => ['required', 'email'],
            'password' => ['required'],
        ];
        $validator = Validator::make($request->all(), $fields);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                        'status' => 'invalid',
                        'message' => implode('<br/>', $errors)
            ]);
        }
        $credentials = [
            'email' => $request->email_address,
            'password' => $request->password
        ];
        $token = JWTAuth::attempt($credentials);
        if ($token) {
            return response()->json([
                        'status' => 'success',
                        'token' => $token
            ]);
        } else {
            return response()->json([
                        'status' => 'error',
                        'message' => 'Wrong credentials!'
            ]);
        }
    }

}
