<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RetailInfo as retail;
use App\city as city; 
class SearchCont extends Controller
{
    //
	function search(Request $req, $city, $type, $rent){
		$cities = city::all();
		$arr = Array();
		if($city != "-1") $arr['city_id'] = $city;	
		if($type != "-1") $arr['type'] = $type;
		if($rent != "-1") $arr['rent'] = $rent;
		$data = retail::where($arr)->paginate(1);
		//print_r($data);
		//$data = $data->where("price", ">=", $req->minprice);
		//dd($data->get();/*		if(isset($req->minval)) 
	//	if(isset($req->maxval))
	//	if(isset($req->minsurf))
	//	if(isset($req->maxsurf))
	//	if($req->ret_type != "la" || $req->req_type != "st"){
			// to we can get the number of rooms and caractestics
	//		if(isset($req->ret_rooms) && $req->ret_rooms != -1)
	//		if(isset($req->ret_balc)) 
	//		if(isset($req->ret_gara))
	//		if(isset($req->ret_furn))
	//	}

		/*$arr = $req->all();
		$keys = array_keys($arr);
		$counter = 0;
		foreach($arr as $val){
			
			$keys[$counter];
			$counter++;
		}	
		*/
		//$data->setPath($req->fullUrl());
		
	//	print_r($data->nextPageUrl());
	
	return View("retail.search")->with(["data" => $data, "cities"=>$cities, "city"=>$city, "rent"=>$rent, "type"=>$type]);	
		
	}	
}	


