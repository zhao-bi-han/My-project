$(function (){
	$(".nav_woman").hide();
	$(".nav_man").hide();
// 女性下拉框
   $("#woman").hover(function(){
     $(".nav_woman").show();
     $(".woman").css("height","100px");
      $(".index_w").css("color","#4cb2cb");
   },function(){
   	$(".nav_woman").hide();
   	 $(".woman").css("heigt","30px");
     $(".index_w").css("color","#000");
   });
  $(".nav_woman").hover(function(){
     $(".nav_woman").show();
     $(".index_w").css("color","#4cb2cb");
   },function(){
   	$(".nav_woman").hide();
    $(".index_w").css("color","#000");
   });
  // 男性下拉框
  $("#man").hover(function(){
     $(".nav_man").show();
     $(".man").css("height","100px");
      $(".index_m").css("color","#4cb2cb");
   },function(){
   	$(".nav_man").hide();
   	 $(".man").css("heigt","30px");
     $(".index_m").css("color","#000");
   });
  $(".nav_man").hover(function(){
     $(".nav_man").show();
     $(".index_m").css("color","#4cb2cb");
   },function(){
   	$(".nav_man").hide();
     $(".index_m").css("color","#000");
   });
});
// 导航下面的图片展示
var i=0;
  $(function(){
  $(".img").eq(0).show().siblings().hide();
     showtime();
     $(".lii").hover(function(){
      i=$(this).index();
       show();
       clearInterval(itime);
     },function(){
      showtime();
     });
  });
  function show(){
    $(".img").eq(i).fadeIn(1000).siblings().fadeOut(1000);
   $(".lii").eq(i).addClass("bj1").siblings().removeClass("bj1");
  }
  function showtime(){
     itime= setInterval(function(){
        i++;
        if(i==3){
          i=0;
        }
        show();
       },3500);
  }

// $(function(){
//    $(".img_1").show();
//    $(".img_2").hide();
//    $(".img_3").hide();

//   $(".quan ul li").hover(function(){
//       var id=$(this).attr("min-id");
//       $(".img_"+id).show();
//   },function(){
//     var id=$(this).attr("min-id");
//     $(".img_"+id).hide();
//   });

// });