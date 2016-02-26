<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'player';


    /* Relationships */
    public function clubDetails()
    {
        return $this->hasOne('App\Club', 'id', 'club_id')->with('managerDetails');
    }

    public function accommodationDetails()
    {
        return $this->hasOne('App\Accommodation', 'id', 'accommodation_id');
    }

    public function gymDetails()
    {
        return $this->hasOne('App\Gym', 'id');
    }

    public function trainingDetails()
    {
        return $this->hasOne('App\Training', 'id');
    }

    public function positionDetails()
    {
        return $this->hasOne('App\Position', 'id');
    }

    public function removeEnergy($val)
    {
        $this->energy = $this->energy - $val;
        $this->save();
    }

    public function addEnergy($val)
    {
        $this->energy = $this->energy + $val;
        $this->save();
    }

    public function removeMoney($val)
    {
        $this->money = $this->money - $val;
        $this->save();
    }

    public function addMoney($val)
    {
        $this->money = $this->money + $val;
        $this->save();
    }

}
