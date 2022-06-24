<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\PortfolioAdminController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\ContactFormController;



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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('pages.welcome');
Route::get('/resume', [App\Http\Controllers\ResumeController::class, 'index'])->name('pages.resume');
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('pages.portfolio');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('pages.contact');
Route::post('/contactForm/store', [ContactFormController::class, 'store'])->name('contactForm.store');

Route::get('/download', function (){
    return Storage::download('public/pdf/resume2022.pdf');
});




// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function () {
        
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // home dashboard
        Route::get('/home-dashboard', [HomeDashboardController::class, 'index'])->name('home-dashboard.index');
        Route::get('/home-dashboard/create', [HomeDashboardController::class, 'create'])->name('home-dashboard.create');
        Route::post('/home-dashboard/store', [HomeDashboardController::class, 'store'])->name('home-dashboard.store');
        Route::get('/home-dashboard/edit/{id}', [HomeDashboardController::class, 'edit'])->name('home-dashboard.edit');
        Route::post('/home-dashboard/update/{id}', [HomeDashboardController::class, 'update'])->name('home-dashboard.update');
        Route::delete('/home-dashboard/delete/{id}', [HomeDashboardController::class, 'destroy'])->name('home-dashboard.delete');

        // profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
        Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
        Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile/delete/{id}', [ProfileController::class, 'destroy'])->name('profile.delete');

        // services
        Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
        Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
        Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
        Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
        Route::post('/services/update/{id}', [ServicesController::class, 'update'])->name('services.update');
        Route::delete('/services/delete/{id}', [ServicesController::class, 'destroy'])->name('services.delete');

        // experience
        Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
        Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
        Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
        Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
        Route::post('/experience/update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
        Route::delete('/experience/delete/{id}', [ExperienceController::class, 'destroy'])->name('experience.delete');

        // education
        Route::get('/education', [EducationController::class, 'index'])->name('education.index');
        Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
        Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
        Route::get('/education/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
        Route::post('/education/update/{id}', [EducationController::class, 'update'])->name('education.update');
        Route::delete('/education/delete/{id}', [EducationController::class, 'destroy'])->name('education.delete');

        // knowledge
        Route::get('/knowledge', [KnowledgeController::class, 'index'])->name('knowledge.index');
        Route::get('/knowledge/create', [KnowledgeController::class, 'create'])->name('knowledge.create');
        Route::post('/knowledge/store', [KnowledgeController::class, 'store'])->name('knowledge.store');
        Route::get('/knowledge/edit/{id}', [KnowledgeController::class, 'edit'])->name('knowledge.edit');
        Route::post('/knowledge/update/{id}', [KnowledgeController::class, 'update'])->name('knowledge.update');
        Route::delete('/knowledge/delete/{id}', [KnowledgeController::class, 'destroy'])->name('knowledge.delete');

        // portfolio
        Route::get('/portfolioAdmin', [PortfolioAdminController::class, 'index'])->name('portfolioAdmin.index');
        Route::get('/portfolioAdmin/create', [PortfolioAdminController::class, 'create'])->name('portfolioAdmin.create');
        Route::post('/portfolioAdmin/store', [PortfolioAdminController::class, 'store'])->name('portfolioAdmin.store');
        Route::get('/portfolioAdmin/edit/{id}', [PortfolioAdminController::class, 'edit'])->name('portfolioAdmin.edit');
        Route::post('/portfolioAdmin/update/{id}', [PortfolioAdminController::class, 'update'])->name('portfolioAdmin.update');
        Route::delete('/portfolioAdmin/delete/{id}', [PortfolioAdminController::class, 'destroy'])->name('portfolioAdmin.delete');

        // contact
        Route::get('/contactAdmin', [ContactAdminController::class, 'index'])->name('contactAdmin.index');
        Route::get('/contactAdmin/create', [ContactAdminController::class, 'create'])->name('contactAdmin.create');
        Route::post('/contactAdmin/store', [ContactAdminController::class, 'store'])->name('contactAdmin.store');
        Route::get('/contactAdmin/edit/{id}', [ContactAdminController::class, 'edit'])->name('contactAdmin.edit');
        Route::post('/contactAdmin/update/{id}', [ContactAdminController::class, 'update'])->name('contactAdmin.update');
        Route::delete('/contactAdmin/delete/{id}', [ContactAdminController::class, 'destroy'])->name('contactAdmin.delete');

        // contact form
        Route::get('/contactForm', [ContactFormController::class, 'index'])->name('contactForm.index');
        Route::delete('/contactForm/delete/{id}', [ContactFormController::class, 'destroy'])->name('contactForm.delete');

        // Route::get('/notify', [ContactFormController::class, 'notify'])->name('pages.notify');


    });
});


