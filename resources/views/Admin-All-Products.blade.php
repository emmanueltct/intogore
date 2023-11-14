@include('titles')
  <main id="main">

    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <a href="{{route('ProductForm')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a>
          <br/><br/>
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

          @if(count($products)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Like</th>
                    <th scope="col">Admin actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($products as $p)
            <?php $a++;?>
                <tr>
                  
                    <?php
                       // $like = App\Models\course::find($c->id)->subcourses()->count('id');
                       
                       // $comments=App\Models\course::find($c->id)->subcourses()->where('coursePublishment','Pending')->count('id');
                        //$enrolled = App\Models\course::find($c->id)->course_enrollments()->count('id');
                        //$unproved_comments=App\Models\course::find($c->id)->course_enrollments()->where('coursePayment','Not Paid')->count('id');
                        //foreach ($comments as $comment) {}
                      
                      ?>
      
                    <th>{{$a}}</th> 
                    <td><a href="{{asset('product/images/'.$p->productThumbnail)}}" target="_blank"><img width="100px" src="{{asset('product/images/'.$p->productThumbnail)}}"/></a></td>
                    <td>{{$p->productName }}</td>
                    <td>{{$p->productPrice}}</td>
                    <td>{{$p->productDiscount}}</td>
                    <td>{{$p->Approval}}</td>
                    <td>Total like({{0}})</td>
                    <td>
                    <div style="display:flex;flex-direction:row; justify-content: space-around;" >
                    <a class="btn btn-primary btn-sm" href="{{route('AdminEditProducts',$p->id)}}" title="Edit product information" >Edit</a>
                      
                      <form action="{{route('AdminPublishProducts',$p->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$p->id}}">
                         <button type="submit" class="btn btn-success btn-sm" href="{{route('allSubCourse',['Chapter'=>$p->id])}}" title="Publish Product">Publish</button> 
                       </form>

                       <form action="{{route('deleteProduct',$p->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$p->id}}">
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