<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Jobboard">

        <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>    

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">    
        <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css') }}" type="text/css">  
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" type="text/css">  
        <!-- Material CSS -->
        <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}" type="text/css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css"> 
        <link rel="stylesheet" href="{{ asset('fonts/themify-icons.css') }}"> 

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('extras/animate.css') }}" type="text/css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('extras/owl.carousel.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('extras/owl.theme.css') }}" type="text/css">
        <!-- Rev Slider CSS -->
        <link rel="stylesheet" href="{{ asset('extras/settings.css') }}" type="text/css"> 
        <!-- Slicknav js -->
        <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}" type="text/css">
        <!-- Main Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
        <!-- Responsive CSS Styles -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">

        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/red.css') }}" media="screen" />

    </head>
    
    @yield('content')
    
    <body>  

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top">
            <i class="ti-arrow-up"></i>
        </a>

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                </div>
            </div>
        </div>

        <!-- Main JS  -->
        <script type="text/javascript" src="{{ asset('js/jquery-min.js') }}"></script>      
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>    
        <script type="text/javascript" src="{{ asset('js/material.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/material-kit.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/form-validator.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/contact-form-script.js') }}"></script>    
<!--        <script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js')  }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>-->

    </body>
</html>