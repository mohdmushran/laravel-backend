<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Business;

class BusinessController extends Controller
{
    public function business(Request $request){
        $fields = [
                'business_name' => ['required'],
                'address' => ['required'],
                'mobile_number' => ['required'],
                'pin_code' => ['required'],
                'gender' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                    'status' => 'invalid',
                    'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Business::create([
                        'business_name' => $request->business_name,
                        'address' => $request->address,
                        'mobile_number' => $request->mobile_number,
                        'pin_code' => $request->pin_code,
                        'gender' => $request->gender,
                        
            ]);
            if ($saved) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your about request has been saved.'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error occured, please try again!'
                ]);
            }
    }
    
    public function listBusiness(Request $request){
        $businesses = Business::orderBy('id','desc')->paginate(2);
        return response()->json([
            'status' => 'success',
            'data' => $businesses,
        ]);
    }
    
}
