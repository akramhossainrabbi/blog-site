<?php

use Illuminate\Support\Facades\Redirect;
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

Route::get('/', App\Http\Livewire\Welcome::class);
Route::get('/{slug}/blogs', \App\Http\Livewire\CategoryBlogs::class)->name('blogs.show');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});

Route::get('/redirects', function(){
	return redirect(Redirect::intended()->getTargetUrl());
	// You can replace above line with the following to return to previous page
	return back();	// or return redirect()->back();
});
