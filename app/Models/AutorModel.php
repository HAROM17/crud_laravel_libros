<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorModel extends Model
{
    use HasFactory;

    protected $table = 'Autor';
    protected $primaryKey = "idAutor";
    protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','estado'];
}
