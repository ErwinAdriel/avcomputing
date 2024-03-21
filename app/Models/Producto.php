<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $with = ['categoria', 'marca'];
    protected $fillable = [
        'name',
        'price',
        'destacado',
        'id_categoria',
        'id_marca',
        'description',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    public function marca(){
        return $this->belongsTo(Marca::class, 'id_marca', 'id');
    }

}
