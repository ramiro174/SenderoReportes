<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ["usuario_id", "api_key", "nombre", "genero", "fecha_nacimiento", "estado", "alcaldia", "email", "telefono", "codigo", "contrasena", "autorizado", "activo", "created_at", "updated_at"];
}
