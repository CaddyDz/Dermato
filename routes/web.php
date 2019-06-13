<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
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
    return view('index');
});
Route::post('/contact', function() {
    $details = [
        'name' => request()->name,
        'surname' => request()->surname,
        'phone' => request()->phone,
        'email' => request()->email,
        'subject' => request()->subject,
        'message' => request()->message
    ];
    try {
        Mail::to(setting('site.email'))->send(new Contact($details));
    } catch (\Exception $e) {
        Log::error($e);
        session()->flash('errors');
        return back();
    }
    if (Mail::failures()) {
        session()->flash('errors');
    }
    session()->flash('success');
    return back();
});
Route::view('contact', 'contact');
Route::view('cabinet', 'cabinet');
Route::view('about', 'about');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('services', function() {
    return abort(404);
});
Route::get('{category}', 'PagesController@getCategory');
Route::get('{catgeory}/{service}', 'PagesController@getService')->name('service');
Route::get('services/{service}', 'PagesController@getService')->name('service');

