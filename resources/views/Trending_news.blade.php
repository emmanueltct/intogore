@include('header1')
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
  margin-top:-30px;
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

#hero-slider{
  background:url(assets/img/business1.jpg) center center;
  background-repeat: no-repeat;
  background-size:cover;
}

@media (max-width:999px) {

.icon-boxes {
  margin-top:-100px;
  padding-top: 0;
  position: relative;
  z-index: 100;
  
}
  .course-icon-box{
    padding:5px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
  }
  
    .services .icon-box p{
    margin-left:0px;
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
  .services .icon-box i {
    color: #f6b024;
    font-size: 40px;
    line-height: 0;
    padding:10px;
  }

  .services .icon-box h4 {
    margin-left:0px;
    font-weight: 700;
    margin-bottom: 18px;
    font-size: 18px;
  }
    .services .icon-box {
    margin-bottom: 20px;
    padding: 6px 6px;
    border-radius: 6px;
    background: #fff;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }
}



 </style>

@include('nav')
  <main id="main">
   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="font-size:20px"> Crypto currences updates from different media</h2>
        
        </div>

        <div class="row">
          @foreach($trending as $trends)
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box course-icon-box">
              <i class="bi bi-card-text"></i>
              <h4><a href="{{$trends->sourceLink}}" target="_blank">{{$trends->trendingTitle}}</a></h4>
              <p>{{$trends->Comments}}
                <br/><br/>

                For more: <a class="btn btn-link" href="{{$trends->sourceLink}}" target="_blank">{{$trends->sourceLink}}</a>
              </p>
            </div>
          </div>
        @endforeach
      </div>
      </section><!-- End Services Section -->

  </main><!-- End #main -->
<!-- ======= Footer ======= -->
@include('footer')
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validates.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html> 