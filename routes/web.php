<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FindClassController;

use App\Http\Controllers\Forum\ForumController;
use App\Http\Controllers\Pages\PagesController;
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


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/frontend', [PagesController::class, 'frontend'])->name('frontend');
Route::get('/backend', [PagesController::class, 'backend'])->name('backend');
Route::get('/devops', [PagesController::class, 'devops'])->name('devops');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/excos', [PagesController::class, 'excos'])->name('excos');
Route::get('/careers', [PagesController::class, 'careers'])->name('careers');
Route::middleware(['auth'])->group(function () {
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/forum/create', [ForumController::class, 'create'])->name('create');
Route::post('/forum/store', [ForumController::class, 'store'])->name('store');
Route::get('/forum/show/{id}', [ForumController::class, 'show'])->name('show');
Route::post('answers', [AnswerController::class, 'store'])->name('storeAnswer');
Route::delete('answers/delete/{id}', [AnswerController::class, 'destroy'])->name('deleteAnswer');
Route::get('find-class', [FindClassController::class, 'index'])->name('find-class');
Route::get('find-class/create', [FindClassController::class, 'create'])->name('create-class');
Route::post('find-class/store', [FindClassController::class, 'store'])->name('store-class');
Route::get('find-class/show/{id}', [FindClassController::class, 'show'])->name('show-class');
});

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   
