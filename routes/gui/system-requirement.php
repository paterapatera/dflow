<?php

use App\Component\SystemRequirement\Feature\UsecaseCreate;
use Illuminate\Support\Facades\Route;

// 要件定義業務
Route::prefix('system-requirement')->group(function () {
    Route::get('usecase/new', [UsecaseCreate\Controller::class, 'new'])->name('system-requirement.usecase.new');
});
