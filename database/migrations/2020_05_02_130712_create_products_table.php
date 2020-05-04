<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('unit');
            $table->string('photo');
            $table->string('address');
            $table->string('type');
            $table->unsignedSmallInteger('ac');
            $table->unsignedBigInteger('price');
            $table->string('front_view');
            $table->string('first_floor');
            $table->string('second_floor');
            $table->string('room_video');
            $table->string('survey_video');
            $table->string('description');
            $table->unsignedSmallInteger('bedroom');
            $table->unsignedSmallInteger('bathroom');
            $table->enum('show_status', [0, 1])->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
