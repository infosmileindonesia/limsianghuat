<?php

namespace App\View\Components\Frontend;

use App\Models\Distribution;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DistributionThumbnail extends Component
{
    public Distribution $distribution;

    /**
     * Create a new component instance.
     */
    public function __construct(Distribution $distribution)
    {
        $this->distribution = $distribution;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Ensure the distribution has media loaded
        if (!$this->distribution->relationLoaded('media')) {
            $this->distribution->load('media');
        }

        return view('components.frontend.distribution-thumbnail');
    }
}
