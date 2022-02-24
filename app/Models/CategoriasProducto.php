<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasProducto extends Model
{
    use HasFactory;

     //Para los permitidos
     protected $fillable = ['nombre', 'descripcion','estatus', 'patern_id'];
     //para los protegidos
     protected $guarded = [''];
}
