<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partmas', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('address');
	    $table->double('surface');
	    $table->double("price"); 
	    $table->boolean("rent"); // wach had dar m7tota lekra wla lbi3
	    $table->boolean("fourn"); // wach mfercha wla la in case there is for rent
	    $table->integer("nbBeds"); 
	    $table->text("addInfo");
	    $table->integer("type_rent"); // in case 1 : for month ; in case 2 : for night
	    
	    $table->integer("user_id")->unsigned();
	    $table->foreign("user_id")->references("users")->on("id");
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
        Schema::dropIfExists('partmas');
    }
}
