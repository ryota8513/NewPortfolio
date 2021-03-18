@extends('layouts.layout')
@section('title'.'ようこそ旅BOOKへ')

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

<div class="top">
  <h1>みんなの思い出</h1>  
  <ul class="top-content">
    
 <li class="user-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
   <p>name</p>
</li>
 <li class="user-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
   <p>name</p>
</li>
 <li class="user-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
   <p>name</p>
</li>
 <li class="user-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
   <p>name</p>
</li>
 <li class="user-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
   <p>name</p>
</li>
 <li class="user-content">
  <a href="#">
   <img class="photo" src="{{asset('/image/sample1.jpg')}}">
  </a>
   <p>name</p>
</li>
</ul>
</div>
@endsection