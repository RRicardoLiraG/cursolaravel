<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class OperacionesController extends Controller
{
    public function suma(Request $request)
    {
        $x = $request->input('numero1');
        $y = $request->input('numero2');

        $suma = $x + $y;

        return view('suma', ['resultado' => $suma]);
    }

    public function resta(Request $request)
    {
        $x = $request->input('numero1');
        $y = $request->input('numero2');

        $resta = $x - $y;

        return view('resta', ['resultado' => $resta]);
    }

    public function multiplicacion(Request $request)
    {
        $x = $request->input('numero1');
        $y = $request->input('numero2');

        $multiplicacion = $x * $y;

        return view('multiplicacion', ['resultado' => $multiplicacion]);
    }

    public function division(Request $request)
    {
        $x = $request->input('numero1');
        $y = $request->input('numero2');

        $division = $x / $y;

        return view('division', ['resultado' => $division]);
    }
}
