<!-- アカウント情報 投稿情報 -->

@extends('layouts.layout')
@section('title','マイフォーム')

@section('content')
<div class="login-content">
 <form name="login-form" method="POST" action="AccountEdit">
 <div class="Form">
 <h1>Myアカウント</h1>
 
 <!-- <div class="Form-Item">
    <p class="Form-Item-Label">ID</p>
    <input type="name" class="Form-Item-Input">
  </div> -->

  <div class="Form-Item">
    <p class="Form-Item-Label">名前</p>
    <input type="name" class="Form-Item-Input" >
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">メールアドレス</p>
    <input type="email" class="Form-Item-Input">
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label">パスワード</p>
    <input type="password" class="Form-Item-Input" id="js-password"  >
    <p>
      <label for="js-passcheck">パスワードを表示する</label>
      <input type="checkbox" id="js-passcheck">
    </p>
  </div>
  <!-- <input type="submit" class="Form-Btn" value="編集">  -->
  <button type="submit" class="Form-Btn">編集</button>
  </form>
</div>
</div>


  <div class="middle-content">
  <h1>思い出</h1>  
  <ul class="memory">
  <form method="POST" action="MemoryEdit">

 <li class="memory-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
</li>

 <li class="memory-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
</li>

 <li class="memory-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
</li>
</ul>
<!-- <li><button type="submit" value="BOOkへ保存"  class="button">BOOkへ保存</button></li> -->
</form>
</div>
@endsection