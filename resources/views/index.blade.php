@extends('common.layout')
@section('title','ようこそ旅bookへ')

@section('content')
<div class="slider-content">
  <ul class="slider">
     <li><img src="{{asset('/image/sample1.jpg')}}"></li>
     <li><img src="{{asset('/image/sample2.jpg')}}"></li>
     <li><img src="{{asset('/image/sample3.jpg')}}"></li>
     <li><img src="{{asset('/image/sample4.jpg')}}"></li>
     <li><img src="{{asset('/image/sample5.jpg')}}"></li>
     <li><img src="{{asset('/image/sample6.jpg')}}"></li>
  </ul>
</div>

<div class="common">
@csrf
 <div class="form">
  <ul>
   <li><input type="button" value="ログイン" onClick="location.href='./login'" class="button"></li>

   <li><input type="button" value="新規登録" onClick="location.href='./NewCreate'" class="button"></li>
  </ul>
  
  </div>
 </div>
@endsection