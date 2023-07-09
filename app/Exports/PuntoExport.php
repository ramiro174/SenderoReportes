<?php

namespace App\Exports;

use App\Models\Punto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PuntoExport implements FromCollection, WithHeadings
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
    public function headingRow(): int
    {
        return 1;
    }

}
