<?php

namespace Artme\MarketPoints;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MarketPoint extends Model
{
    protected $fillable = [
        'lat',
        'lng',
        'address',
        'name'
    ];

    public function market_point_times(){
        return $this->hasMany('Artme\MarketPoints\MarketPointTime');
    }

    public function month_market_point_times(){
        return $this->hasMany('Artme\MarketPoints\MarketPointTime')
            ->where('date', '>=', Carbon::now()->toDateString())
            ->where('date', '<=', Carbon::now()->addMonth()->toDateString());
    }
}
