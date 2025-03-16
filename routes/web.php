<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Artisan;Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cache cleared successfully!";
});


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
    Route::get('/return','return')->name('return');

    Route::get('/service-details/{slug}','service_details')->name('service_details');



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

// backend Testimonial page
Route::controller(TestimonialController::class)->group(function () {
    Route::get('/testimonial-pages', 'index')->name('testimonial-pages.index');
    Route::post('/testimonial-pages/insert', 'store')->name('testimonial-pages.store');
    Route::get('/testimonial-pages/edit', 'edit')->name('testimonial-pages.edit');
    Route::put('/testimonial-pages/update/{id}', 'update')->name('testimonial-pages.update');
    Route::delete('/testimonial-pages/delete/{id}', 'destroy')->name('testimonial-pages.delete');
});

// backend About page
Route::controller(AboutController::class)->group(function () {
    Route::get('/about-pages', 'index')->name('about-pages.index');
    Route::post('/about-pages/update', 'update')->name('about-pages.update');
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


// backend service page
Route::controller(ServiceController::class)->group(function () {

    Route::get('/service-pages', 'index')->name('service-pages.index');

    Route::get('/service-insert-pages', 'insert')->name('service-pages.insert');
    Route::post('/service-pages/insert', 'insertCover')->name('service-pages.insertCover');
    Route::post('/service-pages/update/{id}', 'updateCover')->name('service-pages.updateCover');
    Route::get('/service-pages/edit/{id}', 'edit')->name('service-pages.edit');
    Route::delete('/service-pages/delete', 'delete')->name('service-pages.delete');

    Route::post('/service-pages/insert-service-details', 'insertServiceDetails')->name('service-pages.insertServiceDetails');
    Route::get('/service-pages/edit-service-details/{id}', 'editServiceDetails')->name('service-pages.editServiceDetails');
    Route::POST('/service-pages/update-service-details', 'updateServiceDetails')->name('service-pages.updateServiceDetails');
    Route::delete('/service-pages/delete-service-details', 'deleteServiceDetails')->name('service-pages.deleteServiceDetails');

    Route::post('/service-pages/insert-process', 'insertProcess')->name('service-pages.insertProcess');
    Route::get('/service-pages/edit-process/{id}', 'editProcess')->name('service-pages.editProcess');
    Route::POST('/service-pages/update-process', 'updateProcess')->name('service-pages.updateProcess');
    Route::delete('/service-pages/delete-process', 'deleteProcess')->name('service-pages.deleteProcess');

    Route::post('/service-pages/insert-sample-project', 'insertSampleProject')->name('service-pages.insertSampleProject');
    Route::get('/service-pages/edit-sample-project/{id}', 'editSampleProject')->name('service-pages.editSampleProject');
    Route::POST('/service-pages/update-sample-project', 'updateSampleProject')->name('service-pages.updateSampleProject');
    Route::delete('/service-pages/delete-sample-project', 'deleteSampleProject')->name('service-pages.deleteSampleProject');

});



Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cache cleared successfully!";
});


require __DIR__.'/auth.php';
