<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //ログイン前トップ表示
    public function index(){
        return view('/Auth/index');
    }

    // ログインpush後表示
    public function login(){
        return view('/Auth/login');
    }
    //新規会員登録画面表示
    public function register(){
        return view('/Auth/register');
    }
    //ログイン後のトップ表示
    public function TopIndex(){
        return view('TopIndex');
    }

    //ユーザー会員登録
    public function create(Request $request){
        $users = new User();
        $users ->name = $request -> name;
        $users ->email = $request -> email;
        $users ->password = $request -> password;
        $users -> save();
        return redirect('TopIndex');
    }
   
    







}
