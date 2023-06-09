<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use LaracraftTech\LaravelDateScopes\DateScopes;
use Carbon;


class Fee extends Model
{
   
    use HasFactory;
    use DateScopes;
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

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id')->orderBy('name');

    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    protected function paymentDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  Carbon::parse($value)->format('d/m/Y'),
            // set: fn ($value) =>  Carbon::parse($value)->format('Y-m-d'),
        );
    }

}