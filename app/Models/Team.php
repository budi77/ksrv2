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

    public function group()
    {
        return $this->hasOne(Group::class, 'team_id');

    }

    public function setResult1Attribute($input)
    {
        $this->attributes['result1'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setResult2Attribute($input)
    {
        $this->attributes['result2'] = $input ? $input : null;
    }


    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }
    
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function getWonAttribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team1_id', $this->attributes['id'])->whereRaw('result1 > result2');
                })->orWhere(function($query2) {
                    $query2->where('team2_id', $this->attributes['id'])->whereRaw('result1 < result2');
                });
            })
            ->count();
    }

    public function getTiedAttribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->whereRaw('result1 = result2')
            ->where(function($query) {
                $query->where('team1_id', $this->attributes['id'])
                    ->orWhere('team2_id', $this->attributes['id']);
            })
            ->count();
    }

    public function getLostAttribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team1_id', $this->attributes['id'])->whereRaw('result1 < result2');
                })->orWhere(function($query2) {
                    $query2->where('team2_id', $this->attributes['id'])->whereRaw('result1 > result2');
                });
            })
            ->count();
    }

    public function getGoalResult1Attribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team1_id', $this->attributes['id']);
                });
            })
            ->sum('result1');
    }
    public function getGoalResult2Attribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team2_id', $this->attributes['id']);
                });
            })
            ->sum('result2');
    }

    public function getAgainstResult1Attribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team1_id', $this->attributes['id']);
                });
            })
            ->sum('result2');
    }
    public function getAgainstResult2Attribute()
    {
        return NetballFixture::whereNotNull('result1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('team2_id', $this->attributes['id']);
                });
            })
            ->sum('result1');
    }


    public function getPointsAttribute()
    {
        return $this->getWonAttribute() * 3 + $this->getTiedAttribute() * 1;
    }

    public function getGoalAttribute()
    {
        return $this->getGoalResult1Attribute() + $this->getGoalResult2Attribute() ;
    }

    public function getAgainstAttribute()
    {
        return $this->getAgainstResult1Attribute() + $this->getAgainstResult2Attribute() ;
    }


}
