<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TulisanController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneratorController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});


Route::get('/learning', [LearningController::class, 'show']);

// Route::get('/blog', function () {
//     return view('blog.index');
// });

Route::get('/blog', [BlogController::class, 'show']);

Route::get('/login', function () {
    return view('login/login');
});


Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registration', function () {
    return view('login/registration');
});

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/dashboard', [DashboardController::class, 'create']);


// Route::get('/test/index', [TulisanController::class, 'index']);

// Route::get('/test/create', function () {
//     return view('test/create');
// });

// Route::get('/test/update ', function () {
//     return view('test/update');
// });