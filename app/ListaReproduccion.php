<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    // Relación m:m listaReproducción -> canciones
    public function canciones()
    {
        // BelongsToMany (Muchos a muchos con pivote):
        // Parámetros: 1. El modelo a relacionar
        //             2. La tabla pivote
        //             3. FK del modelo actual en el pivote
        //             4. FK del modelo a relacionar en el pivote 
        return $this->belongsToMany(
            'App\Cancion',
            'playlisttrack',
            'PlaylistId',
            'TrackId'
        );
    }
}
