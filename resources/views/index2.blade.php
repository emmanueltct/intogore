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

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
  <style>
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
        .covered {
          position:relative; 
          padding:30px; 
        }

        .covered-img {
          background:url('https://source.unsplash.com/random/800x600');
          opacity: .25;
          background-size:cover;
          background-position:center; 
          position:absolute;
          top:0;bottom:0;left:0;right:0;
        }

  .icon-boxes {
  margin-top:-30px;
  padding-top: 0;
  position: relative;
  z-index: 100;
  
}

.icon-boxes .icon-box {
  padding: 20px 10px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 5px 10px 29px 0 rgba(68, 88, 144, 0.2);
  transition: all 0.3s ease-in-out;
  border-radius: 10px;
}

.icon-boxes .icon {
  margin: 0 auto 20px auto;
  display: inline-block;
  text-align: center;
}

.icon-boxes .icon i {
  font-size: 36px;
  line-height: 1;
  color: #f6b024;
}

.icon-boxes .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.icon-boxes .title a {
  color: #05579e;
}

.icon-boxes .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
  color: #777777;
}

.info-part{
  background-image: url("assets/img/business2.jpg");
}
/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/

.section-bg {
  background-color: #f1f8ff;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #054a85;
}

.section-title p {
  margin-bottom: 0;
  font-style: italic;
}

.services .icon-box {
  margin-bottom: 20px;
  padding: 50px 40px;
  border-radius: 6px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.services .icon-box i {
  float: left;
  color: #f6b024;
  font-size: 40px;
  line-height: 0;
}

.services .icon-box h4 {
  margin-left: 2px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .icon-box h4 a {
  color: #05579e;
  transition: 0.3s;
}

.services .icon-box h4 a:hover {
  color: #0880e8;
}

.services .icon-box p {
  margin-left:2px;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}


/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: linear-gradient(rgba(5, 74, 133, 0.8), rgba(5, 74, 133, 0.9)), url("./assets/img/business2.jpg") fixed center center;
  background-size: cover;
  padding: 120px 0;
}

.cta h4 {
  color: #fff;
  font-size: 18px;
  font-weight:600;
  line-height:32px;
  font-style:italic;
  font-family: Times, "Times New Roman", Georgia, serif;
}

.cta p {
  color: #fff;
  font-family: serif;
  font-size:14px;
}

.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 0.5px;
  display: inline-block;
  padding: 8px 26px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  border-radius: 50px;
  border: 2px solid #f6b024;
  color: #fff;
}

.cta .cta-btn:hover {
  background: #f6b024;
}

@media (max-width: 1024px) {
  .cta {
    background-attachment: scroll;
  }
}

@media (min-width: 769px) {
  .cta .cta-btn-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}

#hero-slider{
  background:url(assets/img/business1.jpg) center center;
  background-repeat: no-repeat;
  background-size:cover;
}



    
  .post-entry-1 a{
    font-size:18px;
  }  

.rsphere{
  width:325px;height:325px; border-radius: 50%;

  background: linear-gradient(135deg, #a7cfdf 0%,#23538a 100%);
  
  box-shadow: inset -3px -2px 4px 0px rgba(0,0,0,0.3);
  overflow:hidden;
}
 
/* (C) MATCH HEIGHT */
.rsphere:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}
.rsphere{
  padding:4%;
  text-align: center;
  color:white;
}
.rsphere h5 a{
    color:yellow;
  }
