<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

/* Assigning middleware to routes */
use App\Http\Middleware\ageCheckAssigneMiddleware;
use App\Http\Middleware\countryAssigneMiddleware;

/* Database series */
use App\Http\Controllers\UserDatabaseController;

/*  */
use App\Http\Controllers\StudentModelController;

/* Client Http */
use App\Http\Controllers\UserHttpController;

use App\Http\Controllers\UserEloquentController;
use App\Http\Controllers\userHttp35Controller;
use App\Http\Controllers\UserSession36Controller;
use App\Http\Controllers\User37flashController;
use App\Http\Controllers\UploadFile38Controller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SellerController;
/* Insert data */
use App\Http\Controllers\Student41Controller;


use App\Http\Controllers\StudentAccessorsController;



Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function(){
    return view('home');
});

/* Route::get("/about", function(){
    return view("about");
}); */

// Dynamic url parameter data
// Url :- http://127.0.0.1:8000/about/gurjeet
Route::get("/about/{name}", function($name){
    //echo $name;
    return view("about", ['name' => $name]);
});

Route::get('user', [UserController::class,'getUser']);
Route::get('user_about', [UserController::class,'aboutUser']);
Route::get('user/{name}', [UserController::class,'getUserName']);

// Nested folder calling file.
/* Route::get('admin', function(){
    return view('admin.login');
}); */

Route::get('admin', [UserController::class,'adminLogin']);

Route::view("create","create_view");

Route::get("user-home",[UserController::class,'userHome']);
Route::get("user-about2",[UserController::class,'userAbout']);

/* Part 14 */

Route::view("user-form","userForm");
Route::post('add-user', [UserController::class, 'addUser']);

/* Part 15 */

Route::view('user-form-2', 'userForm-2');
Route::post('add-user-2', [UserController::class, "addUser2"]);

/* Part 16 */
Route::view('user-form-validation','userFormValidation');
Route::post('userFormValidation',[UserController::class,'userForm_Validation']);

/* Part 17 */

Route::view('user-form-cusotm-validation','userFormCustomValidation');
Route::post('userFormCustomValidation',[UserController::class,'userForm_CustomValidation']);

/* Part 18 is make a validation video */

/* Part 19 */
Route::view('home-url-generation','homeUrlGeneration18');
Route::view('about-url-generation','aboutUrlGeneration18');

/* Part 20 */

Route::view('home/profile/user','homeNameRoute20')->name('hm');
Route::get('show-name-route', [UserController::class, 'showNameRoute']);

Route::view('home/profile/{name}','homeNameRoute20')->name('snr');
Route::get('snr',[UserController::class, 'showNameRouteParams']);

/* Part 21 */
/* Route::view('route-group','routGrouping21');
Route::get('student/show-route-group',[UserController::class,'showRouteGroup']);
Route::get('student/show-route-group2',[UserController::class,'showRouteGroup2']); */

Route::prefix('student/')->group(function(){
    Route::view('route-group','routGrouping21');
    Route::get('show-route-group',[UserController::class,'showRouteGroup']);
    Route::get('show-route-group2',[UserController::class,'showRouteGroup2']);
});

/* Part 22 */

/* Route::get('show-student',[StudentController::class,'showStudent']);
Route::get('add-student',[StudentController::class,'addStudent']);
Route::get('delete-student',[StudentController::class,'deleteStudent']); */

Route::controller(StudentController::class)->group(function(){
    Route::get('show-student','showStudent');
    Route::get('add-student','addStudent');
    Route::get('delete-student','deleteStudent');
    // Pass the parameter with route.
    Route::get('about-student/{name}','aboutStudent');
});


/* Part :- 23 */

//Route::view('aboutMiddleware', 'aboutMiddleware');

/* Part :- 24 */

// Single middleware
Route::view('homeGroupMiddleware', 'homeGroupMiddleware')->middleware('check1');
Route::view('aboutGroupMiddleware', 'aboutGroupMiddleware');

// Group middleware

Route::middleware('check1')->group(function(){
    Route::view('about','about');
    Route::view('contact','contact');
    Route::view('list','list');
    Route::view('home','home');
});


/* Part 25 */

Route::view('homeAssignMiddleware', 'homeAssignMiddleware')->middleware([ageCheckAssigneMiddleware::class]);
Route::view('aboutAssignMiddleware', 'aboutAssignMiddleware')->middleware([ageCheckAssigneMiddleware::class, countryAssigneMiddleware::class]);

/* Part 26 */
    // This only theroy part and command line part.

/* Part 27 */

Route::get('usersDatabase',[UserDatabaseController::class,'userDatabase']);

/* Part 28 */
Route::get('getStudents',[StudentModelController::class,'getStudents']);

/* Part 29 */
    // This only theroy part and command line part.

/* Part 30 */

Route::get("userHttp",[UserHttpController::class,'getHttpUser']);

/* Part 31 is theoratical */

/* Part 32 */
Route::get('user_eloquent',[UserEloquentController::class,'queries']);

/* Part 33 is only theory */

/* Part 34 */

