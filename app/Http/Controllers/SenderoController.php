<?php

namespace App\Http\Controllers;

use App\Models\Punto;
use Illuminate\Http\Request;

class SenderoController extends Controller
{
    //
    function reporte(Request $request)
    {
        return Punto::all();
    }
}
