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
          <form method="post"  action="{{route('postSubCourseForm')}}"  class="php-email-form" id="my_editor" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
                <Select class="form-control" name="courseCategory" id="courseCategory" placeholder="">
                    <option value="selct this">Select course category</option> 
                    @if(count($course)>0)
                        @foreach($course as $course)
                            <option value="{{$course->id}}">{{$course->courseTitle}}</option>
                        @endforeach
                    @endIf
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="mainTitle" class="form-control" id="mainTitle" value="{{ old('mainTitle') }}" placeholder="Write subcourse title" required>
            </div>
            <div class="form-group">
              <input type="file" class="form-control" name="courseThumbnail" id="courseThumbnail" required>
              <label>Thumbnail visible to web page</label>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 500 words</label> 
              <textarea  class="form-control" name="courseIntro" rows="3" placeholder="Attractive summary [max characters:500]" required></textarea>
            </div>
            <div class="form-group">
              <textarea id="summernote" class="form-control" name="courseDescription" rows="5" placeholder="more description on course" required></textarea>
            </div>
          
            <div class="text-center"><input type="submit" value="Send Post"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
     
    </section>

  </main><!-- End #main -->

  @include('Admin_footer')
  <script>
      $('#summernote').summernote({
        placeholder: 'Elaborate more on your post [ put all possible description ]',
        tabsize: 2,
        height: 300,
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
