<?php

namespace App\Http\Livewire\Meeting;

use Livewire\Component;
use App\Models\Meeting;
use PDF;

class Attendance extends Component
{

    public function render()
    {
        $results = Meeting::with('member')->orderby('created_at', 'DESC')->get();

        return view('livewire.meeting.attendance', compact('results'));
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
