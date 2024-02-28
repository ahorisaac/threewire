<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{
    public $username = "testuser";

    public function createNewUser()
    {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '123456'
        ]);
    }

    public function render()
    {
        $title = 'Test';

        $users = User::all();

        return view('livewire.clicker', compact('title', 'users'));
    }
}
