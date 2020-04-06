<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function siswas()
    {
        return $this->hasMany('App\Siswa');
    }
}
