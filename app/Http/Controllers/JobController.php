<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Job;
use Dompdf\Dompdf;

class JobController extends Controller
{
     public function job(Request $request) {
            $fields = [
                'job_title' => ['required'],
                'job_description' => ['required'],
                'salary_minimum' => ['required'],
                'salary_maximum' => ['required'],
                'job_location' => ['required'],
                'job_category' => ['required'],
                'joining_date' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                    'status' => 'invalid',
                    'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Job::create([
                        'job_title' => $request->job_title,
                        'job_description' => $request->job_description,
                        'salary_minimum' => $request->salary_minimum,
                        'salary_maximum' => $request->salary_maximum,
                        'job_location' => $request->job_location,
                        'job_category' => $request->job_category,
                        'joining_date' => date("Y-m-d", strtotime($request->newdate) ),
                        
            ]);
            if ($saved) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your data request have been saved.'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error occured, please try again!'
                ]);
            }
        }
        
        public function listJob(Request $request){
        $jobs = Job::orderBy('id','desc')->paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $jobs,
        ]);
    }
    
    public function editJobInfo(Request $request){
        $fields = [
                'job_title' => ['required'],
                'job_description' => ['required'],
                'salary_minimum' => ['required'],
                'salary_maximum' => ['required'],
                'job_location' => ['required'],
                'job_category' => ['required'],
                'joining_date' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                    'status' => 'invalid',
                    'message' => implode('<br/>', $errors)
                ]);
            }
            $edit = Job::where('id', $request->jobId)->first();
            $edit->job_title = $request->job_title;
            $edit->job_description = $request->job_description;
            $edit->salary_minimum = $request->salary_minimum;
            $edit->salary_maximum = $request->salary_maximum;
            $edit->job_location = $request->job_location;
            $edit->job_category = $request->job_category;
            $edit->joining_date = date("Y-m-d", strtotime($request->newdate) );            
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
    
     public function getJobEditInfo(Request $request){
//         print_r($request->all());
            $jobs = Job::where('id', $request->detailId)->first();
            $jobs['newdate'] = date("m/d/Y", strtotime($jobs['joining_date']) );
            return response()->json([
                'status' => 'success',
                'job' => $jobs,
            ]);
        }
        
        public function deletedJobInfo(Request $request){
//            print_r($request->all()); die;
            $delete = Job::where('id', $request->detailId)->delete();
            if ($delete){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your have successfully deleted.'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error occured,please try again!'
                ]);
            }
        }
        
        public function downloadJobPdf(Request $request, $id=null) {
                   $job = Job::where('id', $id)->first();
                   if (empty($job)) {
                       die('Job not valid!');
                   }
                   $html = \View::make('pdf.job', compact('job'))->render();
                   $dompdf = new Dompdf();
                   $dompdf->loadHtml($html);
                   $dompdf->render();
                   $dompdf->stream("dompdf_output.pdf", array("Attachment" => false));
        //            file_put_contents(public_path() . "/pdf/file_19.pdf", $dompdf->output());
                   exit();
               }
}
