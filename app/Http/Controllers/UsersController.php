<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function index()
    {
        return ["users" => ["User1", "User2", "User3"]];
    }
    public function showStatus($users, $id)
    {
        return 'você quer ver o ' . $users . ' de id ' . $id;
    }


    public function create(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'usermail' => 'required|email|max:255|unique:users,email', // ajuste "users" para o nome real da sua tabela
            'userpasse' => 'required|string|min:4',
            'userpasseconfirma' => 'required|same:userpasse',
        ], [
            'usermail.required' => 'O e-mail é obrigatório.',
            'usermail.email' => 'Por favor, insira um e-mail válido.',
            'usermail.unique' => 'Este e-mail já está cadastrado.',
            'userpasse.required' => 'A senha é obrigatória.',
            'userpasse.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'userpasseconfirma.required' => 'A confirmação de senha é obrigatória.',
            'userpasseconfirma.same' => 'As senhas não coincidem.',
        ]);

        // Cria o usuário com senha *hashada*
        $user = UsersModel::create([
            'email' => $validated['usermail'],
            'senhas' => Hash::make($validated['userpasse']), // 🔐 nunca salve senhas em texto puro!
        ]);

        // Envia o e-mail de boas-vindas
        try {
            Mail::raw('Obrigado por se registrar em nosso site!', function ($message) use ($validated) {
                $message->to($validated['usermail'])
                        ->subject('Registro de Usuário');
            });
            } catch (\Exception $e) {
                // Opcional: logar erro ou notificar admin (mas não abortar o registro)
                Log::warning('Falha ao enviar e-mail de boas-vindas para: ' . $validated['usermail'], ['error' => $e->getMessage()]);
            }

        // Redireciona com mensagem de sucesso (ex: para login)
        return redirect()->to('register')->with('success', 'Conta criada com sucesso! Verifique seu e-mail.');
    }
}
