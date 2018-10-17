<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('home');
Route::get('contact', 'WebsiteController@contact')->name('contact');
Route::post('contact', 'WebsiteController@sendContact')->name('send_contact');

/** expertises */
Route::get('about-us', function () {
    return view('about');
})->name('about');

/** expertises */
Route::get('expertise/business-process-management', function () {
    return view('expertise.bpm');
})->name('expertise.bpm');

Route::get('expertise/enterprise-content-management', function () {
    return view('expertise.ecm');
})->name('expertise.ecm');

Route::get('expertise/business-intelligence', function () {
    return view('expertise.bi');
})->name('expertise.bi');

Route::get('expertise/digital-transformation', function () {
    return view('expertise.db');
})->name('expertise.db');

Route::get('expertise/digital-agility', function () {
    return view('expertise.agility');
})->name('expertise.agility');

/** services */
Route::get('services/enterprise-performance', function () {
    return view('services.ep');
})->name('services.ep');

Route::get('services/program-management', function () {
    return view('services.pm');
})->name('services.pm');

Route::get('services/training-coaching', function () {
    return view('services.tc');
})->name('services.tc');
