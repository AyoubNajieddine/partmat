<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
class pictCont extends Controller
{
    //
	function addPics(Request $req){
		$validate = Validator::make($req->all(),[
		"img" => "image",
		]);
		if(!$validate->fails()){	
			// we need to check if the user is the owner of the picture	
		$name = (Auth::user())->id."-".substr(md5(time()."_".(Auth::user())->id), 0, 15);
		$req->img->move("/home/hhmaster/Documents/partmat/",$name);
		return $name;
		}else {
		return "not allowed extention";
		}
	}
	function delPic(Request $req){
		
	}

}
