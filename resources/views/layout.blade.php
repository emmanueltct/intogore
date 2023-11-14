<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

  <!-- Template Main CSS Files -->
  <link href="{{ URL::asset('assets/css/variables.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
  <style>
        .blink {
            animation: blinker 1.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
        .covered {
          position:relative; 
          padding:30px; 
        }

        .covered-img {
          background:url('https://source.unsplash.com/random/800x600');
          opacity: .25;
          background-size:cover;
          background-position:center; 
          position:absolute;
          top:0;bottom:0;left:0;right:0;
        }

  .icon-boxes {
  margin-top:-70px;
  padding-top: 0;
  position: relative;
  z-index: 100;
  
}

.icon-boxes .icon-box {
  padding: 40px 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 5px 10px 29px 0 rgba(68, 88, 144, 0.2);
  transition: all 0.3s ease-in-out;
  border-radius: 10px;
}

.icon-boxes .icon {
  margin: 0 auto 20px auto;
  display: inline-block;
  text-align: center;
}

.icon-boxes .icon i {
  font-size: 36px;
  line-height: 1;
  color: #f6b024;
}

.icon-boxes .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.icon-boxes .title a {
  color: #05579e;
}

.icon-boxes .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
  color: #777777;
}

.info-part{
  background-image: url("assets/img/business2.jpg");
}
/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/

.section-bg {
  background-color: #f1f8ff;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #054a85;
}

.section-title p {
  margin-bottom: 0;
  font-style: italic;
}

.services .icon-box {
  margin-bottom: 20px;
  padding: 50px 40px;
  border-radius: 6px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.services .icon-box i {
  float: left;
  color: #f6b024;
  font-size: 40px;
  line-height: 0;
}

.services .icon-box h4 {
  margin-left: 70px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .icon-box h4 a {
  color: #05579e;
  transition: 0.3s;
}

.services .icon-box h4 a:hover {
  color: #0880e8;
}

.services .icon-box p {
  margin-left: 70px;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}


/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: linear-gradient(rgba(5, 74, 133, 0.8), rgba(5, 74, 133, 0.9)), url("./assets/img/business2.jpg") fixed center center;
  background-size: cover;
  padding: 120px 0;
}

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
}

.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 0.5px;
  display: inline-block;
  padding: 8px 26px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  border-radius: 50px;
  border: 2px solid #f6b024;
  color: #fff;
}

.cta .cta-btn:hover {
  background: #f6b024;
}

@media (max-width: 1024px) {
  .cta {
    background-attachment: scroll;
  }
}

@media (min-width: 769px) {
  .cta .cta-btn-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}


/*-------------------------------------------------------------- */

 </style>
</head>

<body>
    
  @yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">

    <div class="row g-5">
      <div class="col-lg-4">
        <h3 class="footer-heading">About ZenBlog</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
        <p><a href="about.html" class="footer-link-more">Learn More</a></p>
      </div>
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading">Navigation</h3>
        <ul class="footer-links list-unstyled">
          <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
          <li><a href="index.html"><i class="bi bi-chevron-right"></i> Blog</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Categories</a></li>
          <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
          <li><a href="about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
          <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading">Categories</h3>
        <ul class="footer-links list-unstyled">
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
          <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>

        </ul>
      </div>

      <div class="col-lg-4">
        <h3 class="footer-heading">Recent Posts</h3>

        <ul class="footer-links footer-blog-entry list-unstyled">
          <li>
            <a href="single-post.html" class="d-flex align-items-center">
              <img src="assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <span>5 Great Startup Tips for Female Founders</span>
              </div>
            </a>
          </li>

          <li>
            <a href="single-post.html" class="d-flex align-items-center">
              <img src="assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
              </div>
            </a>
          </li>

          <li>
            <a href="single-post.html" class="d-flex align-items-center">
              <img src="assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
              </div>
            </a>
          </li>

          <li>
            <a href="single-post.html" class="d-flex align-items-center">
              <img src="assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
              </div>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <div class="copyright">
          © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>

      </div>

      <div class="col-md-6">
        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>

    </div>

  </div>
</div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
