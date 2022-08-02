<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sortname');
            $table->string('phonecode')->nullable();
            $table->timestamps();
        });
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('division_id');
            $table->timestamps();
        });
        Schema::create('upazilas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('district_id');            
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
        Schema::dropIfExists('divisions');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('upazilas');
    }
};
