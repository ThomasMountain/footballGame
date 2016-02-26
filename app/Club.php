<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'club';


    /* Define relationships*/

    public function managerDetails()
    {
        return $this->hasOne('App\Manager', 'id', 'manager_id');
    }

    public function leagueDetails()
    {
        return $this->hasOne('App\League', 'id', 'league_id');
    }

    public function stadiumDetails()
    {
        return $this->hasOne('App\Stadium', 'id', 'stadium_id');
    }

}
