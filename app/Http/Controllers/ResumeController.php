<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Validator;
    use App\Resume;
    use Dompdf\Dompdf;

    class ResumeController extends Controller {

        public function Resume(Request $request) {
            $fields = [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'mobile' => ['required'],
                'address' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                            'status' => 'invalid',
                            'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Resume::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'mobile' => $request->mobile,
                        'address' => $request->address,
            ]);
            if ($saved) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'Your contact request have been saved.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured, please try again!'
                ]);
            }   
        }

        public function listResume(Request $request) {
//            $resumes = Resume::orderBy('id','desc')->paginate(5);
            $query = Resume::orderBy('id', 'desc');
            if ($request->has('keyword')) {
                $query->where('name', 'like', '%' . $request->keyword . '%');
            }
            $resumes = $query->paginate(10);
//            $resumes = $query->get();
            return response()->json([
                        'status' => 'success',
                        'data' => $resumes
            ]);
        }

        public function deletedInfo(Request $request) {
//            print_r($request->all()); die;
            $delete = Resume::where('id', $request->userId)->delete();
            if ($delete) {
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

        public function editInfo(Request $request) {
//            $edit = Resume::where('id', $request->userId)->edit();
            $fields = [
                'name' => ['required'],
                'email' => ['required'],
                'mobile' => ['required'],
                'address' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                            'status' => 'invalid',
                            'message' => implode('<br/>', $errors)
                ]);
            }
            $edit = Resume::where('id', $request->userId)->first();
            $edit->name = $request->name;
            $edit->email = $request->email;
            $edit->mobile = $request->mobile;
            $edit->address = $request->address;
            $edit = $edit->save();
            if ($edit) {
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

        public function getEditInfo(Request $request) {
            $resumes = Resume::where('id', $request->detailId)->first();
            return response()->json([
                        'status' => 'success',
                        'info' => $resumes
            ]);
        }
        
        public function downloadPdf(Request $request, $id=null) {
//            dd(public_path() . "/pdf");
//            $resume = Resume::where('id', $request->userId)->first();
            $resume = Resume::where('id', $id)->first();
            if (empty($resume)) {
                die('User not valid!');
            }
            $html = \View::make('pdf.user', compact('resume'))->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->render();
            $dompdf->stream("dompdf_output.pdf", array("Attachment" => false));
//            file_put_contents(public_path() . "/pdf/file_19.pdf", $dompdf->output());
            exit();
        }

    }
    