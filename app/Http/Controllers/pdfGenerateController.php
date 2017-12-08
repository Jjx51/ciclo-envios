<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfGenerateController extends Controller
{
        public function pdfview(Request $request){
    	$data = $this->getData();
        $pdf = PDF::loadView('pdf.ticket', compact('data'));
        $pdf->setPaper("A4", "portrait");
        //return $pdf->download('invoice.pdf');
        return $pdf->stream('Ticket.pdf');
    }

    public function getData(){
        $data =  [
            'Cantidad'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500',
            'direccion'=>'Anahuac 47 Puebla, México',
            'correo'=>'jjx51@outlook.com',
            'telefono'=>'2226680020',
            'no_ticket'=>1,

        ];
        return $data;
    }
}
