<?php

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
Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/', 'HomeController@index')->name('site.home');

Auth::routes();

// ------------------Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where('provider', 'google|facebook|linkedin');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('provider', 'google|facebook|linkedin');
Route::get('auth/linkedin/callback', 'PageController@likedindcallback');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    // Route::resource('products','ProductController');
});


Route::resource('/consultant', 'Consultant\ConsultantController')->middleware(['role:consultant']);
Route::post('/crop-image-upload', 'Consultant\ConsultantController@uploadCropImage')->middleware(['role:consultant']);
Route::get('/consultants/editor/', 'Consultant\ConsultanteditController@editshow')->name('consultants.page');
Route::post('/consultants/editor/form', 'Consultant\ConsultanteditController@editform')->name('consultants.edit');
Route::post('/consultants/editor/update', 'Consultant\ConsultanteditController@updateprofile')->name('consultants.update');
Route::resource('/recruiter', 'Recruiter\RecruiterController')->middleware(['role:recruiter']);

//-------------------------- Site routes----------------------------------
Route::get('/employer', 'PageController@consultantspage')->name('site.employer');
Route::get('/employers/fetch_consultants', 'PageController@fetch_consultants');
Route::get('/jobs', 'PageController@opportunitiespage')->name('site.jobs');
Route::get('/jobs/fetch_data', 'PageController@fetch_data');
Route::get('/contact', 'PageController@contactpage')->name('site.contact');
Route::get('/privacy-policy', 'PageController@privacypage')->name('site.privacy');
Route::get('/terms-of-service', 'PageController@termspage')->name('site.terms');
Route::get('/how-it-works', 'PageController@how_it_works_page')->name('site.howitworks');
Route::get('/case-studies', 'PageController@case_studies_page')->name('site.casestudies');
Route::post('/contactform', 'PageController@contactform')->name('site.contactform');
Route::post('/callbackform', 'PageController@callBackForm')->name('site.callBack');
Route::get('/mail-temp', 'PageController@mail_temp')->name('site.mail-temp');

Route::post('/getopportunities', 'OpportunitiesController@jobajax')->name('get.opportunities');
Route::get('/opportunity/{id}/{slug}', 'OpportunitiesController@singlejobshow')->name('get.job');
Route::post('/getconsultants', 'PageController@search_consultants')->name('get.consultants');
Route::get('/consultants_search', 'PageController@search_consultants_form')->name('get.consultants_form');
Route::get('/consultants_by_cat/{id}', 'PageController@search_consultants_by_cat')->name('get.consultants_by_cat');
Route::get('/employer_redirect', 'PageController@employer_redirect')->name('employer_redirect');
Route::get('/about-us', 'PageController@about')->name('site.about');
Route::get('/faqs', 'PageController@faqs')->name('site.faqs');
Route::get('/branding', 'PageController@branding')->name('site.branding');
Route::get('/service/{slug}', 'PageController@servicedetails')->name('service.details');
Route::get('/service/{slug}/checkout', 'PageController@servicecheckout')->name('service.checkout');
Route::post('/service/order', 'PageController@serviceorder')->name('service.order');
Route::get('/reviews', 'PageController@reviews')->name('site.reviews');
Route::get('/reviews/fetch_data', 'PageController@reviews_pagination')->name('reviews.pagination');
 Route::post('/reviewsform', 'PageController@reviewsform')->name('reviews.form');

Route::get('userrole', 'RoleAssignController@index');
Route::post('user_add_role', 'RoleAssignController@update');
Route::resource('post_job', 'JobController');
Route::get('job/{id}', 'JobController@show');
Route::resource('add_consultant', 'AddConsultantController');

Route::get('dataoperator/register',function(){
    return view('auth/register_dop');
});
Route::post('dop/register', 'Auth\RegisterController@reg_op')->name('reg_dop');

