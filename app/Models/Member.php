<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Member extends Model
{
    use HasFactory;
    use Uuid;

    protected $with = ['bahagian:id,name,short','latestPayment','payment'];
    
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

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function bahagian()
    {
        return $this->belongsTo(Department::class, 'department_id');

    }

    public function payments()
    {

        return $this->hasMany(Fee::class, 'member_id');

    }

    public function payment()
    {

        return $this->hasOne(Fee::class, 'member_id');

    }

    public function latestPayment()
    {
        return $this->hasOne(Fee::class)->latestOfMany('payment_date');

    }

    public function attendance()
    {

        return $this->hasOne(GeneralMeetingAttendee::class,'member_id')->latestOfMany();
    }

    protected static function newFactory()
    {
        return \Database\Factories\MemberFactory::new();
    }
}
