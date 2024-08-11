<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grouping extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contigent()
    {
        return $this->belongsTo(Contigent::class, 'contigent_id');
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }

}
