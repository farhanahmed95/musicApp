<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->timestamp('released_at')->nullable();
            $table->integer('duration')->nullable();
            $table->string('audio_uri');
            $table->string('artwork_uri');

            $table->timestamps();
        });

        Schema::create('songables', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->integer('songable_id')->unsigned();
            $table->string('songable_type');

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
        Schema::drop('songables');
        Schema::drop('song');
    }
}
