<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Department extends Model
{
    use HasFactory;
    use Uuid;

     /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function members()
    {
        return $this->hasMany(Member::class, 'department_id');

    }
    public function active_members()
    {
        return $this->hasMany(Member::class, 'department_id')->where('active', '1');

    }

    public function totalpaidmemberforcurrentyear()
    {
        return $this->hasMany(Fee::class, 'department_id');

    }
}
