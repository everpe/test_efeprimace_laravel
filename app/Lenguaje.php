<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    /**
     * Get the films for lenguaje.
     */
    public function films()
    {
        return $this->hasMany('App\Film');
    }
}
