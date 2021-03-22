<!-- 思い出投稿画面 -->

@extends('layouts.layout')
@section('title'.'投稿フォーム')

@section('content')
<div class="post">
<form method="POST" action="posts">
@csrf
 <div class="post-content">
 <div class="content-left">
 <h2>題名</h2>
 </div>
 <div class="content-right">
 <input type="text" name="title" placeholder="記入例）アメリカで〇〇" style="width:250px; height:50px; font-size:20px;" maxlength="20" >
 </div>

 <div class="post-content">
 <div class="content-left">
 <h2>行き先</h2>
</div>
 <div class="content-right">
 <input type="text" name="place" placeholder="記入例）アメリカ" style="width:250px; height:50px; font-size:20px;" maxlength="20">
</div>
</div>

<div class="post-content">
<div class="content-left">
  <h2>思い出ランク</h2>
</div>
<div class="content-right">
  <div class="evaluation">
    <input id="star1" type="radio" name="star" value="5" />
    <label for="star1"><span class="text">最高</span>★</label>
    <input id="star2" type="radio" name="star" value="4" />
    <label for="star2"><span class="text">良い</span>★</label>
    <input id="star3" type="radio" name="star" value="3" />
    <label for="star3"><span class="text">普通</span>★</label>
    <input id="star4" type="radio" name="star" value="2" />
    <label for="star4"><span class="text">悪い</span>★</label>
    <input id="star5" type="radio" name="star" value="1" />
    <label for="star5"><span class="text">最悪</span>★</label>
  </div>
 </div>
</div>
 
<div class="post-content">
<div class="content-left">
  <h2>思い出</h2>
</div>
<div class="content-right">
  <textarea name="memory" style="height:200px; width:400px;" maxlength="200" wrap="hard">旅行先での思い出を200文字以内で記入してください
  </textarea>
</div>
</div> 

<div class="post-content">
<div class="content-left">
  <h2>思い出写真</h2>
  <input type="file" name="file" id="image" accept="image*" enctype=”multipart/form-data” onchange="previewImage(this);">
</div>
<div class="content-right"> 
  <img id="preview" src="" style="max-width:400px;">
</div>
</div>

<div class="post-content">
<input type="submit" value="送信する" class="btn" style="width:100px; height:50px;">
<input type="reset" value="ﾘｾｯﾄする"class="btn" style="width:100px; height:50px;" >
</div>

 </form>
</div>
@endsection