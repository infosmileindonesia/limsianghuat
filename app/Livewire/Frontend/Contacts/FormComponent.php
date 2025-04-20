<?php

namespace App\Livewire\Frontend\Contacts;

use App\Models\Contact;
use Livewire\Component;

class FormComponent extends Component
{

    public $full_name = '';
    public $company = '';
    public $email = '';
    public $phone_number = '';
    public $message = '';

    public function render()
    {
        return view('livewire.frontend.contacts.form-component');
    }

    public function submit()
    {

        $this->validate([
            'full_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        // Here you can handle the form submission, like sending an email or saving to the database
        $contact = Contact::create([
            'full_name' => $this->full_name,
            'company' => $this->company,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'message' => $this->message,
        ]);

        // Optionally, you can show a success message or redirect the user
        session()->flash('contact_success', 'Your message has been sent successfully!');

        // Reset the form fields
        $this->reset(['full_name', 'company', 'email', 'phone_number', 'message']);
    }
}
