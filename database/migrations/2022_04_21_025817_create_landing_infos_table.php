<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_infos', function (Blueprint $table) {
            $table->id();
            $table->string('longText');
            $table->string('email');
            $table->string('phone');
            $table->string('imageHeaderBase64');
            $table->string('imageHomeFlat1Base64');
            $table->string('imageHomeFlat2Base64');
            $table->string('imageHomeFlat3Base64');
            $table->string('imageBuildingBase64');
            $table->string('iconHouseBase64');
            $table->string('imageExampleBase64');

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
        Schema::dropIfExists('landing_infos');
    }
}
