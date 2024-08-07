<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Stories\StoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\Researches\ResearchesController;
use App\Http\Controllers\Admin\Event\EventAdminController;
use App\Http\Controllers\Admin\Journal\JournalController;
use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\Service\ServiceController;
use App\Http\Controllers\Admin\Blog\BlogAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\SettingController;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

Auth::routes();

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('sp1', [WebsiteController::class, 'sp1'])->name('website.sp1');
Route::get('sp2', [WebsiteController::class, 'sp2'])->name('website.sp2');
Route::get('sp3', [WebsiteController::class, 'sp3'])->name('website.sp3');
Route::get('sp4', [WebsiteController::class, 'sp4'])->name('website.sp4');
Route::get('sp5', [WebsiteController::class, 'sp5'])->name('website.sp5');
Route::get('sp6', [WebsiteController::class, 'sp6'])->name('website.sp6');
Route::get('sp7', [WebsiteController::class, 'sp7'])->name('website.sp7');
Route::get('success_story', [WebsiteController::class, 'successStory'])->name('website.success_story');
Route::post('appointment/{type}', [WebsiteController::class, 'appointmentStore'])->name('website.appointment.store');
Route::get('success_story/{uuid}', [WebsiteController::class, 'showSuccessStory'])->name('website.show_success_story');

Route::get('patient/patientguide', [PatientController::class, 'Patientguide'])->name('website.patient.patientguide');
Route::get('patient/requestmedicalrecord', [PatientController::class, 'requestMedicalRecord'])->name('website.patient.requestmedicalrecord');

Route::post('/request-record', [PatientController::class, 'showAlert'])->name('website.patient.request.record');

Route::get('patient/patienteducationvideo', [PatientController::class, 'patientEducationVideo'])->name('website.patient.patienteducationvideo');
Route::get('patient/findphysicaltherapist', [PatientController::class, 'findPhysicalTherapist'])->name('website.patient.findphysicaltherapist');
Route::get('patient/patientform', [PatientController::class, 'patientForm'])->name('website.patient.patientform');
Route::get('patient/pre-op', [PatientController::class, 'pre_op'])->name('website.patient.pre_op');
Route::get('patient/post-op', [PatientController::class, 'post_op'])->name('website.patient.post_op');


Route::get('professionals/events', [EventController::class, 'Events'])->name('website.professionals.events');
Route::get('professionals/researches', [EventController::class, 'Researches'])->name('website.professionals.researches');
Route::get('professionals/fellowship', [EventController::class, 'fellowShip'])->name('website.professionals.fellowship');
Route::get('professionals/professionalresources', [EventController::class, 'professionalResources'])->name('website.professionals.professionalresources');
Route::get('professionals/viewproresource/{uuid}', [EventController::class, 'viewProResource'])->name('website.professionals.viewproresource');
Route::get('professionals/journals', [EventController::class, 'journals'])->name('website.professionals.journals');
Route::get('professionals/publishwithus', [EventController::class, 'publishWithUs'])->name('website.professionals.publishwithus');
Route::get('events/{uuid}', [EventController::class, 'show'])->name('website.events.show');


Route::get('blogs_doctors', [BlogController::class, 'blogsDoctors'])->name('website.blogs.blogs_doctors');
Route::get('blogs_patient', [BlogController::class, 'blogsPatient'])->name('website.blogs.blogs_patient');
Route::get('blogs/{uuid}', [BlogController::class, 'show'])->name('website.blogs.show');


Route::get('aboutdrmoustafa', [WebsiteController::class, 'aboutdrmoustafa'])->name('website.aboutdrmoustafa');
Route::get('ourdoctors', [WebsiteController::class, 'ourDoctors'])->name('website.ourdoctors');
Route::get('doctordetails/{uuid}', [WebsiteController::class, 'doctorDetails'])->name('website.doctordetails');
Route::get('about', [WebsiteController::class, 'about'])->name('website.about');

Route::get('faq', [WebsiteController::class, 'faq'])->name('website.faq');
Route::get('tipsandtricks', [WebsiteController::class, 'tipSandTricks'])->name('website.tipsandtricks');
Route::get('contact', [WebsiteController::class, 'contact'])->name('website.contact');


