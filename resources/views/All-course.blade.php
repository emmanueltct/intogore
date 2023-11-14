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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
       
        .flip-box {
          background-color: transparent;
          width:100%;
          height: 150px;
          border: 1px solid #f1f1f1;
          perspective: 1000px;
        }

        .flip-box-inner {
          position: relative;
          width: 100%;
          height: 100%;
          text-align: center;
          transition: transform 0.8s;
          transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
          transform: rotateY(180deg);
        }

        .flip-box-front, .flip-box-back {
          position: absolute;
          width: 100%;
          height: 100%;
          overflow:hidden;
          -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
        }

        .flip-box-front {
          background-color: #bbb;
          color: black;
        }

        .flip-box-back {
          background-color: #555;
          color: white;
          padding:2%;
          transform: rotateY(180deg);
        }

        .course-link:hover{
          color:blue;
          font-size:14px;
          text-decoration:underline;
        }
        #price_area{
          animation: blinker 1.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
        @media (min-width: 1339px) {
          #courseImage .img-fluid {
          height:50%;
        }
      }

  </style>
  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif 
              
          @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
              <h1 style="padding:2%">Digital assets trading course</h1>
              <p>Learn how to trade digital assets like a pro with our comprehensive beginner-friendly course, earn passive income by following our proven strategies, and get access to our exclusive community of traders and investors. Guaranteed to teach you how to trade digital assets profitably!</p>
                <br/>
                <div class="accordion" id="accordionExample">
                
                <?php for($a=0;$a <count($course);$a++){ ?>
                 
                <div class="accordion-item">
                  <h2 class="accordion-header" id="<?= $course[$a]->id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $course[$a]->id ?>" aria-expanded="false" aria-controls="collapse<?= $course[$a]->id ?>">
                    {{$course[$a]->courseTitle}}
                    </button>
                  </h2>
                  <div id="collapse<?= $course[$a]->id ?>" class="accordion-collapse collapse" aria-labelledby="<?= $course[$a]->id ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    @if($course[$a]->CourseEnroll=='Paid-Course')
                      <br/><br/>
                        <button class="btn btn-outline-primary btn-sm float-start"><span id="price_area" style="width:30%">
                             {{ "Course Price:".$course[$a]->CoursePrice }}</span></button>
                          @endif 
                          @if($course[$a]->CourseEnroll=='Paid-Course')
                            <a href="{{route('enrollmentCryptoCourses',$course[$a]->courseEndLink)}}" class="btn btn-primary btn-sm float-end" >Enroll this course</a> <br>
                            @endif
                            <br/><br/>
                        <div id="courseImage" class="d-flex justify-content-center"><img src="../../courses/images/{{$course[$a]->courseThumbnail}}" alt="" class="img-fluid"></div>
                        <div id="coursedescription" style="text-align:left">
                         <br/><br/>
                        {!! $course[$a]->courseDescription !!}</div>
                      <br/>
                 
                   <div class="row">
                        <?php
                        $comments = App\Models\course::find($course[$a]->id)->subcourses()->where('subcourses.coursePublishment','=','Released')->get();
                        foreach ($comments as $comment) {
                            //
                            ?>
                            <div class="col-lg-3">
                              <div class="content" style="background-color:red">
                              <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                   <img src="./courses/images/<?=$comment['courseThumbnail']?>" class="img-fluid">
                                  </div>
                                   <div class="flip-box-back">
                                    <p><?=substr($comment['courseIntro'],0,160)?>....</p>
                                  </div>
                                </div>
                              </div>
                             </div>
                             <h4 style="font-size:16px; padding:10px 0 10px 0"><a class="course-link" href="{{route('takeCourse',$comment->SubCourseEndLink)}}"><?= $comment['mainTitle']?></a></h4> 
                            </div>
                        <?php } ?>
                        </div>  
                    </div>
                  </div>
                </div>
              <?php  
                  }
              
              ?>
     </div>
    </div>
  </div>
</div>
</div>
</section>
</main><!-- End #main -->


<!-- ======= Footer ======= -->
@include('footer')

<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
<!-- Template Main JS File -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
</body>
</html>


