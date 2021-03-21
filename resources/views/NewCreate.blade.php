@extends('layouts.layout')
@section('title'.'新規会員登録フォーム')

@section('content')
 <div class="create-content">
  <form name="create-form" method="POST" action="users">
  @csrf
  <div class="Form">
   <h1>新規会員登録</h1>
  <div class="Form-Item">
    <p class="Form-Item-Label">ユーザー名</p>
    <input type="text"  name="name" class="Form-Item-Input" placeholder="例）山田太郎" >
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email"  name="email" class="Form-Item-Input" placeholder="例）example@gmail.com" >
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="password" name="password" class="Form-Item-Input" placeholder="6文字以内で入力してください" >
  </div>
  <input type="submit" class="Form-Btn" value="登録">
</form>
<a class="Backlogin" href="./login">登録済みの方はこちらから</a>
</div>
@endsection -->

