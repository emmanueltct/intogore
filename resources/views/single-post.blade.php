<?php 
$p=[];
if(count($post)>0){
  $url=  (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $p['furl']=$url;
  $P['ftype']='website';
  $p['ftitle']=$post[0]->posttitle;
  $p['fdesc']=$post[0]->postdescription;
  $p['fimage']="https://intogore.com/courses/images/".$post[0]->postthumbnail;
  $p['tcard']='summary_large_image';
  $p['tdomain']='intogore.com';
  $p['turl']=$url;
  $p['ttitle']=$post[0]->posttitle;
  $p['tdesc']=$post[0]->postdescription;
  $p['timage']="https://intogore.com/courses/images/".$post[0]->postthumbnail;
}
?>





 
 


@include('header1')
@include('nav')

  <style>
    .moredescription a{
     color:blue;
    }
    .moredescription a:hover{
     color:red;
     text-decoration:underline;
    }
  </style> 
  <main id="main" >
    <section class="single-post-content" >
      <div class="container" >
      <div class="row">
        <div class="col-md-8 post-content" data-aos="fade-up">
        
          @if(count($post)>0)
           <img src="../../images/{{$post[0]->postthumbnail}}" path="image/{{$post[0]->postthumbnail}}" id="img-fluid" alt="" class="img-fluid">
            <!-- ======= Single Post Content ======= -->
            <div class="single-post" >
              <div class="post-meta" style="padding:3%" >
                <span class="date">{{$post[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$post[0]->createdat}}</span>
                <span class="float-end">
                  <span class="date">
                    <button id="like-btn"  value="{{$post[0]->posts_id}}" class="btn btn-sm btn-outline-success ">@if($countLike >0){{$countLike}} @else 0 @endif  Like</button>
                  <span class="mx-1">&bullet;</span> <span><a href="#scroll-to-comment" class="btn btn-sm btn-outline-success "> Comments (@if($Totalcomment >0){{$Totalcomment}} @else 0 @endif)</a> </span>
                </span>
              </div>
            </div> 
          </div>
            <!-- End Single Post Content -->
        <div class="col-md-4">
            <!-- ======= Sidebar ======= -->
              <h3 class="mb-5" style="margin-bottom:0px;font-size:25px">{{$post[0]->posttitle}}</h3>
              <p style="margin-top:-30px;">{!! $post[0]->postdescription !!}</p>
          </div>
        </div>

      <div class="row p-2">
      <div class="col-md-8 moredescription" style="overflow:hidden;"><p>{!! $post[0]->postDetailDescription !!}</p></div>
      


      
      <div class="col-md-4" style="padding-left:3%">
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
            <div class="aside-block">
              <h3 class="aside-title">View Posts by Categories</h3>
              <ul class="aside-links list-unstyled">
                <li><a href="{{route('allPost','All')}}"><i class="bi bi-chevron-right"></i>All</a></li>
                @foreach($category as $cat)
                <li><a href="{{route('allPost',$cat->categoryEndLink)}}"><i class="bi bi-chevron-right"></i>{{$cat->category}}</a></li>
                @endforeach
              </ul>
            </div><!-- End Categories -->
          </div>
         
      
      
      
      <!-- ======= Comments ======= -->
          <div class="col-sm-6 p-4">
            <div class="comments" id="scroll-to-comment">
              <h5 class="comment-title py-4"> {{$Totalcomment}} Comments</h5>
              @if(count($comments)>0)
                @foreach ($comments as $comment)
                <div class="comment d-flex mb-4">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img class="avatar-img" src="../../assets/img/user_icon.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex align-items-baseline">
                      <h6 class="me-2">{{$comment->commentatorName}}</h6>
                      <span class="text-muted">{{$comment->created_at}}</span>
                    </div>
                    <div class="comment-body">
                    {{$comment->postComments}}
                  </div>
                  </div>
                </div>
                @endforeach
              @endif
            </div>
          </div>
            <!-- End Comments -->

            <!-- ======= Comments Form ======= --> 
          <div class="col-sm-6">
            <div class="row justify-content-center mt-5 p-4">

              <div class="col-lg-12">
                <h5 class="comment-title">Leave a Comment</h5>
                  <form action="" method="POST" id="commentForm">
                    @csrf
                    <div class="row">
                    <div class="col-lg-12 mb-3">
                        <input type="hidden" class="form-control" name="post_id" value="{{$post[0]->posts_id}}" readonly>
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="comment-name">Name</label>
                        <input type="text" class="form-control" name="comment_name" placeholder="Enter your name">
                      </div>
                      <div class="col-lg-6 mb-3">
                        <label for="comment-email">Email</label>
                        <input type="text" class="form-control" name="comment_email" placeholder="Enter your email">
                      </div>
                      <div class="col-12 mb-3">
                        <label for="comment-message">Message</label>
                        <textarea class="form-control" name="comment_message" placeholder="Enter your name" cols="30" rows="5"></textarea>
                      </div>
                      <div class="col-12">
                        <button  class="btn btn-primary"  id="btn-submit">Post comment</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>  
            <!-- End Comments Form -->
            @else
            <div class="single-post" >
              <h1 >Oops!!</h1>
              <h3>The post you are trying to read is not found! <br> <i style="color:red">Use our navigation links to for different posts on this platform</i> </h3>
              <br><br>
            </div>
            @endif
          </div>
         
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script type="text/javascript">
   $(document).ready(function(){
    var meta=document.getElementById('twitter-meta-title');
     alert(meta.getAttribute('content'));
    //alert(meta);
    $("#btn-submit").click(function(e){
  
        e.preventDefault();
        
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        //var post_id = $("input[id=comment_id]").val();
       // var commentatorName = $("input[id=comment_name]").val();
       // var commentatorEmail = $("input[id=comment_email]").val();
       // var message = $("input[id=comment_message]").val();
   
        $.ajax({
           type:'POST',
           url:"{{ route('sendComments') }}",
           data: $('#commentForm').serialize(),
           //data:{post_id:post_id,commentatorName:commentatorName ,commentatorEmail:commentatorEmail,message:message},
           success:function(data){
              alert(data.success);
              location.reload(true);
           }
        });
  
    });

    $("#like-btn").click(function(){
      var likeValue = $("#like-btn").val();
      //alert(likeValue);
      $.ajax({
           type:'GET',
           url:"{{ route('postLike') }}",
           data:{userLike:likeValue},
           //data:{post_id:post_id,commentatorName:commentatorName ,commentatorEmail:commentatorEmail,message:message},
           success:function(data){
            $("#like-btn").prop('disabled', true);
              //alert(data.success);
              //location.reload(true);
              $("#like-btn").text(data.result +" Like");
           }
        });

      //alert('like btn clicked');
    })
  }); 
</script>

</body>

</html>