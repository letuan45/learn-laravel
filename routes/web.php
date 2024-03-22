<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, "index"])->name("dashboard");

Route::get('/idea/{idea}', [IdeaController::class, "show"])->name("idea.show");

Route::get('/idea/{idea}/edit', [IdeaController::class, "edit"])->name("idea.edit");

Route::put('/idea/{idea}', [IdeaController::class, "update"])->name("idea.update");

Route::post('/idea', [IdeaController::class, "create"])->name("idea.create");

Route::delete('/idea/{idea}', [IdeaController::class, "destroy"])->name("idea.destroy");
