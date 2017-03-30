<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class PdfController extends Controller
{
    public function returnPdf($locale)
    {
        App::setLocale($locale);

        $html = view('pdf.cv2');
//        $pdf = PDF::loadView('pdf.cv2');
        $pdf = PDF::loadHTML($html);
        return $pdf->setPaper('a4')->stream('resume.pdf');
//
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadHTML('<h1>Test</h1>');
//        return $pdf->stream();
    }

    public function returnView()
    {
        return view('pdf.cv2');
    }
}
