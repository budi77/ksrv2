<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockerTenant extends Model
{
    use HasFactory;

    protected $with = 'bahagian';

    protected $guarded = [];

    
    public function bahagian()
    {
        return $this->belongsTo(Department::class, 'department_id');

    }

}
