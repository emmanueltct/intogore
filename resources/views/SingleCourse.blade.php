
<?php 
$p=[];
if(count($usercourse)>0){
  $url= (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $p['furl']=$url;
  $P['ftype']='website';
  $p['ftitle']=$usercourse[0]->main_title;
  $p['fdesc']=$usercourse[0]->course_intro;
  $p['fimage']="https://intogore.com/courses/images/".$usercourse[0]->courseThumbnail;
  $p['tcard']='summary_large_image';
  $p['tdomain']='intogore.com';
  $p['turl']=$url;
  $p['ttitle']=$usercourse[0]->main_title;
  $p['tdesc']=$usercourse[0]->course_intro;
  $p['timage']="https://intogore.com/courses/images/".$usercourse[0]->courseThumbnail;
}
?>


@include('header1')
@include('nav')
  <style>
          body{

      background-color: #eee;
      }
      .card{
      background-color: #fff;
      border: none;
      }
      .form-color{
      background-color: #fafafa;
      }
      .form-control{
      border-radius: 25px;
      }
      .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #35b69f;
        outline: 0;
        box-shadow: none;
        text-indent: 10px;
      }

      .c-badge{
      background-color: #35b69f;
        color: white;
        height: 20px;
        font-size: 12px;
        width: 110px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2px;
      }
      .comment-text{
      font-size: 13px;
      }
      .wish{
      color:#35b69f;
      }
      .mr-2{
        font-weight:bold;
      }
      .user-feed{
          font-size: 14px;
          margin-top: 12px;
      }
  </style>

  <main id="main" >
    <section class="single-post-content" >
      <div class="container" >
      @if(count($usercourse)>0)
      <a href="{{route('allCourses')}}" class="btn btn-primary btn-sm float-end">Back To All Course List</a><br/><br/>
        <div class="row">
          <div class="col-md-8 post-content" data-aos="fade-up">
           <img src="../../courses/images/{{$usercourse[0]->courseThumbnail}}" alt="" class="img-fluid">
            <!-- ======= Single Post Content ======= -->
            <div class="single-post" >
              <div class="post-meta" style="padding:3%" >
                <span class="date">{{$usercourse[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$usercourse[0]->createdAt}}</span>
                <span><a href="#Comment-Section" class="btn btn-outline-primary btn-sm">Leave a comment</a></span>
               <span><button id="like-btn"  value="{{$usercourse[0]->course_id}}" class="btn btn-sm btn-outline-success ">@if($countLike >0){{$countLike}} @else 0 @endif  Like</button></span> 
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">
              <h3 class="aside-title"><h1 style="font-size:25px" class="mb-4">{{$usercourse[0]->main_title}}</h1></h3>
              <div>
                {{$usercourse[0]->course_intro}}
              </div>
            </div><!-- End Video -->
        </div>

        <div class="row">
            <div class="col-lg-8" >
                <div class="single-post" style="padding-right:14px">
                        <p>{!! $usercourse[0]->course_description !!}</p>
                </div>        
            </div>
            <div class="col-lg-4">
              <div class="aside-block" style="padding:3%" >
                <h3 class="aside-title">Other Topics to this course</h3>
                <ul class="aside-links list-unstyled">
                  @foreach($AllChapters as $chapter)
                    <li>
                        @if($chapter->id===$usercourse[0]->course_id)
                          <a style="color:blue" href="{{route('takeCourse',$chapter->SubCourseEndLink)}}" title="Current reading topic"><i class="bi bi-chevron-right"></i>{{$chapter->mainTitle}}</a></li>
                        @else
                        
                        <a href="{{route('takeCourse',$chapter->SubCourseEndLink)}}" title="other topic you can read" ><i class="bi bi-chevron-right" ></i>{{$chapter->mainTitle}}</a>
                        @endif
                    </li>
                    
                  @endforeach
                </ul>
              </div>
        </div>
      </div>

        <div class="row justify-content-center mt-5 " id="Comment-Section">
            <div class="col-lg-6">
                  <h5 class="comment-title">Leave a Comment</h5>
                <form action="" method="POST" id="commentForm">
                    @csrf
                    <div class="row">
                    <div class="col-lg-12 mb-3">
                        <input type="hidden" class="form-control" name="post_id" id="inputcourse_id" value="{{$usercourse[0]->course_id}}" readonly>
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
                        <textarea class="form-control" name="comment_message"  placeholder="Enter your comment..." cols="30" rows="3"></textarea>
                      </div>
                      <div class="col-12">
                        <button  class="btn btn-primary"  id="btn-submit">Post comment</button>
                      </div>
                    </div>
                  </form>
              </div>
              <div class="col-lg-6">
                <div class="container ">
                  <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-12">
                    <div class="card">
                      <div >
                          <h6 class="d-flex justify-content-center">Comments</h6>

                          </div>
                              <hr>
                        <div class="mt-2" id="usercomment-section">
                              
                                <!-- Comments Sections goes here -->
                      </div>
                    </div>
                  </div>
              </div>

              </div>
              </div>
            </div>
               
            <!-- End Comments Form -->
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>The Course you are trying to read is not accessible for you!</span> <br>
              <i style="color:red">Please Enroll to our courses or use our navigation links to for different posts on this platform</i> </h3>

            </div>
            @endif
          </div>
        
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

    $("#like-btn").click(function(){
      var likeValue = $("#like-btn").val();
      //alert(likeValue);
      $.ajax({
           type:'GET',
           url:"{{route('SubCourseLike') }}",
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
    });

    //var id=document.getElementById("inputcourse_id").value;
    onDocumentLoad();
    
    $("#btn-submit").click(function(e){
        e.preventDefault();
        var id2=document.getElementById("inputcourse_id").value;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

         console.log($('#commentForm').serialize());
        $.ajax({
           type:'POST',
           url:"{{ route('postcoursecomments')}}",
           data: $('#commentForm').serialize(),
           //data:{post_id:post_id,commentatorName:commentatorName ,commentatorEmail:commentatorEmail,message:message},
           success:function(data){
            var datas=data.success;
           console.log(datas);
            getUserCourseComment();
           }
        });
  
    });


function getUserCourseComment(){
  var id=document.getElementById("inputcourse_id").value;
	var url = "{{ route('getcoursecomments', ':id') }}";
	url = url.replace(':id', id);

  $.ajax({
           type:'GET',
           url:url,
           //data: $('#commentForm').serialize(),
           //data:{post_id:post_id,commentatorName:commentatorName ,commentatorEmail:commentatorEmail,message:message},
           success:function(data){
            var comments=data.success;
            console.log(id);
            var arrayData=[];
            var lastData=comments.length-1;
             
               console.log(comments[0]['userEmail']);
            
             var usercomment='<div class="d-flex flex-row p-3">'+
                 '<img src="../../assets/img/user_icon.jpg" width="40" height="40" class="rounded-circle mr-3">'+
                     '<div class="w-100">'+
                        '<div class="d-flex justify-content-between align-items-center">'+
                          '<div class="d-flex flex-row align-items-center" >'+
                             '<span class="mr-2">'+comments[0]['userName']+'</span>'+ 
                              '<small class="c-badge">Top Comment</small>'+
                              '</div>'+
                             '<small class="c-badge">'+comments[0]['created_at'].substring(0, 10)+'  '+comments[0]['created_at'].substring(11, 19)+'</small>'+
                            '</div>'+
                            '<p class="text-justify comment-text mb-0">'+comments[0]['courseComments']+'</p>'
                                    '<div class="d-flex flex-row user-feed">'
                                      '<span class="wish"><i class="fa fa-heartbeat mr-2"></i>'+comments[0]['created_at']+'</span>'+
                                     
                                    '</div>'+
                               '</div>'+
                              '</div>';

              //arrayData.push(usercomment);
              //document.getElementById("usercomment-section").appendChild(usercomment);
             //}
             //var link = document.createElement('a');
             
            // for (const element of arrayData) {
               var link = document.createElement('div');
               link.innerHTML =usercomment; 
                $("#usercomment-section").prepend(link);
              //}

              document.getElementById('commentForm').reset();

              //console.log(arrayData.length);
              //location.reload(true);
           }
        });
}


function onDocumentLoad(){
 
  var id=document.getElementById("inputcourse_id").value;
	var url = "{{ route('getcoursecomments', ':id') }}";
	url = url.replace(':id', id);


  $.ajax({
           type:'GET',
           url:url,
           success:function(data){
            var comments=data.success;
            console.log(data.success);
            var arrayData=[];
             for(var i=0;i<comments.length;i++){
              //  console.log(comments[i]['userEmail']);
            
             var usercomment='<div class="d-flex flex-row p-3">'+
                 '<img src="../../assets/img/user_icon.jpg" width="40" height="40" class="rounded-circle mr-3">'+
                     '<div class="w-100">'+
                        '<div class="d-flex justify-content-between align-items-center" >'+
                          '<div class="d-flex flex-row align-items-center">'+
                             '<span class="mr-2">'+comments[i]['userName']+'</span>'+
                              '</div>'+
                             '<small class="c-badge" >'+comments[i]['created_at'].substring(0, 10)+'  '+comments[i]['created_at'].substring(11, 19)+'</small>'+
                            '</div>'+
                            '<p class="text-justify comment-text mb-0">'+comments[i]['courseComments']+'</p>'+
                               '</div>'+
                              '</div>';

              arrayData.push(usercomment);
              //document.getElementById("usercomment-section").appendChild(usercomment);
             }
             //var link = document.createElement('a');
             
             for (const element of arrayData) {
               var link = document.createElement('div');
               link.innerHTML = element; 
                document.getElementById("usercomment-section").appendChild(link);
              }

              document.getElementById('commentForm').reset();

              //console.log(arrayData.length);
              //location.reload(true);
           }
        });
}



  }); 
</script>

</body>

</html>