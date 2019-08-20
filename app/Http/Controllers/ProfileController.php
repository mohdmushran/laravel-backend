<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Profile;

class ProfileController extends Controller
{
    public function dashboard(Request $request) {
            $fields = [
                'name' => ['required'],
                'dob' => ['required'],
                'gender' => ['required']
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                            'status' => 'invalid',
                            'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Profile::create([
                        'name' => $request->name,
                        'dob' => $request->dob,
                        'gender' => $request->gender
            ]);
            if ($saved) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'You data has been saved.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured, please try again!'
                ]);
            }
        }
}
