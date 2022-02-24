<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Para los permitidos
    protected $fillable = [
        'nombre', 'slug', 'descripcion', 'precio', 
        'cantidad', 'minimo','patern_id', 'categoria_id', 
        'estatus', 'tienda_id', 'imagen',
    ];
    //para los protegidos
    protected $guarded = [''];

}
