  <!-- ======= Header ======= -->
  <body>
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('Index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 style="font-size:20px;font-family: Times New Roman, Times, Sans-serif;">INTOGOREFINTECH</h1>
      </a>

      <nav id="navbar" class="navbar">
            <ul>
            <li><a href="{{route('Index')}}">Home</a></li>
            <li><a href="{{route('AllProducts','All')}}">Shopping</a></li>
            <li><a href="{{route('allCourses')}}">Trading courses</a></li>
            <li><a href="{{route('allPost','All')}}">Skills Sharing</a></li>
            <li><a href="{{route('gettrendingnews')}}">Trending News</a></li>
            <li><a href="{{route('About')}}">About-Us</a></li>
            <li><a href="{{route('Contact')}}">Contact-Us</a></li>
            </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
      <a href="https://www.facebook.com/rwandainvestor?mibextid=ZbWKwL" target="_blank" class="mx-2"><span style="color:yellow" class="bi-facebook"></span></a>
        <a href="https://twitter.com/IntogoreFintech" target="_blank" class="mx-2"><span style="color:yellow"  class="bi-twitter"></span></a>
        <a href="https://www.instagram.com/intogore_fintech/?utm_source=qr&igshid=NGExMmI2YTkyZg%3D%3D" target="_blank" class="mx-2"><span style="color:yellow"  class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open visually-hidden"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap d-none">
          <form action="#" class="search-form" style="display:none" >
            <span class="icon bi-search" ></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->