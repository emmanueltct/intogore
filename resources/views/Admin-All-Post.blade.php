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
          <a href="{{route('postform')}}"class="btn btn-outline-primary btn-sm float-start" ><i class="bi bi-plus"></i> Add New</a> <br/><br/> 
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

          @if(count($post)>0)
            <table class="table" style="color:#2A2726">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Post titlie</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Like</th>
                    <th scope="col">Comments</th>
                    <th scope="col" colspan="2">Management Post</th>
                </tr>
                </thead>
                <tbody>
                <?php $a=0;?>
            @foreach($post as $p)
            <?php $a++;?>
                <tr>
                  
                    <?php
                        $like = App\Models\Post::find($p->id)->trending_likes()->count('id');
                        $comments=App\Models\Post::find($p->id)->trending_comments()->count('id');
                               
                      ?>
      
                    <th>{{$a}}</th> 
                    <td>{{$p->posttitle}}</td>
                    <td>{{$p->cat}}</td>
                    <td>{{$p->approval}}</td>
                    <td>Total like({{$like}})</td>
                    <td>Total Comments({{$comments}})</td>
                    <td>
                       <a class="btn btn-primary btn-sm" href="{{route('adminViewSinglePost',$p->id)}}" title="Viw more information on Post" ><i class="bi bi-eye"></i></a><br/><br/>
                    </td>
                    <td>
                      <a class="btn btn-outline-success btn-sm" href="{{route('userPostComments',$p->id)}}" title="View Post comments"><i class="bi bi-chat"></i></a> 
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