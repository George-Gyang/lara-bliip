<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/signup', function () {
    return view('pages/sign-up');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('profile', function () {
    return view(('pages/profile'));
});

Route::get('subscription', function () {
    return view('pages/subscribe');
});

Route::get("verify", function () {

    return view('pages/verify');
});

Route::get('api-usage', function () {
    return view('pages/api-usage');
});

Route::get('risky-domains', function () {
    return view('pages/risky-domain');
});

Route::get('non-risky', function () {
    return view('pages/non-risky');
});

Route::get('feedback', function () {
    return view('pages/feedback');
});

Route::get('success', function () {
    return view('pages/success');
});

Route::get('thank-you', function () {
    return view('pages/thanks');
});

Route::get('support', function () {
    return view('pages/support');
});
Route::get('login', function () {
    return view('pages/login');
});
Route::get('form', function () {
    return view('/form');
});
