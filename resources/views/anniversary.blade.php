@include("header")


    <section class="banner--static list-banner">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12"><img class="w-100 img-fluid" src="images/list-banner.png">
            <div class="banner--cont">
              <!-- <h1><span class="d-block-">HAPPY</span> BIRTHDAY</h1> -->
              <h1>HAPPY ANNIVERSARY</h1>
              <p class="b-date-banner">8th June 2023</p>
            </div>
        </div>
      </div>
    </section>
    <section class="form ">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 grey--bg mx-auto">
        <form class="form--wrap">
          <p class="mb-0">Enter date, event or person</p>
          <div class="all--days day">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select id="inputState" class="form-select">
            <option selected>All Days</option>
            <option>...</option>
          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select id="inputState" class="form-select">
            <option selected>All Months</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
          </select>
          </div>


          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select id="inputState" class="form-select">
            <option selected>All Years</option>
            <option>2023</option>
            <option>2022</option>
            <option>2021</option>
            <option>2020</option>
          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select id="inputState" class="form-select">
            <option selected>Birthdays</option>
            <option>Birthday</option>
            <option>Anniversary</option>
            <option>National Day</option>
          </select>
          </div>

          <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> <a href="{{url('/profile')}}" style="text-decoration:none; color:white" >Search</a></button>

          
        </form>
      </div>
    </div>
  </div>
</section>

    <section class="bread--crumb">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="breadcrumb_list list-unstyled mb-0 d-flex">
              <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/listing')}}">Anniversarys</a></li>
                  <li>View All</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

   <section class="">
     <div class="container">
       <div class="row celeb_wrap_list">
         <div class="col-lg-5 celeb-thumbnail"><img src="images/top-person-1.png"></div>
         <div class="col-lg-7 celeb_cont">
           <p class="celeb_name">ANUSKHA SHARMA</p>
           <p class="celeb_profession">Indian film director, producer, screenwriter and television host</p>
           <ul class="rating_list list-unstyled d-flex">
            <p class="text-dark mb-0">Rating:</p>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-grey.png"></a></li>
          </ul>
          <ul class=" main-info-list list-unstyled">
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>            
          </ul>
          <p>Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          <a class="more-data" href="{{url('/profile')}}">Know More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>
       </div>
       <div class="row celeb_wrap_list">
         <div class="col-lg-5 celeb-thumbnail"><img src="images/celeb-list-1.png"></div>
         <div class="col-lg-7 celeb_cont">
           <p class="celeb_name">KARAN JOHAR</p>
           <p class="celeb_profession">Indian film director, producer, screenwriter and television host</p>
           <ul class="rating_list list-unstyled d-flex">
            <p class="text-dark mb-0">Rating:</p>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-grey.png"></a></li>
          </ul>
          <ul class=" main-info-list list-unstyled">
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>            
          </ul>
          <p>Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          <a class="more-data" href="{{url('/profile')}}">Know More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>
       </div>
       <div class="row celeb_wrap_list">
         <div class="col-lg-5 celeb-thumbnail"><img src="images/celeb-list-1.png"></div>
         <div class="col-lg-7 celeb_cont">
           <p class="celeb_name">KARAN JOHAR</p>
           <p class="celeb_profession">Indian film director, producer, screenwriter and television host</p>
           <ul class="rating_list list-unstyled d-flex">
            <p class="text-dark mb-0">Rating:</p>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-grey.png"></a></li>
          </ul>
          <ul class=" main-info-list list-unstyled">
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>            
          </ul>
          <p>Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          <a class="more-data" href="{{url('/profile')}}">Know More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>
       </div>
      
     </div>
      <div class="row next-prev">
         <div class="col-12 text-center">
          <a class="previ" href="{{url('/alllisting')}}"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
          <a class="next" href="{{url('/alllisting')}}"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
       </div>
   </section>


  













<section class="top-personalties similar-people birthfday-wishes-wrap mt-5" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 sec--info text-center" data-aos="fade-lrft" data-aos-delay="200" data-aos-duration="1000">
        <p class="fs-22 text-dark ">Anniversary wishes</p>
        <div class="sec--title mb-0">What people have wished for their favorite people</div>  
        <p class=" text-dark mb-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>      
      </div>

      <div id="slider--similar--person" class="birthfday-wishes">
        <div class="owl-carousel owl-theme">
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">                
              <div class="quote_icon-stART"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="person_breif text-center mb-4">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <img src="images/testimonial-icon.png">
              <p class="person--name mb-0">Aishwarya Rai</p>
            </div>
            
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
      <div class="col-11 mx-auto">
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum</button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
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
  </div>
</div>
      </div>
    </div>
  </div>
</section>
@include("footer")
