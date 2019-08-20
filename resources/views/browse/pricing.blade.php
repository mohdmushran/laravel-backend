@extends ('layouts.frontend')

@section ('content')

@include('layouts.header')



<!-- Page Header Start -->
<div class="page-header" style="background: url(/img/banner1.jpg);">
    <div class="container">
        <div class="row">         
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Pricing Plan</h2>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="ti-home"></i> Home</a></li>
                        <li class="current">Pricing Plan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->    

<!-- Pricing Table Section -->
<section id="pricing-table" class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="table">
                    <div class="title">
                        <h3>Pricing Plan 1</h3>
                    </div>
                    <div class="pricing-header">
                        <p class="price-value"> <sup>$</sup>0</p>
                        <p class="price-quality">/forever</p>
                    </div>
                    <ul class="description">
                        <li>Post 1 Job</li>
                        <li>No Featured Job</li>
                        <li>Edit Your Job Listing</li>
                        <li>Manage Application</li>
                        <li>30-day Expired</li>
                    </ul>
                    <button class="btn btn-common" type="submit">Get Started</button>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="table" id="active-tb">
                    <div class="title">
                        <h3>Pricing Plan 2</h3>
                    </div>
                    <div class="pricing-header">
                        <p class="price-value"> <sup>$</sup>99</p>
                        <p class="price-quality">/90 DAYS</p>
                    </div>
                    <ul class="description">
                        <li>Post 1 Job</li>
                        <li>No Featured Job</li>
                        <li>Edit Your Job Listing</li>
                        <li>Manage Application</li>
                        <li>30-day Expired</li>
                    </ul>
                    <button class="btn btn-common" type="submit">Get Started</button>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="table">
                    <div class="title">
                        <h3>Pricing Plan 3</h3>
                    </div>
                    <div class="pricing-header">
                        <p class="price-value"> <sup>$</sup>199</p>
                        <p class="price-quality">/180 DAYS</p>                    
                    </div>
                    <ul class="description">
                        <li>Post 1 Job</li>
                        <li>No Featured Job</li>
                        <li>Edit Your Job Listing</li>
                        <li>Manage Application</li>
                        <li>30-day Expired</li>
                    </ul>
                    <button class="btn btn-common" type="submit">Get Started</button>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- Pricing Table Section End -->
<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title"><img src="/img/logo.png" class="img-responsive" alt="Footer Logo"></h3>
                        <div class="textwidget">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Quick Links</h3>
                        <ul class="menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Trending Jobs</h3>
                        <ul class="menu">
                            <li><a href="#">Android Developer</a></li>
                            <li><a href="#">Senior Teamleader</a></li>
                            <li><a href="#">iOS Developer</a></li>
                            <li><a href="#">Junior Tester</a></li>
                            <li><a href="#">Full Stack Developer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Follow Us</h3>
                        <div class="bottom-social-icons social-icon">  
                            <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                            <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>                   
                            <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                            <a class="dribble" href="https://dribbble.com/"><i class="ti-dribbble"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/"><i class="ti-linkedin"></i></a>
                        </div>  
                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                        <form class="subscribe-box">
                            <input type="text" placeholder="Your email">
                            <input type="submit" class="btn-system" value="Send">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer area End -->

    @include('layouts.footer')

    @endsection