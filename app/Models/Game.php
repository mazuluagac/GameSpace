<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $fillable = ['nombre', 'descripcion', 'imagen','fecha_lanzamiento','genero','tamaño','calificacion'];
    
}
