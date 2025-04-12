<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'peso', 'altura', 'edad', 'sexo', 'complexion', 
        'actividad', 'suenio', 'estres', 'objetivo'
    ];
}
