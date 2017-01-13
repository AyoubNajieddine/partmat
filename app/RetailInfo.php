<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetailInfo extends Model
{
    //
	function retailOwner(){
		return $this->belongTo("App\User");
	}
	function pics(){
		return $this->hasMany("App\picture");
	}
		
}
