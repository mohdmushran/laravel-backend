<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Contact;
    use App\Item;
    use App\Name;
    use App\Recrute;
    use Illuminate\Support\Facades\Validator;
    use App\Search;
    use App\Doctor;

    class BrakeController extends Controller {

        public function bus() {
            return view('index.bus');
        }

        public function about() {
            return view('index.about');
        }

        public function gallery() {
            return view('index.gallery');
        }

        public function blog() {
            return view('index.blog');
        }

        public function contact() {
            return view('index.contact');
        }

        public function post() {
            return view('index.gallery_single_post');
        }

        public function blogpost() {
            return view('index.blog_single_post');
        }

        public function postcontact(Request $request) {
//        $input = $request->all();
//        dd($input);
            $data = [
                'fname' => $request->fname,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ];
            Contact::create($data);
            return redirect()->route('contactpage');
        }

        public function product(Request $request) {
            return view('index.product');
        }

        public function postproduct(Request $request) {
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity
            ];
            Item::create($data);
            return redirect()->route('productpage');
        }

        public function profile(Request $request) {
            return view('index.profile');
        }

        public function postprofile(Request $request) {
            $data = [
                'name' => $request->name,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone
            ];
            Name::create($data);
            return redirect()->route('postprofilepage');
        }

        public function vacancy(Request $requset) {
            return view('index.vacancy');
        }

        public function postvacancy(Request $request) {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                'address' => $request->address
            ];
            $fields = [
                'name' => ['required', 'name'],
                'email' => ['required', 'email'],
                'phone' => ['required', 'phone'],
                'city' => ['required', 'city'],
                'address' => ['required', 'address']
            ];
            $messages = [
                'name.required' => 'name is required.',
                'email.required' => 'Email is required.',
                'phone.required' => 'phone is required.',
                'city.required' => 'city is required.',
                'address.required' => 'address is required.'
            ];
            /* {{ $errors->vacancypage->first('name') }} */
            $validator = Validator::make($request->all(), $fields, $messages);
            if ($validator->fails()) {
                return redirect()->route('vacancypage')
                                ->withErrors($validator, 'vacancypage')
                                ->withInput();
            }


            Recrute::create($data);
            return redirect()->route('postvacancypage');
        }

        public function provide(Request $request) {
            return view('index.provider');
        }

        public function postprovide(Request $request) {

            $data = [
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'city' => $request->city
            ];

            $fields = [
                'name' => ['required', 'name'],
                'address' => ['required', 'address'],
                'phone' => ['required', 'phone'],
                'email' => ['required', 'email'],
                'city' => ['required', 'city']
            ];

            $messages = [
                'name.required' => 'name is required',
                'address.required' => 'address is required',
                'phone.required' => 'phone is required',
                'email.required' => 'email is required',
                'city.required' => 'city is required'
            ];

            $validator = Validator::make($request->all(), $fields, $messages);
            if ($validator->fails()) {
                return redirect()->route('providerpage')
                                ->withErrors($validator, 'providerpage')
                                ->withInput();
            }

            Search::create($data);
            return redirect()->route('providerpage');
        }

        public function factory(Request $request) {
            $arrData = [];
            return view('index.adddoctor', compact('request', 'arrData'));
        }

        public function postfactory(Request $request) {

            $fields = [
                'name' => ['required'],
//                'image' => ['required'],
                'mobile' => ['required'],
                'description' => ['required'],
                'specialization' => ['required'],
                'fees' => ['required']
            ];


            $messages = [
                'name.required' => 'name is required',
//                'image.required' => 'image is required',
                'mobile.required' => 'mobile is required',
                'description.required' => 'description is required',
                'specialization.required' => 'specialization is required',
                'fees.required' => 'fees is required'
            ];
            $validator = Validator::make($request->all(), $fields, $messages);
            if ($validator->fails()) {
                return redirect()->route('adddoctorPage')
                                ->withErrors($validator, 'doctorerrors')
                                ->withInput();
            }
            $data = [
                'name' => $request->name,
//                'image' => $request->image,
                'image' => '',
                'mobile' => $request->mobile,
                'description' => $request->description,
                'specialization' => $request->specialization,
                'fees' => $request->fees
            ];

            Doctor::create($data);
            return redirect()->route('adddoctorPage');
        }

    }
    