<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function lst(){
        $userData = User::all();
        if($userData->isNotEmpty()){
            $this->ajax(1,$userData->toArray(),'');
        };
    }
}
