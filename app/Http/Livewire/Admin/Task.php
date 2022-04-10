<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Task as ModelsTask;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Task extends Component
{
    public $cat_id,
        $user_id,
        $title,
        $description,
        $status,
        $start_date,
        $end_date;

    public $edit_id,
        $edit_cat_id,
        $edit_user_id,
        $edit_title,
        $edit_description,
        $edit_status,
        $edit_start_date,
        $edit_end_date;

    public $categories,
        $users;

    use WithPagination;

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }
    public function render()
    {
        $this->users = User::all();
        $this->categories = Category::all();
        if (!Auth::guard('admin')->user()) {
            if (Auth::user()->id) {
                $tasks = ModelsTask::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(3);
                return view('livewire.admin.task', compact('tasks'))->layout('layout.admin-app');
            }
        }

        $tasks = ModelsTask::orderBy('id', 'desc')->paginate(3);
        return view('livewire.admin.task', compact('tasks'))->layout('layout.admin-app');
    }

    public function resetField()
    {
        $this->cat_id = "";
        $this->user_id = "";
        $this->title = "";
        $this->description = "";
        $this->status = "";
        $this->start_date = "";
        $this->end_date = "";

        $this->edit_id = "";
        $this->edit_cat_id = "";
        $this->edit_user_id = "";
        $this->edit_title = "";
        $this->edit_description = "";
        $this->edit_status = "";
        $this->edit_start_date = "";
        $this->edit_end_date = "";
    }

    public function store()
    {
        $validate = $this->validate([
            'cat_id' => ['required'],
            'user_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'start_date' => ['required'],
            'status' => ['required'],
            'end_date' => ['required'],
        ]);

        $tasks = ModelsTask::create($validate);
        if ($tasks) {
            $this->resetField();
            $this->emit('addTasks');
            session()->flash('success', 'Tasks Add successfully');
        }
    }

    public function editTask($id)
    {
        $tasks = ModelsTask::findOrFail($id);
        $this->edit_id = $tasks->id;
        $this->edit_cat_id = $tasks->cat_id;
        $this->edit_user_id = $tasks->user_id;
        $this->edit_title = $tasks->title;
        $this->edit_description = $tasks->description;
        $this->edit_status = $tasks->status;
        $this->edit_start_date = $tasks->start_date;
        $this->edit_end_date = $tasks->end_date;
    }

    public function update($id)
    {
        $tasks = ModelsTask::findOrFail($id);

        if (Auth::check()) {
            $tasks->status = $this->edit_status;
            $result = $tasks->save();

            if ($result) {
                $this->resetField();
                $this->emit('updateTasks');
                session()->flash('success', 'Tasks Update successfully');
            }
        } else {
            $validate = $this->validate([
                'edit_cat_id' => ['required'],
                'edit_user_id' => ['required'],
                'edit_title' => ['required'],
                'edit_description' => ['required'],
                'edit_start_date' => ['required'],
                'edit_status' => ['required'],
                'edit_end_date' => ['required'],
            ]);
            $tasks->cat_id = $this->edit_cat_id;
            $tasks->user_id = $this->edit_user_id;
            $tasks->title = $this->edit_title;
            $tasks->description = $this->edit_description;
            $tasks->status = $this->edit_status;
            $tasks->start_date = $this->edit_start_date;
            $tasks->end_date = $this->edit_end_date;
            $result = $tasks->save();

            if ($result) {
                $this->resetField();
                $this->emit('updateTasks');
                session()->flash('success', 'Tasks Update successfully');
            }
        }
    }

    public function deleteTask($id)
    {
        $result = ModelsTask::findOrFail($id)->delete();
        if ($result) {
            session()->flash('success', 'Tasks Delete successfully');
        }
    }
}
