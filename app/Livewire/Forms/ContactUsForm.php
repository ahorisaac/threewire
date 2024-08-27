<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ContactUsForm extends Form
{
    #[Rule("required|email|max:255")]
    public $email;

    #[Rule("required|min:3|max:255")]
    public $subject;

    #[Rule("required|min:5|max:255")]
    public $message;

    public function sendEmail()
    {
        sleep(3);
    }
}
