<?php

use App\Http\Controllers\ExportPDF;
use App\Http\Controllers\TaskExportPDF;
use App\Http\Controllers\UserExportPDF;
use App\Http\Livewire\Admin\Auth\ChangePassword;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Task;
use App\Http\Livewire\Admin\UpdateProfile;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\User\Auth\Login as AuthLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', AuthLogin::class)->name('users.login');
Route::middleware(['auth'])->group(function () {
    Route::get('/users/tasks', Task::class)->name('users.tasks');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/', AuthLogin::class)->name('users.login');
});

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin', Login::class)->name('admin.login');
});
Route::middleware(['auth:admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
        Route::get('/category', Category::class)->name('admin.category');
        Route::get('/tasks', Task::class)->name('admin.tasks');
        Route::get('/users', User::class)->name('admin.users');
        Route::get('/change-password', ChangePassword::class)->name('admin.changePassword');
        Route::get('/update-profile', UpdateProfile::class)->name('admin.updateProfile');
        Route::get('/pdf', [ExportPDF::class, 'exportPDF'])->name('admin.exportPDF');
        Route::get('/pdf', [TaskExportPDF::class, 'exportPDF'])->name('admin.taskexportPDF');
        Route::get('/pdf', [UserExportPDF::class, 'exportPDF'])->name('admin.userexportPDF');
    });
});
