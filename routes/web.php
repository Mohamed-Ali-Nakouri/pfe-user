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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/* Authentication Routes...
$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/login', 'Auth\LoginController@login');
$this->post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('/register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('admin/password/reset', 'Auth\ResetPasswordController@reset');
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/check','preRegController@verif');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    });
});

//////////////////////EtudiantController////////////////////////
Route::post('/create_std','EtudiantController@store')->name('reg');

////////////////////////////////////////////////////////////////
Route::get('/form',function () {
    return view('layouts.user.form');
});




Route::get('/orientation',function () {
    return view('layouts.user.orientation');
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////DepartementController////////////////////////
Route::get('/departement','DepartementController@show');
Route::get('/create','DepartementController@create');
Route::get('/create/{id}','DepartementController@create');
Route::post('/create','DepartementController@store');
Route::post('/modify/{id}','DepartementController@edit');
Route::get('/supp/{id}','DepartementController@destroy');
//////////////////////FormationController////////////////////////
Route::get('/formation','FormationController@show');
Route::get('/create_form','FormationController@create');
Route::get('/create_form/{id}','FormationController@create');
Route::post('/create_form','FormationController@store');
Route::post('/modify_form/{id}','FormationController@edit');
Route::get('/supp_form/{id}','FormationController@destroy');
//////////////////////EtudiantController////////////////////////

Route::get('/view_profile','EtudiantController@show');
////////////////////////////////////////////////////////////////

//////////////////////ExamController////////////////////////
Route::get('/exam','examController@show');
Route::get('/create','examController@create');
Route::get('/create/{id}','examController@create');
Route::post('/create','examController@store');
Route::post('/modify/{id}','examController@edit');
Route::get('/supp/{id}','examController@destroy');


////////////////////////////pdf download//////////////////

Route::post('/gen','EtudiantController@generate');
Route::get('/print','EtudiantController@generate');
Route::get('/tableM','EtudiantController@fetch');






////////////////////////////////////Fiche Renseignement/////////////////////////////////////////////////////
Route::get('/form',function () {
    return view('layouts.user.form');
});

Route::get('/fiche',function () {
    return view('layouts.student.fiche_renseignement');
});


Route::post('create_fr','ficheController@store');
/////////////////////////////////////////////////////////////////
Route::get('/examanet',function () {
    return view('layouts.user.emp_exam');
});
Route::get('/examanet','examController@show');


/////////////////////////////////////////////////////////////////////////////////
Route::get('/find/{id}','examController@create');
Route::POST('/getClasses','examController@fetch_classes_for_exam');
Route::POST('/getMats','examController@find');
////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////Orientation/////////////////////////////////
Route::POST('/oritoPrint','EtudiantController@get1');


Route::get('/orientation','EtudiantController@get');
Route::get('test',function (){
    return view('layouts.user.oriontation');
});
Route::get('/emploi','EmploiController@show');
Route::POST('/fetch_classeEmp','FetchsController@classeEmp');
///////////////////////////////////////////////////////////////////////////

Route::get('/profile',function () {
    return view('layouts.user.user');
});
/////////////////FV///////////////////////////

Route::get('/Fich_voeux','FichVoeuxController@show');
Route::post('/store','FichVoeuxController@store');
Route::get('/createPDF','FichVoeuxController@createPDF');
