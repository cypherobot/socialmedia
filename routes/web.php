<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('migrate');
    $exitCode = Artisan::call('optimize');
    return 'DONE'; //Return anything
});

Auth::routes();

// Social Login Routes ( google | facebook )
// Route::get('/login/{social}', 'SocialLoginController@redirect_to_provider')->where('social','facebook|google');
// Route::get('/login/{social}/callback', 'SocialLoginController@handle_provider_callback')->where('social','facebook|google');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('posts', 'HomeController@posts')->name('posts');
Route::post('like', 'HomeController@LikePost')->name('like');

Route::post('submit','newpost@save');

Route::get('/home', 'HomeController@index')->middleware("auth");

Route::get('/myprofile', 'HomeController@myprofile');

Route::get('/userprofile/{id?}', 'HomeController@userprofile');

Route::post('save-comment', 'HomeController@SaveComment')->name('save-comment');

Route::resource('users', 'UserController');
// To update user image
Route::post('/update-user-profile', 'UserController@update_user_profile')->middleware("auth");

Route::get('/message', 'HomeController@messagenotification')->middleware("auth");

//social Login
Route::get('auth/social', 'Auth\LoginController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\LoginController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');


// Messenger routes
Route::post('api/get-user-messages', 'MessageController@get_user_messages')->middleware("auth");
Route::post('api/send-message', 'MessageController@send_message')->middleware("auth");
Route::post('api/mark-messages-read', 'MessageController@mark_messages_read')->middleware("auth");

Route::post('submit_up', 'userprofile@save');

Route::post('submit_in', 'edituserprofilesubmit@update');




//Route for connection requests
Route::resource('connections', 'ConnectionController');
Route::post('/request-connection/{id}', 'ConnectionController@request_connection')->middleware("auth");
Route::post('/cancel-connection-request/{id}', 'ConnectionController@cancel_connection_request')->middleware("auth");
Route::post('/decline-connection-request/{id}', 'ConnectionController@decline_connection_request')->middleware("auth");
Route::post('/accept-connection-request/{id}', 'ConnectionController@accept_connection_request')->middleware("auth");
Route::post('/remove-connection/{id}', 'ConnectionController@remove_connection')->middleware("auth");
Route::post('/update-familiarity/{id}', 'ConnectionController@update_familiarity')->middleware("auth");

//clear all notifications
Route::post('/clear-all-notifications', 'HomeController@clear_all_notifications')->middleware("auth");

// follow user
Route::post('/follow-user/{id}', 'FollowController@follow_user')->middleware("auth");
Route::post('/unfollow-user/{id}', 'FollowController@unfollow_user')->middleware("auth");

// block/unblock user
Route::post('/block-user/{id}', 'ConnectionController@block_user')->middleware("auth");
Route::post('/unblock-user/{id}', 'ConnectionController@unblock_user')->middleware("auth");

// report a user
Route::post('/report-user', 'ReportController@report_user')->middleware("auth");

// Route for Posts
Route::resource('posts', 'PostController');
Route::post('/like-user-post', 'PostController@like_user_post');

// Routes for user notes
Route::resource('user-notes', 'UserNoteController');

// notifications 
Route::get('/notifications', function () {
    $user = auth()->user();
    $suggestions = User::where( "id" , "!=" , $user->id )->inRandomOrder()->get();
    return view('notifications', compact('user','suggestions'));
});

// search 
Route::get('/search', function () {
    if ( ! Auth::user() ) {
        return redirect('/login');
    }
    $user = Auth::user();
    $suggestions = User::where([
        [ "id" , "!=" , $user->id ]
    ])->inRandomOrder()->get();

    if ( isset( $_GET["search"] ) ) {
        $search_results = User::where([
            [ "name", 'LIKE', "%$_GET[search]%" ]
        ])->orderBy("name","ASC")->get();
    } else {
        $search_results = User::where([
        ])->inRandomOrder()->get();
    }

    return view('search', compact('user','suggestions','search_results'));
});