<?php

namespace App\Http\Controllers;

use App\Exports\PuntoExport;
use App\Exports\UsuarioExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SenderoController extends Controller
{
    function reportepunto(Request $request)
    {
        return Excel::download(new PuntoExport(), 'Punto.xlsx');
    }
    function reporteusuario(Request $request)
    {
        return Excel::download(new UsuarioExport(), 'Usuario.xlsx');
    }
}
