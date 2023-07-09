<?php

namespace App\Exports;
use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsuarioExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Usuario::all();
    }

    public function headings(): array
    {
        return [
            "usuario_id",
            "api_key",
            "nombre",
            "genero",
            "fecha_nacimiento",
            "estado",
            "alcaldia",
            "email",
            "telefono",
            "codigo",
            "contrasena",
            "autorizado",
            "activo",
            "created_at",
            "updated_at"

        ];
    }
    public function headingRow(): int
    {
        return 1;
    }
}
