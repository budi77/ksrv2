<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportPancing;
use App\Exports\MembersExport;
use App\Models\Fee;

class ExportExcelController extends Controller
{
    public function pancing() 
    {
        return Excel::download(new ExportPancing, 'pancing.xlsx');
    } 

    public function yuran($department_id, $year) 
    {
        
        // $results = Fee::with(['department','member:id,name'])->where('department_id', $department_id)->where('year',$year)->get();
        
        // dd($results);
        
        return Excel::download(new MembersExport($department_id, $year), 'yuran_ahli.xlsx');
    }    
}
