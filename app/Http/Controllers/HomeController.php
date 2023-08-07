<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\page;
// use Illuminate\Support\Str;


use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    function index(){
    // ---------------faq section
    $pages_data=DB::table('pages')->where('title',"FAQ'S")->first();
    $ques_answer = explode('%',$pages_data->body);
    // print_r($ques_answer); die;
    $home_ques_answer=$ques_answer[0];
    // print_r($home_ques_answer); die;



//  like query start------------
  // $dt = Carbon::now();
  //  $dt=  Carbon::tomorrow();
  // $var = Carbon::now('Asia/Kolkata'); return $time = $var->toTimeString(); die;
  $dt = Carbon::now('Asia/Kolkata');
   $today=$dt->format('j-F');
// dd($today);
   $tomorrowdate=  Carbon::tomorrow();
   $tomorrow=$tomorrowdate->format('j-F');
// dd($tomorrow);
   $month=$dt->format('F-Y');
  //  $month=$dt->format('l jS \of F Y h:i:s A');
  // $month=$dt->toFormattedDateString();
  //  dd($month);
  $actor_data=DB::table('posts')->where('DOB','like',"$today%")
  ->where('profession','=','Actor')->get();
    // dd($actor_data[0]);
  $actress_data=DB::table('posts')->where('DOB','like',"$today%")
  ->where('profession','=','Actress')->get();

  $athletes_data=DB::table('posts')->where('DOB','like',"$today%")
  ->where('profession','=','Athletes')->get();
  // dd($athletes_data);
 $politician_data =DB::table('posts')->where('DOB','like',"$today%")
  ->where('profession','=','Politician')->get();
  // dd($politician_data);
  $deathanniversary_data =DB::table('posts')->where('death','like', "$today%")->get();
  $nationalday_data=DB::table('posts')->where('DOB','like' ,"$today%")
  ->where('profession','=','national day')->get();
 
  
// ------------tomorrow data --------


$actortom_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
->where('profession','=','Actor')->get();
$actresstom_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
->where('profession','=','Actress')->get();
// dd($actress_data);
$athletestom_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
->where('profession','=','Athletes')->get();
// dd($athletes_data);
$politiciantom_data =DB::table('posts')->where('DOB','like',"$tomorrow%")
->where('profession','=','Politician')->get();
// dd($politician_data);
$deathanniversarytom_data =DB::table('posts')->where('death','like', "$tomorrow%")->get();
$nationaldaytom_data=DB::table('posts')->where('DOB','like' ,"$tomorrow%")
->where('profession','=','national day')->get();

//------------this month------

$actormonth_data=DB::table('posts')->where('DOB','like',"%$month%")
->where('profession','=','Actor')->get();
$actressmonth_data=DB::table('posts')->where('DOB','like',"%$month%")
->where('profession','=','Actress')->get();
// dd($actress_data);
$athletesmonth_data=DB::table('posts')->where('DOB','like',"%$month%")
->where('profession','=','Athletes')->get();
// dd($athletes_data);
$politicianmonth_data =DB::table('posts')->where('DOB','like',"%$month%")
->where('profession','=','Politician')->get();
// dd($politician_data);
$deathanniversarymonth_data =DB::table('posts')->where('death','like', "%$month%")->get();
$nationaldaymonth_data=DB::table('posts')->where('DOB','like' ,"%$month%")
->where('profession','=','national day')->get();

//--------- top personalities------

$toptrendingactor=DB::table('posts')->where('DOB','like' ,"%$month%")
->where('profession','like', 'Actor')->orwhere('DOB','like' ,"%$month%")
->where('profession','like', 'Actress')->orwhere('DOB','like' ,"%$month%")
->where('profession','like', 'Athletes')->orwhere('DOB','like' ,"%$month%")
->where('profession','like', 'Politician')->skip(0)->take(10)->get();

//  $actobj=$toptrendingactor->all();
//  $actrobj=$toptrendingactress->all();
//  $athobj=$toptrendingathletes->all();
//  $polobj=$toptrendingpolitician->all();
// //  print_r($rtr); die;
// // print_r($toptrendingactor); die;
// $toptrending= array_merge($actobj, $actrobj,$athobj,$polobj);
// // dd($toptrending);
$toptrending = $toptrendingactor->all();

//------------ Recent news-------------
$recent_data=DB::table('blogsposts')->orderBy('id', 'DESC')->get();
// $recentnews=get_object_vars($recent_data);
// echo $recentnews['title']; die;
// dd($recentnews);

$recentnews=$recent_data->all();
//$recentnews=$saru;
// $recentnews=get_object_vars($recent);

//  echo $recentnews; die;
// print_r($recentnews); die;
// echo $saru ; die;
    // print_r($saru); die;
// dd($saru);
// dd($recentnews);
return view("index",compact("actor_data","actress_data","athletes_data","politician_data","deathanniversary_data","pages_data","home_ques_answer","nationalday_data","actortom_data","actresstom_data","athletestom_data","politiciantom_data","deathanniversarytom_data","nationaldaytom_data","actormonth_data","actressmonth_data","athletesmonth_data","politicianmonth_data","deathanniversarymonth_data","nationaldaymonth_data","toptrending","recentnews"));
}


