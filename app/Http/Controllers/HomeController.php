<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    //ログインした人だけがアクセスできるようにする
    public function __construct(){
        $this->middleware('auth');
    }

    public function TopIndex(){
        return view('TopIndex');
    }
}
