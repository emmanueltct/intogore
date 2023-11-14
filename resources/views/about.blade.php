<?php
$p=[];
  $url= (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $p['furl']=$url;
  $P['ftype']='website';
  $p['ftitle']='INTOGORE FINTECH';
  $p['fdesc']='Intogorefintech is a leading digital assets company based in Rwanda.';
  $p['fimage']="https://intogore.com/assets/img/favicon.jpeg";
  $p['tcard']='summary_large_image';
  $p['tdomain']='intogore.com';
  $p['turl']=$url;
  $p['ttitle']='INTOGORE FINTECH';
  $p['tdesc']='Intogorefintech is a leading digital assets company based in Rwanda.';
  $p['timage']="https://intogore.com/assets/img/favicon.jpeg";

?>


@include('header1')
@include('nav')
  <style>
    /* # Cta
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
  <main id="main">
  <section id="cta" class="cta">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-12 text-center text-lg-start">
          <p style="font-size:25px">Intogorefintech is a leading digital assets company based in Rwanda.
           At Intogorefintech, we understand the transformative power of digital assets and their potential to reshape the financial landscape.
           <br> <br>
            <a href="#about" class="cta-btn align-middle" style="font-size:20px">About-Us</a></p>
          </div>
        </div>
      </div>
  </section>
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row mb-5">
          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="assets/img/AboutPic/about9.jpeg" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4">About us</div>
              <h2 class="mb-4 display-4" style="font-size:32px"> Welcome to Intogorefintech!</h2>
              <p>Intogorefintech is a leading digital assets company based in Rwanda. We specialize
                 in providing comprehensive digital assets media and information, top-notch consulting
                 and training services, as well as expert financial markets trading and investing solutions.
                 Established in 2022, our company has quickly gained recognition for its commitment 
                 to delivering exceptional value and innovation in the fast-growing field of digital assets.</p>
                 
                 <p>At Intogorefintech, we understand the transformative power of digital assets 
                 and their potential to reshape the financial landscape. Our mission is to empower
                 individuals and businesses to navigate this exciting domain with confidence and success.
                 We offer a range of services tailored to meet the diverse needs of our clients, 
                 whether they are new to the world of digital assets or experienced traders and investors.</p>
            </div>
          </div>

          <div class="d-md-flex post-entry-2 half mt-5">
            <a href="#" class="me-4 thumbnail order-2">
              <img src="assets/img/favicon.jpeg"  alt="" class="img-fluid">
            </a>
            <div class="pe-md-5 mt-4 mt-md-0">
            <p>Our digital assets media and information platform provides up-to-date news,
               insights, and analysis from the world of cryptocurrencies,
                blockchain technology, decentralized finance, and more. We strive to keep
                our users informed about the latest trends, market movements, 
                and regulatory developments, ensuring they have the knowledge
                necessary to make informed decisions.
            </p>
            <p>As part of our commitment to education, we offer comprehensive consulting and training services.
               Our team of industry experts brings years of experience and deep expertise to the table,
                helping individuals and organizations understand the intricacies of digital assets, 
                develop effective strategies, and navigate the ever-changing landscape.
               Whether you're looking to learn the fundamentals or explore advanced trading techniques, 
               our tailored training programs are designed to equip you with the skills and knowledge you need to succeed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-5 bg-light py-5">
      <div class="container" data-aos="fade-up">
        <div class="row mb-5">
          <div class="d-md-flex post-entry-2 half">
            <div class="me-4 thumbnail">
              <img src="assets/img/AboutPic/about3.jpeg" alt="" class="img-fluid">
              <h2 class="post-meta mt-4" style="font-size:13px" > Here are some of the things we do to fulfill our mission: </h2>
              <p>
                We provide news, analysis, and educational resources about digital assets.
                We help businesses and individuals understand the risks and opportunities of digital assets.
                We offer training on how to invest in digital assets.
                We believe that by empowering people to understand and invest in digital assets, 
                we can help them achieve their financial goals and build a better future for themselves and their families.
               </p>
            </div>
            <div class="me-4 thumbnail order-2">
              <h2 class="mb-4 display-4" style="font-size:32px" >Mission &amp; Vision</h2>
              <h3 class="post-meta mt-4" style="font-size:13px" >To empower people to understand and invest in digital assets.</h3>
            <p>
              We believe that digital assets have the potential to revolutionize the way we think about money and finance. We want to help people understand this new asset class and how it can be used to their advantage. We also want to provide people with the tools and resources they need to invest in digital assets safely and securely.
              We are committed to providing our clients with the best possible service. We are a team of experienced professionals with a deep understanding of digital assets. We are passionate about helping people learn about and invest in this emerging asset class.
            </p>
              <img src="assets/img/AboutPic/about4.jpeg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="display-4 mb-4" style="font-size:32px" >Our  best advice about digital assets</h2>
            <p>
              Do your research. Before you invest in any digital asset, it is important to do your research and understand the risks involved. There are many different types of digital assets, and each one has its own unique risks. It is important to understand the potential for volatility, security risks, and scams before you invest.
              Start small. If you are new to investing in digital assets, it is a good idea to start small. This will allow you to learn more about the market and the risks involved before you invest a large amount of money.</p>
            
              <p>
                Diversify your portfolio. Don't put all your eggs in one basket. When you are investing in digital assets, it is important to diversify your portfolio. This means investing in a variety of different assets, which will help to reduce your risk.
                 Only invest what you can afford to lose. Digital assets are a volatile asset class, and the value of your investment could go down as well as up. It is important to only invest money that you can afford to lose.</p>
              <p>
                Store your digital assets securely. If you are holding digital assets, it is important to store them securely. This means using a hardware wallet or a software wallet that is password-protected.
                Be aware of scams. There are many scams associated with digital assets. It is important to be aware of these scams and to avoid them.</p>
              <p><a class="btn btn-outline-primary" href="{{route('allPost','All')}}" class="more">For more see our posts</a></p>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6">
                <img src="assets/img/AboutPic/about5.jpeg" alt="" class="img-fluid mb-4">
              </div>
              <div class="col-6 mt-4">
                <img src="assets/img/AboutPic/about6.jpeg" alt="" class="img-fluid mb-4">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4">Trusted Crypto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Wade Warren</h4>
            <span class="d-block mb-3 text-uppercase">Founder, VP</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Jane Cooper</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-6.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
        </div>
      </div>
    </section>
-->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
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