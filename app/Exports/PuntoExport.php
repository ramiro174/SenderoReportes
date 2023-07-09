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
        return $this->collection()->first()->keys()->toArray();
    }

}
