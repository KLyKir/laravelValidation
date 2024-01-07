<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/category')->group(function () {
    Route::get('/insert', [\App\Http\Controllers\Category\InsertCategoryController::class, 'insert'])->name('category.insert');
    Route::get('/get', [\App\Http\Controllers\Category\GetCategoryController::class, 'get'])->name('category.get');
    Route::get('/update', [\App\Http\Controllers\Category\UpdateCategoryController::class, 'update'])->name('category.update');
    Route::get('/', [\App\Http\Controllers\Category\CategoryController::class, 'index'])->name('category.index');
    Route::get('/delete', [\App\Http\Controllers\Category\DeleteCategoryController::class, 'delete'])->name('category.delete');
});

Route::prefix('/event')->group(function () {
    Route::get('/', [\App\Http\Controllers\Event\EventController::class, 'index'])->name('event.index');
    Route::get('/show/{id}', [\App\Http\Controllers\Event\EventController::class, 'show'])->name('event.show');
    Route::get('/insert', [\App\Http\Controllers\Event\InsertEventController::class, 'insert'])->name('event.insert');
    Route::get('/delete/{id}', [\App\Http\Controllers\Event\DeleteEventController::class, 'delete'])->name('event.delete');
    Route::get('/update/{id}', [\App\Http\Controllers\Event\UpdateEventController::class, 'update'])->name('event.update');
});
Route::prefix('/user')->group(function () {
    Route::get('/', [\App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
    Route::get('/info/{id}', [\App\Http\Controllers\User\UserController::class, 'info'])->name('user.info');
    Route::get('/insert', [\App\Http\Controllers\User\InsertUserController::class, 'insert'])->name('user.insert');
    Route::get('/delete/{id}', [\App\Http\Controllers\User\DeleteUserController::class, 'delete'])->name('user.delete');
    Route::get('/update/{id}', [\App\Http\Controllers\User\UpdateUserController::class, 'update'])->name('user.update');
    Route::get('/addEvent/{id}', [\App\Http\Controllers\User\InsertUserEventController::class, 'insertEvent'])->name('user.insert.event');
    Route::get('/showEvents/{id}', [\App\Http\Controllers\User\ShowUserEventsController::class, 'getEvents'])->name('user.events');
    Route::get('/deleteEvents/{id}', [\App\Http\Controllers\User\DeleteUserEventController::class, 'delete'])->name('user.delete.event');
    Route::get('/updateEvents/{id}', [\App\Http\Controllers\User\UpdateUserEventController::class, 'update'])->name('user.update.event');
});
