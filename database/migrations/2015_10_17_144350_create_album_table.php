<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->timestamp('released_at')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('duration')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        Schema::create('albumables',function(Blueprint $table){
            $table->integer('album_id')->unsigned();
            $table->integer('albumable_id')->unsigned();
            $table->string('albumable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ablumables');
        Schema::drop('album');
    }
}
