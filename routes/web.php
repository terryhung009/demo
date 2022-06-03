<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return inertia::render('Home', 
// [
//         'name' => 'Jeffrey Way',
//         'frameworks' => [
//             'Laravel', 'Vue', 'Inertia'
//         ]
//     ]);
//     // return View::make('Welcome');
//     // return inertia('Welcome');
// });
Route::get('/', function () {
    return inertia::render(
        'Home'
    );
});

Route::get('/users', function () {
    sleep(2);

    return inertia::render(
        'Users'
    );
});

Route::get('/settings', function () {
    sleep(2);

    return inertia::render(
        'Settings'
    );
});
Route::post('/logout', function () {

    dd('logging the user out');
});
