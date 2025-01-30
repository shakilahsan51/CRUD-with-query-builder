<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){

    Route::get('/','showUsers')->name('home');

    Route::get('/user/{id}', 'singleUser')->name('view.user');

    Route::get('/delete/{id}','deleteUser')->name('delete.user');

    // Route::view('newuser', '/adduser');
    Route::post('/add',  'addUser')->name('addUser');
     

   
    Route::get('updatepage/{id}','updatePage')->name('update.page');
    Route::post('update/{id}','updateUser')->name('update.user');

});





// Route::get('/',[UserController::class, 'showUsers'])->name('home');

// Route::get('/user/{id}',[UserController::class, 'singleUser'])->name('view.user');

// Route::get('/delete/{id}',[UserController::class, 'deleteUser'])->name('delete.user');



Route::view('newuser', '/adduser');
// Route::post('/add', [UserController::class, 'addUser'])->name('addUser');


// Route::get('update',[UserController::class, 'updateUser']);
// Route::get('updatepage/{id}',[UserController::class, 'updatePage'])->name('update.page');

