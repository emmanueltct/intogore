@include('titles')
  <main id="main">

    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <a href="{{route('AdmincourseList')}}" class="btn btn-primary btn-sm">Back To Our Course Lists</a>
          <a href="{{route('subCourseForm')}}"class="btn btn-outline-primary btn-sm float-end" ><i class="bi bi-plus"></i> Add New chapter</a><br/><br/>
          <br><br> 
          @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <h1>Oops</h1>
                 {{ implode(' ', $errors->all(':message')) }}
                
                </div>
             @endif

          @if(count($course)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mian Course</th>
                    <th scope="col">sub Course</th>
                    <th scope="col">Status</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Created Date</th>
                    <th colspan="2">Admin Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($course as $c)
            <?php $a++;?>
                <tr>
                    <th scope="row">{{$a}}</th>
                    <td>{{$c->main_course}}</td>
                    <td>{{$c->title}}</td>
                    <td>{{$c->publishes}}</td>
                    <?php
                            $comment = App\Models\Subcourse::find($c->id)->course_comments()->count('id');
                          ?>
                           
                          <td> Total Comments({{$comment}})<br/></td>
                          <td>{{$c->created_at}}</td>
                    <td>                   
                        <span>
                                <a href="{{route('editSubCourse',$c->id)}}" class="btn btn-primary btn-sm "  title="Edit this Course chapter" ><i class="bi bi-pencil"></i></a>
                          
                        </span>
                    </td>
                    <td>
                        <span >
                          <a class="btn btn-success btn-sm " href="{{route('showSingleSubCourse',$c->id)}}" title="detail info on Course"><i class="bi bi-info-circle"></i></a>
                        </span>
                        <span>  
                         <a href="{{route('adminCourseComment',['Course'=>$c->id,'heading'=>$c->cat])}}" class="btn btn-outline-danger btn-sm" title="Course Comments"><i class="bi bi-chat"></i></a>
                        </span>
                    </td>
                </tr>
            
            @endforeach
                </tbody>
                </table>
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>It seem s like you didn't add any chapter to this course</span> <br>
              <i style="color:red">Please your first chapter to this course</i> <a style="font-size:20px;" class="btn btn-outline-success btn-sm" href="{{route('subCourseForm')}}">Click here to add chapter</a> </h3>
            </div> 
          @endif
          </div>

        </div>
      </div>
    </section> <!-- End Search Result -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Admin_footer') 