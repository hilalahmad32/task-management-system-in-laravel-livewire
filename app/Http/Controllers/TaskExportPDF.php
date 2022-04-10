<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TaskExportPDF extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        return view('livewire.components.taskExportPDF', compact('tasks'));
    }

    public function exportPDF()
    {
        $tasks = Task::all();
        $pdf = PDF::loadView('livewire.components.taskExportPDF', ['tasks' => $tasks]);
        return $pdf->download('task' . rand(1, 1000) . '.pdf');
    }
}
