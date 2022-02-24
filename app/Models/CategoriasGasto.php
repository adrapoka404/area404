<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasGasto extends Model
{
    use HasFactory;
     //Para los permitidos
     protected $fillable = ['nombre','estatus'];
     //para los protegidos
     protected $guarded = [''];   
}
