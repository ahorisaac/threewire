<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Component;

class ContactUs extends Component
{
    public ContactUsForm $form;

    public function submitForm()
    {
        $this->form->validate();

        $this->form->sendEmail();

        // dd($this->form->all());

        session()->flash("success", "form submitted");

        $this->form->reset("subject", "message");
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
