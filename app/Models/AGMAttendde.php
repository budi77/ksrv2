<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class AGMAttendde extends Model
{
    use HasFactory;
    use Uuid;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $guarded = [];


    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');

    }

}
