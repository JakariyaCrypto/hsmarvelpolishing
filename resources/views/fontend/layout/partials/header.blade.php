<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/icon" href="{{asset('fontend/assets/img/logo.png')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('fontend/assets/fontawesome-6.0.0/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/glyphicon.min.css')}}">
    <!-- fontawesome -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('fontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/assets/css/magnific-popup.min.css')}}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    
    <!-- custom CSS -->
    <link href="{{asset('fontend/assets/css/style.css')}}" rel="stylesheet" >
    <!-- custom CSS -->
    <!-- responsive CSS -->
    <link href="{{asset('fontend/assets/css/responsive.css')}}" rel="stylesheet" >
    <!-- responsive CSS -->
    <!-- custom CSS -->
    <link href="{{asset('fontend/assets/css/swiper-bundle.min.css')}}" rel="stylesheet" >
    <!-- custom CSS -->
    <title>@yield('title')</title>


  </head>
  <body>

<!-- header section -->
  <section class="header-section" id="header-section">
    <div class="header-section-content">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-2">
              <div class="header-logo">
                <a href="url('/')">
                  <img src="{{asset('fontend/assets/img/logo.png')}}">
                </a>
              </div>
              <div class="mobile-menu-icon">
                <span><i class="fas fa-bars" id="mobile_menu_icon"></i></span>
              </div>
              </div>
              <div class="col-md-7">
                <div class="header-menu" id="mobile-menu">
                  <ul>
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/services')}}">Service</a></li>
                    <li><a href="{{url('/works')}}">Our Work</a></li>
                    <li><a href="{{url('/about-us')}}">About us</a></li>
                    <li><a href="{{url('/contact')}}">Contact us</a></li>
                  </ul>
                </div>
              </div>
            <div class="col-md-3">
              <div class="header-button">
                  <a href="https://wa.me/+601129807902?text=I am ready to chate with you" target="_blank" class="header-btn">booking now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section> 
<!-- header section -->