<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')旅BOOK</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
  <link rel="stylesheet" href="{{asset('/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
  <link rel="stylesheet" href="{{asset('/css/TopIndex.css')}}">
  <link rel="stylesheet" href="{{asset('/css/about.css')}}">
  <link rel="stylesheet" href="{{asset('/css/post.css')}}">
  <link rel="stylesheet" href="{{asset('/css/ThanksForm.css')}}">
  <link rel="stylesheet" href="{{asset('/css/MyList.css')}}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
  <script src="{{asset('/js/index.js')}}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <body>
  <header>
 <div class="header">
  <div class="header-top">
   <div class="header-title">
    <h1><img src="{{asset('/image/travel.png')}}" alt="titleアイコン" width="50px">旅BOOK</h1>
    <p>〜みんなの思い出で増やそう</p>
    </div>
    <div class="site-date">
      <h3>累計投稿数</h3>
    </div>
   <div class="user"> 
     <div class="user-nav">
       <li><a href="#">ようこそuserさん<span class="fas fa-angle-down"></span></a>
        <ul>
        <li><a href="/MyList"><span class="fas fa-chevron-right"></span>マイページ</a></li>
        <li><a href="#"><span class="fas fa-chevron-right"></span>ログアウト</a></li>
        </ul>
      </li>
     </div>
   </div>
  <div class="site-var">
   <ul>
     <li><a href="/index">ホーム</a></li>
     <li><a href="/about">サイトについて</a></li>
     <li><a href="#">製作者について</a></li>
   </ul>  
  </div>
 </div>
</div>
</header>
<div class="common">
 @yield('content')
</div>


<div class="footer">
 <div class="footer-content">
  
 </div>
</div>

</body>