<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function Login(Request $rq)
    {  
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password])) {
            $user=Auth::user();
            return view('homeql')->with('user',$user);
        } else {
            dd('Đăng nhập thất bại');
        }
    }
}
