<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('welcome');

Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id')->name('post.show');



// Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
// Route::get('posts', function () {
//     return response()->json([
//         'title' => 'Laravel 8',
//         'content' => 'Laravel 8 is the latest version of Laravel'
//     ]);
// });

// Route::get('articles', function (){
//     return view('articles');
// });



