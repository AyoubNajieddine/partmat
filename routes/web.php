<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get("/hood/{id}", function($id){	
	$data = file_get_contents("http://codepostal.ma/search_mot.aspx?keyword=".$id);
	$dom = new DOMDocument;
	$dom->loadHTML($data);
	$arr;
	$tr = $dom->getElementById("DgCodeparAdresse")->getElementsByTagName("tr");	
	for($i = 1,$j=0;$i< $tr->length; $i++,$j++){
		$arr[$j] = $tr[$i]->getElementsByTagName('td')[1]->textContent; 
	}
	return $arr;
});

	/******************************************************************/

Route::get("/dashboard", "dashCont@getDash")->middleware("auth");
Route::get("/new", function(){
	return view("new");
})->middleware("auth");

// USER AUTH VIEWS
Route::get("/login", function(){
     return view("user.auth.login");
});
Route::get("/register" ,function(){
	if(Auth::check() == false){
    return view('user.auth..register');
	}else {
    return redirect("/dashboard");
	}
});
// USER AUTH CONTROLLERS 
Route::get("/logout", "userCont@logout");
Route::post("/addUser", "userCont@register");
Route::post("/logUser", "userCont@login");
Route::get("/tst", "dashCont@tstInh");


	/******************************************************************/


// USER INFO VIEWS
Route::group(['middleware'=>"auth"], function(){
Route::get("upd", function(){
	return view("user.info.upduser");
});
Route::get("/upd/updeml",function(){
	return view("user.info.updeml");
});
Route::get("/upd/updpwd",function(){
	return view("user.info.updpwd");
});
Route::get("/upd/updnm",function(){
	return view("user.info.updnm");
});
Route::get("/delcnt", function(){
	return view("user.info.delcnt");
});
// USER INFO CONTROLLERS
Route::post("/eml", "userCont@updEmail");
Route::post("/pwd", "userCont@updPassword");
Route::post("/nm", "userCont@updName");
Route::post("/deluser", "userCont@deluser");
});
// USER RESET GROUP
Route::group(["middleware" => "guest"], function(){
Route::post("/reset/email", "Auth\ForgotPasswordController@sendResetLinkEmail");
Route::post("/reset/password", "Auth\ResetPasswordController@reset");
});
Route::get("/resetReq", function(){ return View("user.password_reset.resetReq"); });
Route::get("/password/reset/{token}", function($token){ return View("user.password_reset.resetSub")->with(["tkn" =>  $token]); });