// -------------------------Admin routes------------------------------
Route::get('/admin/login', 'Admin\PagesController@login')->name('admin.login')->middleware('guest');
// Route::get('/admin/adminer', 'Admin\PagesController@database')->middleware(['role:superadmin'])->name('database');
Route::get('/dashboard/home', 'Admin\PagesController@home')->name('dashboard');
Route::resource('/dashboard/profile', 'Admin\ProfileController');
Route::resource('/dashboard/recruiters', 'Admin\RecruitersController');
Route::post('/dashboard/recruiters/maildecline', 'Admin\RecruitersController@mail_decline');
Route::get('/dashboard/recruiters/activate/{id}', 'Admin\RecruitersController@activate');
Route::get('/dashboard/recruiters/deactivate/{id}', 'Admin\RecruitersController@deactivate');
Route::get('/dashboard/consultants/activate/{id}', 'Admin\ConsultantsController@activate');
Route::get('/dashboard/consultants/deactivate/{id}', 'Admin\ConsultantsController@deactivate');
Route::resource('/dashboard/consultants', 'Admin\ConsultantsController');
Route::post('/dashboard/consultants/maildecline', 'Admin\ConsultantsController@mail_decline');
Route::resource('/dashboard/jobs', 'Admin\JobsController');
Route::resource('/dashboard/categories', 'Admin\CategoriesController');
Route::get('/dashboard/jobs_search', 'Admin\JobsController@search');
Route::get('/dashboard/jobs/feature/{id}', 'Admin\JobsController@feature');
Route::get('/dashboard/jobs/unfeature/{id}', 'Admin\JobsController@unfeature');
Route::resource('/dashboard/orders', 'Admin\OrdersController');
Route::resource('/dashboard/reviews', 'Admin\ReviewsController');
Route::resource('/dashboard/servicetags', 'Admin\ServicetagsController');
Route::resource('/dashboard/services', 'Admin\ServicesController');

Route::resource('/dashboard/faqs', 'Admin\FaqsController');
Route::get('/dashboard/data_operators', 'Admin\PagesController@data_operators')->name('data_operator');
Route::resource('/dashboard/contact_us', 'Admin\ContactusController');
Route::resource('/dashboard/maintenance', 'Admin\MaintenanceController');
Route::get('/dashboard/maintenance/activate/{id}', 'Admin\MaintenanceController@activate');
Route::get('/dashboard/maintenance/deactivate/{id}', 'Admin\MaintenanceController@deactivate');
Route::get('/dashboard/download-storage', 'Admin\BackupController@downloadstorage');
Route::get('/dashboard/download-db', 'Admin\BackupController@downloaddatabase');
Route::resource('/dataop/dashboard', 'Admin\DataopController');
Route::get('dashboard/saved-jobs', 'Admin\SavedJobController@index')->name('admin.savedjob');
Route::get('dashboard/recommended-jobs' ,'Recommended\RecommendedJobController@index')->name('recommended.job');

Route::group(['prefix' => 'dashboard/courses'], function(){
    Route::get('/', 'Admin\CourseController@index')->name('admin.courses');
    Route::get('/create', 'Admin\CourseController@create')->name('admin.create.course');
    Route::post('/store', 'Admin\CourseController@store')->name('admin.course.store');
    Route::get('/delete/{id}', 'Admin\CourseController@destroy')->name('admin.course.destroy');
    Route::get('edit/{id}', 'Admin\CourseController@edit')->name('admin.course.edit');
    Route::post('/update', 'Admin\CourseController@update')->name('admin.course.update');
});

/////////////////////   consulting-gigs routs /////////////
    Route::get('/consulting-gigs', 'Sale\SaleController@index' )->name('sale');
    Route::post('/consulting-gigs', 'Sale\SaleController@store' )->name('sale.store');
    Route::get('/consulting-gigs/{id}', 'Sale\SaleController@scree2')->name('sale.screen2');
    Route::post('/consulting-gigs/update', 'Sale\SaleController@screen2Update')->name('sale.screen2.store');
    Route::get('/consulting-gigs/{id}/edit', 'Sale\SaleController@editSale')->name('sale.edit');

// Testing app

// Route::get('testinglaravelapp', function(){
//     $data = array(
//         'first_name' => 'zubair',
//         'to' => 'zubairfarooq216@gmail.com'
//     );

//     \Mail::send('emails.register-new-member', $data, function($message)  use ($data) {

//         $message->to($data['to'], 'Executives Diary Inc.')

//                 ->subject('Welcome - Personalsite');
//     });

//     return 'email sent';
// });


Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');
});

Route::get('put-existing', function() {
    $filename = '2020-11-06-07-45-40.zip';
    $filePath = public_path($filename);
    // return $filePath;
    $fileData = File::get($filePath);

    Storage::disk('google')->put($filename, $fileData);
    return 'File was saved to Google Drive';
});

Route::get('backup',function(){

    Artisan::call("backup:run");

});

// -------------Ajaxcalls routes Starts---------------
// Route::post('verify/emailaddress', 'PS\AjaxController@verify_email_address')->name('verify.email');


Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index')->middleware(['role:superadmin']);


////////////////////// consultant pofile //////////
Route::get('/profile/{slug}', 'Profle\ProfileController@profile')->name('consultant.profile');
Route::get('/saved-job/{id}', 'Saved\SavedJobController@savedJob')->name('savedjob');


///////////////////// courses page routes //////////
Route::group(['prefix' => 'courses'], function(){
    Route::get('/', 'CourseController@index')->name('site.course');
    Route::get('/stripe/{id}', 'CourseController@stripe')->name('site.stripe');
});

Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');
