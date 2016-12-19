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
Route::get("/login", function(){
     return view("login");
});
Route::get("/register" ,function(){
	if(Auth::check() == false){
    return view('register');
	}else {
    return redirect("/dashboard");
	}
});
Route::get("/dashboard", "dashCont@getDash")->middleware("auth");
Route::get("/logout", "userCont@logout");
Route::post("/addUser", "userCont@register");
Route::post("/logUser", "userCont@login");
Route::get("/tst", "dashCont@tstInh");
Route::get("/new", function(){
	return view("new");
})->middleware("auth");

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
Route::get("/upd", function(){
	return view("upduser");
});
Route::get("/updeml",function(){
	return view("updeml");
});
Route::get("/updpwd",function(){
	return view("updpwd");
});
Route::get("/updnm",function(){
	return view("updnm");
});

