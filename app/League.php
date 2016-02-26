<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table = 'league';

    protected $fillable = [
        'name',
        'active_flag'
    ];
}
