<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;


class Federation extends Model
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


    public function payments()
    {

        return $this->hasMany(FederationFee::class, 'federation_id');

    }

    public function latestPayment() : HasOne
    {
        return $this->hasOne(FederationFee::class, 'federation_id')->latestOfMany();
    }

    

}
