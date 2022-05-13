<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\EmployeeHomeController;
use App\Http\Controllers\Website\EmployerHome;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\EmployeeController;
use App\Http\Controllers\Website\EmployerController;


Route::middleware(['ck_reg'])->get('/',[Controller::class,'Welcome']);

Auth::routes();

Route::middleware(['auth'])->group(function(){

    //check the user type and return him to the right registeration process
    Route::get('CompleteRegister', [HomeController::class, 'Return_Complete_Register'])->name('complete_register');
    Route::get('exit',[HomeController::class,'Exit'])->name('exit');

    //get all jobs related to specific category
    Route::get('/jobcat/{id}',[CategoryController::class,'returnCategoryRelatedJobs'])->name('jobcat');

    //Employee
    Route::controller(EmployeeController::class)->middleware(['emplres'])->prefix('Employee/')->group(function (){
        Route::get('career','Return_Register_Career_Info')->name('complete_register.career');
        Route::get('general_info','Return_Register_General_Info')->name('complete_register.career');
        Route::post('save_career_info','SaveCareerInfo')->name('save_career_info');
        Route::post('save_general_info','SaveGeneralInfo')->name('save_general_info');
    });

    //EmployeeHome
    Route::controller(EmployeeHomeController::class)->middleware(['emplres'])->prefix('Employee/')->group(function(){
        Route::get('home','Index')->name('employee.home');
        Route::get('profile','Profile')->name('employee.profile');
        Route::get('general','GeneralInfo')->name('employee.general');
        Route::post('update_general/{id}','UpdateGeneralInfo')->name('employee.general.update');
        Route::get('career_interest','CareerInterest')->name('employee.career_interest');
        Route::post('update_career_interest/{id}','UpdateCareerInterestInfo')->name('employee.career.update');
        Route::get('education','Education')->name('employee.education');
        Route::post('update_education/{id}','UpdateEducationInfo')->name('employee.education.update');
        Route::get('experience','Experience')->name('employee.experience');
        Route::post('save_job/{offer_id}/{user_id}','SaveJobOffer')->name('offer.save');
        Route::get('saved_offers','ReturnSavedOffers')->name('saved_offers.return');
        Route::get('offer_saved_delete/{id}','DeleteSavedOffer')->name('offer.saved.delete');
        Route::get('offer_details/{id}','ReturnOfferDetails')->name('offer.details');
        Route::get('application_questions/{offer_id}/{employer_id}','ReturnApplicationQuestionsPage')->name('application.questions');
        Route::post('save_application/{offer_id}/{employer_id}','SaveApplication')->name('application.save');
        Route::get('applications','ReturnAllApplications')->name('applications.return');
        Route::post('add_review/{employer_id}','AddReview')->name('review');
    });


    //Employer
    Route::controller(EmployerController::class)->middleware(['emperes'])->prefix('Employer/')->group(function (){
        Route::get('general','Return_Register_General_Info')->name('complete_register.general');
        Route::post('save','SaveEmployerInfo')->name('employer.save');
    });

    //EmployerHome
    Route::controller(EmployerHome::class)->middleware(['emperes'])->prefix('Employer/')->group(function(){
        Route::get('addoffer','ReturnAddOfferPage' )->name('addoffer');
        Route::get('home','ReturnEmployerHomePage' )->name('employer.home');
        Route::post('saveoffer','SaveOffer' )->name('offer.save');
        Route::get('showoffer/{id}','ShowOffer' )->name('offer.show');
        Route::get('profile','Profile' )->name('employer.profile');
        Route::post('profileupdate','ProfileUpdate' )->name('employer.profile.update');
        Route::post('searchoffers','SearchOffers' )->name('offer.search');
        Route::get('conditate_profile/{id}','ShowConditateProfile')->name('conditate.profile');
        Route::get('offer_details/{id}','ShowOfferDetails')->name('offer_details');
        Route::get('pending_applications','ReturnPendingApplications' )->name('employer.applications.pending');
        Route::get('accepted_applications','ReturnAcceptedApplications' )->name('employer.applications.accepted');
        Route::get('rejected_applications','ReturnRejectedApplications' )->name('employer.applications.rejected');
        Route::get('accept_application/{id}','AcceptApplication' )->name('application.accept');
        Route::get('reject_application/{id}','RejectApplication' )->name('application.reject');
        Route::get('employer_reviews','ReturnAllEmployerReviews' )->name('employer.reviews');
    });


});




////Route::get('/employer',function (){
////    return 'welcome';
////})->middleware('checktype');
////
//////for testing
//Route::get('/dot', function () {
//    return view('Website.employee_complete_reg');
//});
//Route::get('/admin', function () {
//    return view('Dashboard.dashboard');
//});
//Route::get('/general', function () {
//    return view('Website.general_info');
//});


