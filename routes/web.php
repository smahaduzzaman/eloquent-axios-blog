<?php

use App\Http\Controllers\PostController;
// use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


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
    $posts = Post::all();
    return view('posts.index', compact('posts') );
});
