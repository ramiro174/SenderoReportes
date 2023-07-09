<?php

namespace App\Exports;

use App\Models\Punto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PuntoExport implements FromCollection,WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Punto::all();
    }
    public function headings(): array
    {
        return[
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

}
