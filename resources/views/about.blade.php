<!-- サイトについて表示画面 -->

@extends('layouts.layout')
@section('title','サイトについて')

@section('content')
<div class="about">

 <div class="text-box">
  <div class="content-right">
  <P class="sub-text">まだ知らないグルが知りたい！</p>
  </div>
  <div class="content-left">
  <p class="sub-text">あの国って実際どういうところなんだろう？</p>
  </div>
 </div>

 <div class="text-box">
  <div class="content-right">
  <img src="{{asset('/image/food1.jpg')}}" class="image">
  <img src="{{asset('/image/food2.jpg')}}" class="image">
  <img src="{{asset('/image/food3.jpg')}}" class="image">
  </div>
  <div class="content-left">
    <P class="sub-text">旅行サイトにはないマイナーな場所に行きたい！</p>
  </div>
 </div>

 <div class="text-box">
  <div class="content-right">
  <P class="sub-text">旅行先であったおもしろエピソードが知りたい！
  </p>
  <p class="sub-text">穴場スポットが知りたい！</P>
  </div>
  <div class="content-left">
  <img src="{{asset('/image/place1.jpg')}}" class="image">
  <img src="{{asset('/image/place2.jpg')}}" class="image">
  <img src="{{asset('/image/place3.jpg')}}" class="image">
  </div>
 </div>

 <div class="text-box">
  <div class="content-right">
  <P></p>
  </div>
  <div class="content-left">
  <p class="main-text">同じ旅行先でも人によって旅の内容、場所、食べた物は違いますよね？みんなはどんな旅行先に行っているのか？どんなグルメに出会ったのか？そして、実際行ってみてどう感じたのか？そんな疑問が生まれました。
    このサイトは、今までの旅の思い出を投稿してみんなで共有するサイトです。そしてあなたの思い出が、旅先へ行ったことがある人、ない人、これから行く人を繋げます。
    たくさんの人にたくさんの思い出を投稿してもらいたいと思っております。
  </p>
  </div>
 </div>

</div>
@endsection  