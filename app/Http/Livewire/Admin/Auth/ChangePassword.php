<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $username;
    public $password;
    public function render()
    {
        return view('livewire.admin.auth.change-password')->layout('layout.admin-app');
    }

    public function changePassword()
    {
        $this->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        $admins = Admin::where('username', $this->username)->first();
        if ($admins) {
            $admins->password = Hash::make($this->password);
            $admins->save();
            $this->username = "";
            $this->password = "";
            session()->flash('success', 'Successfull password change');
        } else {
            session()->flash('error', 'Invalid Username');
        }
    }
}
