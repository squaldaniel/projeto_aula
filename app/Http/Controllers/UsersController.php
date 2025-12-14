<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

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
}
