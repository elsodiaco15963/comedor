<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class Menu extends Controller
{
    public function index(){
        $fechaActual = Carbon::now();
        $hoy = $fechaActual->format('Y-m-d');
        $inicioSemana = $fechaActual->startOfWeek()->format('Y-m-d');
        $finSemana= $fechaActual->endOfWeek()->format('Y-m-d');
        return view('menu',compact('hoy','inicioSemana','finSemana'));
    }

    public function index2(){
        return view('management');
    }
}
