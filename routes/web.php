<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[PageController::class, 'homepage'])->name('homepage');

Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcement.create');

Route::get('/categoria/{category}',[PageController::class, 'categoryShow'])->name('categoryShow');

Route::get('/dettail/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');


Route::get('/annuncio', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');

// Home revisore
Route::get('/home/revisore', [RevisorController::class, 'index'])->middleware('auth')->name('revisore.index');

// si
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'OkAnnuncio'])->name('revisore.OkAnnuncio');

// no
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'NoAnnuncio'])->name('revisore.NoAnnuncio');