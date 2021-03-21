@extends('layouts.layout')
@section('title','編集フォーム')

@section('content')
<div class="MyPage">
 <form method="POST" action="edit">
 </form>
 @csrf
 <div class="account">

 <div class="account-content">
  <div class="content-left">
  <h2>名前</h2>
  </div>
  <div class="content-right">
  <input type="text" name="name" placeholder="新規名を記入"style="width:250px; height:50px; font-size:20px;" maxlength="20" value="{{$users->name}}">
  </div>
</div>

 <div class="account-content">
  <div class="content-left">
  <h2>メールアドレス</h2>
  </div>
  <div class="content-right">
  <input type="text" name="name" placeholder="新規アドレスを記入"style="width:250px; height:50px; font-size:20px;" maxlength="20" value="{{$users->email}}">
  </div>
</div>

 <div class="account-content">
  <div class="content-left">
  <h2>パスワード</h2>
  </div>
  <div class="content-right">
  <input type="password" name="name" placeholder="新規パスワードを記入"style="width:250px; height:50px; font-size:20px;" maxlength="20" >
  </div>
</div>

</div>
@endsection