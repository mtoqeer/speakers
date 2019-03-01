<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Current_position extends Model
{
    //

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
