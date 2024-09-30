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

public function getFirstAttribute()
{
    return Standing::whereRank(1)->where('contigent_id', $this->attributes['id'])->count();
}

public function getSecondAttribute()
{
    return Standing::whereRank(2)->where('contigent_id', $this->attributes['id'])->count();
}

public function getThirdAttribute()
{
    return Standing::whereRank(3)->where('contigent_id', $this->attributes['id'])->count();
}

public function getForthAttribute()
{
    return Standing::whereRank(4)->where('contigent_id', $this->attributes['id'])->count();
}

public function getStandingPointsAttribute()
{
    return $this->getFirstAttribute() * 5 + $this->getSecondAttribute() * 3 + $this->getThirdAttribute() * 2 + $this->getForthAttribute() * 1;
}


// BALAPAN

public function getBlFirstAttribute()
{
    return Standing::where('contigent_id', $this->attributes['id'])->whereRank(1)
        ->whereIn('sport_id', ['14','15','16','17','13'])
        ->count();
}
public function getBlSecondAttribute()
{
    return Standing::where('contigent_id', $this->attributes['id'])->whereRank(2)
        ->whereIn('sport_id', ['14','15','16','17','13'])
        ->count();
}
public function getBlThirdAttribute()
{
    return Standing::where('contigent_id', $this->attributes['id'])->whereRank(3)
        ->whereIn('sport_id', ['14','15','16','17','13'])
        ->count();
}
public function getBlForthAttribute()
{
    return Standing::where('contigent_id', $this->attributes['id'])->whereRank(4)
        ->whereIn('sport_id', ['14','15','16','17','13'])
        ->count();
}
public function getBlStandingPointsAttribute()
{
    return $this->getBlFirstAttribute() * 5 + $this->getBlSecondAttribute() * 3 + $this->getBlThirdAttribute() * 2 + $this->getBlForthAttribute() * 1;
}



//END BALAPAN


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





// BOLA TAMPAR WANITA

public function getBtwWonAttribute()
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
        ->where('sport_id', 5)
        ->count();
}

public function getBtwTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 5)
        ->count();
}

public function getBtwLostAttribute()
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
        ->where('sport_id', 5)
        ->count();
}


public function getBtwGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 5)
        ->sum('result1');
}


public function getBtwGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 5)
        ->sum('result2');
}

public function getBtwAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 5)
        ->sum('result2');
}

public function getBtwAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 5)
        ->sum('result1');
}

public function getBtwPointsAttribute()
{
    return $this->getBtwWonAttribute() * 2;
}



public function getBtwGoalAttribute()
{
    return $this->getBtwGoalResult1Attribute() + $this->getBtwGoalResult2Attribute() ;
}

public function getBtwAgainstAttribute()
{
    return $this->getBtwAgainstResult1Attribute() + $this->getBtwAgainstResult2Attribute() ;
}

public function getBtwGoalDifferenceAttribute()
{
    return $this->getBtwGoalAttribute() - $this->getBtwAgainstAttribute() ;
}

// end bola tampar wanita



// BOLA Ping Pong

public function getPpWonAttribute()
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
        ->where('sport_id', 6)
        ->count();
}

public function getPpTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 6)
        ->count();
}

public function getPpLostAttribute()
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
        ->where('sport_id', 6)
        ->count();
}


public function getPpGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 6)
        ->sum('result1');
}


public function getPpGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 6)
        ->sum('result2');
}

public function getPpAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 6)
        ->sum('result2');
}

public function getPpAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 6)
        ->sum('result1');
}

public function getPpPointsAttribute()
{
    return $this->getPpWonAttribute() * 3;
}



public function getPpGoalAttribute()
{
    return $this->getPpGoalResult1Attribute() + $this->getPpGoalResult2Attribute() ;
}

public function getPpAgainstAttribute()
{
    return $this->getPpAgainstResult1Attribute() + $this->getPpAgainstResult2Attribute() ;
}

