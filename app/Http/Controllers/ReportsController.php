<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class ReportsController extends Controller
{
    public function print_cardex($id){
        $mystudent=Student::find($id);
        $data =[
            'title'=>'Cardex del Estudiante',
            'student'=>$mystudent,
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('reports.cardex', $data));
        return $pdf->stream();

    }
}
