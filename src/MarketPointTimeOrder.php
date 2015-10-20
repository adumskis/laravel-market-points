<?php

namespace Artme\MarketPoints;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MarketPointTimeOrder extends Model
{
    protected $fillable = [
        'market_point_time_id',
        'order_id'
    ];

    public $timestamps = false;
}
