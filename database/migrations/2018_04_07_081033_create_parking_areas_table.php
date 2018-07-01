<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('longitude',9,6);//geometry('longitude');
            $table->decimal('latitude',9,6);//geometry('latitude');
            $table->string('name');
            $table->unsignedInteger('slots_number');
            //$table->unsignedBigInteger('admin_id')->nullable();
            //$table->unsignedBigInteger('owner_id')->nullable();
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
        Schema::dropIfExists('parking_areas');
    }
}
