<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


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

//Students data
Route::get('/students',[StudentController::class,'index'] );

//Teachers Data

Route::get('/teachers',[TeacherController::class,'index']);