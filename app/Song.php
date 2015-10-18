<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'songs';
    protected $fillable = ['name','released_at','duration','audio_uri','artwork_uri'];

    public function songable()
    {
        return $this->morphTo();
    }

    public function albums()
    {
        return $this->morphByMany('App\Album', 'songable');
    }
    public function playlists()
    {
        return $this->morphByMany('App\PlayList','songable');
    }
}
