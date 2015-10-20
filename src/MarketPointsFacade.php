<?

namespace Artme\MarketPoints;

use Illuminate\Support\Facades\Facade;

class MarketPointsFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'market_points';
    }
}
