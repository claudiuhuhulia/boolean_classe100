<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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

Route::get('students/trash', [StudentController::class, 'trash'])->name('students.trash'); //pagina cestino

// mostra il singolo student
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

// salva le modifiche sul db
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// elimina il student dal db
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// mostra il form di modifica 
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');


Route::patch('/students/{student}/restore', [StudentController::class, 'restore'])->name('students.restore'); // recupero studente
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy'); // sposta studente nel cestino
Route::delete('/students/{student}/drop', [StudentController::class, 'drop'])->name('students.drop'); // cancellazione studente dal db
