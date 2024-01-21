<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Route::get('/admin/projects/create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('projects.create');
Route::get('/admin/projects/{projects}', [App\Http\Controllers\ProjectsController::class, 'show'])->name('projects.show');
Route::get('/', [App\Http\Controllers\LandingController::class, 'welcome']);
Route::get('/admin/projects/{projects}/edit', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('projects.edit');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);

Route::post('/admin/projects', [App\Http\Controllers\ProjectsController::class, 'store'])->name('projects.store');

Route::resource('projects', App\Http\Controllers\ProjectsController::class);
Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::delete('/projects/{project}', [App\Http\Controllers\ProjectsController::class, 'destroy'])->name('projects.destroy');

Auth::routes();
