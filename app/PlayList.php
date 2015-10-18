<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    protected $table = 'playlists';
    protected $dates = ['released_at'];
    protected $fillable = ['name','duration','released_at','image_path','artist_id'];

    public function songs()
    {
        return $this->morphToMany('App\Song','songable')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
