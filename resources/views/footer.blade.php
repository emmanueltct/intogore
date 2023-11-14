<footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-lg-4">
        <h3 class="footer-heading">About Intogore Fintech </h3>
        <p>Intogorefintech is a leading digital assets company based in Rwanda. We specialize in providing comprehensive digital assets media and information, top-notch consulting and training services,
            as well as expert financial markets trading and investing solutions.</p>
        <p><a href="{{route('About')}}" class="footer-link-more">Learn More</a></p>
      </div>
      <div class="col-12 col-lg-2">
        <h3 class="footer-heading">Navigation</h3>
        <ul class="footer-links list-unstyled">
          <li ><a href="{{route('Index')}}"><i class="bi bi-chevron-right"></i>Home</a></li>
          <li ><a href="{{route('AllProducts','All')}}"><i class="bi bi-chevron-right"></i>Shopping</a></li>
          <li ><a href="{{route('allCourses')}}"><i class="bi bi-chevron-right"></i>Learn From Us</a></li>
          <li ><a href="{{route('allPost','All')}}"><i class="bi bi-chevron-right"></i>Skills Sharing</a></li>
          <li><a href="{{route('gettrendingnews')}}">Trending News</a></li>
          <li ><a href="{{route('About')}}"><i class="bi bi-chevron-right"></i>About Us</a></li>
          <li ><a href="{{route('Contact')}}"><i class="bi bi-chevron-right"></i>Contact</a></li>
        </ul>
      </div>
   
      <div class="col-lg-4">
        <h3 class="footer-heading">Recent Posts</h3>
        <ul class="footer-links footer-blog-entry list-unstyled">
        <?php $article=App\Models\Post::join('intogore_categories','intogore_categories.id','posts.postCategory')->where('Approval','=','Approved')->orderBy('posts.created_at', 'asc')
                          ->limit(5)
                          ->get();
        
        ?>
        @if(count($article)>0) 
        @foreach ($article as $article)
          <li>
            <a href="{{route('readsinglepost',$article->PostEndLink)}}" class="d-flex align-items-center">
              <img src={{URL::asset("images/$article->postThumbnail")}} alt="" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block"><span class="date">{{$article->category}}</span> <span class="mx-1">&bullet;</span> <span>{{$article->created_at}}</span></div>
                <span>{{$article->posttitle}} </span>
              </div>
            </a>
          </li>
        @endforeach
        @endif
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
          © Copyright <strong><span> <?= Date('Y')?></span></strong>. All Rights Reserved
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Designed by <a href="{{route('Index')}}">INTOGOREFINTECH</a>
        </div>

      </div>

      <div class="col-md-6">
        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
          <a href="https://twitter.com/IntogoreFintech" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/rwandainvestor?mibextid=ZbWKwL" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/intogore_fintech/?utm_source=qr&igshid=NGExMmI2YTkyZg%3D%3D" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="mailto:info@intogore.com" target="_blank"  class="google-plus"><i class="bi bi-envelope"></i></a>
          <a href="https://www.youtube.com/@INTOGOREFINTECH" target="_blank" class="linkedin"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>