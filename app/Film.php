<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * Get the lenguaje for the film.
     */
    public function lenguaje()
    {
        return $this->belongsTo('App\Lenguaje');
    }
    /**
     * Get the original lenguaje for the film.
     */
    public function originalLenguaje()
    {
        return $this->belongsTo('App\Lenguaje', 'original_lenguaje_id');
    }



    /**
     * The actors that belong to the films.
     */
    public function actors()
    {
        return $this->belongsToMany('App\Actor');
    }

}
