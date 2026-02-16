<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\UsersModel;

# ------------------ ROTAS DO SISTEMA ------------------ #
// Página inicial
Route::get('/', function () {
   return view('startbootstrap.index');
});
// Página de registro de novo usuário
Route::get('/register', function () {
   return view('startbootstrap.register');
});
// Rota de criação de novo usuário (POST
Route::post('/register', [UsersController::class, 'create']);

// Rota de ativação de usuário via e-mail
Route::get('/active/{link}', [UsersController::class, 'activeuser']);

Route::get('ativado', function () {
   return view('startbootstrap.ativado');
});

Route::get('landingpage', function () {
   return view('freelancer.index');
});
Route::get('landingpage2', function () {
   return view('freelancer.page');
});

