<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User as User;
use Illuminate\Hashing\BcryptHasher as hasher;
use Validator;
class userCont extends Controller
{
    //
	function login(Request $req){

		// Validator Example
		$validator = Validator::make($req->all(),[
			"email" => "required",
			"password" => "required",
			
		]);
	if(!$validator->fails()){ // checking the validator
		if(Auth::attempt(["email"=>$req['email'], "password"=>$req['password']])){
			return redirect("/dashboard");	
		}else {
			// we have our error and we have 
			$validator->errors()->add("rg_login","rong_user_error");
			return redirect()->back()->withErrors($validator->errors());	
		}
	}else {
			// return redirect whit errors 
			return redirect()->back()->withErrors($validator->errors());
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
	function updEmail(Request $req){
			// we still need to validate the form
		$email = $req['email'];
		$email_comf = $req['cr_email'];
		if($email == $email_comf){
			// then we gonna add
			$user = Auth::user();
			$user->email = $email;
			if($user->save()){
				return redirect("/upd");
			}
			else {
				// an other Error Message
			}
		}else {
			// error Message
		}
	}
	function updPassword(Request $req){
			// we still need to validate the form
			$old_password = $req['cr_password'];
			$password = $req['password'];	
			$password_comf = $req['cm_password'];
		if($password == $password_comf){
			$user = Auth::user();
			$hash = new hasher;
			if($hash->check($old_password, $user->password) == true){
				// in case success
				$user->password = bcrypt($old_password);
				if($user->save()){
					// in case success
					return redirect("/upd");
				}else {
					// password update fail
				}
			}
			else {
				// old password is not the same
				echo "rong old password";
			}
		}else {
			// password don't match Error
				echo "password don't match";
		}	
	}
	function updName(Request $req){
			// we still need to validate the form
			$first_name = $req['fname'];
			$last_name = $req['lname'];
			$user = Auth::user();
			$user->full_name = $first_name." ".$last_name;
			if($user->save()){
				return redirect("/upd");
			}else {
				// error Message
			}		
	}
	function delUser(){
		$id = (Auth::user())->id;
		User::destroy([$id]);
		Auth::logout();
		return redirect("/login");

	}
}
