<?php

namespace App\Livewire\Frontend\Careers;

use Livewire\Attributes\Computed;
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
        'IT',
        'Logistics',
        'HR & Legal',
    ];

    public $availableDepartments = [
        'Sales' => 0,
        'Marketing' => 0,
        'Finance' => 0,
        'Accounting' => 0,
        'IT' => 0,
        'Logistics' => 0,
        'HR & Legal' => 0,
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

    public function setDepartment($department)
    {
        if ($department === 'all') {
            $this->selectedDepartment = [];
            $this->selectedDepartmentLabel = null;

            $this->filteredListings = $this->listings;

            return;
        }

        $this->selectedDepartment = [$department];
        $this->selectedDepartmentLabel = $department;

        // filter listings by department
        $this->filteredListings = $this->listings->filter(function ($listing) use ($department) {
            return $listing->department === $department;
        });
    }

    public function updatedSelectedDepartment($value, $key)
    {
        if ($value === '__rm__') {
            // remove the department from the selected department
            unset($this->selectedDepartment[$key]);
            $this->selectedDepartment = array_values($this->selectedDepartment);
            $this->selectedDepartmentLabel = null;

            if (empty($this->selectedDepartment)) {
                $this->filteredListings = $this->listings;
                return;
            }
        }

        // only allow one department to be selected
        $this->selectedDepartment = [$value];
        $this->selectedDepartmentLabel = $this->selectedDepartment[0];


        $this->getFilteredListings();
    }

    public function getFilteredListings()
    {
        $this->filteredListings = $this->listings;

        if (!empty($this->selectedDepartment)) {
            $this->filteredListings = $this->filteredListings->filter(function ($listing) {
                return in_array($listing->department, $this->selectedDepartment);
            });
        }

        if (!empty($this->stateSelected)) {
            $this->filteredListings = $this->filteredListings->filter(function ($listing) {
                return in_array($listing->location, $this->stateSelected);
            });
        }

        if (!empty($this->levelSelected)) {
            $this->filteredListings = $this->filteredListings->filter(function ($listing) {
                return in_array($listing->level, $this->levelSelected);
            });
        }
    }

    public function updatedLevelSelected($value)
    {
        $this->getFilteredListings();
    }


    public function removeFilters()
    {
        $this->selectedDepartment = [];
        $this->stateSelected = [];
        $this->levelSelected = [];
        $this->allStateSelected = false;

        $this->selectedDepartmentLabel = null;

        $this->getFilteredListings();
    }

    #[Computed()]
    public function hasFilters()
    {
        return !empty($this->selectedDepartment) || !empty($this->stateSelected) || !empty($this->levelSelected);
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
            [
                'title' => 'Web Developer',
                'department' => 'IT',
                'location' => 'Bali',
                'level' => 'Experienced',
                'description' => 'We’re looking for a Web Developer to join our team.',
            ],
            [
                'title' => 'Logistics Coordinator',
                'department' => 'Logistics',
                'location' => 'Jakarta',
                'level' => 'Experienced',
                'description' => 'We’re looking for a Logistics Coordinator to join our team.',
            ],
            [
                'title' => 'Human Resources Manager',
                'department' => 'HR & Legal',
                'location' => 'Bandung',
                'level' => 'Experienced',
                'description' => 'We’re looking for a Human Resources Manager to join our team.',
            ]
        ];

        // Count the number of listings in each department
        foreach ($listings as $listing) {
            if (isset($this->availableDepartments[$listing['department']])) {
                $this->availableDepartments[$listing['department']]++;
            }
        }

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
