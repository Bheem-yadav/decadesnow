@include("header")
<section class="today this--month">
  <div class="container">

    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">{{$privacy_data->title}}</div>
        <p class="mb-0" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">{!! $privacy_data->body!!}</p></br>
       
      </div>

    
    </div>
  </div>
</section> 

@include("footer")
