<?php
$p=[];
  $url= (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $p['furl']=$url;
  $P['ftype']='website';
  $p['ftitle']='INTOGORE FINTECH';
  $p['fdesc']='Intogorefintech is a leading digital assets company based in Rwanda.';
  $p['fimage']="https://intogore.com/assets/img/favicon.jpeg";
  $p['tcard']='summary_large_image';
  $p['tdomain']='intogore.com';
  $p['turl']=$url;
  $p['ttitle']='INTOGORE FINTECH';
  $p['tdesc']='Intogorefintech is a leading digital assets company based in Rwanda.';
  $p['timage']="https://intogore.com/assets/img/favicon.jpeg";

?>


@include('header1')
@include('nav')
  <main id="main">

    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-8" style="padding-right:2%">
          @if(count($post))
            @foreach($post as $p)
            <div class="d-md-flex post-entry-2 small-img">
              <a href="single-post.html" class="me-4 thumbnail">
                <img src={{URL::asset("images/$p->postthumbnail")}} alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date">{{$p->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$post[0]->createdat}}</span></div>
                <h3><a href="{{route('readsinglepost',$p->PostEndLink)}}">{{$p->posttitle}}</a></h3>
                <p>{{substr($p->postdescription,0,205)."......."}}</p>
              </div>
            </div>
            @endforeach
            
            <!-- Paging -->
            {{ $post->links('vendor.pagination.custom') }}
            <!--
            <div class="text-start py-4">
              <div class="custom-pagination">
               
                <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                 {!! $post->links() !!}
                 <a href="#">1</a>
                 <a href="#">2</a>
                 <a href="#">3</a>
                <a href="#" class="next">Next</a>
              </div>
            </div> -->
            <!-- End Paging -->
            @else
            <div class="single-post alert alert-danger" >
              <h1 >Oops!!</h1>
              <h3>The post you are trying to read is not found! <br> <i style="color:red">Use our navigation links  for different posts on this platform</i> </h3>
              <br><br>
            </div>
            @endif
          </div>

          <div class="col-md-4" style="padding-left:4%" >
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
              @if(count($counter)>0)
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular Posts</button>
                </li>
              @endif
              @if(count($latest)>0)
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest Posts</button>
                </li>
              @endif
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  @if(count($counter)>0)
                  @foreach($counter as $count)
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">{{$count->cat}}</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="{{route('readsinglepost',$count->PostEndLink)}}">{{$count->post_title}}</a></h2>
                    <span class="author mb-3 d-block">{{$count->LikeCount}} Likes || {{$count->created_date}}</span>
                  </div>
                  @endforeach
                  @endif
                </div> <!-- End Popular -->

                <!-- Latest -->
                <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                 @if(count($latest)>0)
                  @foreach($latest as $late)
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">{{$late->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$late->created_date}}</span></div>
                    <h2 class="mb-2"><a href="{{route('readsinglepost',$late->PostEndLink)}}">{{$late->post_title}}</a></h2>
                    <span class="author mb-3 d-block"></span>
                  </div>
                  @endforeach
                  @endif
                </div> <!-- End Latest -->

              </div>
            </div>

              <!-- ======= Sidebar ======= -->
              @if(count($recommendVideo)>0)
              <div class="aside-block">
              <h3 class="aside-title">Recommended Video</h3>
              <div class="video-post">
              
              {{$recommendVideo[0]->VideoTitle}}
                 <a href="{{$recommendVideo[0]->sourceLink}}" target="_blank" title="{{$recommendVideo[0]->VideoTitle}}" class="link-video">
                    <embed src="{{$recommendVideo[0]->sourceLink}}" alt="" class="img-fluid"> </embed>
                </a>
              </div>
            </div><!-- End Video -->
            @endif
            <div class="aside-block" >
              <h3 class="aside-title">View Posts by Categories</h3>
              <ul class="aside-links list-unstyled" style="color:black">
                <li><a href="{{route('allPost','All')}}"><i class="bi bi-chevron-right"></i>All</a></li>
                @foreach($category as $cat)
                <li><a href="{{route('allPost',$cat->categoryEndLink)}}"><i class="bi bi-chevron-right"></i>{{$cat->category}}</a></li>
                @endforeach
              </ul>
            </div><!-- End Categories -->
          </div>
          
        </div>
      </div>
    </section> <!-- End Search Result -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')

  
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>