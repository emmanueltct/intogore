@include('titles')
 

  <style>
    .is-invalid{
      border-style: solid;
      border-color: coral;
      margin-bottom:4px;
    }

    .modal-backdrop, .modal-backdrop.in{
  display: none;
}
  </style>

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
          <form method="post"  action="{{route('sendPost')}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
                <Select class="form-control  @error('postCategory') is-invalid @enderror " name="postCategory" id="postCategory" placeholder="" required>
                    <option value="">Select Post category</option> 
                    @if(count($category)>0)
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}" <?php if(old('postCategory')==$cat->id) echo "selected" ?> >{{$cat->category}}</option>
                        @endforeach
                    @endIf
                </select>
                @error('postCategory')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
               <label for="title">Post Title</label>
                <input type="text" name="postTitle"  id="postTitle" value="{{ old('postTitle') }}"  placeholder="Write your post page title"  class="form-control  @error('postTitle') is-invalid @enderror" required >
                @error('postTitle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
                <label>Thumbnail visible to web page</label>
              <input type="file" class="form-control @error('postThumbnail') is-invalid @enderror " name="postThumbnail" value="{{old('postThumbnail')}}" id="postThumbnail" required>
              @error('postThumbnail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 500 words</label> 
              <textarea  class="form-control @error('postDescription') is-invalid @enderror " name="postDescription" rows="3" placeholder="Attractive summary [max characters:500]" required>{{ old('postDescription') }} </textarea>
              @error('postDescription')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <textarea id="summernote" class="form-control @error('postDetailDescription') is-invalid @enderror " name="postDetailDescription" rows="5" placeholder="more description on post" required>{{ old('postDetailDescription') }}</textarea>
              @error('postDetailDescription')
                   <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="text-center"><input type="submit" value="Send Post"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
     
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')
  <script>
     $('button[data-event="showImageDialog"]').attr('data-toggle', 'image').removeAttr('data-event'); 
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
