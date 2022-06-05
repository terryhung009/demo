<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;

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
    // return User::paginate(10);

    return inertia::render(
        'Users',[
            'users' => User::paginate(10)
                
        ]);
        
    

    // sleep(2);

    // return inertia::render(
    //     'Users',[
    //         'users' => User::all()->map(fn($user)=>[
    //             'id' =>$user->id,
    //             'name' =>$user->name
    //         ])
    //     ]
    // );
});

Route::get('/settings', function () {
    // sleep(2);

    return inertia::render(
        'Settings'
    );
});
Route::post('/logout', function () {

    // dd('logging the user out');
    dd(request('foo'));
});
