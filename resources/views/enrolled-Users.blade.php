
@include('titles')
  <main id="main">

    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
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
                   @if(!$errors->user_update)
                   <a href="{{route('AdmincourseList')}}" class="btn btn-primary btn-sm">Back To Our Course Lists</a>
                  @endif
                  </div>
             @endif

          @if(count($subscribed_user)>0)
          <a href="{{route('AdmincourseList')}}" class="btn btn-primary btn-sm">Back To Our Course Lists</a>
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Names</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Approved</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Course status</th>
                    <th scope="col">Course Price</th>
                    <th scope="col">User Subscription date</th>
                    <th colspan="3">Admin Take Actions on Payment</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($subscribed_user as $user)
            <?php $a++;?>
                <tr>
                    <th scope="row">{{$a}}</th>
                    <td>{{$user->names}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->payment}}</td>
                    <td>{{$user->code}}</td>
                    <td>{{$user->title}}</td>
                    <td>{{$user->enroll}}</td>
                    <td>{{$user->price}}</td>
                    <td>{{$user->date}}</td>
                    <td>
                        <span >
                            <form method="post" action="{{route('confirmEnrolledUser')}}" style="margin-bottom:4px"   >
                                @csrf 
                                <input type="hidden" name="course_id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-primary btn-sm " <?php if($user['payment']=="Paid"){echo"disabled";} ?> >Confirm</button>
                            </form>
                        </span>
                    </td>
                    <td>
                        <span>  
                        <form method="post" id="RemovePayment" action="{{route('removeEnrolledUser')}}">
                                @csrf 
                                <input type="hidden" name="course_id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-warning btn-sm " <?php if($user['payment']=="Not Paid"){echo"disabled";} ?> >Remove</button>
                          </form>
                        </span>
                    </td>
                    <td>
                    <span>  
                        <form method="post" id="RemovePayment" action="{{route('deleteEnrolledUser')}}">
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
              <h3><span>It seem s like no person enrolled to any course</span> <br>
              <i style="color:#842404">Please keep refreshing for any update or check if the course is Free charges</i> </h3><br/>
              <a href="{{route('AdmincourseList')}}" class="btn btn-primary btn-sm">Back To Our Course Lists</a>
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