<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'titulo', 'isbn', 'editorial', 'paginas'];

    public function ejemplares(){
        return $this->hasMany(ejemplar::class, 'libro_id');
    }
}
