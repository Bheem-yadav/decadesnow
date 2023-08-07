<section class="form ">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 grey--bg mx-auto">

    <form class="form--wrap" method="GET" action="{{url('/listing')}}">
          <p class="mb-0">Enter date, event or person</p>
          <div class="all--days day">
          <!-- <label for="inputState" class="form-label">State</label> -->
          
          <select id="inputState" name="alldays"  class="form-select" value="">
            <option selected value="">All Days</option>
            @for($i=1;$i<=31;$i++)
            <option  value="{{$i}}">{{$i}}</option>
            @endfor 

          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->
          <select id="inputState" name="allmonths" class="form-select" >
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
          <select id="inputState" name="allyears" class="form-select">
            <option selected value="">All Years</option>
            @for($i=1950;$i<=2028;$i++)
            <option value="{{$i}}">{{$i}}</option>
           @endfor


          </select>
          </div>

          <div class="all--days">
          <!-- <label for="inputState" class="form-label">State</label> -->

          <select id="inputState"  name="allspecials" class="form-select">
            <option selected value="">Birthdays</option>
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
