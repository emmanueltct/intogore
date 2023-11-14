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
        </div>
          <form method="post"  action="{{route('posttrendingForm')}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <input type="text" name="trendingTitle" class="form-control" id="trendingTitle" placeholder="give your post heading of on trending news " required>
            </div>
            <div class="form-group">
              <label>Put attractive content for your visitors no more than 500 words</label> 
              <textarea  class="form-control" name="comments" rows="3" placeholder="your post comments or description [max characters:500]" required></textarea>
            </div>
            <div class="form-group">
              <input type="url" class="form-control" name="trendingLink" id="trendingLink" required>
              <label>paste source link for your post you want to share</label>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><input type="submit" value="Send Post"></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')