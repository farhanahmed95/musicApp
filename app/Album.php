<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $dates = ['released_at'];

    public function albumable()
    {
        return $this->morphTo();
    }
    public function songs()
    {
        return $this->morphToMany('App\Song','songable')->withTimestamps();
    }

    public function users()
    {
        return $this->morphByMany('App\User','albumable')->withTimestamps();
    }
    public function artists()
    {
        return $this->morphByMany('App\Artist','albumable')->withTimestamps();
    }
}
