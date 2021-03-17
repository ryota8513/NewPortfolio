@extends('common.layout')

@section('content')
 <div class="create-content">
  <form name="create-form" method="POST" action=users>
  @csrf
  <div class="Form">
   <h1>新規会員登録</h1>
  <div class="Form-Item">
    <p class="Form-Item-Label">ユーザー名</p>
    <input type="text"  name="name" class="Form-Item-Input" value="{{old('name')}}"placeholder="例）山田太郎" >
    @error('name')
     <span class="invalid-feedback" role="alert">
      <strong>名前を入力してください</strong>
    @enderror  
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email"  name="email" class="Form-Item-Input" value="{{old('email')}}" placeholder="例）example@gmail.com" >
    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>メールアドレスを入力してください</strong>
      </span>
    @enderror
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="text" name="password" class="Form-Item-Input" value="{{old('password')}}"placeholder="6文字以内で入力してください" >
    @error('password')
       <span class="invalid-feedback" role="alert">
         <strong>パスワードを入力してください</strong>
       </span>
    @enderror
  </div>

  <input type="submit" class="Form-Btn" value="登録">
</form>
<a class="Backlogin" href="/Auth/login">登録済みの方はこちらから</a>
</div>
@endsection