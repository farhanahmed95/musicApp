<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->timestamp('released_at')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('duration')->nullable();
            $table->string('image_path')->nullable();
            $table->boolean('shareable');
            $table->timestamps();
        });

        Schema::create('playlist_user',function(Blueprint $table){
            $table->increments('id');
            $table->integer('playlist_id')->unsigned();
            $table->integer('user_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('playlist_user');
        Schema::drop('playlists');
    }
}
