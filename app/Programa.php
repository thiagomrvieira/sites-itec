<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }


       /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
