<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artist';
    protected $fillable = ['name','role','description','artwork_uri'];

    public function albums(){
        return $this->morphToMany('App\Album', 'albumable');
    }
}
