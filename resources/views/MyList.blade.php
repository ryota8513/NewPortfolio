@extends('layouts.layout')
@section('title','マイフォーム')

@section('content')
<div class="login-content">
 <form name="login-form" method="POST" action="edit">
 <div class="Form">
 <h1>Myアカウント</h1>
 
 <div class="Form-Item">
    <p class="Form-Item-Label">ID</p>
    <input type="name" class="Form-Item-Input"  value="{{$users->id}}" readonly>
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">名前</p>
    <input type="name" class="Form-Item-Input" placeholder="新規nameを記入" value="{{$users->name}}">
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email" class="Form-Item-Input" placeholder="新規メールアドレス記入" value="{{$usres->email}}">
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="password" class="Form-Item-Input" id="js-password" placeholder="password" value="{{$users->password}}">
    <p>
      <label for="js-passcheck">パスワードを表示する</label>
      <input type="checkbox" id="js-passcheck">
    </p>
  </div>
  <input type="submit" class="Form-Btn" value="編集"> 
  </form>
@endsection