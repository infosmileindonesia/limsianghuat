<?php

namespace App\Livewire\Frontend\Contacts;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Settings\GeneralSetting;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Livewire\Component;
use Mail;

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

        $mailSettings = [
            'mail_username' => app(GeneralSetting::class)->mail_username,
            'mail_password' => app(GeneralSetting::class)->mail_password,
            'mail_host' => app(GeneralSetting::class)->mail_host,
            'mail_port' => app(GeneralSetting::class)->mail_port,
            'mail_encryption' => app(GeneralSetting::class)->mail_encryption,
            'mail_from_address' => app(GeneralSetting::class)->mail_from_address,
        ];

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

        $mailer = FacadesMail::build([
            'transport' => 'smtp',
            'host' => $mailSettings['mail_host'],
            'port' => $mailSettings['mail_port'],
            'encryption' => $mailSettings['mail_encryption'],
            'username' => $mailSettings['mail_username'],
            'password' => $mailSettings['mail_password'],
            'from' => $mailSettings['mail_from_address'],
        ]);

        // Send the email using the ContactMail Mailable
        $mailer->to(app(GeneralSetting::class)->mail_recipient)
            ->send(new ContactMail($contact, $mailSettings));

        // Optionally, you can show a success message or redirect the user
        session()->flash('contact_success', 'Your message has been sent successfully!');

        // Reset the form fields
        $this->reset(['full_name', 'company', 'email', 'phone_number', 'message']);
    }
}
