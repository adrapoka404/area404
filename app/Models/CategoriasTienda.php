<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasTienda extends Model
{
    use HasFactory;
     //Para los permitidos
     protected $fillable = ['nombre', 'descripcion','estatus'];
     //para los protegidos
     protected $guarded = [''];
}
