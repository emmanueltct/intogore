@include('titles')
  <style>
    .table td,th {
      text-align: center;
      }
     
  </style>
  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->

  <main id="main">

    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
      <div class="container">
        <div class="row">
            
          <div class="col-md-12">
          <a href="{{route('categoryForm')}}"class="btn btn-outline-primary btn-sm float-end" ><i class="bi bi-plus"></i> Add New</a> <br/><br/> 
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

          @if(count($category)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">category titlie</th>
                    <th scope="col">Created_at</th>
                    <th scope="col" colspan="2">Management Data</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($category as $cat)
            <?php $a++;?>
                <tr>
                    <th>{{$a}}</th> 
                    <td>{{$cat->category}}</td>
                    <td>{{$cat->created_at}}</td>
                    <td>
                       <a class="btn btn-primary btn-sm" href="{{route('editCategoryForm',$cat->id)}}" title="Viw more information on Post" ><i class="bi bi-pencil"></i></a><br/><br/>
                    </td>
                    <td>
                        <form method="post" action="{{route('deleteCategory',$cat->id)}}">
                            @csrf 
                            <input type="hidden" name="post_id" value="{{$cat->id}}">
                            <button type="submit" class="btn btn-success btn-sm" ><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                  </tr> 
        
            @endforeach
                </tbody>
                </table>
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>It seems like no Post available</span> <br>
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