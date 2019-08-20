<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Validator;
    use App\Vehicle;
    use App\Resume;
    use Dompdf\Dompdf;
    use App\Country;
    use App\State;
    use App\City;

    class VehicleController extends Controller {

        public function saveVehicle(Request $request) {
            $fields = [
                'vehicle_name' => ['required'],
                'description' => ['required'],
                'year' => ['required'],
                'make' => ['required'],
                'model' => ['required'],
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
            $saved = Vehicle::create([
                        'vehicle_name' => $request->vehicle_name,
                        'description' => $request->description,
                        'year' => $request->year,
                        'make' => $request->make,
                        'model' => $request->model,
                        'country' => $request->country,
                        'state' => $request->state,
                        'city' => $request->city,
            ]);
            if ($saved) {
                return response()->json([
                            'status' => 'success',
                            'message' => 'Your data have been saved.'
                ]);
            } else {
                return response()->json([
                            'status' => 'error',
                            'message' => 'Error occured, please try again!'
                ]);
            }
        }

        public function listVehicle(Request $request) {
            $vehicles = Vehicle::orderBy('id', 'desc')->paginate(10);
            return response()->json([
                        'status' => 'success',
                        'data' => $vehicles,
            ]);
        }

        public function editVehicleInfo(Request $request) {
            $fields = [
                'vehicle_name' => ['required'],
                'description' => ['required'],
                'year' => ['required'],
                'make' => ['required'],
                'model' => ['required'],
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
            $edit = Vehicle::where('id', $request->vehicleId)->first();
            $edit->vehicle_name = $request->vehicle_name;
            $edit->description = $request->description;
            $edit->year = $request->year;
            $edit->make = $request->make;
            $edit->model = $request->model;
            $edit->country = $request->country;
            $edit->state = $request->state;
            $edit->city = $request->city;
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

        public function getVehicleEditInfo(Request $request) {
//         print_r($request->all());
            $vehicle = Vehicle::where('id', $request->detailId)->first();
            $countries = Country::orderBy('name', 'asc')->get();
            $states = State::where('country_id', $vehicle->country)->orderBy('name', 'asc')->get();
            $cities = City::where('state_id', $vehicle->state)->orderBy('name', 'asc')->get();
            return response()->json([
                        'status' => 'success',
                        'vehicle' => $vehicle,
                        'countries' => $countries,
                        'states' => $states,
                        'cities' => $cities
            ]);
        }

        public function deleteVehicleInfo(Request $request) {
//            print_r($request->all()); die;
            $delete = Vehicle::where('id', $request->detailId)->delete();
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

        public function downloadVehiclePdf(Request $request, $id = null) {
            $vehicle = Vehicle::where('id', $id)->first();
            if (empty($vehicle)) {
                die('Vehicle not valid!');
            }
            $html = \View::make('pdf.vehicle', compact('vehicle'))->render();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->render();
            $dompdf->stream("dompdf_output.pdf", array("Attachment" => false));
            //            file_put_contents(public_path() . "/pdf/file_19.pdf", $dompdf->output());
            exit();
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

    }
    