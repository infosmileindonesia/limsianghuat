<?php

namespace App\Livewire\Frontend\Careers;

use App\Models\Career;
use App\Models\CareerArea;
use App\Models\CareerDepartment;
use App\Models\CareerLevel;
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

    public $departments;

    public $availableDepartments = [];

    public $states;

    public $levels;

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
                return $listing->department_id === $this->selectedDepartment[0];
            });
        }

        if (!empty($this->stateSelected)) {
            $this->filteredListings = $this->filteredListings->filter(function ($listing) {
                return $listing->areas->pluck('id')->intersect($this->stateSelected)->isNotEmpty();
            });
        }

        if (!empty($this->levelSelected)) {
            $this->filteredListings = $this->filteredListings->filter(function ($listing) {
                return $listing->levels->pluck('id')->intersect($this->levelSelected)->isNotEmpty();
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
        $locale = app()->getLocale();

        $listings = Career::with(['department', 'levels', 'areas'])
            ->where('is_active', true)
            ->get();

        $departments = CareerDepartment::select(['id', 'name', 'slug'])
            ->get();

        foreach ($departments as $department) {
            $this->availableDepartments[$department->id] = [
                'name' => $department->getTranslation('name', $locale),
                'slug' => $department->slug,
                'count' => 0, // Initialize count
            ];
        }

        $this->departments = $departments;
        $this->states = CareerArea::select(['id', 'name', 'slug'])
            ->get();
        $this->levels = CareerLevel::select(['id', 'name'])
            ->get();

        // Count the number of listings in each department
        foreach ($listings as $listing) {
            $this->availableDepartments[$listing->department->id]['count']++;
        }

        $this->listings = $listings;
        // Initialize filtered listings to all listings
        if ($this->listings->isEmpty()) {
            $this->filteredListings = collect();
            return;
        }

        $this->filteredListings = $this->listings;
    }

    public function render()
    {
        return view('livewire.frontend.careers.listing');
    }
}
