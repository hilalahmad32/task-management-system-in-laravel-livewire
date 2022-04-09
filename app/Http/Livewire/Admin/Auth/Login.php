<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layout.admin-login');
    }
}
