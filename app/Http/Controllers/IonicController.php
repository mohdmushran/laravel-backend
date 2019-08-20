<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Ionic;

class IonicController extends Controller
{
    public function Ionic(Request $request) {
        $fields = [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
        $validator = Validator::make($request->all(), $fields);
        if ($validator->fails()){
            $errors = $validator->errors()->all();
            return response()->json([
                'status' => 'invalid',
                'message' => implode('<br/>', $errors)
            ]);
        }
        $saved = Ionic::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => $request->password,
        ]);
        if ($saved) {
            return response()->json([
                'status' => 'success',
                'message' => 'Your detail saved successfully.'
            ]); 
        } else {
            return response()->json([
               'status' => 'error',
                'message' => 'Error occured, please try again!'
            ]);
        }
    }
}
