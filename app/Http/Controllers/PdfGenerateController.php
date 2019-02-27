<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use DB;
use PDF;

class PdfGenerateController extends Controller
{
    
       public function pdfview(Request $request)
    {
        $usuarios = Usuarios::all();
        $pdf = PDF::loadView('usuarios', ['usuarios'=>$usuarios]);
        return $pdf->download('dsfs.pdf');
    }
}
