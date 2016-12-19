<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User as User;
class userCont extends Controller
{
    //
	function login(Request $req){
		if(Auth::attempt(["email"=>$req['email'], "password"=>$req['password']])){
			return redirect("/dashboard");	
		}else {
			return redirect("/login"); // we can just return the errors array
		}
	}
	function register(Request $req){
	   if(Auth::check() == false){
		$user = new User;	
		$user->full_name = $req['full_name'];
		$user->password = bcrypt($req['password']);
		$user->email = $req['email'];
		if($user->save()){
			Auth::login($user);
			return redirect("/dashboard");
		}else {
			return "0";
		}
	    }
	}
	function logout(){
		Auth::logout();
		return redirect("/login");
	}
}