// route admin dashboard
Route::get('admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('admin/store', [LoginController::class, 'store'])->name('admin.login.store');
Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');


Route::get('admin/stories', [StoryController::class, 'index'])->name('admin.stories');
Route::get('admin/stories/create', [StoryController::class, 'create'])->name('admin.stories.create');
Route::post('admin/stories/store', [StoryController::class, 'store'])->name('admin.stories.store');
Route::get('admin/stories/edit/{uuid}', [StoryController::class, 'edit'])->name('admin.stories.edit');
Route::post('admin/stories/update/{uuid}', [StoryController::class, 'update'])->name('admin.stories.update');
Route::get('admin/stories/create_sub_story/{uuid}', [StoryController::class, 'createSubStory'])->name('admin.stories.create_sub_story');
Route::post('admin/stories/store_sub_story/{uuid}', [StoryController::class, 'storeSubStory'])->name('admin.stories.store_sub_story');
Route::get('admin/stories/show_sub_story/{uuid}', [StoryController::class, 'showSubStory'])->name('admin.stories.show_sub_story');
Route::get('admin/stories/edit_sub_story/{uuid}', [StoryController::class, 'editSubStory'])->name('admin.stories.edit_sub_story');
Route::post('admin/stories/update_sub_story/{uuid}', [StoryController::class, 'updateSubStory'])->name('admin.stories.update_sub_story');


// event

Route::get('admin/events', [EventAdminController::class, 'index'])->name('admin.events');
Route::get('admin/events/create', [EventAdminController::class, 'create'])->name('admin.events.create');
Route::post('admin/events/store', [EventAdminController::class, 'store'])->name('admin.events.store');
Route::get('admin/events/edit/{uuid}', [EventAdminController::class, 'edit'])->name('admin.events.edit');
Route::post('admin/events/update/{uuid}', [EventAdminController::class, 'update'])->name('admin.events.update');


// researches

Route::get('admin/researches', [ResearchesController::class, 'index'])->name('admin.researches');
Route::get('admin/researches/create', [ResearchesController::class, 'create'])->name('admin.researches.create');
Route::post('admin/researches/store', [ResearchesController::class, 'store'])->name('admin.researches.store');
Route::get('admin/researches/edit/{uuid}', [ResearchesController::class, 'edit'])->name('admin.researches.edit');
Route::post('admin/researches/update/{uuid}', [ResearchesController::class, 'update'])->name('admin.researches.update');

// Journal

Route::get('admin/journals', [JournalController::class, 'index'])->name('admin.journals');
Route::get('admin/journals/create', [JournalController::class, 'create'])->name('admin.journals.create');
Route::post('admin/journals/store', [JournalController::class, 'store'])->name('admin.journals.store');
Route::get('admin/journals/edit/{uuid}', [JournalController::class, 'edit'])->name('admin.journals.edit');
Route::post('admin/journals/update/{uuid}', [JournalController::class, 'update'])->name('admin.journals.update');

// courses

Route::get('admin/courses', [CourseController::class, 'index'])->name('admin.courses');
Route::get('admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
Route::post('admin/courses/store', [CourseController::class, 'store'])->name('admin.courses.store');
Route::get('admin/courses/edit/{uuid}', [CourseController::class, 'edit'])->name('admin.courses.edit');
Route::post('admin/courses/update/{uuid}', [CourseController::class, 'update'])->name('admin.courses.update');


// Blogs

Route::get('admin/blogs', [BlogAdminController::class, 'index'])->name('admin.blogs');
Route::get('admin/blogs/create', [BlogAdminController::class, 'create'])->name('admin.blogs.create');
Route::post('admin/blogs/store', [BlogAdminController::class, 'store'])->name('admin.blogs.store');
Route::get('admin/blogs/edit/{uuid}', [BlogAdminController::class, 'edit'])->name('admin.blogs.edit');
Route::post('admin/blogs/update/{uuid}', [BlogAdminController::class, 'update'])->name('admin.blogs.update');


// services

Route::get('admin/services', [ServiceController::class, 'index'])->name('admin.services');
Route::get('admin/services/edit/{uuid}', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::post('admin/services/update/{uuid}', [ServiceController::class, 'update'])->name('admin.services.update');


// booking home

Route::get('admin/booking', [HomeController::class, 'booking'])->name('admin.booking');
Route::get('admin/show_booking/{uuid}', [HomeController::class, 'showBooking'])->name('admin.show_booking');
Route::get('admin/delete_booking/{uuid}', [HomeController::class, 'deleteBooking'])->name('admin.delete_booking');

Route::get('admin/change_status', [HomeController::class, 'changeStatus'])->name('booking.change_status');

Route::get('setting', [SettingController::class, 'setting'])->name('admin.setting');
Route::post('setting/store', [SettingController::class, 'settingStore'])->name('admin.setting.store');
Route::post('setting/account', [SettingController::class, 'adminUpdateAccount'])->name('admin.account.update');

}
);