<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDPruebaController extends Controller{

    public function index(){

        $nombres = DB::table('clientes')->pluck('nombre');
        $clientes = DB::table('clientes')->get();
        $edad = DB::table('clientes')->pluck('edad');

        return view('pruebaBD.informacion',
            ['nombres' => $nombres , 'edad' => $edad, 'clientes' => $clientes]);
    }
}
