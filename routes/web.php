<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








// frontend route
Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/services','services')->name('services');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');

});











require __DIR__.'/auth.php';
