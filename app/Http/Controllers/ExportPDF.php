<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportPDF extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('livewire.components.exportPDF', compact('categories'));
    }

    public function exportPDF()
    {
        $categories = Category::all();
        $pdf = PDF::loadView('livewire.components.exportPDF', ['categories' => $categories]);
        return $pdf->download('category' . rand(1, 1000) . '.pdf');
    }
}
