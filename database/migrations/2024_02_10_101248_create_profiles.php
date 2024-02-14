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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_bangldesh');
            $table->bigInteger('votes');
            $table->binary('photo');
            $table->dateTime('Voting_date_time');
            $table->date('voting_date');
            $table->double('population');
            $table->enum('num', ['A','B']);

            // $table->increments('id');
            // $table->string('name');
            // $table->string('email');

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
        Schema::dropIfExists('profiles');
    }
};
