<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Available_for extends Model
{
    //

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
