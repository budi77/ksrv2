<?php

namespace App\Http\Controllers;
use App\Models\Patriotik;
use PDF;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function patriotik($id) {

        $result = Patriotik::find($id)->toArray();

        // dd($result);
        $pdf = PDF::loadView('pdf/patriotik', ['result' => $result]);

        return $pdf->stream($result['nama'] . '.pdf');


    }
}
