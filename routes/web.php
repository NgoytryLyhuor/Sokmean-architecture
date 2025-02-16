<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

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
    Route::get('/project-details','project_details')->name('project_details');
});

// backend home page
Route::controller(HomePageController::class)->group(function(){
    Route::get('/homepages/section_one','section_one')->name('homepages.section_one');
    Route::post('/homepages/section_one_update','section_one_update')->name('homepages.section_one_update');

    Route::get('/homepages/section_two','section_two')->name('homepages.section_two');
    Route::post('/homepages/section_two_update','section_two_update')->name('homepages.section_two_update');

    Route::get('/homepages/section_three','section_three')->name('homepages.section_three');
    Route::post('/homepages/section_three_update','section_three_update')->name('homepages.section_three_update');

    Route::get('/homepages/section_four','section_four')->name('homepages.section_four');
    Route::post('/homepages/section_four_update','section_four_update')->name('homepages.section_four_update');

    Route::post('/homepages/section_four_drop_down_insert','section_four_drop_down_insert')->name('homepages.section_four_drop_down_insert');
    Route::get('/homepages/section_four_drop_down_edit','section_four_drop_down_edit')->name('homepages.section_four_drop_down_edit');
    Route::post('/homepages/section_four_drop_down_update','section_four_drop_down_update')->name('homepages.section_four_drop_down_update');
    Route::delete('/homepages/section_four_drop_down_delete','section_four_drop_down_delete')->name('homepages.section_four_drop_down_delete');

});








require __DIR__.'/auth.php';
