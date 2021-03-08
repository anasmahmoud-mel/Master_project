<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Jurny;
use Illuminate\Http\Request;
use DB;


class RelationController extends Controller
{
 public function hasOne(){
    //  $booking=\App\Booking::with('jurny')->find(1);
    //  //return $booking -> jurny;
    //  return response()->json($booking);


    //this method to retrive data from jurny table which it selected by the $query in the
    // below code as you can see in line 19 Adding to Booking table coloumn JUST "from "and "to " am used
      // $booking=\App\Booking::with(['jurny'=>function($query){
      //     $query->select('from','to','booking_id');
      // }])->find(1);
      // return response()->json($booking);

      $jurny=Jurny::all();
     
      return view('public_view.booking',compact('jurny'));
      
 }
 public function search(Request $request){
  //$jurny=Jurny::all();
  // $soul = $request->from;
//resources/views/certificates/show.blade
// ,compact('jurny'));
  // return view('public_view.booking')->with('soul', $soul);

  //  dd($search_text);
  //  return view('public_view.booking',compact('jurny'));

  // if($request->has('search')){
  //   $jurnys= Jurny::search($request->get('search'))->get();	
  // }else{
  //   $jurnys = Jurny::get();

  // }
   $search_text=$request->get('take_from');
   $jurny=DB::table('jurnys')->where('from','like','%'.$search_text.'%')->paginate(5);
   
  // am trying to redirect to another page when result not found(false) but i cant .... 
if($search_text == null){
   // return "---";
   return view('public_view.contact');
    dd($search_text);
}else{
return view('public_view.booking', compact('jurny')) ;}

 }
 public function search2(){
  $search=$_GET['query'];
  $jurnys = Jurny::where('from','LIKE','%'.$search.'%')->get();
  return view('dashboard_view.search',compact('jurnys'));
}
}
