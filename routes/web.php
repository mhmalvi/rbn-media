<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [PageController::class, 'whoWeAre'])->name('whoWeAre');
Route::get('/out-timeline', [PageController::class, 'timeline'])->name('timeline');
Route::get('/about-rbn-education', [PageController::class, 'aboutRbnEducation'])->name('about-rbn-education');
Route::get('/our-values', [PageController::class, 'ourValues'])->name('our-values');
Route::get('/our-goals', [PageController::class, 'ourGoals'])->name('our-goals');
Route::get('/admission-consultation', [PageController::class, 'admissionConsultation'])->name('admissionConsultation');
Route::get('/renowned-scholarships', [PageController::class, 'renownedScholarships'])->name('renowned-scholarships');

Route::get('/student-counseling', [PageController::class, 'studentCounseling'])->name('student-counseling');
//Route::get('/visa-express', [PageController::class, 'visaExpress'])->name('visaExpress');
Route::get('/registration-center', [PageController::class, 'registrationCenter'])->name('registration-center');
Route::get('/language-scholarship', [PageController::class, 'languageScholarship'])->name('language-scholarship');
Route::get('/admission-assistance', [PageController::class, 'admissionAssistance'])->name('admission-assistance');
Route::get('/visa-assistance', [PageController::class, 'visaAssistance'])->name('visa-assistance');

Route::get('/message-from-ceo', [PageController::class, 'messageFromCeo'])->name('message-from-ceo');

Route::get('/phd-admission-service', [PageController::class, 'phdAdmissionService'])->name('phdAdmissionService');
Route::get('/scholarship-guidance', [PageController::class, 'scholarshipGuidance'])->name('scholarshipGuidance');
Route::get('/departure-briefing', [PageController::class, 'departureBriefing'])->name('departureBriefing');
Route::get('/postal-care', [PageController::class, 'postalCare'])->name('postalCare');
Route::get('/study-in-aus', [PageController::class, 'studyInAus'])->name('studyInAus');
Route::get('/study-in-canada', [PageController::class, 'studyInCanada'])->name('studyInCanada');
Route::get('/study-in-dubai', [PageController::class, 'studyInDubai'])->name('studyInDubai');
Route::get('/study-in-europe', [PageController::class, 'studyInEurope'])->name('studyInEurope');
Route::get('/study-in-malyasia', [PageController::class, 'studyInMalyasia'])->name('studyInMalyasia');
Route::get('/study-in-switzerland', [PageController::class, 'studyInSwitzerland'])->name('studyInSwitzerland');
Route::get('/study-in-uk', [PageController::class, 'studyInUk'])->name('studyInUk');
Route::get('/study-in-usa', [PageController::class, 'studyInUsa'])->name('studyInUsa');
Route::get('/study-scholarship', [PageController::class, 'scholarship'])->name('scholarship');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/blog/{page?}', [PageController::class, 'blog'])->name('blog');
Route::get('/article/{page?}', [PageController::class, 'article'])->name('article');
Route::get('/event/{page?}', [PageController::class, 'event'])->name('event');
Route::get('/blog-details/{id}', [PageController::class, 'blogDetails'])->name('blogDetails');
Route::get('/article-details/{id}', [PageController::class, 'articleDetails'])->name('articleDetails');
Route::get('/dhaka/office', [PageController::class, 'dhakaOffice'])->name('dhakaOffice');
Route::get('/sylhet/office', [PageController::class, 'sylhetOffice'])->name('sylhetOffice');
Route::get('/school-of-english', [PageController::class, 'schoolOfEnglish'])->name('schoolOfEnglish');
Route::get('/student-registration', [PageController::class, 'studentRegistration'])->name('studentRegistration');
Route::post('student-registration', [PageController::class, 'studentPostRegistration'])->name('student.registration');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
// Route::get('send-email-pdf', [SendEmailController::class, 'index']);


Route::middleware(['guest', 'PreventBackHistory'])->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth', 'PreventBackHistory'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('home');

    // category related routes
    Route::get('tag', [TagController::class, 'index'])->name('tag');
    Route::post('tag', [TagController::class, 'store'])->name('tag.add');
    Route::get('tag/{id}/edit', [TagController::class, 'edit']);
    Route::put('tag/update', [TagController::class, 'update'])->name('tag.update');
    Route::delete('tag/{id}', [TagController::class, 'destroy']);

    Route::resource('blog', BlogController::class);

    Route::resource('event', EventController::class);
    Route::resource('article', \App\Http\Controllers\Admin\ArticlesController::class);

    Route::delete('article/{slug}/destroy', [\App\Http\Controllers\Admin\ArticlesController::class, 'destroy'])->name('admin.article.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
