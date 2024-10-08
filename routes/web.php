<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Bookmarked;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdController::class, 'index'])->name("home");
Route::resource("ads", AdController::class);



Route::post('/save',[Bookmarked::class, 'save']);

Route::post("/delete", [Bookmarked::class, 'delete']);

Route::get('/search',[\App\Http\Controllers\AdController::class ,'find']);

//Route::get('/logout', function () {
//    \Illuminate\Support\Facades\Auth::logout();
//    return redirect("/");
//})->name("logout");




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
