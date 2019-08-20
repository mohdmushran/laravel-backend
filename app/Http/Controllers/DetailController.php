<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use Validator;

class DetailController extends Controller
{
    public function Detail(Request $request) {
//         dd($request->all());
            $fields = [
                'name' => ['required'],
                'email_address' => ['required', 'email'],
                'subject' => ['required'],
                'description' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                    'status' => 'invalid',
                    'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Detail::create([
                        'name' => $request->name,
                        'email_address' => $request->email_address,
                        'subject' => $request->subject,
                        'description' => $request->description,
            ]);
            if ($saved) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your contact request has been saved.'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error occured, please try again!'
                ]);
            }
        }
}
