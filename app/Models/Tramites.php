<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramites extends Model
{
    use HasFactory;
    protected $table = 'tramites';

    protected $fillable = [
        'nombre', 
        'apellido_paterno',
        'apellido_materno', 
        'date_nacimiento',
        'num_id',
        'direccion', 
        'email', 
        'numero',
        'estado'
    ];
}
