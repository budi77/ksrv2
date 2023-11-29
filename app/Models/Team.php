<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $with = 'department:id,name';

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');

    }

}
