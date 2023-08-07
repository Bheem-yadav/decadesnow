<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0"/>
    <title>::DN::</title>

    <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel='stylesheet' href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css')}}">
    <link rel='stylesheet' href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css')}}">    
     <link href="{{ URL::asset('https://unpkg.com/aos@2.3.1/dist/aos.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css')}}"  /> 
     <link href="{{ URL::asset('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}" rel="stylesheet"> 
     <link href="{{ URL::asset('https://fonts.googleapis.com/css2?family=Mogra&display=swap')}}" rel="stylesheet">
     <link href="{{ URL::asset('https://fonts.googleapis.com/css2?family=Mogra&display=swap')}}" rel="stylesheet">

                   
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">

    
  </head>
  <body>
    <div class="top-cont">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
          <a class="mob-no" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 1234567890</a>
          <a class="email" href="mailto:demo@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a>
        </div>
        </div>
      </div>
    </div>


    <nav class="main--nav navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ URL::asset('images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active-" aria-current="page" href="{{url('/dn-story')}}">D/Story</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/people')}}">People</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/birthday')}}">Birthday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/anniversary')}}">Anniversary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/national-day')}}">National Day</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>