// ------------------listing page start---------------------------------//
  //  function listing(Request $request) {
  //     $alldays=$request['alldays'] ?? "";
  //     $allmonths=$request['allmonths'] ?? "";
  //     $allyears=$request['allyears'] ?? "";
  //       $search=$alldays.'-'.$allmonths.'-'.$allyears;
  //     // dd($search);
  //     if(!empty($alldays)  && !empty($allmonths) && !empty($allyears) ){
  //        $list_data=DB::table('posts')->where('DOB','=' ,$search)
  //       ->orwhere('death','=',$search)
  //        ->get();
  //     }
  //     else{
  //     $list_data=DB::table('posts')->get();
  //     // dd($list_data);
  //     }
  //   return view("listing",compact("list_data"));
  //  }

  //  -----------start for search  filter --------------------//

//   function listing(Request $request) {
//     $alldays=$request['alldays'] ?? "";
//     $allmonths=$request['allmonths'] ?? "";
//     $allyears=$request['allyears'] ?? "";
//     $allspecials=$request['allspecials'] ?? "";
//     $commondate=$alldays.'-'.$allmonths.'-'.$allyears;
//     $search=$alldays.'-'.$allmonths.'-'.$allyears.' '.$allspecials;
//     // dd($search);
//     if(!empty($alldays)  && !empty($allmonths) && !empty($allyears) && !empty($allspecials)){
//       if($allspecials=="Birthday"){
//         // dd($allspecials);
//        $list_data=DB::table('posts')->where('DOB','=' ,$commondate)->get();
//       //  dd($list_data);
//       }
//       if($allspecials=="DeathAnniversary"){
//         $list_data=DB::table('posts')->where('death','=' ,$commondate)->get();
//       }
//       if($allspecials=="Anniversary"){
//         $list_data=DB::table('posts')->where('anniversary','=' ,$commondate)->get();
//       }
//       // dd($list_data);
//     // if(!empty($request)){
      
//     //   $list_data=DB::table('posts')->wheredate('DOB',$request)->get();
    

//     }
//     else{
//     $list_data=DB::table('posts')->get();
//     // dd($list_data);
//     }
//   return view("listing",compact("list_data"));
//  }

// like start
function people(){
  $dt = Carbon::now('Asia/Kolkata');
  $month=$dt->format('F-Y');

  $peopletop_data=DB::table('posts')->where('DOB','like' ,"%$month%")->where('profession','like', 'Actor')
->orwhere('DOB','like' ,"%$month%")->where('profession','like', 'Actress')
->orwhere('DOB','like' ,"%$month%")->where('profession','like', 'Athletes')
->orwhere('DOB','like' ,"%$month%")->where('profession','like', 'Politician')
->orwhere('anniversary','like' ,"%$month%")->skip(0)->take(30)->get();
 
//   $toptrendingactor=DB::table('posts')->where('DOB','like' ,"%$month%")
// ->where('profession','like', 'Actor')->get();
// $toptrendingactress=DB::table('posts')->where('DOB','like' ,"%$month%")
// ->where('profession','like', 'Actress')->get();
// $toptrendingathletes=DB::table('posts')->where('DOB','like' ,"%$month%")
// ->where('profession','like', 'Athletes')->get();
// $toptrendingpolitician=DB::table('posts')->where('DOB','like' ,"%$month%")
// ->where('profession','like', 'Politician')->get();
//  $actobj=$toptrendingactor->all();
//  $actrobj=$toptrendingactress->all();
//  $athobj=$toptrendingathletes->all();
//  $polobj=$toptrendingpolitician->all();
// //  print_r($rtr); die;
// // print_r($toptrendingactor); die;
// $list_data= array_merge($actobj, $actrobj,$athobj,$polobj);
$list_data=$peopletop_data->all();

  return view("listing",compact("list_data"));
}

