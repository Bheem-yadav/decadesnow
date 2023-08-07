@include("header")


<section class="home--banner">
  <div class="container-fluid px-0">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="{{url('/listing')}}carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="{{url('/listing')}}carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="{{url('/listing')}}carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/banner-1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5> -->
        <p>All about birthdays, anniversaries, special days and events of your favourite people</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/banner-1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5> -->
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner-1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5> -->
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="{{url('/listing')}}carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="{{url('/listing')}}carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</section>

<section class="form ">
  <div class="container">
    <div class="row">
      <!-- <div class="col-lg-10 grey--bg mx-auto"> -->
      <div class="col-lg-11 grey--bg mx-auto">
    <form class="form--wrap" method="GET" action="{{url('/listing')}}">
          <p style="color: gray;" class="mb-0">Enter date, event or person</p>
          <div class="all--days day">
          <!-- <label for="inputState" class="form-label">State</label> -->
          
          <select style="color: gray;" id="inputState" name="alldays"  class="form-select" value="">
            <option selected value="">All Days</option>
            @for($i=1;$i<=31;$i++)
            <option  value="{{$i}}">{{$i}}</option>
            @endfor 

          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select style="color: gray;" id="inputState" name="allmonths" class="form-select" >
         @php $months=["January","February","March","April","May","June","July","August","September","October","November","December"]; @endphp
            <option selected value="">All Months</option>
            @foreach($months as $month)
            <option value="{{$month}}">{{$month}}</option>
            @endforeach
            <!-- <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option> -->

          </select>
          </div>


          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select style="color: gray;" id="inputState" name="allyears" class="form-select">
            <option selected value="">All Years</option>
            @for($i=1950;$i<=2028;$i++)
            <option value="{{$i}}">{{$i}}</option>
           @endfor


          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->

          <select style="color: gray; " id="inputState"  name="allspecials" class="form-select">
            <option style="margin-left: 50px;"selected value="">  All </option>
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


<section class="today ">
  <div class="container">

    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">TODAY</div>
        <p class="mb-0">Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
      </div>
