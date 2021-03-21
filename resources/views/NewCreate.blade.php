@extends('layouts.layout')
@section('title'.'新規会員登録フォーム')

@section('content')
 <div class="create-content">
  <form  method="POST" action="{{ route('register') }}">
  @csrf
  <div class="Form">
   <h1>新規会員登録</h1>

  <div class="Form-Item">
    <p class="Form-Item-Label">ユーザー名</p>
    <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田太郎"  autofocus>
    @error('name')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
    @enderror
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email" name="email" class="Form-Item-Input" placeholder="例）example@gmail.com" >
    @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="password" name="password" class="Form-Item-Input" placeholder="8文字以上で入力してください" autocomplete="off">
    <!-- @error('password')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
    @enderror -->
  </div>
  <input type="submit" class="Form-Btn" value="登録">
</form>
<a class="Backlogin" href="./login">登録済みの方はこちらから</a>
</div>
@endsection

