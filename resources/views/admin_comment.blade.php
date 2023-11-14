@include('titles')
  <main id="main">
    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @if($main)
            <a href="{{route('allSubCourse',['Chapter'=>$main])}}" class="btn btn-primary btn-sm">Back chapters</a>
            @else
          <a href="{{route('AdmincourseList')}}" class="btn btn-primary btn-sm">Back To Our Course Lists</a>
          @endif
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
                    <th scope="col">Course Title</th>
                    <th scope="col">Names</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comments</th>
                    <th scope="col">status</th>
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
                    <td>{{$user->mainTitle}}</td>
                    <td>{{$user->userName}}</td>
                    <td>{{$user->userEmail}}</td>
                    <td>{{$user->courseComments}}</td>
                    <td>{{$user->Approval}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <span >
                            <form method="post" action="{{route('confirmComment')}}" style="margin-bottom:4px"   >
                                @csrf 
                                <input type="hidden" name="course_id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-primary btn-sm " <?php if($user['Approval']=="Approved"){echo"disabled";} ?> >Confirm</button>
                            </form>
                        </span>
                    </td>
                    <td>
                    <span>  
                        <form method="post" id="RemovePayment" action="{{route('removeComment')}}">
                                @csrf 
                                <input type="hidden" name="course_id" value="{{$user->id}}">
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
              <h3><span>Selected course doesn't have any comment</span> <br>
              <i style="color:#842404">Please keep refreshing for any update to this course</i> </h3><br/>
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