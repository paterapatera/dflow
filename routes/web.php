<?php

use App\Component\SystemRequirment\Feature\Usecase\UsecaseController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

    
// System Requirement Routes
Route::prefix('system-requirement')->group(function () {
    Route::get('usecase/new', [UsecaseController::class, 'new'])->name('system-requirement.usecase.new');
});
