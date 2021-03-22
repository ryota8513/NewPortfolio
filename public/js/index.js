$(function(){
$('.slider').slick({
  slidesToShow: 3,
  dots:true,
  swipe:true,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  infinite:true
  // appendArrows: $('.slider-content'),
  // prevArrow: '<div class="slider-arrow slider-prev fa fa-angle-left"></div>',
  // nextArrow: '<div class="slider-arrow slider-next fa fa-angle-right"></div>',
  
});
});

$(function(){
   var password='#js-password';
   var passcheck='#js-passcheck';
   $(passcheck).change(function(){
     if($(this).prop('checked')){
       $(password).attr('type','text');
     }else{
       $(password).attr('type','password');
     }
   });
});

function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
}

//myimage表示用

// const target = document.getElementById('target');
// target.addEventListener('change', function (e) {
//     const file = e.target.files[0]
//     const reader = new FileReader();
//     reader.onload = function (e) {
//         const img = document.getElementById("myImage")
//         img.src = e.target.result;
//     }
//     reader.readAsDataURL(file);
// }, false);

$(function() {
  $('input[type=file]').after('<span></span>');

  // アップロードするファイルを選択
  $('input[type=file]').change(function() {
    var file = $(this).prop('files')[0];
    

    // 画像以外は処理を停止
    if (! file.type.match('image.*')) {
      // クリア
      $(this).val('');
      $('span').html('');
      return;
    }

    // 画像表示
    var reader = new FileReader();
    
    reader.onload = function() {
      var img_src = $('<img>').attr('src', reader.result);
      $('span').html(img_src);
    }
    reader.readAsDataURL(file);
  });
});