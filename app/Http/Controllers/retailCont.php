<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RetailInfo as retail;
use App\picture as picture;
use App\User as user;
use Auth;
use DB;
class retailCont extends Controller
{
	
// Add Retail Global Function
	function newRetail(Request $req){
			// new form Fields 
		
		$retail = new retail;

		$retlocation = $req->ret_address;
		$retcity = $req->ret_city;
		$rettype = $req->ret_type;
		$retloc = $req->ret_loc;
		$retprice = $req->ret_price;
		$retsurface = $req->ret_surface;
		$retinfo = $req->ret_info;
		$retphone = $req->ret_post_phone;
		$picarray = $req->pics;
		$zipcode = $req->ret_post_zip;	
			// frmdyn fomr Fields
		$retail->adresse_retail = $retlocation;
		$retail->zipcode = $zipcode;
		//$retail->city_id = $retcity;
		$retail->phone = $retphone;
		$retail->rent = $retloc;
		$retail->price = $retprice;
		$retail->surface = $retsurface;
		$retail->type = $rettype;
		$retail->city_id = $retcity;
		$retail->info = $retinfo;	
		if($rettype != "la" || $rettype != "st"){
		$retrooms = $req->ret_rooms;	
		$retbalc = $req->ret_balc;
		$retgara = $req->ret_gara;
		$retfurn = $req->ret_furn;
		$retail->nbRooms = $retrooms;
		$retail->balc = $retbalc;
		$retail->gar = $retgara;
		$retail->furn = $retfurn;	
		}
		$user = (Auth::user());
		if($user->retails()->save($retail)){
			$ret = true;
		}
		if(sizeof($picarray)){
		for($i = 0; $i < sizeof($picarray); $i++)	{
		$pics[$i] = new picture;
	        $pics[$i]->picture_name = $picarray[$i];
	}
		
		if($retail->pics()->saveMany($pics)){
			$ret = true;
		}
		}
		// relating the user to the retail_info
		// and retail info to pictures
		if($ret == true){
			return redirect("/dashboard");
		}	
	}
	function updRetail(Request $req){

	}
	function delRetail($id){
		
	}
	function viewRetail(){
		
	}
	function listRetail(){

	}
	function listMyRetail($num){
		$user = (Auth::user());
		//$mypics = DB::table("retail_infos")->where("user_id", "=", $user->id)->limit(10)->offset($num)->leftJoin('pictures', 'retail_infos.id', '=','pictures.retail_info_id')->select("pictures.*")->get();	
		$myretails = $user->retails;	
		
		//return dd($myretails[0]->pics[0]->picture_name);
	}
}
