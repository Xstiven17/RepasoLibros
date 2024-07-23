<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejemplar extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->belongsTo(usuario::class,'libro_id');
    }

    public function libros(){
        return $this->belongsTo(libro::class, 'ejemplar_usuario', 'ejemplar_id', 'usuario_id');
    }
}
