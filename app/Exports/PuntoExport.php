<?php

namespace App\Exports;

use App\Models\Punto;
use Maatwebsite\Excel\Concerns\FromCollection;

class PuntoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Punto::all();
    }
}
