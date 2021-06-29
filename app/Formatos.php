<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    protected $table = "genre";
    protected $primaryKey = "GenreId";
    public $timestamps = false;
}
