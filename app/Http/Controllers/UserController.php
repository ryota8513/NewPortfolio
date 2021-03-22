<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    // ログインpush後表示
    public function login(){
        return view('Logins');
    }
    //新規会員登録画面表示
    public function NewCreate(){
        return view('NewCreate');
    }
    //ログイン後のトップ表示
    public function TopIndex(){
        return view('TopIndex');
    }
    
    //ユーザー会員登録
    // public function create(Request $request){
    //     $users = new User();
    //     $users ->name = $request -> name;
    //     $users ->email = $request -> email;
    //     $users ->password = $request -> password;
    //     $users -> save();
    //     return redirect('TopIndex');
    // }

    public function showAbout(){
        return view('about');
    }
    
    public function showMyList(){
        return view('MyList');
    }

    //MyListユーザー情報表示
    public function showList(){
        $users = user::all();
        $date = ['users'=>$users];
        return view('MyList',$date);
    }

    //MyList編集
    public function AccountEdit(Request $request){
        $users = user::find($request->id);
        return view('AccoutEdit',compact('users'));
    }

    //MyList更新
    public function updateAccount(Request $request){
        $users =user::find($request->id);
        $users ->name = $request -> name;
        $users ->email = $request -> email;
        $users ->password = $request -> password;
        $users ->save();
        return redirect('MyList');
    }


    
}
    








