<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Validator;

class RegistrationController extends Controller
{
    public function saveRegistration(Request $request) {
            $fields = [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required', 'email'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                            'status' => 'invalid',
                            'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Registration::create([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
            ]);
            if ($saved) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'Your has been resgistered successfully.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured, please try again!'
                ]);
            }
        }
}
