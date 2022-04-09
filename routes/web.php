<?php

use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Task;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\User\Auth\Login as AuthLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', AuthLogin::class)->name('users.login');
Route::middleware(['auth'])->group(function () {
    Route::get('/users', Task::class)->name('users.tasks');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/', AuthLogin::class)->name('users.login');
});

Route::get('/admin', Login::class)->name('admin.login');
Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/category', Category::class)->name('admin.category');
    Route::get('/tasks', Task::class)->name('admin.tasks');
    Route::get('/users', User::class)->name('admin.users');
});
