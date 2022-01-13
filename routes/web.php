<?php

use App\Models\VCorRegComment;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahapola', [App\Http\Controllers\MahapolaController::class, 'index'])->name('mahapola');
Route::get('/bursary', [App\Http\Controllers\BursaryController::class, 'index'])->name('bursary');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home/updatemahapolaname', [App\Http\Controllers\HomeController::class, 'updatemahapolaname'])->name('updatemahapolaname');


//Route::resource('statuses', \App\Http\Controllers\StatusController::class);
Route::resource('bursary_statuses', \App\Http\Controllers\bursary_status_Controller::class);
Route::resource('mahapola_statuses', \App\Http\Controllers\mahapola_status_Controller::class);


//Route::resource('arcomments', \App\Http\Controllers\ArcommentController::class);
//Route::resource('v_cor_reg_comments', \App\Http\Controllers\VCorRegCommentController::class);
Route::resource('bursary_vc_or_reg_comments', \App\Http\Controllers\bursary_vc_or_reg_comment_Controller::class);
Route::resource('bursary_ar_comments', \App\Http\Controllers\bursary_ar_comment_Controller::class);
Route::resource('mahapola_ar_comments', \App\Http\Controllers\mahapola_ar_comment_Controller::class);


Route::get('/getPDF', [App\Http\Controllers\PDFController::class, 'download']);

Route::group(['middleware'=>'auth'], function () {
    Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
    Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
    Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
});

Route::get('/tab1',function (){
    return view('home');
});
Route::get('/tab2',function (){
    return view('home');
});
Route::get('/tab3',function (){
    return view('home');
});
