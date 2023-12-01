<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NetballFixture;

class NetballFixture extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'match' => 'integer',
       
    ];


    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }
    
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }


}
