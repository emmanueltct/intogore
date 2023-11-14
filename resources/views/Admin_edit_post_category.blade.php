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
    @if($category)
          <form method="post"  action="{{route('updateCategory', $category->id)}}"  class="php-email-form" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <input type="text" name="categoryName" class="form-control" id="postTitle" value="{{$category->category}}" >
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
     @else
     <div class="alert alert-danger">
        <h3>Sory!! the page you are looking is not available please try again</h3>
     </div>
    @endif
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')