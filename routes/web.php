<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('index');
//});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home')->name('Home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// ------------------------- admin --------------------------------


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admindashboard');
    });
    Route::controller(TeacherController::class)->group(function () {
        Route::get('/admin/teacher', 'index')->name('all_teachers');
        Route::get('/admin/create/teacher', 'create')->name('create_teacher');
        Route::post('/admin/create/teacher', 'store')->name('store_teacher');
        Route::get('/admin/edit/teacher/{id}', 'edit')->name('edit_teacher');
        Route::put('/admin/edit/teacher/{id}', 'update_teacher')->name('update_teacher');
        Route::delete('/admin/delete/teacher/{id}', 'delete_teacher')->name('delete_teacher');
    });
    Route::controller(StudentController::class)->group(function () {
        Route::get('/admin/students', 'index')->name('all_students');
        Route::get('/admin/add/student', 'create')->name('add_student');
        Route::post('/admin/add/student', 'store')->name('add_student');
        Route::get('/admin/edit/student/{id}', 'edit')->name('edit_student');
        Route::put('/admin/edit/student/{id}', 'update_student')->name('update_student');
        Route::delete('/admin/delete/student/{id}', 'delete_student')->name('delete_student');

    });

    //    Route::controller(CourseController::class)->group(function () {
//        Route::get('/admin/courses', 'index')->name('show_courses');
//    });
});




// -------------------------end admin ---------------------



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth' , 'role:teacher'])->group(function (){
Route::controller(CourseController::class)->group(function (){
    Route::get('course/{id}' , 'show')->name('show_course');
    Route::get('create/course', 'create')->name('create_course');
    Route::post('create/course', 'store')->name('add_course');

});
});




require __DIR__ . '/auth.php';
