<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\buscarcep;
use PDF;


class pdfController extends Controller
{
    public function gerapdf(){
    
        $enderecos = buscarcep::all();

        $pdf = PDF::loadView('pdf', compact('enderecos'));

       
        return $pdf->setPaper('a4')->stream('enderecos_cadastrados.pdf');

    }
}