@if(!empty($actor_data[0]))
       <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday  Actors</h2>
            <a href="{{url('/alllisting?celebrity_type=actor')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
        @if(!empty($actor_data[0]))
              @foreach($actor_data as $actr)
                 
              <div class="col-6 text-center mb-4">
                <a href="{{$actr->id}}">
                @if (!empty($actr->image) && File::exists("app/public/".$actr->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$actr->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                <p class="mb-0 pt-2 thmbnl--name">{{$actr->name}}</p>
               
              </a>
              </div>
              @endforeach
             
             @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
             @endif

            </div>
          </div>
        </div>
      </div>
@endif


@if(!empty($actress_data[0]))
      <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday  Actress</h2>
            <a href="{{url('/alllisting?celebrity_type=actress')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($actress_data[0]))
              @foreach($actress_data as $actrs)
              <div class="col-6 text-center mb-4">
                <a href="{{$actrs->id}}">
                @if (!empty($actrs->image) && File::exists("app/public/".$actrs->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$actrs->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                
                <p class="mb-0 pt-2 thmbnl--name">{{$actrs->name}}</p>
              </a>
            </div>
            @endforeach

            @else
            <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
             @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($athletes_data[0]))
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday  Athletes</h2>
            <a href="{{url('/alllisting?celebrity_type=athletes')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($athletes_data[0]))
              @foreach($athletes_data as $athd)
              <div class="col-6 text-center mb-4">
                <a href="{{$athd->id}}">
                @if (!empty($athd->image) && File::exists("app/public/".$athd->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$athd->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                
                <p class="mb-0 pt-2 thmbnl--name">{{$athd->name}}</p>
              </a>
              </div>
              @endforeach

               @else
               <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
              @endif
            </div>
          </div>
        </div>
      </div>
  @endif

  @if(!empty($politician_data[0])) 
       <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2> Birthday  Politician</h2>
            <a href="{{url('/alllisting?celebrity_type=politician')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($politician_data[0]))
              @foreach($politician_data as $politician)
              <div class="col-6 text-center mb-4">
                <a href="{{$politician->id}}">
                @if (!empty($politician->image) && File::exists("app/public/".$politician->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$politician->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                
                <p class="mb-0 pt-2 thmbnl--name">{{$politician->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
             @endif

            </div>
          </div>
        </div>
      </div>
@endif


@if(!empty($deathanniversary_data[0]))
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Death  Anniversary</h2>
            <a href="{{url('/alllisting?celebrity_type=deathanniversary')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
              @if(!empty($deathanniversary_data[0]))
              @foreach($deathanniversary_data as $death)
              <div class="col-6 text-center mb-4">
                <a href="{{$death->id}}">
                   @if (!empty($death->image) && File::exists("app/public/".$death->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$death->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                <p class="mb-0 pt-2 thmbnl--name">{{$death->name}}</p>
              </a>
            </div>
            @endforeach
            @else
            <div class="col-6 text-center mb-4">
                <a href="{{url('/anniversary')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/anniversary')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/anniversary')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/anniversary')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
              @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($nationalday_data[0]))
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>National  Day</h2>
            <a href="{{url('/nationaldaylisting?celebrity_type=nationalday')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
              @if(!empty($nationalday_data[0]))
              @foreach($nationalday_data as $national)
              <div class="col-6 text-center mb-4">
                <a href="{{$national->id}}">
                @if (!empty($national->image) && File::exists("app/public/".$national->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$national->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                <p class="mb-0 pt-2 thmbnl--name">{{$national->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>

             @endif

            </div>
          </div>
        </div>
      </div>
@endif

    </div>
  </div>
</section>


<section class="today tomorrow">
  <div class="container">

    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">TOMORROW</div>
        <p class="mb-0" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
      </div>

@if(!empty($actortom_data[0]))
      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Actors</h2>
            <a href="{{url('/alllisting?celebrity_type=Actor')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
          @if(!empty($actortom_data[0]))
            @foreach($actortom_data as $actr)
              <div class="col-6 text-center mb-4">
                <a href="{{$actr->id}}">
                @if (!empty($actr->image) && File::exists("app/public/".$actr->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$actr->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
               
                <p class="mb-0 pt-2 thmbnl--name">{{$actr->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/listing')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/listing')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/listing')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/listing')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>

              @endif
              
             
            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($actresstom_data[0]))
      <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Actresses</h2>
            <a href="{{url('/alllisting?celebrity_type=Actress')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
           @if(!empty($actresstom_data[0]))   
            @foreach($actresstom_data as $actress)
              <div class="col-6 text-center mb-4">
                <a href="{{$actress->id}}">
                @if (!empty($actress->image) && File::exists("app/public/".$actress->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$actress->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
              
                <p class="mb-0 pt-2 thmbnl--name">{{$actress->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($athletes_data[0]))
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Athletes</h2>
            <a href="{{url('/alllisting?celebrity_type=Athletes')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
          @if(!empty($athletes_data[0]))
            @foreach($athletestom_data as $athd)
              <div class="col-6 text-center mb-4">
                <a href="{{$athd->id}}">
                @if (!empty($athd->image) && File::exists("app/public/".$athd->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$athd->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                <!-- <img class="w-100 img-fluid" src="app/public/{{$athd->image}}">  -->
                <p class="mb-0 pt-2 thmbnl--name">{{$athd->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif

              <!-- <div class="col-6 text-center mb-4">
                <a href="{{url('/listing')}}">
                <img class="w-100 img-fluid" src="images/thnl-1.png"> 
                <p class="mb-0 pt-2 thmbnl--name">Lorem Ipsum</p></div>
              <div class="col-6 text-center">
                <a href="{{url('/listing')}}">
                <img class="w-100 img-fluid" src="images/thnl-1.png"> 
                <p class="mb-0 pt-2 thmbnl--name">Lorem Ipsum</p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/listing')}}">
                <img class="w-100 img-fluid" src="images/thnl-1.png"> 
                <p class="mb-0 pt-2 thmbnl--name">Lorem Ipsum</p>
              </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($politician_data[0]))
       <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Politician</h2>
            <a href="{{url('/alllisting?celebrity_type=Politician')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
           @if(!empty($politician_data[0]))
            @foreach($politiciantom_data as $politician)
              <div class="col-6 text-center mb-4">
                <a href="{{$politician->id}}">
                @if (!empty($politician->image) && File::exists("app/public/".$politician->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$politician->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                <img class="w-100 img-fluid" src="app/public/{{$politician->image}}"> 
                <p class="mb-0 pt-2 thmbnl--name">{{$politician->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($deathanniversarytom_data[0]))
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Death Anniversary</h2>
            <a href="{{url('/alllisting?celebrity_type=Deathanniversary')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($deathanniversarytom_data[0]))
            @foreach($deathanniversarytom_data as $death)
              <div class="col-6 text-center mb-4">
                <a href="{{$death->id}}">
                @if (!empty($death->image) && File::exists("app/public/".$death->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$death->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                 
                <p class="mb-0 pt-2 thmbnl--name">{{$death->name}}</p>
              </a>
            </div>
            @endforeach
            
            @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif
            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($nationaldaytom_data[0]))
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>National Day</h2>
            <a href="{{url('/alllisting?celebrity_type=Nationalday')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($nationaldaytom_data[0]))
            @foreach($nationaldaytom_data as $national)
              <div class="col-6 text-center mb-4">
                <a href="{{$national->id}}">
                @if (!empty($national->image) && File::exists("app/public/".$national->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$national->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                 
                <p class="mb-0 pt-2 thmbnl--name">{{$national->name}}</p>
              </a>
              </div>
              @endforeach
               @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>

             @endif

            </div>
          </div>
        </div>
      </div>
@endif

    </div>
  </div>
</section>

<section class="today this--month">
  <div class="container">

    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">THIS MONTH</div>
        <p class="mb-0" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
      </div>

@if(!empty($actormonth_data[0]))
     <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Actors</h2>
            <a href="{{url('/alllisting?celebrity_type=ACTOR')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($actormonth_data[0]))
            @foreach($actormonth_data as $actr)
              <div class="col-6 text-center mb-4">
                <a href="{{$actr->id}}">
                @if (!empty($actr->image) && File::exists("app/public/".$actr->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$actr->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
               
                <p class="mb-0 pt-2 thmbnl--name">{{$actr->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($actressmonth_data[0]))
      <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Actresses</h2>
            <a href="{{url('/alllisting?celebrity_type=ACTRESS')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($actressmonth_data[0]))
            @foreach($actressmonth_data as $actress)
              <div class="col-6 text-center mb-4">
                <a href="{{$actress->id}}">
                @if (!empty($actress->image) && File::exists("app/public/".$actress->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$actress->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
               
                <p class="mb-0 pt-2 thmbnl--name">{{$actress->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif
            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($athletesmonth_data[0]))
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Athletes</h2>
            <a href="{{url('/alllisting?celebrity_type=ATHLETES')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($athletesmonth_data[0]))
            @foreach($athletesmonth_data as $athd)
              <div class="col-6 text-center mb-4">
                <a href="{{$athd->id}}">
                @if (!empty($athd->image) && File::exists("app/public/".$athd->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$athd->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                <!-- <img class="w-100 img-fluid" src="app/public/{{$athd->image}}">  -->
                <p class="mb-0 pt-2 thmbnl--name">{{$athd->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($politicianmonth_data[0]))
       <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Birthday Politician</h2>
            <a href="{{url('/alllisting?celebrity_type=POLITICIAN')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
            @if(!empty($politicianmonth_data[0]))
            @foreach($politicianmonth_data as $politician)
              <div class="col-6 text-center mb-4">
                <a href="{{$politician->id}}">
                @if (!empty($politician->image) && File::exists("app/public/".$politician->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$politician->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                
                <p class="mb-0 pt-2 thmbnl--name">{{$politician->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif

            </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($deathanniversarymonth_data[0]))
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2>Death Anniversary</h2>
            <a href="{{url('/alllisting?celebrity_type=DeathAnniversary')}}">VIEW ALL</a>            
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
              @if(!empty($deathanniversarymonth_data[0]))
               @foreach($deathanniversarymonth_data as $death)
              <div class="col-6 text-center mb-4">
                <a href="{{url('/alllisting?celebrity_type=DeathAnniversary')}}">
                @if (!empty($death->image) && File::exists("app/public/".$death->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$death->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                 
                <p class="mb-0 pt-2 thmbnl--name">{{$death->name}}</p>
              </a>
            </div>
            @endforeach
            @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/birthday')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>
           @endif
          
          </div>
          </div>
        </div>
      </div>
@endif

@if(!empty($nationaldaymonth_data[0]))
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="inner--box--birthday">
          <div class="box--title--wrap d-flex align-items-center justify-content-between">
            <h2> National Day</h2>
            <!-- <a href="{{url('/alllisting?celebrity_type=NationalDay')}}">VIEW ALL</a>             -->
            <a href="{{url('/alllisting?celebrity_type=NationalDay')}}">VIEW ALL</a>      
          </div>
          <div class="thumbnail--wrap">
            <div class="row">
              @if(!empty($nationaldaymonth_data[0]))
              @foreach($nationaldaymonth_data as $national)
              <div class="col-6 text-center mb-4">
                <a href="national-day/{{str_replace(' ','-',strtolower($national->name))}}">
                @if (!empty($national->image) && File::exists("app/public/".$national->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$national->image}}">
                                    @else 
                                        <img src="assets/img/logo-dn-modified.png" alt="Image" style="width:140px;" />
                                    @endif
                 
                <p class="mb-0 pt-2 thmbnl--name">{{$national->name}}</p>
              </a>
              </div>
              @endforeach
              @else
              <div class="col-6 text-center mb-4">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center mb-4">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
            </div>
              <div class="col-6 text-center">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/national_day')}}">
                <img class="w-55 img-fluid" src="assets/img/placeholder_image.png"> 
                <p class="mb-0 pt-2 thmbnl--name"></p>
              </a>
             </div>

             @endif

              <!-- <div class="col-6 text-center mb-4">
                <a href="{{url('/listing')}}">
                <img class="w-100 img-fluid" src="images/thnl-1.png"> 
                <p class="mb-0 pt-2 thmbnl--name">Lorem Ipsum</p></div>
              <div class="col-6 text-center">
                <a href="{{url('/listing')}}">
                <img class="w-100 img-fluid" src="images/thnl-1.png"> 
                <p class="mb-0 pt-2 thmbnl--name">Lorem Ipsum</p>
              </a>
              </div>
              <div class="col-6 text-center">
                <a href="{{url('/listing')}}">
                <img class="w-100 img-fluid" src="images/thnl-1.png"> 
                <p class="mb-0 pt-2 thmbnl--name">Lorem Ipsum</p>
              </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
@endif

    </div>
  </div>
</section>

<section class="recnt_news" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title mb-0">Recent News</div>        
      </div>
      <div class="col-lg-4 first-col">
       
      <div class="img-top"><img class="w-100 img-fluid" src="app/public/{{$recentnews[0]->image}}">
          <div class="img--info">
            <h3 class="img--heading-news">{{$recentnews[0]->title}}</h3>
            <p class="mb-0">{!!$recentnews[0]->description!!} </p>
          </div>
      </div>

        <div class="img-botm"><img class="w-100 img-fluid" src="app/public/{{$recentnews[1]->image}}">
          <div class="img--info">
            <h3 class="img--heading-news">{{$recentnews[1]->title}}</h3>
            <p class="mb-0">{!!$recentnews[1]->description!!}</p>
          </div>
      </div>

      </div>

    <div class="col-lg-4 second-col">
        <div class="second-col--inner">
        <img class="w-100 img-fluid" src="app/public/{{$recentnews[2]->image}}">
        <div class="img--info">
          <h3 class="img--heading-news">{{$recentnews[2]->title}}</h3>
          <p class="mb-0">{!!$recentnews[2]->description!!}</p>
        </div>
        </div>
    </div>

      <div class="col-lg-4 third-col">

        <div class="img-top">
          <img class="w-100 img-fluid" src="app/public/{{$recentnews[3]->image}}">
          <div class="img--info">
            <h3 class="img--heading-news">{{$recentnews[3]->title}}</h3>
            <p class="mb-0">{!!$recentnews[3]->description!!}</p>
          </div>
      </div>

        <div class="img-botm">
          <img class="w-100 img-fluid" src="app/public/{{$recentnews[4]->image}}">
          <div class="img--info">
            <h3 class="img--heading-news">{{$recentnews[4]->title}}</h3>
            <p class="mb-0">{!!$recentnews[4]->description!!}</p>
          </div>
      </div>

      </div>
    </div>
  </div>
</section> 

<section class="member--speakes">
  <div class="container">
    <div class="row">
      <div class="member--bg--img sec--info">
        <img class="w-100 img-fluid" src="images/members_img.png">
        <div class="sec--title mb-0">From our members</div>
      </div>
      <div class="slide--speakers">
        <div class="owl-carousel owl-theme">
            <div class="item">
              <span class="quote--start-img"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              <p class="mb-0 speaker--quote">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="speaker--img">
                <img src="images/member_thumb.png">
              </div>
              <p class="speaker--name mb-0">Lorem Ipsum</p>
            </div>
            <div class="item">
              <span class="quote--start-img"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              <p class="mb-0 speaker--quote">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="speaker--img">
                <img src="images/member_thumb.png">
              </div>
              <p class="speaker--name mb-0">Lorem Ipsum</p>
            </div>
            <div class="item">
              <span class="quote--start-img"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              <p class="mb-0 speaker--quote">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="speaker--img">
                <img src="images/member_thumb.png">
              </div>
              <p class="speaker--name mb-0">Lorem Ipsum</p>
            </div>
            <div class="item">
              <span class="quote--start-img"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              <p class="mb-0 speaker--quote">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="speaker--img">
                <img src="images/member_thumb.png">
              </div>
              <p class="speaker--name mb-0">Lorem Ipsum</p>
            </div>
            <div class="item">
              <span class="quote--start-img"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              <p class="mb-0 speaker--quote">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="speaker--img">
                <img src="images/member_thumb.png">
              </div>
              <p class="speaker--name mb-0">Lorem Ipsum</p>
            </div>
            <div class="item">
              <span class="quote--start-img"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              <p class="mb-0 speaker--quote">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="speaker--img">
                <img src="images/member_thumb.png">
              </div>
              <p class="speaker--name mb-0">Lorem Ipsum</p>
            </div>
            
          </div>
      </div>
    </div>
  </div>
</section>

<section class="top-personalties" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 sec--info text-center" data-aos="fade-lrft" data-aos-delay="200" data-aos-duration="1000">
        <div class="sec--title mb-0">top personalities: trending</div>        
      </div>
      <div id="slider--top--person">
        <div class="owl-carousel owl-theme">
          @foreach($toptrending as $top)
            <div  style="max-height: 350px" class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
            <a href="{{$top->id}}"> 
            @if (!empty($top->image) && File::exists("app/public/".$top->image))
                                        <img class="w-100 img-fluid" src="app/public/{{$top->image}}">
                                    @else 
                                      <img src="assets/img/logo-dn-modified.png" alt="Image" style="height:140px;" /> 
                                    @endif
                                    </a>
                <!-- <img src="app/public/{{$top->image}}"> -->
              <p class="top_person--name mb-0">{{$top->name}}</p>
            </div>
            @endforeach

            <!-- <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">February</p>
            </div>

            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">MARCH</p>
            </div>

            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">April</p>
            </div>

            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">May</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">June</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">July</p>
            </div>
            <div class="item text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="3000">
                <img src="images/top-person-1.png">
              <p class="top_person--name mb-0">august</p>
            </div> -->

            
          </div>
      </div>
        
      </div>
    </div>
  </div>
</section>

<!-- <section class="faq" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title mb-0">FAQ's</div>        
      </div>
      <div class="col-11 mx-auto">
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="{{url('/listing')}}collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum</button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="{{url('/listing')}}accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{url('/listing')}}collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="{{url('/listing')}}accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{url('/listing')}}collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="{{url('/listing')}}accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section> -->

<section class="today this--month">
  <div class="container">

    <div class="row">
      <div class="col-12 sec--info text-center">
        <div class="sec--title" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">{{$pages_data->title}}</div>
        <p class="mb-0" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">{!! $home_ques_answer !!}</p></br>
       
      </div>

    
    </div>
  </div>
</section> 


@include("footer");
