<?php

namespace App\Models;
use App\Models\Articulo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function articulo(){
        return $this->hasOne("App\Models\Articulo");
    }

    public function articulos(){
        return $this->hasMany("App\Models\Articulo");
    }

    public function perfils(){
        return $this->belongsToMany("App\Models\Perfil");
    }

    public function calificaciones(){

        return $this->morphMany("App\Models\Calificaciones","calificacion");
    }

    protected $fillable = [
        'Nombre',
        'Apellido',
    ];

}
