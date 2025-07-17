<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Distribution;

class DistributionComposer
{

    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        // Fetch all distributions from the database
        $distributions = Distribution::select('menu_name', 'slug')->get();

        // Share the distributions with the view
        $view->with('distributions_list', $distributions);
    }

}

