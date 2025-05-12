<?php

use App\Http\Controllers\FrontendPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendPageController::class, 'index'])->name('home');

Route::get('about',[FrontendPageController::class, 'about'])->name('about');
Route::get('brands',[FrontendPageController::class, 'brands'])->name('brands');
Route::get('distribution',[FrontendPageController::class, 'distribution'])->name('distribution');
Route::get('contact',[FrontendPageController::class, 'contact'])->name('contact');

Route::get('careers',[FrontendPageController::class, 'careers'])->name('careers');

