<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $guarded = [];

    public function sekolah(){
        return $this->belongsTo('App\User');
    }
}
