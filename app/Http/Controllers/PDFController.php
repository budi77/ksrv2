<?php

namespace App\Http\Controllers;
use App\Models\Patriotik;
use PDF;
use App\Models\Meeting;


use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function patriotik($id) {

        $result = Patriotik::find($id)->toArray();

        // dd($result);
        $pdf = PDF::loadView('pdf/patriotik', ['result' => $result]);

        return $pdf->stream($result['nama'] . '.pdf');


    }

    public function generatePDF()
    {

        // dd('test');
        $results = Meeting::with('member')->orderby('created_at', 'DESC')->get();

        $data = [
            'results' => $results
           
        ]; 

        // dd($data);

        $pdf = PDF::loadView('pdf.meeting', $data);

        return $pdf->download('Senarai_Kehadiran_Mesyuarat_Agung_KSR_2024.pdf');



    }
}
