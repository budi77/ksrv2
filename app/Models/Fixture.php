<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
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

    public function group()
{
    return $this->hasOne(Grouping::class, 'contigent_id');

}

public function setResult1Attribute($input)
{
    $this->attributes['result1'] = $input ? $input : null;
}

public function setResult2Attribute($input)
{
    $this->attributes['result2'] = $input ? $input : null;
}

public function contigent1()
{
    return $this->belongsTo(Contigent::class, 'contigent1_id');
}

public function contigent2()
{
    return $this->belongsTo(Contigent::class, 'contigent2_id');
}

public function getWonAttribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id'])->whereRaw('result1 > result2');
            })->orWhere(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id'])->whereRaw('result1 < result2');
            });
        })
        ->where('stage', 'Kumpulan')
        ->count();
}


public function getTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')

        ->count();
}

public function getLostAttribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id'])->whereRaw('result1 < result2');
            })->orWhere(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id'])->whereRaw('result1 > result2');
            });
        })
        ->where('stage', 'Kumpulan')

        ->count();
}

public function getGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')

        ->sum('result1');
}

public function getGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')

        ->sum('result2');
}

public function getAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')

        ->sum('result2');
}

public function getAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')

        ->sum('result1');
}

public function getPointsAttribute()
{
    return $this->getWonAttribute() * 3 + $this->getTiedAttribute() * 1;
}

public function getVolleyPointsAttribute()
{
    return $this->getWonAttribute() * 2;
}

public function getGoalAttribute()
{
    return $this->getGoalResult1Attribute() + $this->getGoalResult2Attribute() ;
}

public function getAgainstAttribute()
{
    return $this->getAgainstResult1Attribute() + $this->getAgainstResult2Attribute() ;
}

public function getGoalDifferenceAttribute()
{
    return $this->getGoalAttribute() - $this->getAgainstAttribute() ;
}

}
