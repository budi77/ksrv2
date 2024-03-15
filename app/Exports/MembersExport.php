<?php

namespace App\Exports;

use App\Models\Fee;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MembersExport implements FromView, ShouldAutoSize, WithStyles
{
 
    public $department_id, $year;

    public function __construct(string $department_id, string $year)
    {
        $this->department_id = $department_id;
        $this->year = $year;
    }

    public function view(): View
    {
        return view('exports.yuran', [
            'results' => Fee::with(['department','member:id,name'])->where('department_id', $this->department_id)->where('year',$this->year)->get()
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]],

            // // Styling an entire column.
            // 'C'  => ['font' => ['size' => 16]],
        ];
    }
}
