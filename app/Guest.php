<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

}