public function getPpGoalDifferenceAttribute()
{
    return $this->getPpGoalAttribute() - $this->getPpAgainstAttribute() ;
}

// end ping pong


// FUTSAL

public function getFsWonAttribute()
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
        ->where('sport_id', 11)
        ->count();
}

public function getFsTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 11)
        ->count();
}

public function getFsLostAttribute()
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
        ->where('sport_id', 11)
        ->count();
}


public function getFsGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 11)
        ->sum('result1');
}


public function getFsGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 11)
        ->sum('result2');
}

public function getFsAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 11)
        ->sum('result2');
}

public function getFsAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 11)
        ->sum('result1');
}

public function getFsPointsAttribute()
{
    return $this->getFsWonAttribute() * 3 + $this->getFsTiedAttribute() * 1;
}

public function getFsGoalAttribute()
{
    return $this->getFsGoalResult1Attribute() + $this->getFsGoalResult2Attribute() ;
}

public function getFsAgainstAttribute()
{
    return $this->getFsAgainstResult1Attribute() + $this->getFsAgainstResult2Attribute() ;
}

public function getFsGoalDifferenceAttribute()
{
    return $this->getFsGoalAttribute() - $this->getFsAgainstAttribute() ;
}

// end futsal




// sepak takraw

public function getStWonAttribute()
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
        ->where('sport_id', 7)
        ->count();
}

public function getStTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 7)
        ->count();
}

public function getStLostAttribute()
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
        ->where('sport_id', 7)
        ->count();
}


public function getStGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 7)
        ->sum('result1');
}


public function getStGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 7)
        ->sum('result2');
}

public function getStAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 7)
        ->sum('result2');
}

public function getStAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 7)
        ->sum('result1');
}

public function getStPointsAttribute()
{
    return $this->getStWonAttribute() * 3;
}



public function getStGoalAttribute()
{
    return $this->getStGoalResult1Attribute() + $this->getStGoalResult2Attribute() ;
}

public function getStAgainstAttribute()
{
    return $this->getStAgainstResult1Attribute() + $this->getStAgainstResult2Attribute() ;
}

public function getStGoalDifferenceAttribute()
{
    return $this->getStGoalAttribute() - $this->getStAgainstAttribute() ;
}

// end sepak takraw



// Karom

public function getKrWonAttribute()
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
        ->where('sport_id', 8)
        ->count();
}

public function getKrTiedAttribute()
{
    return Fixture::whereNotNull('result1')
        ->whereRaw('result1 = result2')
        ->where(function($query) {
            $query->where('contigent1_id', $this->attributes['id'])
                ->orWhere('contigent2_id', $this->attributes['id']);
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 8)
        ->count();
}

public function getKrLostAttribute()
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
        ->where('sport_id', 8)
        ->count();
}


public function getKrGoalResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 8)
        ->sum('result1');
}


public function getKrGoalResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 8)
        ->sum('result2');
}

public function getKrAgainstResult1Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent1_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 8)
        ->sum('result2');
}

public function getKrAgainstResult2Attribute()
{
    return Fixture::whereNotNull('result1')
        ->where(function($query) {
            $query->where(function($query2) {
                $query2->where('contigent2_id', $this->attributes['id']);
            });
        })
        ->where('stage', 'Kumpulan')
        ->where('sport_id', 8)
        ->sum('result1');
}

public function getKrPointsAttribute()
{
    return $this->getKrWonAttribute() * 3;
}



public function getKrGoalAttribute()
{
    return $this->getKrGoalResult1Attribute() + $this->getKrGoalResult2Attribute() ;
}

public function getKrAgainstAttribute()
{
    return $this->getKrAgainstResult1Attribute() + $this->getKrAgainstResult2Attribute() ;
}

public function getKrGoalDifferenceAttribute()
{
    return $this->getKrGoalAttribute() - $this->getKrAgainstAttribute() ;
}

// end karom



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
