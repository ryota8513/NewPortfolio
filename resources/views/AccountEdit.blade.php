<!-- アカウント編集画面 -->

@extends('layouts.layout')
@section('title','編集フォーム')

@section('content')
<div class="login-content">
 <form name="login-form" method="POST" action="upAccountEdit">
 <div class="Form">
 <h1>Myアカウント</h1>
 
 <!-- <div class="Form-Item">
    <p class="Form-Item-Label">ID</p>
    <input type="name" class="Form-Item-Input">
  </div> -->

  <div class="Form-Item">
    <p class="Form-Item-Label">名前</p>
    <input type="name" class="Form-Item-Input" value="{{$users->name}}">
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email" class="Form-Item-Input" value="{{$users->email}}">
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="password" class="Form-Item-Input" id="js-password" value="{{$users->password}}">
    <p>
      <label for="js-passcheck">パスワードを表示する</label>
      <input type="checkbox" id="js-passcheck">
    </p>
  </div>
  <button type="submit" onclick="return check();" class="Form-Btn">更新</button>
  </form>
@endsection