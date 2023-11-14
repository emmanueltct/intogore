<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INTOGORE FINITECH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
 <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/summernote/summernote-lite.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS Files -->
  <link href="{{ URL::asset('assets/css/variables.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/main.css')}}" rel="stylesheet">
  
  <style>

.services  h3  {
  color: #05579e;
  transition: 0.3s;
  font-size:20px;
}

.services  h3:hover {
  color: #0880e8;
}

.services .card {
  margin:20px;
 
}




/*-------------------------------------------------------------- */

 </style>

</head>
<body>
<!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>IntogoreFinTech</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        @guest
            @if (Route::has('login'))
            <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
               @endif
               @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
               @endif
              @else
                <li><a href="{{route('adminHome')}}">Home</a></li>
                <li><a href="{{route('AdmincourseList')}}">Courses</a></li>
                <li><a href="{{route('adminViewAllPost')}}">Posts</a></li>
                <li><a href="{{route('AdminAllProducts')}}">Product</a></li>
                <li><a href="{{route('checkEnrolledUser',['Course'=>'All'])}}">Users</a></li>
                <li><a href="{{route('AdminAllPostTrending')}}">Trending</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Comments</a>
                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('adminCourseComment',['Course'=>'All'])}}">{{ __('Course Comments') }}</a>
                        <a class="dropdown-item" href="{{route('userPostComments','All')}}">{{ __('Post Comments') }}</a>
                                  
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
      </nav><!-- .navbar -->
      <div class="position-relative  visually-hidden">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->
      </div>
    </div>
  </header><!-- End Header -->