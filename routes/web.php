<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\EventsController;


Route::get('/index',[indexController::class, 'index'])->name('index');

Route::get('/Aboutus',[AboutusController::class,'index'])->name('Aboutus');

Route::get('/Contactus',[ContactusController::class,'index'])->name('Contactus');

Route::get('/Events', [EventsController::class, 'index'])->name('Events');
