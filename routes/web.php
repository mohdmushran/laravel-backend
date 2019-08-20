<?php

    /*
      |--------------------------------------------------------------------------
      | Web Routes
      |--------------------------------------------------------------------------
      |
      | Here is where you can register web routes for your application. These
      | routes are loaded by the RouteServiceProvider within a group which
      | contains the "web" middleware group. Now create something great!
      |
     */

    /* Route::get('/', function () {
      return view('welcome');
      }); */

    Route::get('add-doctor', 'BrakeController@factory')->name('adddoctorPage');

    Route::post('add-doctor', 'BrakeController@postfactory')->name('postDoctorPage');

    Route::get('industry/home', 'IndustrialController@factries')->name('industrypage');

    Route::get('industry/elements', 'IndustrialController@elements')->name('elementpage');

    Route::get('industry/generic', 'IndustrialController@generic')->name('genericpage');




    Route::get('cleanblog/home', 'StartBootStrapController@blog')->name('boot');

    Route::get('cleanblog/about', 'StartBootStrapController@about')->name('about');

    Route::get('cleanblog/post', 'StartBootStrapController@post')->name('post');

    Route::get('cleanblog/contact', 'StartBootStrapController@contact')->name('contact');





    Route::get('moustachio/home', 'BrakeController@bus')->name('brakepage');

    Route::get('moustachio/about-us', 'BrakeController@about')->name('aboutpage');

    Route::get('moustachio/gallery-us', 'BrakeController@gallery')->name('gallerypage');

    Route::get('moustachio/blog-us', 'BrakeController@blog')->name('blogpage');


    Route::get('moustachio/provider', 'BrakeController@provide')->name('providerpage');
    Route::POST('moustachio/provider', 'BrakeController@postprovide')->name('postproviderpage');


    Route::get('moustachio/products', 'BrakeController@product')->name('productpage');
    Route::post('moustachio/products', 'BrakeController@postproduct')->name('postproductpage');


    Route::get('moustachio/profile', 'BrakeController@profile')->name('profilepage');
    Route::POST('moustachio/profile', 'BrakeController@postprofile')->name('postprofilepage');

    Route::get('moustachio/vacancy', 'BrakeController@vacancy')->name('vacancypage');
    Route::POST('moustachio/vacancy', 'BrakeController@postvacancy')->name('postvacancypage');




    Route::get('moustachio/contact-us', 'BrakeController@contact')->name('contactpage');
    Route::post('moustachio/contact-us', 'BrakeController@postcontact')->name('postcontactpage');

    Route::get('moustachio/single-post', 'BrakeController@post')->name('postpage');

    Route::get('moustachio/blog-post', 'BrakeController@blogpost')->name('blogsinglepage');




    Route::get('/', 'HomeController@index')->name('homepage');
    Route::get('about-us', 'AboutController@index')->name('aboutuspage');


    Route::get('browse/jobs', 'JobsController@job')->name('browsejobspage');

    Route::get('browse/pricing', 'JobsController@pricing')->name('pricingpage');





    Route::get('sonu', 'HelloController@monu');
    Route::get('test/user', 'HelloController@test');
    /* Route::get('user/{name?}', function ($name = null) {
      return $name;
      }); */
    Route::get('user/profile', 'UserController@showProfile');
    Route::get('hello', function () {
        return 'Hello World';
    });
    Route::get('user/{id}', function ($id) {
        return 'User ' . $id;
    });
    Route::get('salman', 'HelloController@mushran');

    Route::get('car/bmw', 'CarController@marcedes');

    Route::get('car-info/{carname}/{number}', 'CarController@info');

    Route::get('festival/{festivalname}', 'FestivalController@home');

    Route::get('bike/{bikename}', 'BikeController@motorcycle');

    Route::get('laptop/{laptopname}/series/{seriesname}', 'LaptopController@mouse');

    Route::get('mobile/{mobilename}/version/{versionname}/color/{colorname}', 'MobileController@apple');
    

    Route::get('download-pdf/{id}', 'ResumeController@downloadPdf')->name('downloadPdf');
    
    Route::get('download-vehicle-pdf/{id}', 'VehicleController@downloadVehiclePdf')->name('downloadVehiclePdf');
    
    Route::get('download-job-pdf/{id}', 'JobController@downloadJobPdf')->name('downloadJobPdf');
    
    Route::get('download-information-pdf/{id}', 'InformationController@downloadInformationPdf')->name('downloadInformationPdf');