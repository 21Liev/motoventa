<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $primaryKey = 'id_equipo';
    protected $table = 'equipo'; // Tabla real en la base
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'fk_tipo_equipo',
        'imagen'
    ];
}
