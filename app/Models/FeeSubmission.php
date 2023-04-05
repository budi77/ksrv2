<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class FeeSubmission extends Model
{
    use HasFactory;

    use Uuid;

    protected $keyType = 'string';

    public $incrementing = false;


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id', 'id');

    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');

    }

}
