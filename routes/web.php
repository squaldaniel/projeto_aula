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
   $Link = "ZGFuaWVsc2FudG9zQG1haWwuY29tfF98JDJ5JDEyJFdOSE92N1ZrYUR0blNMMnF3MXRPVS5kWFI3RU10dXJ5MHMxaTRoZFVmcm9pQkZla1J4SGNx";
   return view('mail.welcome')->with([
      'linkemail' => url('/active/'.$Link)
   ]);
});

Route::get('/active/{link}', function ($link) {
   $decoded = base64_decode($link);
   list($email, $senha) = explode('|_|', $decoded);
   return "E-mail: " . $email . "<br";

   // $user = \App\Models\UsersModel::where('email', $email)->where('senhas', $senha)->first();

   // if ($user) {
   //     // Ativar o usuário
   //     $user->ativo = 1;
   //     $user->save();

   //     return "Usuário ativado com sucesso!";
   // } else {
   //     return "Link de ativação inválido.";
   // }
});



// Route::get('/users', [UsersController::class, 'index']);

// Route::get('/{users}/status/{id}', function($users, $id){
//     $sql = 'select user from users where id = ' . $id;
//     $query = DB::select($sql);
// });

// Route::get('/{users}/status/{id}', [UsersController::class, 'showStatus']);
