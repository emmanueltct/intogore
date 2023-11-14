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
          <form method="post"  action="{{route('postCategory')}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
              <select name="categoryName" class="form-control" id="postTitle" >
                <option>Please insert post categories</option>
                  <option value="News">News</option>
                  <option value="Articles">Articles</option>
                  <option value="Crypto Analytics">Crypto Analytics</option>
                  <option value="Blockchain Innovations">Blockchain Innovations</option>
              </select>
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