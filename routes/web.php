<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Route::post('absen',[HomeController::class, 'store'])->name('store-absen');

Route::group(['middleware' => 'auth'], function () {

	Route::group(['prefix' => 'roles'], function() {
		Route::get('/', [RoleController::class, 'index'])->name('role.index');
		Route::get('/create', [RoleController::class, 'create'])->name('role.create');
		Route::post('/', [RoleController::class, 'store'])->name('role.store');
	});

	Route::group(['prefix' => 'users'], function() {
		Route::get('/', [UserController::class, 'index'])->name('user.index');
		Route::get('/create', [UserController::class, 'create'])->name('user.create');
		Route::get('/{id}', [UserController::class, 'edit'])->name('user.edit');
		Route::post('/', [UserController::class, 'store'])->name('user.store');
		Route::put('/{id}', [UserController::class, 'update'])->name('user.update');

	});

	Route::group(['prefix' => 'employees'], function() {
		Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
		Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
		Route::get('/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
		Route::post('/', [EmployeeController::class, 'store'])->name('employee.store');
	});


    Route::get('/', [HomeController::class, 'home']);

	Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
	Route::get('kehadiran',[AttendanceController::class, 'index'])->name('kehadiran');
	Route::get('absen',[HomeController::class, 'recordAbsensi'])->name('absen');
	Route::get('pdf/{id}',[AttendanceController::class, 'export'])->name('pdf');




	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');
	// Route::get('kehadiran', function () {
	// 	return view('kehadiran');
	// })->name('kehadiran');
	Route::get('pegawai', function () {
		return view('pegawai');
	})->name('pegawai');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
Route::get('qr', function () {
	return view('qr');
})->name('qr');

// Route::get('pdf', function () {
// 	return view('pdf');
// })->name('pdf');