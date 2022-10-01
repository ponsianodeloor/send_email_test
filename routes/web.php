<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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

Route::controller(EmailController::class)->group(function (){
    Route::get('/email', 'index')->name('email.type_email');
    Route::get('/email/send_successfully', 'sentSuccessfully')->name('email.sent_successfully');
    Route::get('/email/error_send', 'errorSend')->name('email.error_send');

    Route::post('/email', 'send')->name('email.send');
});
