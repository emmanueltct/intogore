@include('titles')
  <main id="main">
    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <a href="{{route('courseForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>
          <a href="{{route('subCourseForm')}}"class="btn btn-outline-primary btn-sm float-end" ><i class="bi bi-plus"></i> Add New chapter</a><br/><br/>
          @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <h1>Oops!!</h1>
                {{ implode(' ', $errors->all(':message')) }}
                
                </div>
             @endif

          @if(count($course)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Courses</th>
                    <th scope="col">Description</th>
                    <th scope="col">Subscription</th>
                    <th scope="col">Price</th>
                    <th scope="col" colspan="2">Enrolled Users</th>
                    <th scope="col" colspan="2">Chapters</th>
                    <th scope="col" colspan="2">Management Course</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($course as $c)
            <?php $a++;?>
                <tr>
                  
                    <?php
                        $Number_subcourse = App\Models\course::find($c->id)->subcourses()->count('id');
                        $number=$Number_subcourse;
                        $Number_subcourse+=1;
                        $Pendingsubcourse=App\Models\course::find($c->id)->subcourses()->where('coursePublishment','Pending')->count('id');
                        $enrolled = App\Models\course::find($c->id)->course_enrollments()->count('id');
                        $unproved_enrolled_user=App\Models\course::find($c->id)->course_enrollments()->where('coursePayment','Not Paid')->count('id');
                        //foreach ($comments as $comment) {}
                      
                      ?>
      
                    <th>{{$a}}</th> 
                    <td>{{$c->courseTitle }}</td>
                    <td>{{$c->courseDescription }}</td>
                    <td>{{$c->CourseEnroll}}</td>
                    <td>{{$c->CoursePrice}}</td>
                    <td>Total registered users({{$enrolled}})</td>
                    <td>User Pending for Approval({{$unproved_enrolled_user}})</td>
                    <td>All Chapters({{$number}})</td>
                    <td>Pending for Approval({{$Pendingsubcourse}})</td>
              
                    <td>
                       <a class="btn btn-primary btn-sm" href="{{route('editCourseForm',$c->id)}}" title="Edit Course" ><i class="bi bi-pencil"></i></a><br/><br/>
                       <a class="btn btn-outline-primary btn-sm" href="{{route('checkEnrolledUser',['Course'=>$c->id])}}" title="Enrolled Users"><i class="bi bi-people"></i></a>
                    </td>
                    <td>
                      <form method="POST" action="{{route('deleteCourse',$c->id)}}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Course"><i class="bi bi-trash"></i></button><br/><br/>
                      </form>
                      <a class="btn btn-outline-success btn-sm" href="{{route('allSubCourse',['Chapter'=>$c->id])}}" title="Course Chapters"><i class="bi bi-list"></i></a> 
                      
                    </td>
                  </tr> 
        
            @endforeach
                </tbody>
                </table>
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>It seem s like no person enrolled to any course</span> <br>
              <i style="color:red">Please keep refreshing for any update</i> </h3>
            </div> 
          @endif
          </div>

        </div>
      </div>
    </section> <!-- End Search Result -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer')