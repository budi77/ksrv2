<?php

namespace App\Http\Livewire\Meeting;

use Livewire\Component;
// use Auth;
use App\Models\Meeting;
use PDF;

class Index extends Component
{
    public function render()
    {
        return view('livewire.meeting.index')->extends('layouts.master');
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
