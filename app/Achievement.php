<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{

    protected $table = 'achievements';

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
