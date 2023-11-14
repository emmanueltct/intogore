
@include('titles')
  <style>
    .is-invalid{
      border-style: solid;
      border-color: coral;
      margin-bottom:4px;
    }
  </style>


  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
          <a href="{{route('adminViewAllPost')}}" class="btn btn-primary btn-sm float-end">Back To all Posts</a>
            <h3 class="page-title" style="font-size:24px">Update your Post here</h3>
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
          <form method="post"  action="{{route('adminEditSinglePost2',$post->id)}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="post_id" value="{{$post->id}}" required>
           <input type="hidden" name="current_image" value="{{$post->postThumbnail}}" required>
          <div class="form-group">
                <Select class="form-control  @error('postCategory') is-invalid @enderror " name="postCategory" id="postCategory" placeholder="" required>
                    <option value="">Select Post category</option> 
                    @if(count($category)>0)
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}" <?php if($cat->id==$post->postCategory) echo "selected" ?> >{{$cat->category}}</option>
                        @endforeach
                    @endIf
                </select>
                @error('postCategory')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
               <label for="title">Post Title</label>
                <input type="text" name="postTitle"  id="postTitle" value="{{$post->posttitle}}"  placeholder="Write your post page title"  class="form-control  @error('postTitle') is-invalid @enderror" required >
                @error('postTitle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
                <label>Thumbnail visible to web page</label>
              <input type="file" class="form-control @error('postThumbnail') is-invalid @enderror " name="postThumbnail" value="{{old('postThumbnail')}}" id="postThumbnail" >
            <label>if don't need to update thumbnail leave the current shown below</label>
            </div>
            @error('postThumbnail')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group" style="max-width:300px">
              <img src="../../images/{{$post->postThumbnail}}" alt="" class="img-fluid" >
              <label>Current thumbnail visible to web page</label>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 500 words</label> 
              <textarea  class="form-control @error('postDescription') is-invalid @enderror " name="postDescription" rows="3" placeholder="Attractive summary [max characters:500]" required>{{$post->postDescription}} </textarea>
              @error('postDescription')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <textarea id="summernote" class="form-control @error('postDetailDescription') is-invalid @enderror " name="postDetailDescription" rows="5" placeholder="more description on post" required>{{$post->postDetailDescription}}</textarea>
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
