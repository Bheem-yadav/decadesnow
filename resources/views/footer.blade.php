<footer data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 f--col">
        <a class="navbar-brand mb-4 d-block" href="{{url('/')}}"><img src="{{ URL::asset('images/logo.png')}}"></a>
        <p class="mb-0 text-white">Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
      </div>
<!-- quick links -->

      <div class="col-lg-2 ">
        <span class="HeadIng--title">QUICK LINKS</span>
        <ul class="mb-0 list-unstyled text-white">
       <!-- @foreach($menu_data as $data)
       @if(in_array($data->slug,['pages-about-us','pages-terms-and-conditions','pages-privacy-policy','pages-contact-us','pages-disclaimer'])) -->
       <!-- <li> <a href="{{url($data->slug)}}">{{  $data->title  }}</a></li> -->
       <!-- @endif
       @endforeach -->
       <li> <a href="{{url('/alllisting?celebrity_type=actor')}}">Birthday Actors</a></li>
          <li> <a href="{{url('/alllisting?celebrity_type=actress')}}">Birthday Actress</a></li>
          <li> <a href="{{url('/alllisting?celebrity_type=athletes')}}">Birthday Athletes</a></li>
          <li> <a href="{{url('/alllisting?celebrity_type=politician')}}">Birthday Politician</a></li>
          <li> <a href="{{url('/alllisting?celebrity_type=deathanniversary')}}">Death Anniversary</a></li>
          <li> <a href="{{url('/alllisting?celebrity_type=nationalday')}}">National Day</a></li>

        </ul>
      </div>
<!--end quick links -->

      <div class="col-lg-2">
        <span class="HeadIng--title">IMPORTANT LINKS</span>
        <ul class="mb-0 list-unstyled text-white">
          <li> <a href="{{url('/pages')}}">Today's Birthday</a></li>
          <li> <a href="{{url('/pages')}}">Tomorrow's Birthday</a></li>
          <li> <a href="{{url('/pages')}}">This Month Birthday</a></li>
          <li> <a href="{{url('/pages')}}">Recent News</a></li>
          <li> <a href="{{url('/pages')}}">Top Personalities </a></li>
        </ul>
      </div>
      <div class="col-lg-2">
        <span class="HeadIng--title">ABOUT US</span>
        <ul class="mb-0 list-unstyled text-white">
          <li> <a href="{{url('/pages-about-us')}}">About Us</a></li>
          <li> <a href="{{url('/pages-disclaimer')}}">Disclaimer</a></li>
          <li> <a href="{{url('/pages-privacy-policy')}}">Privacy Policy</a></li>
          <li> <a href="{{url('/pages-terms-and-conditions')}}">Terms of Use</a></li>
          <li> <a href="{{url('/pages-faq')}}">FAQ</a></li>
          <li> <a href="{{url('/pages-testimonials')}}">Testimonials</a></li>
          <li> <a href="{{url('/pages-feedback')}}">Feedback</a></li>
          <li> <a href="{{url('/contact-us')}}">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-lg-2 contact--us">
        <span class="HeadIng--title">CONTACT US</span>
        <a class="mob-no" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 1234567890</a>
        <a class="email" href="mailto:demo@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a>
        <div class="social_wrap">
          <ul class="social_list mb-0 list-unstyled d-flex">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 copy--right text-center">
        <p class="mb-0 text-white">Copyright 2023 Decades Now</p>
      </div>
    </div>
  </div>
</footer>


  
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js')}}"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
<script src="{{ URL::asset('js/main.js')}}"></script>
  <script>
    AOS.init();
  </script>
  </body>
  </html>