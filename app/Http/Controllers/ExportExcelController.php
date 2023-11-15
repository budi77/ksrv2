<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportPancing;


class ExportExcelController extends Controller
{
    public function pancing() 
    {
        return Excel::download(new ExportPancing, 'pancing.xlsx');
    }    
}
