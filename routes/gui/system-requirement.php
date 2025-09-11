<?php

use App\Component\SystemRequirement\Application\UseCaseCreate;
use Illuminate\Support\Facades\Route;

// 要件定義業務
Route::prefix('system-requirement')->group(function () {
    Route::get('use-case/new', [UseCaseCreate\Controller::class, 'new'])->name('system-requirement.use-case.new');
});
