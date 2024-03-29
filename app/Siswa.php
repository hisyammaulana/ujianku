<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $guarded = [];

    public function sekolah(){
        return $this->belongsTo('App\User');
    }

    public function rayon()
    {
        return $this->belongsTo('App\Rayons');
    }
}
