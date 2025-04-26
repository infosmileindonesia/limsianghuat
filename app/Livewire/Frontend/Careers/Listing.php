<?php

namespace App\Livewire\Frontend\Careers;

use Livewire\Component;

class Listing extends Component
{

    public $listings = null;

    public $selectedDepartment = [];
    public $stateSelected = [];
    public $levelSelected = [];

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
            ]
        ];

        $this->listings = collect($listings)->map(function ($listing) {
            return (object) $listing;
        });
    }


    public function render()
    {
        return view('livewire.frontend.careers.listing');
    }
}
