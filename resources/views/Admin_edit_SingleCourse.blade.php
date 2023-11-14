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
          <form method="post"  action="{{route('save_editSubCourse',$subcourse->id)}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="subcourse_id" value="{{$subcourse->id}}" required>
           <input type="hidden" name="current_image" value="{{$subcourse->courseThumbnail}}" required>
          <div class="form-group">
                <Select class="form-control" name="courseCategory" id="courseCategory" placeholder="">
                    <option>Select course category</option> 
                    @if(count($course)>0)
                        @foreach($course as $course)
                            <option value="{{$course->id}}" <?php if($course->id==$subcourse->courseCategory)echo"selected" ?> >{{$course->courseTitle}}</option>
                        @endforeach
                    @endIf
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="mainTitle" class="form-control" id="mainTitle" value="{{$subcourse->mainTitle }}" required>
            </div>
            <div class="form-group" style="color:red">
              <input type="file" class="form-control" name="courseThumbnail" id="courseThumbnail">
              <label>Change thumbnail here if you need too otherwise leave current</label>
            </div>
            <div class="form-group" style="max-width:300px">
              <img src="../../courses/images/{{$subcourse->courseThumbnail}}" alt="" class="img-fluid" >
              <label>Current thumbnail visible to web page</label>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 500 words</label> 
              <textarea  class="form-control" name="courseIntro" rows="3" placeholder="Attractive summary [max characters:500]" required>{{$subcourse->courseIntro }}</textarea>
            </div>
            <div class="form-group">
              <textarea id="summernote" class="form-control" name="courseDescription" rows="5" placeholder="more description on course" required>{{$subcourse->courseDescription}}</textarea>
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
