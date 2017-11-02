<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    public function guests()
	{
		return $this->hasMany(Guest::class);
    }
    public function declinedGuests()
	{
		return $this->guests()->where('character', null);
	}
}
