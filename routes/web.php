<?php

use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Broadcast;
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

Broadcast::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::put('/notification-all-read', [App\Http\Controllers\NotificationController::class, 'markAllAsRead']);
Route::put('/notification-read', [App\Http\Controllers\NotificationController::class, 'markAsRead']);
Route::get('/notifications', [App\Http\Controllers\NotificationController::class, 'notifications'])->name('notifications');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);

Route::post('comment', [CommentController::class, 'store'])->name('comment.store');
