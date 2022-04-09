<?php

namespace App\Http\Livewire\User\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.user.auth.logout');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('users.login'));
    }
}
