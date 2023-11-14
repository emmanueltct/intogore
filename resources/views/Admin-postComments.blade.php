@include('titles')
  <main id="main">

    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           
            <a href="{{route('adminViewAllPost')}}" class="btn btn-primary btn-sm">Back To all Posts</a>
           
          <br/><br/>
          @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                  <h1>Oops!!</h1>
                   <h3> {{ implode(' ', $errors->all(':message')) }}</h3>
                   <br/>
                  </div>
             @endif

          @if(count($comments)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Names</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Date</th>
                    <th colspan="3">Admin Take Actions on Comments</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($comments as $user)
            <?php $a++;?>
                <tr>
                    <th scope="row">{{$a}}</th>
                    <td>{{$user->posttitle}}</td>
                    <td>{{$user->commentatorName}}</td>
                    <td>{{$user->commentatorEmail}}</td>
                    <td>{{$user->postComments}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                    <span>  
                        <form method="post" action="{{route('removePostComment')}}">
                                @csrf 
                                <input type="hidden" name="comment_id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </span>
                    </td>
                </tr>
            
            @endforeach
                </tbody>
                </table>
            @else
            @if(!$errors->any())
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>Selected Post doesn't have any comment</span> <br>
              <i style="color:#842404">Please keep refreshing for any update to this post</i> </h3><br/>
            </div> 
            @endif
          @endif
          </div>

        </div>
      </div>
    </section> <!-- End Search Result -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')