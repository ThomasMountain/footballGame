<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class User
 * @package App
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable to prevent SQL injection.
     *
     * Attributes not included in here will not be mass assignable - i.e. user cannot hack a form to update their user id
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'first_name',
        'surname',
        'active_flag',
        'admin_flag',
        'start_date',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    protected $dates = [
        'start_date',
        'last_login'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * returns true if the user is an admin
     * @return bool
     */
    public function isAdmin()
    {
        if (Auth::User()) {
            $isAdminVal = Auth::User()->admin_flag;
            return ($isAdminVal === 'Y') ? true : false;
        } else {
            return true;
        }
    }

    /**
     * returns true if the user is Active
     * @return bool
     */
    public function isActive()
    {
        if (Auth::User()) {
            $isActiveVal = Auth::User()->active_flag;
            return ($isActiveVal === 'Y') ? true : false;
        } else {
            return true;
        }

    }


    /**
     * Query scope for active flag
     * @param $query
     */
    public function scopeActive($query)
    {
        return $query->where('active_flag', '=', 'Y');
    }

    /**
     * Query scope for inactive flag
     * @param $query
     */
    public function scopeInactive($query)
    {
        return $query->where('active_flag', '=', 'N');
    }


    public function playerDetails()
    {
        return $this->hasOne('App\Player', 'id', 'id');
    }

    public function achievements()
    {
        return $this->belongsToMany('App\Achievement')->withTimestamps();
    }

}
