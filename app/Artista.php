<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    // Establecer relación 1 artista - m discos.

public function discos(){
    return $this->hasMany(
        'App\Disco',
        'ArtistId'
    );
}

    // Establecer relación 1 artista - m canciones.

    public function canciones()
    {
        // HasmanyThrough: Establecer relación 1 m con la tabla intermedia.
        // Parámetro 1: Modelo destino - tercer modelo.
        // Parámetro 2: Modelo intermedio - segundo modelo. 
        // Parámetro 3: FK del modelo 1, en el modelo 2.
        // Parámetro 4: FK del modelo 2, en el modelo 3.
        // Parámetro 5: PK del modelo 1.
        // Parámetro 6: PK del modelo 2.
        return $this->hasManyThrough(
            'App\Cancion',
            'App\Disco',
            'ArtistId',
            'AlbumId',
            'ArtistId',
            'AlbumId',
        );
    }
}
