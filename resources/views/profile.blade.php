@include("header")


    <section class="banner--static">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12"><img class="w-100 img-fluid" src="images/birthday-banner-2.png">
            <div class="banner--cont"><h1><span class="d-block">HAPPY</span> BIRTHDAY</h1></div>
        </div>
      </div>
    </section>

    <section class="bread--crumb">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="breadcrumb_list list-unstyled mb-0 d-flex">
              <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/listing')}}">Birthday</a></li>
                  <li>{{$list_data->name}}</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="bio-fact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="celebrity_slide-images">
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @if (!empty($list_data->image) && File::exists("app/public/".$list_data->image))
                    
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="app/public/{{$list_data->image}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="app/public/{{$list_data->image}}" class="d-block w-100" alt="...">
                        </div>
                            <img src="app/public/{{$list_data->image}}" class="d-block w-100" alt="...">
                        <div class="carousel-item" data-bs-interval="3000">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="app/public/{{$list_data->image}}" class="d-block w-100" alt="...">
                        </div>
                    @else 
                        <div class="carousel-item_" data-bs-interval="3000">
                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="height:auto; width: 400px; margin: 95px 155px;" />
                        </div>

                    @endif
                    
                 
                  <!-- <div class="carousel-item" data-bs-interval="3000">
                    <img src="app/public/{{$list_data->image}}" class="d-block w-100" alt="...">
                  </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

                <div class="celeb--slide--cont">
                  <h2 class="name-celeb text-white">{{$list_data->name}}- (Bollywood Actor)</h2>
                  <ul class="rating_list list-unstyled mb-0 d-flex">
                    <p class="text-white mb-0">Rating:</p>
                    <li><a href="#"><img src="images/star-filled.png"></a></li>
                    <li><a href="#"><img src="images/star-filled.png"></a></li>
                    <li><a href="#"><img src="images/star-filled.png"></a></li>
                    <li><a href="#"><img src="images/star-filled.png"></a></li>
                    <li><a href="#"><img src="images/star-grey.png"></a></li>
                  </ul>
                </div>
              </div>              
            </div>
            <div class="bio--graphy">
              <div class="heading--title"><span>BIOGRAPHY</span></div>
              <p>{!!$list_data->body!!}</p>
              @if (!empty($list_data->image) && File::exists("app/public/".$list_data->image))
                    <img class="celeb-small-img mb-4 w-100- img-fluid- " src="app/public/{{$list_data->image}}">
                @else 
                    <div class="carousel-item_" data-bs-interval="3000">
                    <img src="assets/img/logo-dn-modified.png" alt="Image" style="height:auto; width: 400px; margin: 95px 155px;" />
                    </div>
                @endif

              <div class="conteNt">

              <p>{!!$list_data->body!!}</p>

              <ul class="mb-0- ps-0 feat_list"> 
                <span class="list--heading">FEATURES</span>
                <li>ac scelerisque ante pulvinar. conubia nostra, per  .</li>
                <li>ac scelerisque ante pulvinar. conubia nostra, per inceptos.</li>
                <li>ac scelerisque ante pulvinar.</li>
                <li>ac scelerisque ante pulvinar. conubia nostra, per  .</li>
                <li>ac scelerisque ante pulvinar. conubia nostra, per inceptos.</li>
                <li>ac scelerisque ante pulvinar.</li>
              </ul>
            </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="quick-facts">
              <div class="heading--title"><span>QUICK FACTS</span></div>
              <ul class="mb-0 list-unstyled quick-facts-list">
                <li class="d-flex">
                  <div class="fact-ques">Date of Birth:</div>
                  <div class="fact-ans">{{$list_data->DOB}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Place of birth:</div>
                  <div class="fact-ans">{{$list_data->POB}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Education</div>
                  <div class="fact-ans">{{$list_data->education}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Profession</div>
                  <div class="fact-ans">{{$list_data->profession}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Father’s name:</div>
                  <div class="fact-ans">{{$list_data->fathersname}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Mother’s name:</div>
                  <div class="fact-ans">{{$list_data->mothersname}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Spouse’s name:</div>
                  <div class="fact-ans">{{$list_data->spousesname}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Spouse’s profession:</div>
                  <div class="fact-ans">{{$list_data->spousesprofession}}</div>
                </li>                
              </ul>

              <ul class="mb-0 list-unstyled quick-facts-list moretext">                
                <li class="d-flex">
                  <div class="fact-ques">Religion:</div>
                  <div class="fact-ans">{{$list_data->religion}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Caste</div>
                  <div class="fact-ans">{{$list_data->caste}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Permanent address:</div>
                  <div class="fact-ans">{{$list_data->permanentaddress}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Present address:</div>
                  <div class="fact-ans">{{$list_data->presentaddress}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Contact number:</div>
                  <div class="fact-ans">{{$list_data->contactnumber}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Website:</div>
                  <div class="fact-ans">{{$list_data->website}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Social Handles:</div>
                  <div class="fact-ans">A{{$list_data->socialhandles}}</div>
                </li>
                <li class="d-flex">
                  <div class="fact-ques">Net Worth:</div>
                  <div class="fact-ans">{{$list_data->networth}}</div>
                </li>
              </ul>

              <div class="more--less text-center"><a class="moreless-button" href="#">Read more</a></div>

              
            </div>
          </div>
        </div>
      </div>
    </section>

   <!--  <div id="section">
      <div class="container">
  <div class="article">
    <p>Bacon ipsum dolor amet sirloin jowl turducken pork loin pig pork belly, chuck cupim tongue beef doner tri-tip pancetta spare ribs porchetta. 
    </p>
    <p class="moretext">
      Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin, bacon beef brisket ball tip short ribs. 
    </p>
  </div>
  <a class="moreless-button" href="#">Read more</a>
</div>
</div> -->

    <section class="addisional-info">
      <div class="container">
        <div class="row">
          <div class="add--info">
              <div class="heading--title"><span>ADDITIONAL INFORMATION</span></div>
              <p>{!!$list_data->body!!}</p>

              @if (!empty($list_data->image) && File::exists("app/public/".$list_data->image))
                    <img class="celeb-small-img mb-4 w-100- img-fluid- " src="app/public/{{$list_data->image}}">
                @else 
                    <div class="carousel-item_" data-bs-interval="3000">
                    <img src="assets/img/logo-dn-modified.png" alt="Image" style="height:auto; width: 400px; margin: 95px 155px;" />
                    </div>
                @endif
              
              <div class="conteNt">
              <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu  </p>
               <ul class="mb-0- ps-0 feat_list"> 
                <span class="list--heading">FEATURES</span>
                <li>ac scelerisque ante pulvinar. conubia nostra, per  .</li>
                <li>ac scelerisque ante pulvinar. conubia nostra, per inceptos.</li>
                <li>ac scelerisque ante pulvinar.</li>
                <li>ac scelerisque ante pulvinar. conubia nostra, per  .</li>
                <li>ac scelerisque ante pulvinar. conubia nostra, per inceptos.</li>
                <li>ac scelerisque ante pulvinar.</li>
              </ul>
              <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu  </p>
            </div>
            </div>
        </div>
      </div>
    </section>













<section class="top-personalties similar-people mt-5" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 sec--info text-center" data-aos="fade-lrft" data-aos-delay="200" data-aos-duration="1000">
        <div class="sec--title mb-0">SIMILAR PEOPLE</div>  
        <p class="mb-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>      
      </div>

      <div id="slider--similar--person">
        <div class="owl-carousel owl-theme">
           @foreach($simillarcelebrity_data as $simillercel)
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
            @if (!empty($simillercel->image) && File::exists("app/public/".$simillercel->image))
                <img src="app/public/{{$simillercel->image}}">
                @else
                <img src="assets/img/logo-dn-modified.png" alt="Image" style="height: 167px;" />
                @endif
              <p class="person--name mb-0">{{$simillercel->name}}</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            @endforeach
            <!-- <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/Rectangle.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
              <p class="person_breif text-center">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>-->
             
          </div>
      </div>
        
      </div>
    </div>
  </div>
</section>

<section class="faq" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title mb-0">FAQ's</div>        
      </div>
      <div class="col-12 mx-auto">
        <div >

      {!! $profile_ques_answer !!}
    
 

  <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> -->

</div>
      </div>
    </div>
  </div>
</section>
@include("footer")
