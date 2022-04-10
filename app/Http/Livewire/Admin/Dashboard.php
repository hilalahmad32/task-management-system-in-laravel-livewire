<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalTasks;
    public $totalUsers;
    public $totalCategorys;
    public $totalCompleteTasks;
    public function render()
    {
        $this->totalTasks = Task::count();
        $this->totalUsers = User::count();
        $this->totalCategorys = Category::count();
        $this->totalCompleteTasks = Task::where('status', 3)->count();
        return view('livewire.admin.dashboard')->layout('layout.admin-app');
    }
}
