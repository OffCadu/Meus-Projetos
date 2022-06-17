<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Users;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ListUser()
    {
        $user = new Users();
        $user->name = 'peixe';
        $user->email ='peixe@peixe.com';
        $user->password ='peixe123';
        $user->save();
        echo "<h1>Listagem de Usuário</h1>";
    }
}
