@include('titles')
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
          @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif
        <div class="row">
          <div class="col-md-8 post-content" data-aos="fade-up">
          @if($subcourse)
           <img src="../../courses/images/{{$subcourse->courseThumbnail}}" alt="" class="img-fluid">
           
           <!-- ======= Single Post Content ======= -->
            <div class="single-post" >
              <div class="post-meta" style="padding:3%" >
                <span class="date">{{$subcourse->created_at}}</span>
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">
                <div style="display:flex;flex-direction:row;justify-content: space-between;" >
                    <span><a href="{{route('allSubCourse',['Chapter'=>$subcourse->courseCategory])}}" class="btn btn-primary btn-sm">All Chapters</a></span>
                    <span>
                        <form method="post" action="{{route('publishSubcourse')}}">
                            @csrf 
                            <input type="hidden" name="course_id" value="{{$subcourse->id}}">
                            <button type="submit" class="btn btn-success btn-sm" title="Publish Course For User" >Publish</span></button>
                        </form>
                    </span>
                    <span><a href="{{route('editSubCourse',$subcourse->id)}}" class="btn btn-info btn-sm">Edit</a></span>
                    <span>
                        <form method="post" action="{{route('deleteSubcourse')}}">
                                @csrf 
                                <input type="hidden" name="course_id" value="{{$subcourse->id}}">
                                <input type="hidden" name="course_category" value="{{$subcourse->courseCategory}}">
                                <button type="submit" class="btn btn-danger btn-sm" title="Publish Course For User" >Delete</span></button>
                        </form>
                    </span>
                    <br/> <br/> <br/>
                 </div>
              <h3 class="aside-title"><h1 class="mb-4">{{$subcourse->mainTitle}}</h1></h3>
              <div class="video-post">
                {{$subcourse->courseIntro}}
              </div>
            </div><!-- End Video -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="single-post" >
                        <p>{!! $subcourse->courseDescription !!}</p>
                </div>        
            </div>
             </div>
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>The Course you are trying to read is not accessible for you!</span> <br>
              <i style="color:red">Please Enroll to our courses or use our navigation links to for different posts on this platform</i> </h3>
                <a href="" class="btn btn-primary">Enroll to this course</a>
              <br><br>
            </div>
            @endif
          </div>
        
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')

  <script type="text/javascript">
   $(document).ready(function(){
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
                          '<div class="d-flex flex-row align-items-center">'+
                             '<span class="mr-2">'+comments[0]['userName']+'</span>'+ 
                              '<small class="c-badge">Top Comment</small>'+
                              '</div>'+
                             ' <small class="c-badge">'+comments[0]['created_at'].substring(0, 10)+'  '+comments[0]['created_at'].substring(11, 19)+'</small>'+
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
                        '<div class="d-flex justify-content-between align-items-center">'+
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