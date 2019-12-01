<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompf\Dompdf;
use App\publicacao;

class relatorioController extends Controller
{
    public function publicacaoPDF($id){
        
        //$dompdf = new Dompdf();
        {$pub = publicacao::find($id);
        //dd($publicacao);
        //return view('publicacao.gerarPDF',['pub' => $publicacao]);

        $date = date('j M Y H:i:s');
        $view =  \View::make('publicacao.gerarPDF', compact('pub', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->setPaper('A4', 'portrait');
        
        $pdf->loadHTML($view);
        return $pdf->stream('QuimIFica');
        
        }
       }
}
