<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    use HasFactory;
    protected $table = 'punto';
    protected $primaryKey = 'id_punto';
    public $timestamps = false;
    protected  $fillable=[
                            "punto_id",
                            "fecha_registro",
                            "tipo_sendero_id",
                            "riesgo_id",
                            "usuario_id",
                            "tipo",
                            "nombre",
                            "region",
                            "estado",
                            "descripcion",
                            "horario",
                            "lat",
                            "lon",
                            "activo"];
}
