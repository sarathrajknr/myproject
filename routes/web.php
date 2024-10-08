<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BookController;


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
    // return view('welcome');
});
// Route::get('/students', function () {
//     return \App\Models\Student::get();
// });

//Students view apply data filter
Route::get('/students',[StudentController::class,'index'] )->name('students.index');

//Students data create & store
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');


//students data Edit/update

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

//student data delete

Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');





//Teachers Data

Route::get('/teachers',[TeacherController::class,'index'] )->name('teachers.index');
Route::get('/teachers/create',[TeacherController::class,'create'])->name('teachers.create');
Route::post('/teachers/store',[TeacherController::class,'store'])->name('teachers.store');

//Books Data

Route::get('/books',[BookController::class,'index']);



