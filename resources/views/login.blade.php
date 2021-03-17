@extends('common.layout')
@section('title','ログインフォーム')

@section('content')
 <div class="login-content">
 <form name="login-form" method="POST" action="users">
 <div class="Form">
 <h1>ログイン</h1>
  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="password" class="Form-Item-Input" id="js-password" placeholder="password">
    <p>
      <label for="js-passcheck">パスワードを表示する</label>
      <input type="checkbox" id="js-passcheck">
    </p>
  </div>
  <input type="submit" class="Form-Btn" value="ログイン"> 
  </form>
  <a class="BackCreate" href="./NewCreate">登録がまだの方はこちらから</a>
 </div>
@endsection