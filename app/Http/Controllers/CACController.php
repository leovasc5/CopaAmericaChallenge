<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CACController extends Controller
{
    public function valida_grupos_convidado(Request $request){
        return view('convidado.quartas', [
            'a1' => $request->A1,
            'a2' => $request->A2,
            'a3' => $request->A3,
            'a4' => $request->A4,
            'a5' => $request->A5,
            'b1' => $request->B1,
            'b2' => $request->B2,
            'b3' => $request->B3,
            'b4' => $request->B4,
            'b5' => $request->B5
        ]);
    }
}