function listing(Request $request) {
  // dd($_GET);
  $dt = Carbon::now('Asia/Kolkata');
       $today=$dt->format('j-F');
      // $today=$dt->format('j M Y');
      // dd($today);
      $day=$dt->format('j');
      $monthonly=$dt->format('F');
      $yearonly=$dt->format('Y');
      // dd($yearonly);
       $month=$dt->format('F-Y');
       $year=$dt->format('Y');

  $alldays=$request['alldays'] ?? "";
  // print_r($alldays); die;
  $allmonths=$request['allmonths'] ?? "";
  $allyears=$request['allyears'] ?? "";
  $allspecials=$request['allspecials'] ?? "";
  // dd($allspecials);
 
  $commondate=$alldays.'-'.$allmonths ;
// $query=DB::table('posts');
// if(!empty($alldays)){
//   $query.= where('DOB','like' ,"$alldays%")->where('profession','like', 'Actor')
//   ->orwhere('DOB','like' ,"$alldays%")->where('profession','like', 'Actress')
//   ->orwhere('DOB','like' ,"$alldays%")->where('profession','like', 'Athletes')
//   ->orwhere('DOB','like' ,"$alldays%")->where('profession','like', 'Politician')
//   ->orwhere('anniversary','like' ,"$alldays%");
  
// }
// dd($query);
  // dd($commondate);
  $daymonthyear=$alldays.'-'.$allmonths.'-'.$allyears;
  // dd($daymonthyear);
  $search=$alldays.'-'.$allmonths.'-'.$allyears.' '.$allspecials;
  // dd($search);
  if(!empty($alldays)  && !empty($allmonths) &&  !empty($allspecials)){
    if($allspecials=="Birthday"){
      // dd($allspecials);
     $list_data=DB::table('posts')->where('DOB','like' ,"$commondate%")->get();
    //  dd($list_data);
    }
    if($allspecials=="DeathAnniversary"){
      $list_data=DB::table('posts')->where('death','like' ,"$commondate%")->get();
    }
    if($allspecials=="Anniversary"){
      $list_data=DB::table('posts')->where('anniversary','like' ,"$commondate%")->get();
    }
    if($allspecials=="NationalDay"){
      $list_data=DB::table('posts')->where('DOB','like' ,"$commondate%")
      ->where('profession','=','national day')->get();
      return view("nationalday",compact("list_data","alldays","allmonths","allyears","allspecials",));
//  dd($list_data);
    }
   
  }

else{
    $list_data=DB::table('posts')->where('profession','like', 'Actor')
    ->orwhere('profession','like', 'Actress')->orwhere('profession','like', 'Athletes')
    ->orwhere('profession','like', 'Politician')->skip(0)->take(50)->get();

    if(!empty($alldays)){
      $list_data=DB::table('posts')->where('DOB','like' ,"$alldays%")->where('profession','like', 'Actor')
      ->orwhere('DOB','like' ,"$alldays%")->where('profession','like', 'Actress')
      ->orwhere('DOB','like' ,"$alldays%")->where('profession','like', 'Athletes')
      ->orwhere('DOB','like' ,"$alldays%")->where('profession','like', 'Politician')
      ->orwhere('anniversary','like' ,"$alldays%")->skip(0)->take(20)->get();
    }

    if(!empty($allmonths)){
      $list_data=DB::table('posts')->where('DOB','like' ,"%$allmonths%")->where('profession','like', 'Actor')
      ->orwhere('DOB','like' ,"%$allmonths%")->where('profession','like', 'Actress')
      ->orwhere('DOB','like' ,"%$allmonths%")->where('profession','like', 'Athletes')
      ->orwhere('DOB','like' ,"%$allmonths%")->where('profession','like', 'Politician')
      ->orwhere('anniversary','like' ,"%$allmonths%")->skip(0)->take(20)->get();
    }

    if(!empty($allyears)){
      $list_data=DB::table('posts')->where('DOB','like' ,"%$allyears%")->where('profession','like', 'Actor')
      ->orwhere('DOB','like' ,"%$allyears%")->where('profession','like', 'Actress')
      ->orwhere('DOB','like' ,"%$allyears%")->where('profession','like', 'Athletes')
      ->orwhere('DOB','like' ,"%$allyears%")->where('profession','like', 'Politician')
      ->orwhere('anniversary','like' ,"%$allyears%")->skip(0)->take(20)->get();
    }

    // if(!empty($daymonthyear)){
    //   $list_data=DB::table('posts')->where('DOB','like' ,"%$daymonthyear%")->where('profession','like', 'Actor')
    //   ->orwhere('DOB','like' ,"%$daymonthyear%")->where('profession','like', 'Actress')
    //   ->orwhere('DOB','like' ,"%$daymonthyear%")->where('profession','like', 'Athletes')
    //   ->orwhere('DOB','like' ,"%$daymonthyear%")->where('profession','like', 'Politician')
    //   ->orwhere('anniversary','like' ,"%$daymonthyear%")->skip(0)->take(20)->get();
    // }

    if(!empty($allspecials)){
      if($allspecials=="Birthday"){
        $list_data=DB::table('posts')->where('DOB','like' ,"%$year%")->where('profession','like', 'Actor')
        ->orwhere('DOB','like' ,"%$year%")->where('profession','like', 'Actress')
        ->orwhere('DOB','like' ,"%$year%")->where('profession','like', 'Athletes')
        ->orwhere('DOB','like' ,"%$year%")->where('profession','like', 'Politician')->skip(0)->take(9)->get();
      }
        if($allspecials=="Anniversary"){
          $list_data=DB::table('posts')->where('anniversary','like' ,"%$year%")->skip(0)->take(9)->get();
        } 
        if($allspecials=="DeathAnniversary"){
          $list_data=DB::table('posts')->where('death','like' ,"%$year%")->where('profession','like', 'Actor')
          ->orwhere('death','like' ,"%$year%")->where('profession','like', 'Actress')
          ->orwhere('death','like' ,"%$year%")->where('profession','like', 'Athletes')
          ->orwhere('death','like' ,"%$year%")->where('profession','like', 'Politician')->skip(0)->take(9)->get();
        } 
        if($allspecials=="NationalDay"){
          $list_data=DB::table('posts')->where('profession','=','national day')->skip(0)->take(9)->get();
          return view("nationalday",compact("list_data","alldays","allmonths","allyears","allspecials",));
        } 
    }
    
  // dd($list_data);
  }
return view("listing",compact("list_data","alldays","allmonths","allyears","allspecials",));
}


  // ------------end listing page 
   
   
     function alllisting(Request $request){
      // dd($type);
      // $celebrity=$type ;
      
      $celebrity=$request['celebrity_type'] ?? "";
      
    // dd($celebrity);
      $dt = Carbon::now('Asia/Kolkata');
       $today=$dt->format('j-F');
       $tomorrowdate=  Carbon::tomorrow();
        $tomorrow= $tomorrowdate->format('j-F');
        $month=$dt->format('F-Y');
      // dd($month);
      if($celebrity=="actor")
      {
      $list_data=DB::table('posts')->where('DOB','like',"$today%")
  ->where('profession','=','Actor')->get();
          // dd($list_data);
      }
      else if($celebrity=="Actor"){
        $list_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
    ->where('profession','=','Actor')->get();
            // dd($list_data);
        }
        else if($celebrity=="ACTOR"){
          $list_data=DB::table('posts')->where('DOB','like',"%$month%")
      ->where('profession','=','Actor')->get();
              // dd($list_data);
          }
      else if($celebrity=="actress"){
        $list_data=DB::table('posts')->where('DOB','like',"$today%")
    ->where('profession','=','Actress')->get();
    
        }
        else if($celebrity=="Actress"){
          $list_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
      ->where('profession','=','Actress')->get();
      
          }
          else if($celebrity=="ACTRESS"){
            $list_data=DB::table('posts')->where('DOB','like',"%$month%")
        ->where('profession','=','Actress')->get();
        
            }
       else if($celebrity=="athletes"){
          $list_data=DB::table('posts')->where('DOB','like',"$today%")
      ->where('profession','=','Athletes')->get();
      
          }
          else if($celebrity=="Athletes"){
            $list_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
        ->where('profession','=','Athletes')->get();
        
            }
            else if($celebrity=="ATHLETES"){
              $list_data=DB::table('posts')->where('DOB','like',"%$month%")
          ->where('profession','=','Athletes')->get();
          
              }
           else if($celebrity=="politician"){
            $list_data=DB::table('posts')->where('DOB','like',"$today%")
        ->where('profession','=','Politician')->get();
            }
            else if($celebrity=="Politician"){
              $list_data=DB::table('posts')->where('DOB','like',"$tomorrow%")
          ->where('profession','=','Politician')->get();
              }
              else if($celebrity=="POLITICIAN"){
                $list_data=DB::table('posts')->where('DOB','like',"%$month%")
            ->where('profession','=','Politician')->get();
                }
           else if($celebrity=="deathanniversary"){
              $list_data=DB::table('posts')->where('death','like',"$today%")
               ->get();
              //  dd($list_data);
              }
              else if($celebrity=="Deathanniversary"){
                $list_data=DB::table('posts')->where('death','like',"$tomorrow%")
                 ->get();
                //  dd($list_data);
                }
                else if($celebrity=="DeathAnniversary"){
                  $list_data=DB::table('posts')->where('death','like',"%$month%")
                   ->get();
                  //  dd($list_data);
                  }
              else if($celebrity=="nationalday"){
                $list_data=DB::table('posts')->where('DOB','like',"%$today%")
                ->where('profession','=','national day')->get();
                
                return view("nationalday",compact("list_data"));
                }
                else if($celebrity=="Nationalday"){
                  $list_data=DB::table('posts')->where('DOB','like',"%$tomorrow%")
                  ->where('profession','=','national day')->get();
                  
                  return view("nationalday",compact("list_data"));
                  }
                else if($celebrity=="NationalDay"){
                  $list_data=DB::table('posts')->where('DOB','like',"%$month%")
                  ->where('profession','=','national day')->get();
                  
                  return view("nationalday",compact("list_data"));
                  }

      else{
        $list_data=DB::table('posts')->get();
      }
      return view("listing",compact("list_data"));
     }
     

     function birthday(){
      $dt = Carbon::now('Asia/Kolkata');
       $today=$dt->format('j-F');
       $month=$dt->format('F-Y');
       $year=$dt->format('Y');
      //  dd($year);
       $topten_data = [];
        $list_data=DB::table('posts')->where('DOB','like',"$today%")->get();
if(empty($list_data->all())){
      $topten_data=DB::table('posts')->where('DOB','like' ,"%$month%")->where('profession','like', 'Actor')
      ->orwhere('DOB','like' ,"%$month%")->where('profession','like', 'Actress')
      ->orwhere('DOB','like' ,"%$month%")->where('profession','like', 'Athletes')
      ->orwhere('DOB','like' ,"%$month%")->where('profession','like', 'Politician')->skip(0)->take(9)->get();
}
        
      return view("listing",compact("list_data","topten_data"));
     }

   function anniversary(){
    $dt = Carbon::now('Asia/Kolkata');
    $today=$dt->format('j-F');
    $month=$dt->format('F-Y');
    $year=$dt->format('Y');
    $topten_data = [];
     $list_data=DB::table('posts')->where('anniversary','like',"$today%")->get();
     if(empty($list_data->all())){
      $topten_data=DB::table('posts')->where('anniversary','like',"%$year%")->skip(0)->take(9)->get();
     }
   return view("listing",compact("list_data","topten_data"));
      // return view("anniversary");
     }
     function national(){
      $dt = Carbon::now('Asia/Kolkata');
      $today=$dt->format('j-F');
      $month=$dt->format('F-Y');
      $year=$dt->format('Y');
      // dd($year);
      $topten_data = [];
      $list_data=DB::table('posts')->where('DOB','like' ,"$today%")
      ->where('profession','=','national day')->get();
      if(empty($list_data->all())){
        $topten_data=DB::table('posts')->where('DOB','like' ,"%$year%")
        ->where('profession','=','national day')->skip(0)->take(9)->get();
      }
     return view("nationalday",compact("list_data","topten_data"));
     }
     function nationaldaylist(){
      $dt = Carbon::now('Asia/Kolkata');
      $today=$dt->format('j-F');
      $month=$dt->format('F-Y');
      $year=$dt->format('Y');
      $list_data=DB::table('posts')->where('DOB','like' ,"%$year%")
      ->where('profession','=','national day')->orderBy('id', 'DESC')->skip(0)->take(15)->get();
      return view("nationalday",compact("list_data"));
     }
    //  function createUrlSlug($urlString) { 
    //   $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString); 
    //   return $slug; }

     function nationaldayprofile($slug){
    //  $slug = str_slug($name);
    //   dd($slug);

    //   $this->attributes['title'] = $name;
    // $this->attributes['slug'] = str_slug($name);
      $list_data=DB::table('posts')->where('name',str_replace('-',' ',strtoupper($slug)))->first();
      $prof=$list_data->profession;
    $simillardate=$list_data->DOB;
    $simillarcele=$list_data->profession;
    $simillarcelebrity_data=DB::table('posts')->where('DOB','=',$simillardate)
    ->where('profession','=',$simillarcele)->get();

  $pages_data=DB::table('pages')->where('title',"FAQ'S")->first();
  $ques_answer = explode('%',$pages_data->body);
  $profile_ques_answer=$ques_answer[0];
      return view("nationaldayprofile",compact('list_data','simillarcelebrity_data','profile_ques_answer'));
     }

     function pages($slug){ 
        if(is_numeric($slug)){ 
         $list_data=DB::table('posts')->where('id',$slug)->first();
        //  dd($list_data);
        $prof=$list_data->profession;
        // dd($prof);
      $simillardate=$list_data->DOB;
      $simillarcele=$list_data->profession;
      $simillarcelebrity_data=DB::table('posts')->where('DOB','=',$simillardate)
      ->where('profession','=',$simillarcele)->get();
    //  dd($simillarcelebrity_data);
        

    $pages_data=DB::table('pages')->where('title',"FAQ'S")->first();
    $ques_answer = explode('%',$pages_data->body);
    $profile_ques_answer=$ques_answer[0];
    if($prof=="national day"){
      return view("nationaldayprofile",compact('list_data','simillarcelebrity_data','profile_ques_answer'));
    }
    else{
        return view("profile",compact('list_data','simillarcelebrity_data','profile_ques_answer'));
     }
    }

      else
      {
      $pages_data=DB::table('pages')->where('slug',$slug)->first();
      $ques_answer = explode('%',$pages_data->body);
      $top_ques_answer = str_replace("%","",$pages_data->body);
      return view("pages",compact("pages_data","top_ques_answer"));
      }
     }
   // ------  footer links------------//
   //   function aboutus(){
   //    $aboutus_data= DB::table('pages')->where('slug','pages-about-us')->first();
   //    // dd($aboutus_data);
   //    return view("aboutus",compact("aboutus_data"));
   //   }
   //   function termsconditions(){
   //    $term_data= DB::table('pages')->where('slug','pages-terms-and-conditions')->first();
   //    // dd($term_data);
   //    return view("termsandconditions",compact("term_data"));
   //   }
   //   function privacy(){
   //    $privacy_data= DB::table('pages')->where('slug','pages-privacy-policy')->first();
   //    // dd($privacy_data);
   //    return view("privacypolicy",compact("privacy_data"));
   //   }
   //   function contactus(){
   //    $contactus_data= DB::table('pages')->where('slug','pages-contact-us')->first();
       
   //    return view("contactus",compact("contactus_data"));
   //   }
   //   function disclaimer(){
   //    $disclaimer_data= DB::table('pages')->where('slug','pages-disclaimer')->first();
       
   //    return view("disclaimer",compact("disclaimer_data"));
   //   }
}
