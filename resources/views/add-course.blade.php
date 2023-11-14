@include('titles')
  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
          <a href="{{route('subCourseForm')}}"class="btn btn-outline-primary btn-sm float-end" ><i class="bi bi-plus"></i> Add New chapter</a><br/><br/>
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
          <form method="post"  action="{{route('postCourseForm')}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <input type="text" name="courseTitle" class="form-control" id="postTitle" placeholder="Write main course title here" required>
            </div>
            <div class="form-group">
              <input type="file" class="form-control" name="courseThumbnail" id="courseThumbnail" required>
              <label>Thumbnail visible to web page</label>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 800 words</label> 
              <textarea id="summernote" class="form-control" name="mainCourseIntro" rows="3" placeholder="Attractive summary for course [max characters:800]" required></textarea>
            </div>
            <div class="text-center"><input type="submit" value="Send Post"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
     
    </section>

  </main><!-- End #main -->

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

