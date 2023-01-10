<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;

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

Route::middleware('auth')->group(function () {

    // welcome
    Route::get('/', [PostController::class , 'index']);

    // profile
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // post
    Route::resource('/post', PostController::class);
    Route::get('dashboard/archive', [PostController::class , 'trashed'])->name('post.archive');
    Route::post('dashboard/archive/{id}/force_delete', [PostController::class , 'trashedDelete'])->name('post.archive.destroy');
    Route::post('dashboard/archive/{id}/restore', [PostController::class , 'trashedRestore'])->name('post.archive.restore');

    // comment
    Route::resource('dashboard/comment', CommentController::class);
});

Route::fallback(function () {
    return view('404');
});

require __DIR__.'/auth.php';
