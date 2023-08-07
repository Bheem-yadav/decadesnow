@include("header")


    <section class="banner--static list-banner">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12"><img class="w-100 img-fluid" src="images/list-banner.png">
            <div class="banner--cont">
              <!-- <h1><span class="d-block-">HAPPY</span> BIRTHDAY</h1> -->

              @if(!empty($alldays) && !empty($allmonths) && !empty($allyears) && !empty($allspecials))
              <h1>HAPPY {{$allspecials}}</h1>
              <p class="b-date-banner">{{$alldays}} {{$allmonths}} {{$allyears}} </p>
              @else 
              <h1>HAPPY {{ Request::is('anniversary') ? 'ANNIVERSARY' : 'BIRTHDAY'}} </h1>
              <p class="b-date-banner">25 july 2023 </p>
              @endif
              
            </div>
        </div>
      </div>
    </section>

    <section class="form ">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 grey--bg mx-auto">

    <form class="form--wrap" method="GET" action="{{url('/listing')}}">
          <p style="color: gray;" class="mb-0">Enter date, event or person</p>
          <div class="all--days day">
          <!-- <label for="inputState" class="form-label">State</label> -->
          
          <select style="color: gray;"  id="inputState" name="alldays"  class="form-select" value="">
            @if(!empty($alldays)){
            <option selected value="">{{$alldays}}</option>
            }
            @else{<option selected value="">All Days</option>}
            @endif
            @for($i=1;$i<=31;$i++)
            <option  value="{{$i}}">{{$i}}</option>
            @endfor 

          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select style="color: gray;" id="inputState" name="allmonths" class="form-select" >
         @php $months=["January","February","March","April","May","June","July","August","September","October","November","December"]; @endphp
         @if(!empty($allmonths)){
            <option selected value="">{{$allmonths}}</option> }
            @else{<option selected value="">All Months</option>}
            @endif
            @foreach($months as $month)
            <option value="{{$month}}">{{$month}}</option>
            @endforeach
           

          </select>
          </div>


          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select style="color: gray;" id="inputState" name="allyears" class="form-select" >
            @if(!empty($allyears)){
            <option selected value="">{{$allyears}}</option>
            }
            @else{<option selected value="">All Years</option>}
            @endif
            @for($i=1950;$i<=2028;$i++)
            <option value="{{$i}}">{{$i}}</option>
           @endfor


          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->

          <select style="color: gray;" id="inputState"  name="allspecials" class="form-select">
            @if(!empty($allspecials)){
            <option selected value="">{{$allspecials}}</option>
            }
            @else{<option selected value="">All</option>}
            @endif
            @php
             $allspecials=["Birthday","DeathAnniversary","Anniversary","NationalDay"]; 
            @endphp
            @foreach($allspecials as $special)
            <option value="{{$special}}">{{$special}}</option>
            @endforeach

            <!-- <select id="inputState"  class="form-select">
            <option selected >Birthdays</option>
            <option >birthday</option>
             <option>Anniversary</option>
            <option>National Day</option>
            <option>Death Anniversary</option> -->

          </select> 
          </div> 
          
         <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Search</button>

          
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
              <li ><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/listing')}}">Birthdays</a></li>
                  <li>View All</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

   <section class="">
     <div class="container">
      @if(!empty($list_data[0]))
        @foreach($list_data as $ld)
       <div class="row celeb_wrap_list">
         <div class="col-lg-5 celeb-thumbnail">
           
         @if (!empty($ld->image) && File::exists("app/public/".$ld->image))
                    <a href="{{$ld->id}}" ><img src="app/public/{{$ld->image}}"></a>
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:390px;" />
                                    @endif
          
        </div>
         <div class="col-lg-7 celeb_cont">
          <a style="text-decoration: none;" href="{{$ld->id}}"> <p class="celeb_name">{{ucwords($ld->name)}}</p></a>
           <!-- <p class="celeb_profession">{{$ld->excerpt}}</p> -->
           <ul class="rating_list list-unstyled d-flex">
            <p class="text-dark mb-0">Rating:</p>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-grey.png"></a></li>
          </ul>
          <?php
            $dob=explode('-',$ld->DOB)
          ?>
          <ul class=" main-info-list list-unstyled">
            <li class="d-flex"><p class="mb-0">Date of Birth:</p>
             <a style="text-decoration: none;" href="listing?alldays={{$dob[0]}}&allmonths={{$dob[1]}}&allyears={{$dob[2]}}">
             <p class="mb-0">{{$ld->DOB}}</p>
            </a> </li>
            <li class="d-flex"><p class="mb-0">Place of Birth:</p> <p class="mb-0">{{ucfirst($ld->POB)}}</p> </li>
            <li class="d-flex"><p class="mb-0">Profession:</p> <p class="mb-0">{{ucfirst($ld->profession)}}</p> </li>
            <li class="d-flex"><p class="mb-0">Anniversary:</p> <p class="mb-0">{{$ld->anniversary}}</p> </li>            
          </ul>
          @if(!empty($ld->excerpt) && $ld->excerpt!="NULL")
          <p>{{$ld->excerpt}}</p>
          @endif
          <a class="more-data" href="{{$ld->id}}">Know More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>
       </div>
        @endforeach

        @else
         <div class="row celeb_wrap_list">
             <div class="col-lg-4 celeb-thumbnail"><img src="assets/img/placeholder_image.png"></div>
             <div class="col-lg-7 celeb_cont">
               <p class="celeb_name">Oops !!</p>
               <p style="margin-top: 50px" class="celeb_profession">No matching data found for today!</p>
             </div>
         </div>
        
           @if(!empty($topten_data))
           @foreach($topten_data as $ld)
       <div class="row celeb_wrap_list">
         <div class="col-lg-5 celeb-thumbnail">
           
         @if (!empty($ld->image) && File::exists("app/public/".$ld->image))
                    <a href="{{$ld->id}}" ><img src="app/public/{{$ld->image}}"></a>
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:390px;" />
                                    @endif
          
        </div>
         <div class="col-lg-7 celeb_cont">
           <p class="celeb_name">{{ucwords($ld->name)}}</p>
          
           <ul class="rating_list list-unstyled d-flex">
            <p class="text-dark mb-0">Rating:</p>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-filled.png"></a></li>
            <li><a href="#"><img src="images/star-grey.png"></a></li>
          </ul>
          <ul class=" main-info-list list-unstyled">
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">{{$ld->DOB}}</p> </li>
            <li class="d-flex"><p class="mb-0">Place of Birth:</p> <p class="mb-0">{{ucfirst($ld->POB)}}</p> </li>
            <li class="d-flex"><p class="mb-0">Profession:</p> <p class="mb-0">{{ucfirst($ld->profession)}}</p> </li>
            <li class="d-flex"><p class="mb-0">Date of Birth:</p> <p class="mb-0">May 25, 1972</p> </li>            
          </ul>
            <p>
                @if(!empty($ld->excerpt) && $ld->excerpt !="NULL") 
                    {{$ld->excerpt}}
                @endif
            </p>
          <a class="more-data" href="{{$ld->id}}">Know More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>
       </div>
        @endforeach
       @endif
         
        @endif
       <!-- <div class="row celeb_wrap_list">
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
        <p class="fs-22 text-dark ">Birthday wishes</p>
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
</div> -->
      </div>
    </div>
  </div>
</section>
@include("footer")