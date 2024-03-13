<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\subject\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController1;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/notlog', function () {
    return view('notlog');
})->name('notlog');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Para registrar un usuario.
    Route::post('/procesar_formulario', [StudentController1::class, 'store']);

    //Para traer a todos los alumnos.
    Route::get('/alumno', [StudentController1::class, 'index'])->name('alumno');
    Route::resource('estudiantes', StudentController::class);
    Route::get('/form', [StudentController1::class, 'index']);
    Route::post('/post-form', [StudentController1::class, 'store']);

    Route::resource('asignaturas', SubjectController::class);
    Route::get('reportes/{estudiantes}',[ReportsController::class,'print_cardex'])->name('imprimir.cardex');
});





// Route::get('/Login', function (){
//     return view('login');
// });

// Route::view('NotLog', "NotLog")->name("NotLog");

// Route::middleware('auth')->group(function (){
//     Route::get('/alumno', [StudentController1::class, 'index']);
//     Route::resource('estudiantes', StudentController::class);
// });

require __DIR__.'/auth.php';
