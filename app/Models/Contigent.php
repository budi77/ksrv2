<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contigent extends Model
{
    use HasFactory;

    protected $guarded = [];



  

public function grp(): HasOne
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


// bola sepak

public function getBsWonAttribute()
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
        ->where('sport_id', 1)
        ->count();
}

public function getBsTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 1)
        ->count();
}

public function getBsLostAttribute()
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
        ->where('sport_id', 1)
        ->count();
}


public function getBsGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 1)
        ->sum('result1');
}


public function getBsGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 1)
        ->sum('result2');
}

public function getBsAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 1)
        ->sum('result2');
}

public function getBsAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 1)
        ->sum('result1');
}

public function getBsPointsAttribute()
{
    return $this->getBsWonAttribute() * 3 + $this->getBsTiedAttribute() * 1;
}

public function getBsVolleyPointsAttribute()
{
    return $this->getBsWonAttribute() * 2;
}


public function getBsGoalAttribute()
{
    return $this->getBsGoalResult1Attribute() + $this->getBsGoalResult2Attribute() ;
}

public function getBsAgainstAttribute()
{
    return $this->getBsAgainstResult1Attribute() + $this->getBsAgainstResult2Attribute() ;
}

public function getBsGoalDifferenceAttribute()
{
    return $this->getBsGoalAttribute() - $this->getBsAgainstAttribute() ;
}

// end bola sepak



// bola jaring

public function getBjWonAttribute()
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
        ->where('sport_id', 2)
        ->count();
}

public function getBjTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 2)
        ->count();
}

public function getBjLostAttribute()
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
        ->where('sport_id', 2)
        ->count();
}


public function getBjGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 2)
        ->sum('result1');
}


public function getBjGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 2)
        ->sum('result2');
}

public function getBjAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 2)
        ->sum('result2');
}

public function getBjAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 2)
        ->sum('result1');
}

public function getBjPointsAttribute()
{
    return $this->getBjWonAttribute() * 3 + $this->getBjTiedAttribute() * 1;
}

// public function getBjVolleyPointsAttribute()
// {
//     return $this->getBjWonAttribute() * 2;
// }


public function getBjGoalAttribute()
{
    return $this->getBjGoalResult1Attribute() + $this->getBjGoalResult2Attribute() ;
}

public function getBjAgainstAttribute()
{
    return $this->getBjAgainstResult1Attribute() + $this->getBjAgainstResult2Attribute() ;
}

public function getBjGoalDifferenceAttribute()
{
    return $this->getBjGoalAttribute() - $this->getBjAgainstAttribute() ;
}

// end bola jaring




// BADMINTON

public function getBdWonAttribute()
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
        ->where('sport_id', 3)
        ->count();
}

public function getBdTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 3)
        ->count();
}

public function getBdLostAttribute()
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
        ->where('sport_id', 3)
        ->count();
}


public function getBdGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 3)
        ->sum('result1');
}


public function getBdGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 3)
        ->sum('result2');
}

public function getBdAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 3)
        ->sum('result2');
}

public function getBdAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 3)
        ->sum('result1');
}

public function getBdPointsAttribute()
{
    return $this->getBdWonAttribute() * 3 + $this->getBdTiedAttribute() * 1;
}

// public function getBdVolleyPointsAttribute()
// {
//     return $this->getBdWonAttribute() * 2;
// }


public function getBdGoalAttribute()
{
    return $this->getBdGoalResult1Attribute() + $this->getBdGoalResult2Attribute() ;
}

public function getBdAgainstAttribute()
{
    return $this->getBdAgainstResult1Attribute() + $this->getBdAgainstResult2Attribute() ;
}

public function getBdGoalDifferenceAttribute()
{
    return $this->getBdGoalAttribute() - $this->getBdAgainstAttribute() ;
}

// end badminton


// BOLA TAMPAR LELAKI

public function getBtlWonAttribute()
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
        ->where('sport_id', 4)
        ->count();
}

public function getBtlTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 4)
        ->count();
}

public function getBtlLostAttribute()
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
        ->where('sport_id', 4)
        ->count();
}


public function getBtlGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 4)
        ->sum('result1');
}


public function getBtlGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 4)
        ->sum('result2');
}

public function getBtlAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 4)
        ->sum('result2');
}

public function getBtlAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 4)
        ->sum('result1');
}

public function getBtlPointsAttribute()
{
    return $this->getBtlWonAttribute() * 2;
}

// public function getBdVolleyPointsAttribute()
// {
//     return $this->getBdWonAttribute() * 2;
// }


public function getBtlGoalAttribute()
{
    return $this->getBtlGoalResult1Attribute() + $this->getBtlGoalResult2Attribute() ;
}

public function getBtlAgainstAttribute()
{
    return $this->getBtlAgainstResult1Attribute() + $this->getBtlAgainstResult2Attribute() ;
}

public function getBtlGoalDifferenceAttribute()
{
    return $this->getBtlGoalAttribute() - $this->getBtlAgainstAttribute() ;
}

// end bola tampar lelaki





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
        ->where('sport_id', 1)
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
