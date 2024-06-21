<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroModel extends Model
{
    use HasFactory;

    protected $table = "Libro";
    protected $primaryKey = "idLibro";
    protected $fillable = ['titulo', 'descripcion', 'numPagina', 'estado'];
}
