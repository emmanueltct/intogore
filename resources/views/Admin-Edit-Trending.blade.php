@include('titles')
  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
          <a href="{{route('AdminAllPostTrending')}}" class="btn btn-primary btn-sm float-end">Back to All Trending list</a>
            <h3 class="page-title" style="font-size:24px">Update your Post information here</h3>
            
          </div>
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
         @endif
        </div>
        @if($trending)
          <form method="post"  action="{{route('AdminEditPostTrending2',$trending->id)}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="trending_id" value="{{$trending->id}}">
            <div class="form-group">
                <input type="text" name="trendingTitle" class="form-control" id="trendingTitle" value="{{$trending->trendingTitle}}" required>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 500 words</label> 
              <textarea  class="form-control" name="comments" rows="3" placeholder="your post comments or description [max characters:500]" required>
              {{$trending->Comments}}
              </textarea>
            </div>
            <div class="form-group">
              <input type="url" class="form-control" name="trendingLink" id="trendingLink" value="{{$trending->sourceLink}}"  required>
              <label>paste source link for your post you want to share</label>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><input type="submit" value="Send Post"></div>
          </form>
          @else
          <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>The post you are trying to edit is not available</span> <br>
              <i style="color:red">Please back to our trending post list</i> </h3>
                <a href="{{route('AdminAllPostTrending')}}" class="btn btn-primary">Trending list</a>
              <br><br>
            </div>
        @endif
        </div><!-- End Contact Form -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')