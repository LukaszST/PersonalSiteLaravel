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

Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);

    return redirect('/');
});

Route::get('/', function () {

    return view('layout');
});

Route::post('/mail-verify', 'MailController@verifyMail');

Route::get('/{locale}/test-pdf', 'PdfController@returnPdf');

Route::post('/send', 'EmailController@send');

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
