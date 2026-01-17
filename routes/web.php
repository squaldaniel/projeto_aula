<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
   return view('startbootstrap.index');
});
Route::get('/register', function () {
   return view('startbootstrap.register');
});
Route::post('/register', [UsersController::class, 'create']);
Route::get('/veremail', function () {
   return view('mail.welcome');
});



// Route::get('/users', [UsersController::class, 'index']);

// Route::get('/{users}/status/{id}', function($users, $id){
//     $sql = 'select user from users where id = ' . $id;
//     $query = DB::select($sql);
// });

// Route::get('/{users}/status/{id}', [UsersController::class, 'showStatus']);
