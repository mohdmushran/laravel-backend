<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('save-contact', 'ShopController@Contact')->name('contactpage');

Route::post('save-user', 'DetailController@Detail')->name('detailpage');

Route::post('save-resume', 'ResumeController@Resume')->name('resumepage');
Route::post('list-resume', 'ResumeController@listResume')->name('listresumepage');
Route::post('delete-info', 'ResumeController@deletedInfo')->name('deleteInfoPage');
Route::post('edit-info', 'ResumeController@editInfo')->name('editInfoPage');
Route::post('get-edit-info', 'ResumeController@getEditInfo')->name('geteditPage');

Route::post('save-ionic-user', 'IonicController@Ionic')->name('ionicpage');

Route::post('save-about', 'AboutController@about')->name('aboutpage');
Route::post('list-about', 'AboutController@listAbout')->name('listaboutpage');
Route::any('upload-file', 'AboutController@uploadFile')->name('uploadfilepage');
Route::post('edit-about-info', 'AboutController@editAboutInfo')->name('editAboutInfoPage');
Route::post('get-edit-info', 'AboutController@getEditInfo')->name('geteditPage');


Route::post('save-business', 'BusinessController@business')->name('businesspage');
Route::post('list-business', 'BusinessController@listBusiness')->name('listbusinesspage');

Route::post('save-job', 'JobController@job')->name('jobpage');
Route::post('list-job', 'JobController@listJob')->name('listJobPage');
Route::post('edit-job-info', 'JobController@editJobInfo')->name('editJobPage');
Route::post('get-job-edit-info', 'JobController@getJobEditInfo')->name('getjobeditPage');
Route::post('delete-job-info', 'JobController@deletedJobInfo')->name('deleteJobInfoPage');

Route::post('save-vehicle', 'VehicleController@saveVehicle')->name('vehiclePage');
Route::post('list-vehicle', 'VehicleController@listVehicle')->name('listVehiclePage');
Route::post('edit-vehicle-info', 'VehicleController@editVehicleInfo')->name('editVehiclePage');
Route::post('get-vehicle-edit-info', 'VehicleController@getVehicleEditInfo')->name('getVehicleEditPage');
Route::post('delete-vehicle-info', 'VehicleController@deleteVehicleInfo')->name('deleteVehicleInfoPage');
Route::post('get-countries', 'VehicleController@getCountries')->name('getCountries');
Route::post('get-states', 'VehicleController@getStates')->name('getStates');
Route::post('get-cities', 'VehicleController@getCities')->name('getCities');

Route::post('save-information', 'InformationController@saveInformation')->name('saveInformation');
Route::post('list-information', 'InformationController@listInformation')->name('listInformationPage');
Route::post('edit-information', 'InformationController@editInformation')->name('editInformationPage');
Route::post('get-information-data', 'InformationController@getInformationData')->name('getInformationDataPage');
Route::post('delete-information', 'InformationController@deletedInformation')->name('deletedInformationPage');
Route::post('get-countries', 'InformationController@getCountries')->name('getCountries');
Route::post('get-states', 'InformationController@getStates')->name('getStates');
Route::post('get-cities', 'InformationController@getCities')->name('getCities');

Route::post('registration', 'UserController@registration')->name('registrationPage');
Route::post('login-registration', 'UserController@loginRegistration')->name('loginRegistrationPage');
Route::post('dashboard', 'ProfileController@dashboard')->name('dashboardPage');

//Route::post('login-registration', function(){
//    return response()->json([
//        'status' => 'success',
//        'token' => 'abcdefghijkl'
//    ]);
//});

Route::post('login', function(){
    return response()->json([
        'status' => 'success',
        'token' => 'abcjbhjkjbjhbb'
    ]);
//    return response()->json([
//        'status' => 'error',
//    ]);
});

Route::post('login-page', function(){
    return response()->json([
        'status' => 'success',
        'token' => 'abcjbhjkjbjhbb'
    ]);
});

Route::post('save-registration', 'RegistrationController@saveRegistration')->name('vehicleRegistration');
