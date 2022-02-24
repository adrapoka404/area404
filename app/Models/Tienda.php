<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    //Para los permitidos
    protected $fillable = ['nombre', 'descripcion', 'categoria_id', 'user_id', 'estatus'];
    //para los protegidos
    protected $guarded = [''];
}
