<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RetailInfo as retail; 
class SearchCont extends Controller
{
    //
	function search(){
		$gets = $_GET;
		$arr;
		if($gets['ret_city'] != -1) $arr['city_id'] = $gets['ret_city'];	
		if($gets['ret_type'] != -1) $arr['type'] = $gets['ret_type'];
		if($gets['ret_loc'] != -1) $arr['rent'] = $gets['ret_loc'];
	
		// search
		$data = retail::where($arr)->get();
		return View("retail.search")->with(["data" => $data]);	

	}	

}