/*  Any method
Route::get('userFormValidation',[UserController::class,'any']);
Route::post('userFormValidation',[UserController::class,'any']);
Route::update('userFormValidation',[UserController::class,'any']);
Route::delete('userFormValidation',[UserController::class,'any']); */

/* Match method
Route::any('url_name',[controller_name::class,'function_name']); 
*/

/* Part 35 */
Route::view('form','userHttp35');
Route::post('user_form',[userHttp35Controller::class,'login']);

/* Part 36 */

Route::view("loginSession36","loginSession36");
Route::post('loginSession',[UserSession36Controller::class,'login']);
Route::view("profileSession36","profileSession36");
Route::get('session36logout',[UserSession36Controller::class,'session36logout']);

/* Part 37 */

Route::view('user37Flash','user37Flash');
Route::post('addFlashUser',[User37flashController::class,'addFlashUser']);

/* Part 38 */

Route::view('uploadFile38','uploadFile38');
Route::post('uploadFile',[UploadFile38Controller::class,'uploadFile']);

/* Part 39 */

Route::view('localization_about','aboutLocalization');
Route::get('localization_about1/{lang}', function($lang){
    App::setLocale($lang);
    return view('aboutLocalization');
});

/* Part 40 */

/* Route::get('setLang/{lang}',function($lang){
    //return $lang;
    Session::put('lang',$lang);
    return redirect('/');
}); */

Route::middleware('setLang')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('setLang/{lang}',function($lang){
        //return $lang;
        Session::put('lang',$lang);
        return redirect('/');
    });
});

/* Part 41 */
Route::view('addStudent41','add_student_41');
Route::post('add_student_41',[Student41Controller::class,'addStudent']);

/* Part 42 */

Route::get('listStudent42',[Student41Controller::class,'list']);

/* Part 43 */
Route::get('delete/{id}',[Student41Controller::class,'delete']);

/* Part 44 */
Route::get('edit/{id}',[Student41Controller::class,'edit']);

/* Part 45 */
Route::put('edit_student/{id}',[Student41Controller::class,'editStudent']);

/* Part 46 */
Route::get('search',[Student41Controller::class,'search']);

/* Part 48 */
Route::post('delete_multi',[Student41Controller::class,'deleteMultiple']);

/* Part 49 */
Route::view('upload49','upload49');
Route::post('uploadImage49',[ImageController::class,'upload']);
Route::get('imageList49',[ImageController::class,'list']);
/* Part 50 */
Route::view('aboutComponent','aboutComponent');
Route::view('homeComponent','homeComponent');
Route::view('loginComponent','loginComponent');

/* Part 51 */
Route::view('admin51', 'admin51');

/* Part 52 */
Route::view('layout52','layout52');
Route::view('home52','home52');
Route::view('about52','about52');

/* Part 53 */

/* Part 54 */


/* Part 58 */

Route::get('list',[StudentAccessorsController::class,'list']);

/* Part 59 */

Route::get('save',[StudentAccessorsController::class, 'save']);

/* Part 60 */
Route::get('sellerlist',[SellerController::class,'sellerlist']);

/* Part 61 */
Route::get('many-rel',[SellerController::class,'manyRelList']);

/* Part 62 */
Route::get('many-to-one',[SellerController::class,'manyToOneRelList']);

/* Part 63 */
//Route::get('send-mail',[MailController::class,'sendEmail']);

/* Part 64 */
Route::post('send-mail',[MailController::class,'sendEmail']);
Route::view('send-mail','send-email');


use Illuminate\Support\Str;
$info = "hi, let's learn laravel";
/* $info = Str::ucfirst($info);
$info = Str::replaceFirst("Hi","Hello",$info);
$info = Str::camel($info); */
$info = Str::of($info)->ucfirst($info)->replaceFirst("Hi","Hello",$info)->camel($info);
//echo $info;

/* Part 66 */
//Route::get('device/{key}',[DeviceController::class,'index']); // This is for id
Route::get('device/{key:name}',[DeviceController::class,'index']); // This is for column name

/* Part 67 */
Route::get('inline-blade',[DeviceController::class,'inlineBldTmplte']);

/* Part 68 Only Thoery part */

/* Part 69 api creating part all api routes are create inside the routes > api.php */
/* Part 70 api creating part all api routes are create inside the routes > api.php */
/* Part 71 api creating part all api routes are create inside the routes > api.php */
/* Part 72 api creating part all api routes are create inside the routes > api.php */
/* Part 73 api creating part all api routes are create inside the routes > api.php */
/* Part 74 api creating part all api routes are create inside the routes > api.php */
/* Part 75 api creating part all api routes are create inside the routes > api.php */
/* Part 76 api creating part all api routes are create inside the routes > api.php */
/* Part 77 api creating part all api routes are create inside the routes > api.php */
/* Part 78 api creating part all api routes are create inside the routes > api.php */
/* Part 79 api creating part all api routes are create inside the routes > api.php */
/* Part 80 api creating part all api routes are create inside the routes > api.php */
/* Part 81 api creating part all api routes are create inside the routes > api.php */
/* Part 82 api creating part all api routes are create inside the routes > api.php */