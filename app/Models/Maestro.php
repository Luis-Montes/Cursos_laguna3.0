<?php

namespace App\Models;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maestro extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'maestros';
    public $fillable = ['clave', 'nombre_completo', 'genero',
    'fecha_nacimiento', 'direccion', 'email', 'especialidad',
    'titulacion', 'experiencia', 'numero_seguro', 'telefono', 'extencion', 'codigo_postal', 'ciudad'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
