<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_media_account extends Model
{
    //

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
