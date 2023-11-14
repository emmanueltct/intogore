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
            <div class="row justify-content-center mt-5">
              <div class="col-lg-6">
                <h5 class="comment-title">Enroll to {{$courseid->courseTitle}} Course</h5>
                  <form action="{{route('saveEnrollmentCryptoCourses',$courseid->id)}}" method="POST" id="commentForm">
                    @csrf
                    <div class="row">
                     <div class="col-lg-12 mb-3">
                        <input type="hidden" class="form-control" name="course_id" value="{{$courseid->id}}" readonly>
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="comment-name">Name</label>
                        <input type="text" class="form-control" name="userName" placeholder="Enter your name">
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="comment-email">Email</label>
                        <input type="text" class="form-control" name="userEmail" placeholder="Enter your email">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mb-3">
                        <label for="comment-name">Telephone</label>
                        <input type="text" class="form-control" name="userPhone" placeholder="Enter your phone number">
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="comment-email">Ammout for course</label>
                        <input type="text" class="form-control" name="coursePrice" value="{{$courseid->CoursePrice}}" readonly>
                      </div>
                    </div>

                      <div class="col-12 mb-3">
                        <label for="comment-message">Courses Agreements</label>
                        <div class="alert alert-success" role="alert">
                           By filling this form you agree to pay all charges to this course for other information call this number <b>0781942079</b> or send text on whatsapp
                        </div>
                      </div>
                      <div class="col-12">
                        <button  class="btn btn-primary" type="submit"  id="btn-submit">Enroll</button>
                        <a href="{{route('allCourses')}}"  class="btn btn-outline-success float-end">Back to All Courses</a>
                      </div>
                    </div>
                  </form>
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