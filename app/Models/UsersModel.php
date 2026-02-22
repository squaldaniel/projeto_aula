<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    public $fillable = [
        'email',
        'senhas',
        'active'
    ];
    public $timestamps = false;
}
