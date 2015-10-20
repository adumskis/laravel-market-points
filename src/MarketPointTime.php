<?php

namespace Artme\MarketPoints;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MarketPointTime extends Model
{
    protected $fillable = [
        'market_point_id',
        'date',
        'starts_at',
        'ends_at'
    ];

    public $timestamps = false;
}
