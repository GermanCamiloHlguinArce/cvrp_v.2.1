<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
    'NombreProducto','cantidad','estado','descripcion','valor','imagen','disponible','categoria_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }
}
