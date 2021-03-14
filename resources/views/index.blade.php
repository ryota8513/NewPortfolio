<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
  <script src="{{asset('/js/index.js')}}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <title>旅BOOK</title>
</head>
<body>
<header>
 <div class="header">
  <div class="header-top">
   <div class="header-title">
    <h1><img src="{{asset('/image/travel.png')}}" alt="titleアイコン" width="50px">旅BOOK</h1>
    <p>〜みんなの思い出でつくるサイト</p>
    </div>
    <div class="site-date">
      <h3>累計投稿数</h3>
    </div>
   <div class="user"> 
     <div class="user-nav">
       <li><a href="#">ようこそuserさん<span class="fas fa-angle-down"></span></a>
        <ul>
        <li><a href="#"><span class="fas fa-chevron-right"></span>マイページ</a></li>
        <li><a href="#"><span class="fas fa-chevron-right"></span>編集</a></li>
        <li><a href="#"><span class="fas fa-chevron-right"></span>ログアウト</a></li>
        </ul>
      </li>
     </div>
   </div>
  <div class="site-var">
   <ul>
     <li><a href="#">ホーム</a></li>
     <li><a href="#">サイトについて</a></li>
     <li><a href="#">製作者について</a></li>
   </ul>  
  </div>
 </div>
</div>
</header>
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
 <div class="form">
  <ul>
   <li><input type="button" value="ログイン" onClick="location.href='#'" style="width:200px;height:100px"></li>
   <li> <input type="button" value="新規登録" onClick="location.href='#'" style="width:200px;height:100px"></li>
  </ul>
 </div>
</div>

</body>
</html>




</div>