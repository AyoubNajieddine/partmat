<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\partma as partma;
use App\appart as appart;

class dashCont extends Controller
{

	function getDash(){
		return view("dashboard");
	}
	function tstInh(){
		$par = new partma;
		$apprt = new appart;
		$par->address = "114 bd Lagirond";
		$par->surface = 1004;
		$par->price = 1000;
		$par->isRent = true;
		$par->type= "appart";
		$apprt->nbBed = 2;
		$apprt->nbLiv = 2;
		$par->save();
		$par->appart()->save($apprt);
	}
}
