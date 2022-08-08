<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Conversations\ConversationsController;

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
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/testApi', function () {
    return view('exampleApi');
});


Route::get('/testApi2', function () {
    return view('exampleApi2');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/conversations', [ConversationsController::class, 'index'])->name('conversations.index');
    Route::get('/conversations/create', [ConversationsController::class, 'create'])->name('conversations.create');
    Route::get('/conversations/{conversation}', [ConversationsController::class, 'show'])->name('conversations.show');
});


Route::get('/getApi', [ConversationsController::class, 'getApi'])->name('getApi');

