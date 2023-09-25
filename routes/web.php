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

Route::resource('user', \App\Http\Controllers\UserController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahapola', [App\Http\Controllers\MahapolaController::class, 'index'])->name('mahapola');
Route::get('/geomahapola', [App\Http\Controllers\GeoMahapolaController::class, 'index'])->name('geomahapola');
Route::get('/gsdmahapola', [App\Http\Controllers\GsMahapolaController::class, 'index'])->name('gsdmahapola');
Route::get('/appliedmahapola', [App\Http\Controllers\AppliedMahapolaController::class, 'index'])->name('appliedmahapola');
Route::get('/manmahapola', [App\Http\Controllers\ManMahapolaController::class, 'index'])->name('manmahapola');
Route::get('/medmahapola', [App\Http\Controllers\MedMahapolaController::class, 'index'])->name('medmahapola');
Route::get('/socialmahapola', [App\Http\Controllers\SocialMahapolaController::class, 'index'])->name('socialmahapola');
Route::get('/techmahapola', [App\Http\Controllers\TechMahapolaController::class, 'index'])->name('techmahapola');
Route::get('/agrimahapola', [App\Http\Controllers\AgriMahapolaController::class, 'index'])->name('agrimahapola');
Route::get('/focmahapola', [App\Http\Controllers\FocMahapolaController::class, 'index'])->name('focmahapola');

Route::get('/bursary', [App\Http\Controllers\BursaryController::class, 'index'])->name('bursary');
Route::get('/appliedbursary', [App\Http\Controllers\AppliedBursaryController::class, 'index'])->name('appliedbursary');
Route::get('/geobursary', [App\Http\Controllers\GeoBursaryController::class, 'index'])->name('geobursary');
Route::get('/gsdbursary', [App\Http\Controllers\GsBursaryController::class, 'index'])->name('gsdbursary');
Route::get('/manbursary', [App\Http\Controllers\ManBursaryController::class, 'index'])->name('manbursary');
Route::get('/medbursary', [App\Http\Controllers\MedBursaryController::class, 'index'])->name('medbursary');
Route::get('/socialbursary', [App\Http\Controllers\SocialBursaryController::class, 'index'])->name('socialbursary');
Route::get('/techbursary', [App\Http\Controllers\TechBursaryController::class, 'index'])->name('techbursary');
Route::get('/agribursary', [App\Http\Controllers\AgriBursaryController::class, 'index'])->name('agribursary');
Route::get('/focbursary', [App\Http\Controllers\FocBursaryController::class, 'index'])->name('focbursary');



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

//Route::resource('mahapolaupdatepaid/{id}', \App\Http\Controllers\mahapola_ar_comment_Controller::class);


Route::get('/getPDF', [App\Http\Controllers\PDFController::class, 'download']);

Route::group(['middleware'=>'auth'], function () {
    Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
    Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
    Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
});

//Route::get('/edit-records', [App\Http\Controllers\UserDetailsController::class, 'index'])->name('edit-records');
Route::get('/edit-records','App\Http\Controllers\UserDetailsController@index');
Route::get('edit/{id}','App\Http\Controllers\UserDetailsController@show');
Route::post('edit/{id}','App\Http\Controllers\UserDetailsController@edit');
Route::get('delete/{id}','App\Http\Controllers\UserDetailsController@destroy');

Route::get('bsedit/{id}','App\Http\Controllers\BursaryStatusesDetailsController@show');
Route::post('bsedit/{id}','App\Http\Controllers\BursaryStatusesDetailsController@edit');
Route::get('bsdelete/{id}','App\Http\Controllers\BursaryStatusesDetailsController@destroy');

Route::get('msedit/{id}','App\Http\Controllers\MahapolaStatusesDetailsController@show');
Route::post('msedit/{id}','App\Http\Controllers\MahapolaStatusesDetailsController@edit');
Route::get('msdelete/{id}','App\Http\Controllers\MahapolaStatusesDetailsController@destroy');

Route::get('/forget-password', '\App\Http\Controllers\Auth\ForgotPasswordController@getEmail');
Route::post('/forget-password', '\App\Http\Controllers\Auth\ForgotPasswordController@postEmail');


Route::get('/reset-password/{token}', '\App\Http\Controllers\Auth\ResetPasswordController@showResetForm');
Route::post('/reset-password', '\App\Http\Controllers\Auth\ResetPasswordController@reset');


Route::get('/tab1',function (){
    return view('home');
});
Route::get('/tab2',function (){
    return view('home');
});
Route::get('/tab3',function (){
    return view('home');
});
