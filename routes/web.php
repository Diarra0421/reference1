<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('departement.index', [DepartementController::class, 'index'])->name('depart.index');
Route::post('departement.store', [DepartementController::class, 'store'])->name('enregistrer.departement');
Route::get('departement.edit/{id}', [DepartementController::class, 'edit'])->name('edit.departement');
Route::post('departement.update/{id}', [DepartementController::class, 'update'])->name('update.departement');
Route::get('departement.supprimer/{id}', [DepartementController::class, 'destroy'])->name('supprimer.departement');






Route::get('personnel.index', [PersonnelController::class, 'index'])->name('personnel.index');
Route::post('personnel.store', [PersonnelController::class, 'store'])->name('enregistrer.personnel');