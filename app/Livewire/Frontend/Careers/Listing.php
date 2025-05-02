<?php

namespace App\Livewire\Frontend\Careers;

use Livewire\Component;

class Listing extends Component
{

    public $listings = null;

    public $selectedDepartment = [];
    public $stateSelected = [];
    public $levelSelected = [];

    public $allStateSelected = false;

    public $selectedDepartmentLabel = null;

    public $departments = [
        'Sales',
        'Marketing',
        'Finance',
        'Accounting',
    ];

    public $states = [
        'Jakarta',
        'Bandung',
        'Surabaya',
        'Yogyakarta',
        'Bali',
    ];

    public $levels = [
        'Experienced',
        'Fresh Graduate',
    ];

    public $filteredListings = null;

    public function updatedAllStateSelected($value)
    {
        if ($value) {
            $this->stateSelected = $this->states;
        } else {
            $this->stateSelected = [];
        }
    }

    public function updatedSelectedDepartment($value)
    {
        // only allow one department to be selected
        $this->selectedDepartment = [$value];
        $this->selectedDepartmentLabel = $this->selectedDepartment[0];

        // filter listings by department
        $this->filteredListings = $this->listings->filter(function ($listing) use ($value) {
            return $listing->department === $value;
        });
    }

    public function updatedLevelSelected($value)
    {
        // only allow one level to be selected
        $this->levelSelected = [$value];

        // filter listings by level
        $this->filteredListings = $this->listings->filter(function ($listing) use ($value) {
            return $listing->level === $value;
        });
    }


    public function removeFilters()
    {
        $this->selectedDepartment = [];
        $this->stateSelected = [];
        $this->levelSelected = [];
        $this->allStateSelected = false;
    }


    public function mount()
    {
        $listings = [
            [
                'title' => 'Sales Supervisor',
                'department' => 'Sales',
                'location' => 'Jakarta',
                'level' => 'Experienced',
                'description' => 'We’re looking for a Sales Supervisor to join our team.',
            ],
            [
                'title' => 'Admin Accounting',
                'department' => 'Accounting',
                'location' => 'Jakarta',
                'level' => 'Experienced',
                'description' => 'We’re looking for an Admin Accounting to join our team.',
            ],
            [
                'title' => 'Marketing Executive',
                'department' => 'Marketing',
                'location' => 'Bandung',
                'level' => 'Fresh Graduate',
                'description' => 'We’re looking for a Marketing Executive to join our team.',
            ],
            [
                'title' => 'Finance Staff',
                'department' => 'Finance',
                'location' => 'Surabaya',
                'level' => 'Experienced',
                'description' => 'We’re looking for a Finance Staff to join our team.',
            ],
            [
                'title' => 'Sales Associate',
                'department' => 'Sales',
                'location' => 'Yogyakarta',
                'level' => 'Fresh Graduate',
                'description' => 'We’re looking for a Sales Associate to join our team.',
            ],
        ];

        $this->listings = collect($listings)->map(function ($listing) {
            return (object) $listing;
        });

        $this->filteredListings = $this->listings;
    }


    public function render()
    {
        return view('livewire.frontend.careers.listing');
    }
}
