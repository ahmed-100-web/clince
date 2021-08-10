<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->require();
            $table->foreignId('clinc_id')->references('id')->on('clincs')->cascadeOnDelete();
            $table->integer('sex');
            $table->integer('phone')->require();
            $table->longText('address');
            $table->string('description');
            $table->string('cv');
            $table->text('working_time');
            $table->foreignId('major_id')->references('id')->on('majors')->cascadeOnDelete();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
