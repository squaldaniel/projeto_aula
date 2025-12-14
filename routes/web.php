<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
   return view('startbootstrap.index');
});


Route::get('/users', [UsersController::class, 'index']);

// Route::get('/{users}/status/{id}', function($users, $id){
//     $sql = 'select user from users where id = ' . $id;
//     $query = DB::select($sql);
// });

Route::get('/{users}/status/{id}', [UsersController::class, 'showStatus']);
