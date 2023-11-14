@include('titles')

  <main id="main">
    <!-- ======= Search Results ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
        <div class="row">

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Trading Courses</h3>
              <h5>Total: {{$course}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('courseForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>
                        <a href="{{route('AdmincourseList')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>
        
          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Skill Sharing</h3>
              <h5>Total: {{$post}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('postform')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>
                        <a href="{{route('adminViewAllPost')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Crypto Product</h3>
              <h5>Total: {{$product}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('ProductForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>
                        <a href="{{route('AdminAllProducts')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Users for Crypto Courses</h3>
              <h5>Total: {{$subscribed_user}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        
                        <a href="{{route('checkEnrolledUser',['Course'=>'All'])}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Course Comments</h3>
              <h5>Total: {{$comments}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('adminCourseComment',['Course'=>'All'])}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Trending News</h3>
              <h5>Total: {{$trending}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                  <a href="{{route('alltrendingForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>     
                  <a href="{{route('AdminAllPostTrending')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Post Comments</h3>
              <h5>Total: {{$post_comment}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('userPostComments','All')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Post Categories</h3>
              <h5>Total: {{$post_category}}</h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('categoryForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>     
                        <a href="{{route('viewcategory')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a>
                </div>
            </div>
          </div>

          <div class="col-md-3 card d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body" style="width:100%">
              <h3>Video Recommendation</h3>
              <h5></h5>
                <div style="margin-top:20%;display:flex;flex-direction:row; justify-content: space-around;" >
                        <a href="{{route('RecommendVideoForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>     
                        <!-- <a href="{{route('viewcategory')}}" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-eye"></i> View all</a> -->
                </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- End Search Result -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')