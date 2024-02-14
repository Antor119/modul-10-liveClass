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
        Schema::create('float_types', function (Blueprint $table) {
            $table->id();
            $table->float('dollar');
            $table->geometryCollection('positions');
            $table->geometry('position_2');
            $table->integer('population');
            $table->ipAddress('visitor');
            $table->json('use_details');
            $table->longText('use_description');
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
        Schema::dropIfExists('float_types');
    }
};