.rsphere_left{
  font-size:16px;padding-top:60px
}
@media (max-width:999px) {
  .rsphere {
  margin:auto;
  margin-bottom:1px;
   padding:1%;
   width:400px;height:250px; border-radius:0px;
   background:none;
   box-shadow: inset 0px 0px 0px 0px rgba(0,0,0,0);
    box-shadow:none;
   overflow:hidden;
  }

  .rsphere h5 a{
    color:yellow;
  }
  #hero-slider{
    background: linear-gradient(135deg, #a7cfdf 0%,#23538a 100%);
  }
  .rsphere_left{
  font-size:16px;padding-top:0px
  }
.icon-boxes {
  margin-top:-100px;
  padding-top: 0;
  position: relative;
  z-index: 100;
  
}
  .course-icon-box{
    padding:5px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
  }
  
    .services .icon-box p{
    margin-left:0px;
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
  .services .icon-box i {
    color: #f6b024;
    font-size: 40px;
    line-height: 0;
    padding:10px;
  }

  .services .icon-box h4 {
    margin-left:0px;
    font-weight: 700;
    margin-bottom: 18px;
    font-size: 18px;
  }
    .services .icon-box {
    margin-bottom: 20px;
    padding: 6px 6px;
    border-radius: 6px;
    background: #fff;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }
}



 </style>


@include('nav')

  <main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
                         
  <div class="row d-flex justify-content-between">
   <div class="col-lg-3 rsphere">
   @if(count($products)>0)
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
     <h5><a href="{{route('singleProducts',$products[0]->productEndLink)}}">{{$products[0]->productName}}</a></h5>
      <div>
       <img src="product/images/{{$products[0]->productThumbnail}}" class="img-thumbnail" alt="..." style="height:200px" >
      </div>
    </div>
    @for($a=1;$a< count($products);$a++)
    <div class="carousel-item" data-bs-interval="6000">
      <h5><a href="{{route('singleProducts',$products[$a]->productEndLink)}}">{{$products[$a]->productName}}</a></h5>
      <div>
       <img src="product/images/{{$products[$a]->productThumbnail}}" class="img-thumbnail" alt="..." style="height:200px">
      </div>
    </div>
    @endfor
  </div>
</div>
@else
<p style="margin-top:30%">If you need a branded crypto products contact us, we make design and brands differents products like T-shirt,Hat, etc...</p>
@endif

</div>
 <div class="col-lg-3 rsphere rsphere_left" >
  <h5 style="color:yellow">Our best advice about digital assets</h5>
        Do your research.Before you invest in any digital asset, it is important to do your research and understand the risks involved. There are many different types of digital assets, and each one has its own unique risks.
  </div>
  </div>
         
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <section id="icon-boxes" class="icon-boxes" style="width:100%">
      <div class="container">
        <div class="row" style="display:flex; justify-content:center;">
          <div class="col-md-0 col-lg-12  align-items-stretch mb-0 mb-lg-0" data-aos="fade-up" style="width:100%">       
      
         
          <div class="icon-box" >
              <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" >
                  <div class="tradingview-widget-container__widget"></div>
                  <div class="row">
          
                  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                  {
                  "symbols": [
                    {
                      "proName": "FOREXCOM:SPXUSD",
                      "title": "S&P 500"
                    },
                    {
                      "proName": "FOREXCOM:NSXUSD",
                      "title": "US 100"
                    },
                    {
                      "proName": "BITSTAMP:BTCUSD",
                      "title": "Bitcoin"
                    },
                    {
                      "proName": "BITSTAMP:ETHUSD",
                      "title": "Ethereum"
                    },
                    {
                      "description": "ETH",
                      "proName": "BINANCE:ETHUSDT"
                    },
                    {
                      "description": "XRP",
                      "proName": "BINANCE:XRPUSDT"
                    },
                    {
                      "description": "SOL",
                      "proName": "BINANCE:SOLUSDT"
                    },
                    {
                      "description": "ADA",
                      "proName": "BINANCE:ADAUSDT"
                    },
                    {
                      "description": "MATIC",
                      "proName": "BINANCE:MATICUSDT"
                    },
                    {
                      "description": "LINK",
                      "proName": "BINANCE:LINKUSDT"
                    }
                  ],
                  "showSymbolLogo": true,
                  "colorTheme": "dark",
                  "isTransparent": false,
                  "displayMode": "adaptive",
                  "locale": "en"
                }
                  </script>
                </div>
            </div>
          </div> 
        </div>
      </div>
     </section><!-- End Icon Boxes Section --> 

    
       <!-- ======= Services Section ======= -->
       <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Latest Courses</h2>
          <p>Learn how to trade digital assets like a pro with our comprehensive beginner-friendly course, earn passive income by following our proven strategies, and get access to our exclusive community of traders and investors. Guaranteed to teach you how to trade digital assets profitably!</p>
        </div>

        <div class="row">
          @foreach($courses as $courses)
          <?php
             $subcourse = App\Models\course::find($courses->id)->subcourses()->first(); 
          ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box course-icon-box">
             <img src="./courses/images/{{$courses->courseThumbnail}}" alt="" class="img-fluid">
              <br/><br/>
              @if($subcourse)
              <h4><a href="{{route('takeCourse',$subcourse->SubCourseEndLink)}}">{{$courses->courseTitle}}</a></h4>
              @else
              <h4><a href="#" class="btn btn-link disabled" style="text-decoration:none" >{{$courses->courseTitle}}</a></h4>
              @endif
             
              <p>{!!substr($courses->courseDescription,0,570)!!}........</p>
            </div>
          </div>
        @endforeach
      </div>
      </section><!-- End Services Section -->

      <section id="cta" class="cta">
        <div class="container">
          @if($trendings)
          <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
              <h4 style="color:yellow">{{$trendings->trendingTitle}}</h4>
              <p>{{$trendings->Comments}}</p>
              <p><i>Posted:{{$trendings->created_at}}</i></p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" target="_blank" href="{{$trendings->sourceLink}}">Read More</a>
            </div>
          </div>
          @endif
        </div>
      </section><!-- End Cta Section -->
        
        @if(count($news)>0) 
        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
          <div class="container" data-aos="fade-up">
            <div class="row g-5">
            @if(count($news)==1)
              <div class="col-lg-12">
                  <div class="post-entry-1 lg">
                    <a href="{{route('readsinglepost',$news[0]->PostEndLink )}}"><img src="images/{{$news[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">{{$news[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{date("M jS, Y : H:i:s ",strtotime($news[0]->createdat))}}</span></div>
                    <h2 style="color: #054a85;"><a href="{{route('readsinglepost',$news[0]->PostEndLink )}}">{{$news[0]->posttitle}}</a></h2>
                    <p class="mb-4 d-block">{{$news[0]->postdescription}}</p>

                    <div class="d-flex align-items-center author">
                      <div class="name">
                        <a href="{{route('readsinglepost',$news[0]->PostEndLink )}}" class="m-0 p-2 btn btn-info">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>      
            @elseif(count($news)==2)
                  @for($i=0; $i < count($news);$i++)
                      <div class="col-lg-6 custom-border">
                          <div class="post-entry-1">
                            <a href="{{route('readsinglepost', $news[$i]->PostEndLink )}}"><img src="images/{{$news[$i]->postthumbnail}}" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{$news[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$news[$i]->createdat}}</span></div>
                            <h2><a href="{{route('readsinglepost',$news[$i]->PostEndLink )}}"> {{$news[$i]->posttitle}} </a></h2>
                            <p class="mb-4 d-block">{{$news[$i]->postdescription}}</p>
                          </div>
                        </div>
                      @endfor     
            @else
            <div class="row m-2 p-4">
            @for($i=0; $i < count($news);$i++)
             <div class="col-lg-4">
             <div class="post-entry-1 lg">  
              <a href="{{route('readsinglepost',$news[$i]->PostEndLink )}}"><img src="images/{{$news[$i]->postthumbnail}}" alt="" class="img-fluid"></a>     
                 <div class="post-meta"><span class="date">{{$news[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{date("M jS, Y : H:i:s ",strtotime($news[$i]->createdat))}}</span></div>   
                  <h4><a style="font-size:25px"href="{{route('readsinglepost',$news[$i]->PostEndLink )}}">{{$news[$i]->posttitle}}</a></h4>
                  <p class="mb-4 d-block">{{$news[$i]->postdescription}}</p>
                  <div class="d-flex align-items-center author">
                    <div class="name">
                      <a href="{{route('readsinglepost',$news[$i]->PostEndLink )}}" class="m-0 p-2 btn btn-outline-primary btn-sm">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
           @endfor
           </div>
          </div>
          @endif
          </div>
          </div> <!-- End .row -->
          </div>
        </section> <!-- End Post Grid Section -->
        @endif

        <!-- ======= Culture Category Section ======= -->
        @if(count($updates)>0) 
        <section class="category-section">
          <div class="container" data-aos="fade-up">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
              <h3 style="color: #054a85;">Crypto analytics</h3>
              <div><a href="{{route('allPost', $updates[0]->endLink)}}" style="color: #054a85;" class="more">See All Analytics</a></div>
            </div>
            <div class="row">
              <div class="col-md-9" style="padding-right:3%">
              <div class="row">
                @if(count($updates)>1)
                  <div class="col-lg-4" >
                    <div>
                      <div class="post-entry-1 border-bottom">
                        <a href="{{route('readsinglepost',$updates[0]->PostEndLink )}}"><img src="images/{{$updates[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{$updates[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$updates[0]->createdat}}</span></div>
                        <h2 class="mb-2"><a href="{{route('readsinglepost',$updates[0]->PostEndLink )}}">{{$updates[0]->posttitle}}</a></h2>
                        <p class="mb-4 d-block">{{substr($updates[0]->postdescription,0,105)."......."}}
                          <span class="author mb-3 d-block">
                            <a href="{{route('readsinglepost',$updates[0]->PostEndLink )}}" style="color:red">Read more</a>
                          </span>
                        </p>
                      </div>
                    </div>
                    <div>
                      <div class="post-entry-1 border-bottom">
                        <a href="{{route('readsinglepost',$updates[1]->PostEndLink )}}"><img src="images/{{$updates[1]->postthumbnail}}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{$updates[1]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$updates[1]->createdat}}</span></div>
                        <h2 class="mb-2"><a href="{{route('readsinglepost',$updates[1]->PostEndLink )}}">{{$updates[1]->posttitle}}</a></h2>
                        <p class="mb-4 d-block">{{substr($updates[1]->postdescription,0,105)."......."}}
                          <span class="author mb-3 d-block">
                            <a href="{{route('readsinglepost',$updates[1]->PostEndLink )}}" style="color:red">Read more</a>
                          </span>
                        </p>
                      </div>
                    </div>
                </div> 
                @endif
                  <div class="col-lg-8" style="padding-left:3%" >
                    <div class="post-entry-1">
                      <a href="{{route('readsinglepost',$updates[0]->PostEndLink )}}"><img src="images/{{$updates[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                      <div class="post-meta"><span class="date">{{$updates[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$updates[0]->createdat}}</span></div>
                      <h2 class="mb-2"><a href="{{route('readsinglepost',$updates[0]->PostEndLink )}}">{{$updates[0]->posttitle}}</a></h2>
                      <p class="mb-4 d-block">{{substr($updates[0]->postdescription,0,305)."......."}}
                        <span class="author mb-3 d-block btn btn-warning">
                          <a href="{{route('readsinglepost',$updates[0]->PostEndLink )}}" >Click for more</a>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3" style="padding-left:3%" >
              @if(count($updates)>2)
                  @for($i=2;$i < count($updates);$i++)
                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta"><span class="date">{{$updates[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$updates[$i]->createdat}}</span></div>
                      <h2 class="mb-2">{{$updates[$i]->posttitle}}</h2>
                      <span class="author mb-3 d-block"><a href="{{route('readsinglepost',$updates[$i]->PostEndLink )}}" style="color:red">Read more</a></span>
                    </div>
                  @endfor
                @endif
              </div>
            </div>
          </div>
        </section><!-- End Culture Category Section -->
        @endif 
        <!-- ======= Business Category Section ======= -->
        @if(count($articles)>0) 
        <section class="category-section">
          <div class="container" data-aos="fade-up">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
              <h3 style="color: #054a85;">Articles</h3>
              <div><a href="{{route('allPost',$articles[0]->endLink)}}" class="more" style="color: #054a85;">See All Ariticles</a></div>
            </div>
            <div class="row">
              <div class="col-md-8 order-md-2">
                <div class="row">
                  <div class="col-lg-12" style="padding-left:10%;padding-right:10%">
                    <div class="post-entry-1">
                      <a href="{{route('readsinglepost',$articles[0]->PostEndLink )}}"><img src="images/{{$articles[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                      <div class="post-meta"><span class="date">{{$articles[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$articles[0]->createdat}}</span></div>
                      <h2 class="mb-2">{{$articles[0]->posttitle}}</h2>
                      <p class="mb-4 d-block">{{$articles[0]->postdescription}}
                      <span class="author mb-3 d-block blink"><a style="color:red" href="{{route('readsinglepost',$articles[0]->PostEndLink )}}">read more</a></span> 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                @for($i=1;$i < count($articles); $i++)
                <div class="post-entry-1 border-bottom">
                  <div class="post-meta">{{$articles[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$articles[$i]->createdat}}</span></div>
                  <img src="images/{{$articles[$i]->postthumbnail}}" alt="" class="img-fluid">
                  <h2 class="mb-2"><a href="{{route('readsinglepost',$articles[$i]->PostEndLink )}}">{{$articles[$i]->posttitle}}</a></h2>
                  <span class="author mb-3 d-block blink"><a style="color:red" href="{{route('readsinglepost',$articles[$i]->PostEndLink )}}">read more</a></span> 
                </div>
                @endfor
              </div>
            </div>
          </div>
        </section><!-- End Business Category Section -->
        @endif
        <!-- ======= Lifestyle Category Section ======= -->
        @if(count($innovation)>0) 
        <section class="category-section">
          <div class="container" data-aos="fade-up">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h3 style="color: #054a85;"> Blockchain Inovations</h3>
              <div><a href="{{route('allPost',$innovation[0]->endLink)}}">More About Blockchain </a></div>
            </div>
            <div class="row g-5">
              <div class="col-lg-4">
                <div class="post-entry-1 lg">
                  <a href="{{route('readsinglepost',$innovation[0]->PostEndLink )}}"><img src="images/{{$innovation[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">{{$innovation[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$innovation[0]->createdat}}</span></div>
                  <h2><a href="{{route('readsinglepost',$innovation[0]->PostEndLink )}}">{{$innovation[0]->posttitle}}</a></h2>
                  <p class="mb-4 d-block">{{substr($innovation[0]->postdescription,0,305)."......."}}
                        <span class="author mb-3 d-block btn btn-warning">
                          <a href="{{route('readsinglepost',$innovation[0]->PostEndLink )}}" >Click for more</a>
                        </span>
                      </p>
                </div>
              </div>
              
              <div class="col-lg-8">
                <div class="row g-5">
                  @if(count($innovation)>1)
                    @for($i=1; $i < count($innovation); $i++)
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="{{route('readsinglepost',$innovation[$i]->PostEndLink )}}"><img src="images/{{$innovation[$i]->postthumbnail}}" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{$innovation[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$innovation[$i]->createdat}}</span></div>
                            <h2><a href="{{route('readsinglepost',$innovation[$i]->PostEndLink )}}">{{$innovation[$i]->posttitle}}</a></h2>
                        </div>
                    </div>
                    @endfor
                  @endif  
                  </div>
                </div>
              </div>
            </div> <!-- End .row -->
          </div>
        </section><!-- End Lifestyle Category Section -->
        @endif
    
    </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  @include('footer')

  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $('.carousel .carousel-item').each(function () {
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });
  </script>
</body>

</html>