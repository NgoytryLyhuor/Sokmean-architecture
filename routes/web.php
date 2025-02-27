<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;

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
    Route::get('/projects','project')->name('project');
    Route::get('/project-details/{slug}', 'project_details')->name('project_details');
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

// backend Team page
Route::controller(TeamController::class)->group(function () {
    Route::get('/team-pages', 'index')->name('team-pages.index');
    Route::post('/team-pages/insert', 'store')->name('team-pages.store');
    Route::get('/team-pages/edit', 'edit')->name('team-pages.edit');
    Route::put('/team-pages/update/{id}', 'update')->name('team-pages.update');
    Route::delete('/team-pages/delete/{id}', 'destroy')->name('team-pages.delete');
});

// backend project page
Route::controller(ProjectController::class)->group(function () {
    Route::get('/project-pages', 'index')->name('project-pages.index');
    Route::get('/project-insert-pages', 'insert')->name('project-pages.insert');
    Route::post('/project-pages/insert', 'insertCover')->name('project-pages.insertCover');
    Route::get('/project-pages/edit/{id}', 'edit')->name('project-pages.edit');
    Route::post('/project-pages/insert/project-path', 'insertProjectPath')->name('project-pages.insertProjectPath');
    Route::get('/project-pages/edit/project-path/{id}', 'editProjectPath')->name('project-pages.editProjectPath');
    Route::post('/project-pages/update/project-path', 'updateProjectPath')->name('project-pages.updateProjectPath');
    Route::POST ('/project-pages/update/{id}', 'update')->name('project-pages.update');

    Route::delete('/project-pages/delete/project', 'destroy')->name('project-pages.delete');
    Route::delete('/project-pages/delete/project-path', 'destroyProjectPath')->name('project-pages.deleteProjectPath');
});









require __DIR__.'/auth.php';
