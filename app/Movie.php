<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table="movies";
    //Si tuvieramos una PK con nombre diferente a id
    //protected $primaryKey="nombreColumna";

}
