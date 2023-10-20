<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="{{ asset('/assets/css/swiper-bundle.min.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/ all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/aboutpage.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/services.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/projectspage.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/contact.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/privacypolicy.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/termsconditions.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0.0/css/line.css">
  <!-- <title>LB SOLUTIONS</title> -->

  <title>
    @yield('title')
  </title>

</head>
<body>

    @include('layouts.includes.navbar')
    
    @yield('content')

    @include('layouts.includes.footer')


    <script src="{{ asset('assets/js/numbercounter.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    @yield('scripts')
</body>
</html>