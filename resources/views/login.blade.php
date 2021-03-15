@extends('common.layout')
@section('title','ログインページ')
@section('content')

<div class="common">
 <div class="login-content">
 <form name="form" method="POST" action="user">
 <div class="Form">
  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">パスワード</p>
    <input type="password" class="Form-Item-Input" id="js-password" placeholder="password">
    <p>
      <label for="js-passcheck">パスワードを表示する</label>
      <input type="checkbox" id="js-passcheck">
    </p>
  </div>
  <input type="submit" class="Form-Btn" value="ログイン">
  </form>
 </div>
</div>
@endsection