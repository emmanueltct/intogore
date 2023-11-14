<?php 
$p=[];
if($product){
  $url= (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $p['furl']=$url;
  $P['ftype']='website';
  $p['ftitle']=$product->productName;
  $p['fdesc']=$product->companyTitle;
  $p['fimage']="https://intogore.com/product/images/".$product->productThumbnail;
  $p['tcard']='summary_large_image';
  $p['tdomain']='intogore.com';
  $p['turl']=$url;
  $p['ttitle']=$product->productName;
  $p['tdesc']=$product->companyTitle;
  $p['timage']="https://intogore.com/product/images/".$product->productThumbnail;
}
?>



@include('header1')
@include('nav')

<style>
     #myCarousel {
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-start,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        @media (min-width: 768px) {
            .carousel-inner .carousel-item-right.active,
            .carousel-inner .carousel-item-next,
            .carousel-item-next:not(.carousel-item-start) {
                transform: translateX(25%) !important;
            }

            .carousel-inner .carousel-item-left.active,
            .carousel-item-prev:not(.carousel-item-end),
            .active.carousel-item-start,
            .carousel-item-prev:not(.carousel-item-end) {
                transform: translateX(-25%) !important;
            }

            .carousel-item-next.carousel-item-start,
            .active.carousel-item-end {
                transform: translateX(0) !important;
            }

            .carousel-inner .carousel-item-prev,
            .carousel-item-prev:not(.carousel-item-end) {
                transform: translateX(-25%) !important;
            }
            .carousel-inner{
              justify-content:space-around
            }
        }   
  </style>

  <main id="main" >
    <section class="single-post-content" >
      <div class="container" >
        <div class="row">
          <div class="col-md-6 post-content" data-aos="fade-up">
          @if($product)
           <img src="../../product/images/{{$product->productThumbnail}}" alt="" class="img-fluid">
            <!-- ======= Single Post Content ======= -->
            <div class="single-post" >
              <div class="post-meta" style="padding:3%" >
                <span class="date">{{$product->productName}}</span> <span class="mx-1">&bullet;</span> <span>{{$product->created_at}}</span>
              </div>
            </div>
            </div>
            <div class="col-md-6">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">
              {{$product->companyTitle}} 
              <h3 class="aside-title"><h1 class="mb-4">{{$product->productName}}</h1></h3>
              <div class="video-post">
                <ul>
                  <li><?php if($product->productDiscount !=0){echo "<s><b>Current Price: </b> $product->productPrice $product->productCurrency </s>";}else{
                    echo "<b>Current Price:</b> $product->productPrice $product->productCurrency ";
                  }?></li>
                  <li><b>Discount: </b>{{$product->productDiscount}}</li>
                </ul>
                <div>
                  <div>
                    <label><h5>Product Access Link</h5></label>
                     <input id="product_link" class="form-control" type="text" value="{{ url()->current()}}" readonly> 
                     <div id="share_success" style="color:blue;"><i class="bi bi-check" style="font-size:40px;"></i><span>Thank you!! The product link is copied.</span> </div>
                    </div><br/>
                  <button class="btn btn-primary btn-sm" id="share_button">Share Product</button>
                  <a href="{{route('AllProducts')}}" class="btn btn-primary btn-sm">Back to Product</a>
              </div>
              </div>
            </div><!-- End Video -->
        </div>
                
        <div class="row" style="background:#E1DAD8">
            <div class="col-lg-12">
                <div class="single-post" >
                <h4 class="d-flex justify-content-center" style="margin:0px;" >More products in our campany </h4>
                @if(count($all_product)>0)
                <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel" style="margin-top:0">
                  <div class="carousel-inner w-100 d-flex justify-content-between">           
                      <div class="carousel-item active">
                          <div class="col-md-3">
                              <div class="card card-body m-4">
                                  <img class="img-fluid" src="../../product/images/{{$all_product[0]->productThumbnail}}">
                                  <h6 class="d-flex justify-content-center" >{{$all_product[0]->productName}}</h6>
                                </div>
                          </div>
                      </div>
                      @for($a=1;$a< count($all_product);$a++)
                      <div class="carousel-item">
                          <div class="col-md-3">
                              <div class="card card-body m-4" >
                              <img class="img-fluid" src="../../product/images/{{$all_product[$a]->productThumbnail}}">
                              <h6 class="d-flex justify-content-center"><a href="{{route('singleProducts',$all_product[$a]->productEndLink)}}">{{$all_product[$a]->productName}}</a></h6>
                            </div>
                          </div>
                      </div>
                      @endfor
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>
              <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script> 
              @endif   
              </div>        
            </div>
          </div>         
            <!-- End Comments Form -->
            @else
            <div class="col-sm-12 single-post" >
              <h1 >Oops!!</h1>
              <h3><span>The product you are looking for is not available!</span> <br>
              <i style="color:red">Please check if your URL is not chaned or altered by someone</i> </h3>
                <a href="" class="btn btn-primary">Enroll to this course</a>
              <br><br>
            </div>
            @endif
          </div>
        
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    $('.carousel .carousel-item').each(function () {
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });
  
    $(document).ready(function() {
      $("#share_success").hide();
      $('#share_button').click(function() {
        
        var textToCopy = $('#product_link').val();
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
        $("#share_success").show();
        $('#share_button').hide();
        $('#product_link').hide();
      });
    });
  </script>
