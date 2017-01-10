<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_infos', function (Blueprint $table) {
            $table->increments('id');
	    $table->string("title");
	    $table->string("adresse_retail");
	    $table->integer("zipcode");
	    $table->integer("city_id")->unsigned();
	    $table->foreign("city_id")->references("id")->on("cities");
	    $table->integer("user_id")->unsigned();
	    $table->foreign("user_id")->references("id")->on("users");
	    $table->string("phone");
	    $table->boolean("rent"); // true for rent false for buy
	    $table->double("price");
	    $table->double("surface");
	    $table->integer("rentPer")->in([1,2]); // 1 per month , 2 per day
	    $table->string("type")->in(["apprt", "villa", "house", "store", "flat", "land", "vacc"]);
	    $table->integer("nbRooms")->in([1,2,3,4,5,6,7,8,9,10]);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retail_infos');
    }
}
