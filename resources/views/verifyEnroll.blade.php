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

  <main id="main" >
    <section class="single-post-content" >
      <div class="container" >
    
            <!-- ======= Comments Form ======= --> 
            @if($errors->any())
                <div class="alert alert-danger">
                {{ implode(' ', $errors->all(':message')) }}
                </div>
             @endif
             @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{route('allCourses')}}"  class="btn btn-outline-success float-end">Back to All Courses</a>
            <br/>
            <div class="row justify-content-center mt-5">
              <div class="col-lg-6">
                <h5 class="comment-title">We are verifying if you are Enrolled to some Courses.</h5>
                <h6>Please use the same email as one used to register to this course</h6><br/>
                 <form id="userVerify" method="POST" action="{{route('verifyPaidCourses')}}">
                            @csrf
                        <div class="form-group"> 
                            <label>Given Email</label>
                            <input class="form-control" type="text" id="EnrolledUserEmail" name="userEmail" value="" required>
                        </div><br/>
                        <div class="form-group"> 
                            <button  class="btn btn-primary" type="submit"  id="btn-submit">Enroll</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                </div>
              </div>
            </div>
               
            <!-- End Comments Form -->
          </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   @include('footer')
<!-- Vendor JS Files -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>

</html>