<?php

namespace App\Exports;

use App\Models\Pancing;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportPancing implements FromView
{
 
    public function view(): View
    {
        return view('exports.pancing', [
            'results' => Pancing::latest()->get()
        ]);
    }
}
