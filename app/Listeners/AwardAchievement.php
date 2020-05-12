<?php

namespace App\Listeners;

use App\Events\ProductPurchase;
use App\Events\ProductPurchased;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AwardAchievement
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductPurchase  $event
     * @return void
     */
    public function handle(ProductPurchased $event)
    {
        var_dump('check new achievement');
    }
}
