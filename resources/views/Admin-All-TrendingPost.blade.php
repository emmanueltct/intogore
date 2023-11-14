@include('titles')
  <style>
    .table td,th {
      text-align: center;
      }
     
  </style>
 

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
                {{ implode(' ', $errors->all(':message')) }}
                
                </div>
             @endif
          
             <a href="{{route('alltrendingForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>
              <br/><br/>
             @if(count($trending)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">description</th>
                    <th scope="col">Shared Link</th>
                    <th scope="col">Status</th>
                    <td>Created at</td>
                    <th scope="col">Admin actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($trending as $p)
            <?php $a++;?>
                <tr>
                    
                    <th>{{$a}}</th> 
                    <td>{{$p->trendingTitle }}</td>
                    <td>{{$p->Comments}}</td>
                    <td>{{$p->sourceLink}}</td>
                    <td>{{$p->status}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>
                    <div style="display:flex;flex-direction:row; justify-content: space-around;gap:5px" >
                    <a class="btn btn-primary btn-sm" href="{{route('AdminEditPostTrending',$p->id)}}" title="Edit product information" >Edit</a>
                      
                      <form action="{{route('AdminPublishPostTrending',$p->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="trending_id" value="{{$p->id}}">
                         <button type="submit" class="btn btn-success btn-sm" href="{{route('allSubCourse',['Chapter'=>$p->id])}}" title="Publish Product">Publish</button> 
                       </form>

                       <form action="{{route('AdminDestroyPostTrending',$p->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="trending_id" value="{{$p->id}}">
                         <button type="submit" class="btn btn-danger btn-sm" title="Delete Product">Delete</button> 
                       </form>
                      </div>
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