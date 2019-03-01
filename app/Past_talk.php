<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Past_talk extends Model
{
    //

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
