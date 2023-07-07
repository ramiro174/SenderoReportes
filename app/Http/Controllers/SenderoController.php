<?php

namespace App\Http\Controllers;

use App\Exports\PuntoExport;
use App\Models\Punto;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SenderoController extends Controller
{
    function reporte(Request $request)
    {
        return Excel::download(new PuntoExport(), 'Punto.xlsx');
    }
}
