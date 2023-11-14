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
          @if($post)
           <img src="../../images/{{$post->postthumbnail}}" alt="" class="img-fluid">
            <!-- ======= Single Post Content ======= -->
            <div class="single-post" >
              <div class="post-meta" style="padding:3%" >
                <span class="date">{{$post->created_at}}</span>
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">
                <div style="display:flex;flex-direction:row;justify-content: space-between;" >
                    <span><a href="{{route('adminViewAllPost')}}" class="btn btn-primary btn-sm">Back To All Posts</a></span>
                    <span>
                        <form method="post" action="{{route('publishPost')}}">
                            @csrf 
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <button type="submit" class="btn btn-success btn-sm" title="Publish Post For User" >Publish</span></button>
                        </form>
                    </span>
                    <span><a href="{{route('adminEditSinglePost',$post->id)}}" class="btn btn-info btn-sm">Edit</a></span>
                    <span>
                        <form method="post" action="{{route('deletePost')}}">
                                @csrf 
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <button type="submit" class="btn btn-danger btn-sm" title="Publish Course For User" >Delete</span></button>
                        </form>
                    </span>
                    <br/> <br/> <br/>
                 </div>
              <h3 class="aside-title"><h1 class="mb-4">{{$post->posttitle}}</h1></h3>
              <div class="video-post">
                {{$post->intro}}
              </div>
            </div><!-- End Video -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="single-post" >
                        <p>{!! $post->postdescription !!}</p>
                </div>        
            </div>
             </div>
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>The Post you are trying to read is not available!</span> <br>
              <i style="color:red">Please use our navigation links to for different posts on this platform</i> </h3>
                <a href="{{route('adminViewAllPost')}}" class="btn btn-primary">Back to All Posts List</a>
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