<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// lista delle students
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/index', [StudentController::class, 'index'])->name('students.index');

// form di creazione student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// mostra il singolo student
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

// salva le modifiche sul db
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// elimina il student dal db
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// mostra il form di modifica 
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
