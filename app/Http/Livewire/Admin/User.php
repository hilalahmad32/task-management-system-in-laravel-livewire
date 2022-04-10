<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $phone;

    public $edit_id;
    public $edit_fname;
    public $edit_lname;
    public $edit_email;
    public $edit_phone;

    use WithPagination;

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }
    public function render()
    {
        $users = ModelsUser::orderBy('id', 'desc')->paginate(3);
        return view('livewire.admin.user', compact('users'))->layout('layout.admin-app');
    }

    public function resetField()
    {
        $this->fname = "";
        $this->lname = "";
        $this->email = "";
        $this->password = "";
        $this->phone = "";

        $this->edit_id = "";
        $this->edit_fname = "";
        $this->edit_lname = "";
        $this->edit_email = "";
        $this->edit_phone = "";
    }

    public function store()
    {
        $users = new ModelsUser();
        $this->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required'],
            'phone' => ['required', 'string'],
        ]);
        $users->fname = $this->fname;
        $users->lname = $this->lname;
        $users->email = $this->email;
        $users->phone = $this->phone;
        $users->password = Hash::make($this->password);
        $result = $users->save();
        if ($result) {
            $this->resetField();
            $this->emit('addUser');
            session()->flash('success', 'User Add Successfully');
        }
    }

    public function editUser($id)
    {
        $users = ModelsUser::findOrFail($id);
        $this->edit_id = $users->id;
        $this->edit_fname = $users->fname;
        $this->edit_lname = $users->lname;
        $this->edit_email = $users->email;
        $this->edit_phone = $users->phone;
    }

    public function update($id)
    {
        $users = ModelsUser::findOrFail($id);
        $this->validate([
            'edit_fname' => ['required', 'string'],
            'edit_lname' => ['required', 'string'],
            'edit_email' => ['required', 'string', 'email'],
            'edit_phone' => ['required', 'string'],
        ]);
        $users->fname = $this->edit_fname;
        $users->lname = $this->edit_lname;
        $users->email = $this->edit_email;
        $users->phone = $this->edit_phone;
        $result = $users->save();
        if ($result) {
            $this->resetField();
            $this->emit('updateUser');
            session()->flash('success', 'User Update Successfully');
        }
    }
    public function deleteUser($id)
    {
        $result = ModelsUser::findOrFail($id)->delete();
        if ($result) {
            session()->flash('success', 'User Delete Successfully');
        }
    }
}
