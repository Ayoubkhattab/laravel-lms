<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ------------------------- admin --------------------------------


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admindashboard');
        // Route::get('/admin/teacher', 'show')->name('showtecher');
        // Route::get('/admin/test', 'create')->name('create_teacher');
        // Route::post('/admin/test', 'store')->name('store_teacher');

    });
    Route::controller(TeacherController::class)->group(function () {
        Route::get('/admin/teacher', 'index')->name('all_teachers');
        Route::get('/admin/create/teacher', 'create')->name('create_teacher');
        Route::post('/admin/create/teacher', 'store')->name('store_teacher');

//        Route::get('/admin/add/teacher', 'add_teacher')->name('add_teacher');
    });
    Route::controller(StudentController::class)->group(function () {
        Route::get('/admin/students', 'index')->name('all_students');
        Route::get('/admin/add/student', 'create')->name('add_student');
        Route::post('/admin/add/student', 'store')->name('add_student');

    });
    Route::controller(CourseController::class)->group(function () {
        Route::get('/admin/courses', 'index')->name('show_courses');
    });
});




// -------------------------end admin ---------------------



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
