<?php

use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function(){
    return ['name' => 'Harshdeep', 'age' => 13];
});

/* Part :- 70 */
/* Route::get('students', [StudentApiController::class,'list']); */

/* Part :- 71 Thorey part */

/* Part :- 72 */
/* Route::post('add-student',[StudentApiController::class,'addStudent']); */

/* Part :- 73 */
/* Route::put('update-student',[StudentApiController::class,'updateStudent']); */

/* Part :- 74 */
/* Route::delete('delete-student/{id}',[StudentApiController::class,'deleteStudent']); */

/* Part :- 75 */
/* Route::get('search-student/{name}',[StudentApiController::class,'searchStudent']); */

/* Part :- 76 */
/* Route::post('add-student',[StudentApiController::class,'addStudent']); */

/* Part :- 77 */
/* Route::resource('member', [MemberController::class]); */

/* Part :- 78 */
Route::post('signup',[UserAuthController::class,'signup']);

/* Part :- 79 */
Route::post('login',[UserAuthController::class,'login']);

/* Part :- 80 Sanctum Middleware Authentication */

Route::group(["middleware" => "auth:sanctum"], function(){
    Route::get('students', [StudentApiController::class,'list']);
    Route::post('add-student',[StudentApiController::class,'addStudent']);
    Route::put('update-student',[StudentApiController::class,'updateStudent']);
    Route::delete('delete-student/{id}',[StudentApiController::class,'deleteStudent']);
    Route::get('search-student/{name}',[StudentApiController::class,'searchStudent']);
});

/* If token is not found then redirect to the login route */
Route::get('login',[UserAuthController::class,'login'])->name('login');

/* Part :- 81, 82, 83, 84 is part of thory */


