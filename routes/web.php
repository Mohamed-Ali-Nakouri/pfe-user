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
/* Authentication Routes... that will ovveride the other ones if they were replaced
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
    Route::get('/form',function () {
        return view('layouts.user.form');
    });
    Route::get('/orientation',function () {
        return view('layouts.user.orientation');
    });
/////////////////FV///////////////////////////

    Route::GET('/Fich_voeux','FichVoeuxController@show');

//////////////////////////////////Orientation/////////////////////////////////



    Route::get('/orientation','EtudiantController@get');
////////////////////emploit/////////////////////////////////////
    Route::get('/emploi','EmploiController@show');
    Route::get('/emploiprof','EmploiController@showProf');
    Route::POST('/fetch_classeEmp','FetchsController@classeEmp');
///////////////////////////////////////////////////////////////////////////

});

//////////////////////EtudiantController////////////////////////
Route::post('/create_std','EtudiantController@store')->name('reg');

////////////////////////////////////////////////////////////////






///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////Fetchs//////////////////////
Route::get('/fetch_formation','FetchsController@formation');
Route::POST('/fetch_matsC','FetchsController@matsC');
Route::POST('/fetch_matsAT','FetchsController@matsAT');
Route::POST('/fetch_prof_hours','FetchsController@repartition');
Route::POST('/fetch_Mats','FetchsController@matiere_du_Classe');
Route::POST('/fetch_voeux','FetchsController@prof_demonders');
Route::POST('/fetch_prof','FetchsController@profs');
Route::POST('/affectedto','FetchsController@affectedto');
Route::POST('/fetch_affectedtotab','FetchsController@affectedtotab');
Route::POST('/fetch_classeEmp','FetchsController@classeEmp');
Route::POST('/fetch_emp_salle','FetchsController@Emp_Salle');
Route::POST('/fetch_salle_vide','FetchsController@salle_vide');
Route::POST('/fetch_salle_vide2','FetchsController@salle_vide2');
Route::POST('/fetch_prof_emp','FetchsController@profEmp');
Route::POST('/MatInfo','FetchsController@MatInfo');
/////////////////PDFS/////////////////////////
//Route::POST('/Pdf_emp_salle','PdfsController@emp_salle');

////////////////Affected/////////////////////
Route::get('/affectMat','AffectMatController@show');
Route::POST('/insert','AffectMatController@store');
////////////////emploi///////////////////////
Route::get('/emploi','EmploiController@show');
Route::POST('/emp_insert','EmploiController@store');
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

Route::get('/profile',function () {
    return view('layouts.user.user');
});

//////////////////////////////////Orientation/////////////////////////////////




////////////////////emploit/////////////////////////////////////

Route::POST('/fetch_classeEmp','FetchsController@classeEmp');
///////////////////////////////////////////////////////////////////////////


/////////////////FV///////////////////////////


Route::post('/store','FichVoeuxController@store');
Route::get('/createPDF','FichVoeuxController@createPDF');
