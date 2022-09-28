<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class UserController extends Controller
{
    public function userOnlineStatus()
    {
        $users = User::all();

        return view('home', ['users' => $users]);
    }


    public function atualizaStatus(){

        $users = User::all();

        echo view('tabela', ['users' => $users]);


    }
}
