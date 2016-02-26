<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadium';

    protected $fillable = [
        'name',
        'capactity',
        'active_flag'
    ];
}
