@include('titles')
  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h3 class="page-title" style="font-size:24px">Describe your Post here</h3>
          </div>
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
         @endif
         @if($errors->any())
                <div class="alert alert-danger">
                  <h1>Oops!!</h1>
                   <h3> {{ implode(' ', $errors->all(':message')) }}</h3>
                   <br/>
                  </div>
             @endif
        </div>
          <form method="post"  action="{{route('editCourseFormSave',$singlecourse->id)}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="current_image" value="{{$singlecourse->courseThumbnail}}" required>
            <div class="form-group">
                <input type="text" name="courseTitle" class="form-control" id="postTitle" value="{{ $singlecourse->courseTitle}}" required>
                <label>course title</label>
            </div>
             <div class="form-group">
                <select class="form-control" name="subscription">
                    <option value="">Select course Subscription</option>
                    <option value="Free" <?php if($singlecourse->CourseEnroll=="Free"){echo"selected";}?>>Free</option>
                    <option value="Paid-Course"<?php if($singlecourse->CourseEnroll=="Paid-Course"){echo"selected";}?> >Paid Course</option>
                </select>
                <label>course Subscription</label>
            </div> 
            <div class="form-group">
                <input type="text" name="courseprice" class="form-control" value="{{ $singlecourse->CoursePrice}}" required>
                <label>course Price</label>
            </div>
            <div class="form-group" style="color:red">
              <input type="file" class="form-control" name="courseThumbnail" id="courseThumbnail">
              <label>Change thumbnail here if you need too otherwise leave current</label>
            </div>
            <div class="form-group" style="max-width:300px">
              <img src="../../courses/images/{{$singlecourse->courseThumbnail}}" alt="" class="img-fluid" >
              <label>Current thumbnail visible to web page</label>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 800 words</label> 
              <textarea id="summernote"  class="form-control" name="mainCourseIntro" rows="3" value="" required>{{ $singlecourse->courseDescription}}</textarea>
            </div>
            <div class="text-center"><input type="submit" value="Send Post"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
     
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')

  <script type="text/javascript">
      $('#summernote').summernote({
        placeholder: 'Elaborate more on your post [ put all possible description ]',
        tabsize: 2,
        height:300,
        dialogsInBody: true,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
     
      });
      
    </script>  

