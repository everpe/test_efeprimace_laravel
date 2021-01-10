<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /**
     * The films that belong to the actors.
     */
    public function films()
    {
        return $this->belongsToMany('App\Film');
    }
}
