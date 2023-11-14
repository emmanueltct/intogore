<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  
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
  margin-top:-70px;
  padding-top: 0;
  position: relative;
  z-index: 100;
  
}

.icon-boxes .icon-box {
  padding: 40px 30px;
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
  margin-left: 70px;
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
  margin-left: 70px;
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

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
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


/*-------------------------------------------------------------- */

 </style>
</head>


<body>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>INTOGOREFINTECH</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('Index')}}">Home</a></li>
          <li><a href="{{route('AllProducts','All')}}">Shopping</a></li>
          <li><a href="{{route('allCourses')}}">Learn From Us</a></li>
          <li><a href="{{route('allPost','All')}}">Skills Sharing</a></li>
          <li><a href="{{route('About')}}">About-Us</a></li>
          <li><a href="{{route('Contact')}}">Contact-Us</a></li>
        </ul>
      </nav><!-- .navbar -->
      <div class="position-relative">
        <a href="#" class="mx-2"><span style="color:yellow" class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span style="color:yellow"  class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span style="color:yellow"  class="bi-instagram"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </div><!-- End Search Form -->
      </div>
    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider" >
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                @if(count($products)>0)
                @foreach($products as $p)
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('product/images/{{$p->productThumbnail}}');">
                    <div class="img-bg-inner">
                      <h2>{{$p->productName}}</h2>
                      <p>{{$p->companyTitle}}</p>
                    </div>
                  </a>
                </div>
                @endforeach
                @else
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                      <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                    <div class="img-bg-inner">
                      <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>
                @endif
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <section id="icon-boxes" class="icon-boxes">
      <div class="container">
        <div class="row" style="display:flex; justify-content:center;">
          <div class="col-md-0 col-lg-12  align-items-stretch mb-0 mb-lg-0" data-aos="fade-up" style="width:80%">
            <div class="icon-box">
              <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                  <div class="tradingview-widget-container__widget"></div>
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
          <!-- TradingView Widget END -->
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
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          @foreach($courses as $courses)
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#"><a href="{{route('takeCourse',$courses->SubCourseEndLink)}}">{{$courses->mainTitle}}</a></a></h4>
              <p>{{$courses->courseIntro}}</p>
            </div>
          </div>
        @endforeach
      </div>
      </section><!-- End Services Section -->

      <section id="cta" class="cta">
        <div class="container">
          <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>{{$trendings->trendingTitle}}</h3>
              <p>{{$trendings->Comments}}</p>
              <p><i>Posted:{{$trendings->created_at}}</i></p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" target="_blank" href="{{$trendings->sourceLink}}">Call To Action</a>
            </div>
          </div>
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
                    <h2><a href="{{route('readsinglepost',$news[0]->PostEndLink )}}">{{$news[0]->posttitle}}</a></h2>
                    <p class="mb-4 d-block">{{substr($news[0]->postdescription,0,505)."......."}}</p>

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
                            <p class="mb-4 d-block">{{substr($news[$i]->postdescription,0,505)."......."}}</p>
                          </div>
                        </div>
                      @endfor     
            @else
              <div class="col-lg-4">
                <div class="post-entry-1 lg">
                  <a href="{{route('readsinglepost',$news[0]->PostEndLink )}}"><img src="images/{{$news[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">{{$news[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{date("M jS, Y : H:i:s ",strtotime($news[0]->createdat))}}</span></div>
                  <h2><a href="{{route('readsinglepost',$news[0]->PostEndLink )}}">{{$news[0]->posttitle}}</a></h2>
                  <p class="mb-4 d-block">{{substr($news[0]->postdescription,0,505)."......."}}</p>

                  <div class="d-flex align-items-center author">
                    <div class="name">
                      <a href="{{route('readsinglepost',$news[0]->PostEndLink )}}" class="m-0 p-2 btn btn-info">Read more</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="row g-5">
                  <div class="col-lg-6 border-start custom-border">
                    @if(count($news)>0)
                      @for($i=1; $i < count($news);$i++)
                        @if($i==1 || $i%2==1)
                          <div class="post-entry-1">
                            <a href="{{route('readsinglepost', $news[$i]->PostEndLink )}}"><img src="images/{{$news[$i]->postthumbnail}}" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{$news[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$news[$i]->createdat}}</span></div>
                            <h2><a href="{{route('readsinglepost',$news[$i]->PostEndLink )}}"> {{$news[$i]->posttitle}} </a></h2>
                          </div>
                        @endif
                      @endfor
                  </div>
                  <div class="col-lg-6 border-start custom-border">
                      @for($i=1; $i < count($news);$i++)
                          @if($i%2==0)
                            <div class="post-entry-1">
                              <a href="{{route('readsinglepost',$news[$i]->PostEndLink )}}"><img src="images/{{$news[$i]->postthumbnail}}" alt="" class="img-fluid"></a>
                              <div class="post-meta"><span class="date">{{$news[$i]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$news[$i]->createdat}}</span></div>
                              <h2><a href="{{route('readsinglepost',$news[$i]->PostEndLink )}}"> {{$news[$i]->posttitle}} </a></h2>
                            </div>
                          @endif
                      @endfor
                  </div>
                  @endif
                </div>
              </div>
              @endif 
            </div> <!-- End .row -->
          </div>
        </section> <!-- End Post Grid Section -->
        @endif
        <!-- ======= Culture Category Section ======= -->
        @if(count($updates)>0) 
        <section class="category-section">
          <div class="container" data-aos="fade-up">
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
              <h2>Crypto analytics</h2>
              <div><a href="{{route('allPost', $updates[0]->endLink)}}" class="more">See All Analytics</a></div>
            </div>
            <div class="row">
              <div class="col-md-9" style="padding-right:3%">
              <div class="row">
                @if(count($updates)>1)
                  <div class="col-lg-4" >
                    <div>
                      <div class="post-entry-1 border-bottom">
                        <a href="{{route('readsinglepost',$updates[1]->PostEndLink )}}"><img src="images/{{$updates[1]->postthumbnail}}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{$updates[1]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$updates[2]->createdat}}</span></div>
                        <h2 class="mb-2"><a href="{{route('readsinglepost',$updates[1]->PostEndLink )}}">{{$updates[1]->posttitle}}</a></h2>
                        <p class="mb-4 d-block">{{substr($updates[1]->postdescription,0,105)."......."}}
                          <span class="author mb-3 d-block">
                            <a href="{{route('readsinglepost',$updates[1]->PostEndLink )}}" style="color:red">Read more</a>
                          </span>
                        </p>
                      </div>
                    </div>
                    <div>
                      <div class="post-entry-1 border-bottom">
                        <a href="{{route('readsinglepost',$updates[2]->PostEndLink )}}"><img src="images/{{$updates[2]->postthumbnail}}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{$updates[2]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$updates[2]->createdat}}</span></div>
                        <h2 class="mb-2"><a href="{{route('readsinglepost',$updates[2]->PostEndLink )}}">{{$updates[2]->posttitle}}</a></h2>
                        <p class="mb-4 d-block">{{substr($updates[2]->postdescription,0,105)."......."}}
                          <span class="author mb-3 d-block">
                            <a href="{{route('readsinglepost',$updates[2]->PostEndLink )}}" style="color:red">Read more</a>
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
        @else
            <center><h6 class="blink" style="padding-bottom:35px">Please wait patiently!! Our update are comming very soon</h6></center>
        @endif 
        <!-- ======= Business Category Section ======= -->
        @if(count($articles)>0) 
        <section class="category-section">
          <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
              <h2>Articles</h2>
              <div><a href="{{route('allPost',$articles[0]->endLink)}}" class="more">See All Ariticles</a></div>
            </div>
            <div class="row">
              <div class="col-md-8 order-md-2">
                <div class="row">
                  <div class="col-lg-12" style="padding-left:10%;padding-right:10%">
                    <div class="post-entry-1">
                      <a href="{{route('readsinglepost',$articles[0]->PostEndLink )}}"><img src="images/{{$articles[0]->postthumbnail}}" alt="" class="img-fluid"></a>
                      <div class="post-meta"><span class="date">{{$articles[0]->cat}}</span> <span class="mx-1">&bullet;</span> <span>{{$articles[0]->createdat}}</span></div>
                      <h2 class="mb-2">{{$articles[0]->posttitle}}</h2>
                      <p class="mb-4 d-block">{!! substr($articles[0]->postdescription,0,505)."......." !!}
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
              <h2>Blockchain Inovations</h2>
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
<footer id="footer" class="footer">

  <div class="footer-content">
    <div class="container">

      <div class="row g-5">
        <div class="col-lg-4">
          <h3 class="footer-heading">About ZenBlog</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
          <p><a href="about.html" class="footer-link-more">Learn More</a></p>
        </div>
        <div class="col-6 col-lg-2">
          <h3 class="footer-heading">Navigation</h3>
          <ul class="footer-links list-unstyled">
            <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
            <li><a href="index.html"><i class="bi bi-chevron-right"></i> Blog</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Categories</a></li>
            <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
            <li><a href="about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
            <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <h3 class="footer-heading">Categories</h3>
          <ul class="footer-links list-unstyled">
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>

          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="footer-heading">Recent Posts</h3>

          <ul class="footer-links footer-blog-entry list-unstyled">
            <li>
              <a href="single-post.html" class="d-flex align-items-center">
                <img src="assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                <div>
                  <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <span>5 Great Startup Tips for Female Founders</span>
                </div>
              </a>
            </li>

            <li>
              <a href="single-post.html" class="d-flex align-items-center">
                <img src="assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                <div>
                  <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                </div>
              </a>
            </li>

            <li>
              <a href="single-post.html" class="d-flex align-items-center">
                <img src="assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                <div>
                  <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                </div>
              </a>
            </li>

            <li>
              <a href="single-post.html" class="d-flex align-items-center">
                <img src="assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                <div>
                  <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                </div>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </div>
  </div>

  <div class="footer-legal">
    <div class="container">

      <div class="row justify-content-between">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <div class="copyright">
            © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
          </div>

          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>

        </div>

        <div class="col-md-6">
          <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

        </div>

      </div>

    </div>
  </div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>