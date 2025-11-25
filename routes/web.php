<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});


Route::get('/seeker_login', function () {
    return view('seeker_login');
});

Route::get('/seeker_register', function () {
    return view('seeker_register');
});

Route::get('/employer_login', function () {
    return view('employer_login');
});

Route::get('/employer_register', function () {
    return view('employer_register');
});

Route::get('/profile_seeker', function () {
    return view('profile_seeker');
});

Route::get('/profile_employer', function () {
    return view('profile_employer');
});

Route::get('/edit_profile_employer', function () {
    return view('edit_profile_employer');
});

Route::get('/edit_profile_seeker', function () {
    return view('edit_profile_seeker');
});

Route::get('/change_password', function () {
    return view('change_password');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/landing_page', function () {
    return view('landing_page');
});

Route::get('/formpostingjob', function () {
    return view('formpostingjob');
});

Route::get('/view_posting', function () {
    return view('view_posting');
});
