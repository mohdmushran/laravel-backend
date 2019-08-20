<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Validator;
    use App\Information;
    use App\Country;
    use App\State;
    use App\City;

    class InformationController extends Controller {

        public function saveInformation(Request $request) {
            $fields = [
                'name' => ['required'],
                'gender' => ['required'],
                'dob' => ['required'],
                'country' => ['required'],
                'state' => ['required'],
                'city' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                            'status' => 'invalid',
                            'message' => implode('<br/>', $errors)
                ]);
            }
            $saved = Information::create([
                        'name' => $request->name,
                        'gender' => $request->gender,
                        'dob' => date("d-m-Y", strtotime($request->dob)),
                        'country' => $request->country,
                        'state' => $request->state,
                        'city' => $request->city,
            ]);
            if ($saved) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'You information has been saved.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured, please try again!'
                ]);
            }
        }

        public function listInformation(Request $request) {
            $informations = Information::orderBy('id', 'desc')->paginate(2);
            return response()->json([
                        'status' => 'success',
                        'data' => $informations,
            ]);
        }

        public function editInformation(Request $request) {
            $fields = [
                'name' => ['required'],
                'gender' => ['required'],
                'dob' => ['required'],
                'country' => ['required'],
                'state' => ['required'],
                'city' => ['required'],
            ];
            $validator = Validator::make($request->all(), $fields);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json([
                            'status' => 'invalid',
                            'message' => implode('<br/>', $errors)
                ]);
            }
            $edit = Information::where('id', $request->userId)->first();
            dd($edit);
            $edit->name = $request->name;
            $edit->gender = $request->gender;
            $edit->dob = $request->dob;
            $edit->country = $request->country;
            $edit->state = $request->state;
            $edit->city = $request->city;
            $edit = $edit->save();
            if ($edit) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'You have successfully edited.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured,please try again!'
                ]);
            }
        }

        public function getInformationData(Request $request) {
            $informations = Information::where('id', $request->detailId)->first();
            return response()->json([
                        'status' => 'success',
                        'info' => $informations
            ]);
        }

        public function deletedInformation(Request $request) {
            $delete = Information::where('id', $request->userId)->delete();
            if ($delete) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'You have successfully deleted.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured,please try again!'
                ]);
            }
        }

        public function getCountries(Request $request) {
            $countries = Country::orderBy('name', 'asc')->get();
            return response()->json([
                        'status' => 'success',
                        'countries' => $countries
            ]);
        }

        public function getStates(Request $request) {
            $states = State::where('country_id', $request->countryId)->orderBy('name', 'asc')->get();
            return response()->json([
                        'status' => 'success',
                        'states' => $states
            ]);
        }

        public function getCities(Request $request) {
            $cities = City::where('state_id', $request->stateId)->orderBy('name', 'asc')->get();
            return response()->json([
                        'status' => 'success',
                        'cities' => $cities
            ]);
        }
        public function downloadInformationPdf(Request $request, $id = null) {
            $informations = Information::where('id', $id)->first();
            if (empty($informations)) {
                die('Information not valid!');
            }
            $html = \View::make('pdf.information', compact('informations'))->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->render();
            $dompdf->stream("dompdf_output.pdf", array("Attachment" => false));
            //            file_put_contents(public_path() . "/pdf/file_19.pdf", $dompdf->output());
            exit();
        }
    }
    