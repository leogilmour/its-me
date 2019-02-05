<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guest extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'allergies'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function parties()
	{
		return $this->belongsToMany(Party::class);
    }

    public function replies()
	{
		return $this->hasMany(Reply::class);
    }
    
    public function cupids()
    {
        return $this->hasMany(Cupid::class);
    }
}
