<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaNoticia extends Model
{
    public function noticias(){
        return $this->hasMany('App\Noticia');
    }
}
