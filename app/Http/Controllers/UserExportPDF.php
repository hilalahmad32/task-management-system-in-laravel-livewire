<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UserExportPDF extends Controller
{
    public function index()
    {
        $tasks = User::get();
        return view('livewire.components.userExportPDF', compact('users'));
    }

    public function exportPDF()
    {
        $users = User::all();
        $pdf = PDF::loadView('livewire.components.userExportPDF', ['users' => $users]);
        return $pdf->download('user' . rand(1, 1000) . '.pdf');
    }
}
