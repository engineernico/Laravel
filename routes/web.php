
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
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', 'BlogController@home')->name('home')->middleware('auth');
        Route::get('/home', 'HomeController@index')->name('homeLogin');

    });


<<<<<<< HEAD
// ********************* Routes ********************
=======
// ********************* website web page Routes ********************
Route::get('/', 'BlogController@home')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('homeLogin');
>>>>>>> 26b976b22f26183ec3e7f760aca63ff0eb541502

Route::group(['prefix'=> 'courses', 'middleware' => 'CheckUser' ],function (){
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('blogpost','BlogController@blog_post')->name('blog-post');
    Route::get('contact','BlogController@contact')->name('contact');
});

Auth::routes();

// ********************* facebook routes *********************
Route::get('/redirect/{services}', 'SocialiteController@redirect');
Route::get('/callback/{services}', 'SocialiteController@callback');


Route::get('/registration','CurdController@select_form')->name('form')->middleware('adminCheck');
Route::group(['prefix'=> 'curd','middleware'=>'adminCheck'],function (){
        Route::get('/edit/{data}','CurdController@edit_form');
        Route::post('/update/{data}','CurdController@update_form');
        Route::post('/create','CurdController@insert_form')->name('insert_form');
        Route::get('/delete/{id}','CurdController@delete_form')->name('delete');
        Route::post('/ajaxStore', 'Front\ajaxController@ajaxStore')->name('ajaxStore');


});

                                    #########event and listener#######

Route::get('/youtube', 'CurdController@getVideo');
Route::get('/ajax', 'Front\ajaxController@viewAjax');


#################### Relations #################
Route::get('/one-to-one',function (){
    #####  user #######
    $user = \App\User::find('5');
//    $user = \App\User::first('name');
//    $user = \App\User::offset(0)->orderBy('name')->limit(3)->get();
//    $user = \App\User::where('name','mohamed')->get();
//    $user = \App\User::with('names')->find('5');
//    $user = \App\User::with(['names'=>function($q){
//        $q -> select('fname','lname','user_id');
//    }])->find('5');
//    $user->names;

//    $user = \App\User::whereHas('names')->get();
//    $user = \App\User::whereDoesntHave('names')->get();
//    $user = \App\models\Form::whereHas('photo')->get();


//    $user = \App\User::with('names')->find('5'); // join with two table
//    $user = \App\User::whereHas('soaad')->get(); //
//    $user = \App\User::whereDoesntHave('soaad')->get(); //
//    $user = \App\models\Form::whereHas('user',function ($q){$q->where('photo','3'); })->get();
//    echo"<h1 align='center'> ".$user->name."</h1>";

    $user = \App\User::with('soaad')->find('3');
//    $user->soaad()->delete();// for related model
//    $user->delete();  // for this model
    return response()->json($user);
});

#################### Relations #################

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


