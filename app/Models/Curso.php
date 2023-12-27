<?php

namespace App\Models;

use App\Models\Maestro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'cursos';
    public $fillable = ['nombre_curso', 'descripcion', 'precio', 'duracion', 'nivel', 'fecha_inicio', 'maestro'];

    public function maestro(){
        return $this->belongsTo(Maestro::class, 'maestros', 'clave');
    }

    public function maestros(){
        return $this->hasMany(Maestro::class);
    }

}
