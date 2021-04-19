<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('width');
            $table->string('height');
            $table->integer('price');
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
        Schema::dropIfExists('log_banners');
    }
}
