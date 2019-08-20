<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\About;

class AboutController extends Controller
{
    public function index(Request $request){
        return view('about.index');
    }
    
    public function about(Request $request){
//        print_r($request->all()); die;
        $fields = [
                'title' => ['required'],
                'description' => ['required'],
                'image' => ['required'],
                'date' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                    'status' => 'invalid',
                    'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = About::create([
                        'title' => $request->title,
                        'description' => $request->description,
                        'image' => $request->image,
                        'date' => date("Y-m-d", strtotime($request->newdate) ),
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
    
    public function listAbout(Request $request){
        $abouts = About::orderBy('id','desc')->paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $abouts,
        ]);
    }
    
    public function uploadFile(Request $request){
//        print_r($request->file('myfile')); 
        $image = $request->file('myfile');
        $name = time().'.'.$image->getClientOriginalExtension();
        die;
//        foreach ($request->file('myfile') as $myfile) {
//            $name = time().'.'.$myfile->getClientOriginalExtension();
//            dd($name);
//             $images->move();
//        }
        return '>> test';
    }
    
    public function editAboutInfo(Request $request){
        $fields = [
                'title' => ['required'],
                'description' => ['required'],
                'image' => ['required'],
                'date' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                    'status' => 'invalid',
                    'message' => implode('<br/>', $errors)
                ]);
            }
            $edit = About::where('id', $request->userId)->first();
            $edit->title = $request->title;
            $edit->description = $request->description;
            $edit->image = $request->image;
            $edit->date = date("Y-m-d", strtotime($request->newdate) );            
            $edit = $edit->save();
            if ($edit){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your have successfully edited.'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error occured,please try again!'
                ]);
            }
    }
    
    public function getEditInfo(Request $request){
            $abouts = About::where('id', $request->detailId)->first();
            return response()->json([
                'status' => 'success',
                'info' => $abouts
            ]);
        }
}
