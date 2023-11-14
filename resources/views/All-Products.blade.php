<?php 
$p=[];
  $url= (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $p['furl']=$url;
  $P['ftype']='website';
  $p['ftitle']='INTOGORE FINTECH';
  $p['fdesc']='Intogorefintech is a leading digital assets company based in Rwanda.';
  $p['fimage']="https://intogore.com/assets/img/favicon.jpeg";
  $p['tcard']='summary_large_image';
  $p['tdomain']='intogore.com';
  $p['turl']=$url;
  $p['ttitle']='INTOGORE FINTECH';
  $p['tdesc']='Intogorefintech is a leading digital assets company based in Rwanda.';
  $p['timage']="https://intogore.com/assets/img/favicon.jpeg";

?>


@include('header1')
@include('nav')

  <style>
        .btn-sm {
            font-size: 22px;
            border-radius: 8px;
        }
    
        .blink {
            animation: blinker 1.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
       
</style>

  <main id="main" style="background-color:#E9D5D0">
  <section class="category-section">
      <div class="container" data-aos="fade-up">
        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h6>INTOGORE FINTECH CRYPTO PRODUCTS</h6>
          <div></div>
        </div>
        <div class="row ">
              @if(count($products)>0)
                 @for($i=0; $i < count($products); $i++)
                <div class="col-lg-3 custom-border">
                        <div class="post-entry-1 card card-body" style="padding:0px">
                            <div class="p-4"> 
                              <a href="{{route('singleProducts',$products[$i]->productEndLink)}}"><img src="../../product/images/{{$products[$i]->productThumbnail}}" alt="" class="img-fluid"></a>
                                <div class="post-meta m-2 "><span class="date">{{$products[$i]->productName}}</span> <span class="mx-1"></span> <span>{{$products[$i]->created_at}}</span></div>
                                <h2 class="d-flex justify-content-center" >{{$products[$i]->productName}}</h2>
                            </div>
                         <div class="d-flex justify-content-evenly" >
                              <div>
                                <h2 style="font-size:16px" >
                                    @if ($products[$i]->productDiscount > 0)
                                    <s>{{$products[$i]->productPrice}} {{$products[$i]->productCurrency}}</s>
                                    @else
                                      {{$products[$i]->productPrice}} {{$products[$i]->productCurrency}}
                                    @endif
                                  </h2>
                              </div>
                              <div>
                              @if ($products[$i]->productDiscount > 0)
                                  <h2 class="blink" style="font-size:14px"> Discount:{{$products[$i]->productDiscount}} {{$products[$i]->productCurrency}}</h2>
                                @endif
                              </div>
                          </div>
                          <?php
                            $countLike = App\Models\Product::find($products[$i]->id)->product_likes()->count('id');
                               
                          ?>
                            <div class="d-flex justify-content-around" style="background-color:#040202;margin:0px; padding:15px;color:white" >
                              <span class="d-flex justify-content-center btn btn-link like-btn" id="{{$products[$i]->id}}" style="text-decoration:none">
                              <span style="font-size:20px;color:white;margin-top:-10px;margin-right:5px;" id="like{{$products[$i]->id}}"  value="{{$products[$i]->id}}" >@if($countLike >0){{$countLike}} @endif</span> <i style="color:white" class="bi bi-heart"></i>
                              </span>
                              <span >
                              <a href="#" style="color:white"><i class="bi bi-shop"></i></a>
                              </span>
                              <span><a href="{{route('singleProducts',$products[$i]->productEndLink)}}" style="color:white"><i class="bi bi-share"></i></a></span>
                            </div>
                        </div> 
                       </div>
    
                @endfor
              @endif  
            </div>
        </div> <!-- End .row -->
      </div>
    </section><!-- End Lifestyle Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
    <!-- choose one -->
    <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
 //feather.replace();
   $(document).ready(function(){
    
     
      $(".like-btn").click(function(){
      var likeValue = this.id;
      //alert(likeValue);
      $.ajax({
           type:'GET',
           url:"{{route('ProductLike') }}",
           data:{userLike:likeValue},
           //data:{post_id:post_id,commentatorName:commentatorName ,commentatorEmail:commentatorEmail,message:message},
           success:function(data){
            $("#"+likeValue).prop('disabled', true);
             // alert(data.success);
              //location.reload(true);
              $("#like"+likeValue).text(data.result);
           }
        });

      //alert('like btn clicked');
    })
  })
    </script>
</body>

</html>