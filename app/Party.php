<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    // public function scopeFuture($query)
	// {
	// 	return $query->whereNotNull('date');
    // }
    
    // public function scopeFindSlug($query, $slug)
    // {
    //     return $query->where('slug', $slug);
    // }

    public function guests() {
		return $this->hasMany(Guest::class);
    }
    public function replies() {
        return $this->hasMany(Reply::class);
    }
    public function cupids() {
        return $this->hasMany(Cupid::class);
    }
}
