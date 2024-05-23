<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Localization Routes
Route::get('language/{locale}', function ($locale) {

    app()->setLocale($locale);

    session()->put('locale', $locale);

    return redirect()->back();
})->name('language');

Route::middleware('localization')->group(function () {

    Route::prefix('admin')->namespace('Dashboard')->name('admin.')->group(function () {

        // ------------------- Auth Routes -------------------//
        Route::get('login', 'AuthController@showLoginForm')->name('login');
        Route::post('login', 'AuthController@login')->name('login.post');
        Route::get('logout', 'AuthController@logout')->name('logout');
        Route::get('reset-password', 'AuthController@reset')->name('reset');
        Route::post('send-link', 'AuthController@sendLink')->name('sendLink');
        Route::get('changePassword/{code}', 'AuthController@changePassword')->name('changePassword');
        Route::post('update-password', 'AuthController@updatePassword')->name('updatePassword');
        //------------------- End Auth Routes -------------------//

        Route::middleware('auth')->group(function () {
            //------------------- Dashboard Routes -------------------//
            Route::get('/', 'DashboardController@home')->name('home');
            //------------------- End Dashboard Routes -------------------//



            //------------------- Settings Routes -------------------//
            Route::resource('settings', 'SettingController');
            //------------------- End Settings Routes -------------------//



            //------------------- Contacts Routes -------------------//
            Route::get('contacts', 'ContactController@index')->name('contacts.index');
            Route::get('contacts/{id}', 'ContactController@show')->name('contacts.show');
            Route::get('contacts/{id}/reply', 'ContactController@showReplyForm')->name('contacts.reply');
            Route::post('contacts/send-reply', 'ContactController@sendReply')->name('contacts.sendReply');
            Route::delete('contacts/{id}', 'ContactController@deleteMsg')->name('contacts.deleteMsg');
            //------------------- End Contacts Routes -------------------//




            // ------------------- Admin Profile Routes -------------------//
            Route::get('profile', 'ProfileController@getProfile')->name('profile');
            Route::post('update-profile', 'ProfileController@updateProfile')->name('update_profile');
            Route::post('update-password', 'ProfileController@updatePassword')->name('update_profile_password');
            //------------------- End Admin Profile Routes -------------------//


            // // ------------------- Features Routes -------------------//
            // Route::resource('features', 'FeatureController');
            // //------------------- End Features Routes -------------------//


            // //------------------- Sliders Routes -------------------//
            // Route::resource('sliders', 'SliderController');
            // //------------------- End Sliders Routes -------------------//


            //------------------- Questions Routes -------------------//
            Route::resource('questions', 'QuestionController');
            //------------------- End Questions Routes -------------------//

            //------------------- Our Values Routes -------------------//
            Route::resource('ourValues', 'OurValueController');
            //------------------- End Our Values Routes -------------------//


            //------------------- Board of Directors Routes -------------------//
            Route::resource('directors', 'DirectorController');
            //------------------- End Board of Directors Routes -------------------//

            //------------------- Committees Categories Routes -------------------//
            Route::resource('CommitteesCategory', 'CommitteesCategoryController');
            //------------------- End Committees Categories Routes -------------------//


            //------------------- Committees Members Routes -------------------//
            Route::resource('committeeMembers', 'CommitteeMemberController');
            //------------------- End Committees Members Routes -------------------//



            //------------------- Our Programs Routes -------------------//
            Route::resource('ourPrograms', 'OurProgramController');
            //------------------- End Our Programs Routes -------------------//

            //------------------- Our Path Routes -------------------//
            Route::resource('ourPaths', 'OurPathController');
            //------------------- End Our Path Routes -------------------//

            //-------------------- Tools Routes -------------------//
            Route::resource('tools', 'ConnectivityToolController')->except(['create', 'store', 'destroy']);
            Route::get('tools/toggle/{id}', 'ConnectivityToolController@toggle')->name('tools.toggle');
            //-------------------- End Tools Routes -------------------//

            //-------------------- Regulation Category Routes -------------------//
            Route::resource('regulationCategories', 'RegulationCategoryController');
            //-------------------- End Regulation Category Routes -------------------//

            //-------------------- Regulation Routes -------------------//
            Route::resource('regulations', 'RegulationController');
            //-------------------- End Regulation Routes -------------------//

            //-------------------- subscribe Routes -------------------//
            Route::resource('subscribe', 'SubscribeController');
            //-------------------- End subscribe Routes -------------------//


            //-------------------- Blogs  Routes -------------------//
            Route::resource('blogs', 'BlogController');
            //-------------------- Blogs Routes -------------------//

            //-------------------- Partner  Routes -------------------//
            Route::resource('partners', 'PartnerController');
            //-------------------- Partner Routes -------------------//

            //-------------------- Membership  Routes -------------------//
            Route::resource('memberships', 'MembershipController')->except(['create', 'store', 'destroy', 'edit']);
            //-------------------- Membership Routes -------------------//

            //-------------------- Enrollment applications  Routes -------------------//
            Route::get('enrollment/{type}', 'EnrollmentController@index')->name('enrollment.index');
            Route::get('enrollment_innovation/{type}', 'EnrollmentController@index')->name('enrollment_innovation.index');
            //-------------------- Enrollment applications Routes -------------------//








        });
          //  =========================== Check Attrbite  =========================== //

          Route::post('check-committeesCategory-name', 'CeckController@checkCommitteesCategory');
          Route::post('check-value-name', 'CeckController@checkValueName');
          Route::post('check-program-name', 'CeckController@checkProgramName');
          Route::post('check-path-name', 'CeckController@checkPathName');
          Route::post('check-regulationCategories-name', 'CeckController@cregulationCategoriesName');
          Route::post('check-email', 'CeckController@checkEmail')->name('check.email');
          Route::post('check-emailMembership', 'CeckController@checkEmailMembership')->name('check.emailMembership');
          Route::post('check-phoneMembership', 'CeckController@checkPhoneMembership')->name('check.phoneMembership');
          Route::post('check-IDMembership', 'CeckController@checkIDMembership')->name('check.IDMembership');




          //  =========================== End Check  =========================== //
    });
});

