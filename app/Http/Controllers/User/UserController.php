<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function userlist(){
        $userData = User::all();
        var_dump($userData->toArray());
    }
}
