<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
