<?php

namespace App\Imports;

use App\Models\Member;
use App\Models\Department;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Illuminate\Support\Str;

class MembersImport implements ToModel, WithUpserts, WithHeadingRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if (!isset($row['nokp'])) {
            return null;
        }

        if ($row['nama_bahagian'] == 'Tiada Maklumat') {
            return null;
        }
    
        return new Member([
            'id' => Str::uuid()->toString(),
            'name'  => $row['nama'],
            'ic_no'  => $row['nokp'],
            'email'  => $row['email'],
            'department_id'  => $this->transformDepartmentToDepartmentid($row['nama_bahagian']),
        ]);
    }

    public function uniqueBy()
    {
        return 'email';
    }


    public function transformDepartmentToDepartmentid($value) {

        $department = Department::where('name', $value)->first();
    
        if(!$department){
            return '';
        }
    
        return $department->id;
    }    

    public function chunkSize(): int
    {
        return 1000;
    }
}
