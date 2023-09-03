<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Locker extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tenant() : HasOne
    {
        return $this->hasOne(LockerTenant::class, 'locker_id','id')->latestOfMany();
    }

    public function tenants() : HasMany
    {
        return $this->hasMany(LockerTenant::class, 'locker_id');
    }

}