Route::namespace('Site')->name('site.')->middleware('lang')->group(function () {

    Route::get('/', 'HomeController@index')->name('home');



    // Route::resource('service', 'ServiceController');
    // Route::resource('project', 'ProjectsController');
     Route::get('aboutUs', 'AboutUsController@index')->name('aboutUs');
     Route::get('seo', 'SeoController@index')->name('seo');
     Route::get('directors', 'MembersController@index')->name('members');
     Route::get('committees', 'CommitteesController@index')->name('committees');
     Route::get('programs', 'programsController@index')->name('programs');
     Route::get('paths', 'PathsController@index')->name('paths');
     Route::get('regulations', 'RegulationsController@index')->name('regulations');
     Route::get('partners', 'PartnerController@index')->name('partners');
    Route::resource('blog', 'BlogsController')->only(['index', 'show']);
    Route::get('request/membership', 'HomeController@showForm')->name('request.membership');
    Route::post('request/membership/store', 'HomeController@membershipStore')->name('request.membership.store');
    Route::get('request/program/form/{id}', 'programsController@programForm')->name('request.program');
    Route::post('request/program/store', 'programsController@programStore')->name('request.program.store');
    // Route::resource('info', 'InfoController');
    // Route::get('company/profile/pdf/info', 'InfoController@profilePdf')->name('company.profile.pdf.info');
    // Route::get('VAT', 'InfoController@vat')->name('vat');
    // Route::get('CommercialRecord', 'InfoController@commercial')->name('commercial');
    // Route::get('CommercialRecordTwo', 'InfoController@commercialPdf')->name('commercialPdf');

    Route::get('contactUs', 'ContactUsController@index')->name('contactUs');






    // Route::post('/service/order', 'HomeController@serviceOrder')->name('service-order');
     Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');
     Route::post('contact', 'HomeController@sendContact')->name('contact');
    Route::get('/lang/{lang}', 'HomeController@lang')->name('lang');


    //  Route::post('contact/send', 'ContactController@sendContact')->name('contact.sendContact');

    // Mail List Routes

    // search
    //    Route::get('search', 'HomeController@search')->name('search');

});



Route::fallback(function () {
    abort(404);
});
