<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'manager';

    protected $fillable = [
        'first_name',
        'surname',
        'active_flag'
    ];

}
