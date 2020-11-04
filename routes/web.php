
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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



    });


// ********************* website web page Routes ********************
Route::get('/', 'BlogController@home')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('homeLogin');

Route::group(['prefix'=> 'courses', 'middleware' => 'CheckUser' ],function (){
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('blogpost','BlogController@blog_post')->name('blog-post');
    Route::get('contact','BlogController@contact')->name('contact');
});

Auth::routes();

// ********************* facebook routes *********************
Route::get('/redirect/{services}', 'SocialiteController@redirect');
Route::get('/callback/{services}', 'SocialiteController@callback');


Route::get('/registration','CurdController@select_form')->name('form');
Route::group(['prefix'=> 'curd'],function (){
        Route::get('/edit/{data}','CurdController@edit_form');
        Route::post('/update/{data}','CurdController@update_form');
        Route::post('/create','CurdController@insert_form')->name('insert_form');
        Route::get('/delete/{id}','CurdController@delete_form')->name('delete');


});

                                    #########event and listener#######

Route::get('/youtube', 'CurdController@getVideo');

                                    #########start ajax#######


Route::group(['prefix' => 'ajax'], function () {
    Route::get('insert','AjaxController@formToInsert')->name('ajaxInsert');
    Route::post('AjaxInsert','AjaxController@AjaxInsert')->name('AjaxSave');
    Route::get('AjaxShow','AjaxController@AjaxSelect')->name('AjaxSelect');
    Route::get('AjaxDelete/','AjaxController@AjaxDelete')->name('AjaxDelete');
    Route::get('/ajaxEdit','AjaxController@edit_with_ajax')->name('ajaxEdit');
    Route::get('/ajaxUpdate','AjaxController@update_with_ajax')->name('ajaxUpdate');


});



                                    #########end ajax#######


################ relations #################


Route::get('/oneToOne','RelationOne@OneToONne')->name('ajaxUpdate');


#######################        authentication         ##############
Route::get('/AdminloginBlade', function (){
    return view('admins.loginAdmin');
});




    Route::get('/unauthorized', function () {
        return view('auth.unauthorizedMessage');

    })->name('unauthorized');


    Route::post('/Adminlogin', 'Auth\AuthController@Adminlogin')->name('Adminlogin');

    Route::get('/AdminDash', function () {
        return view('admins.adminDash');

    })->name('AdminDash');


//Route::get('/instructors',function (){
//    return view('admins.loginInstructor');
//
//})->name('loginInstructor');


