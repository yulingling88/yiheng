
// 导航条划过一屏，背景为黑




//头部导航条 hover
$(".active").hover(function(){
	$(this).children("span").css("display","block")
	$(this).children("ul").css("display","block")
	$(this).parents(".head-nav").css({
		"background":"rgba(0,0,0,.3)"
	})
},function(){
	$(this).children("span").css("display","none")
	$(this).children("ul").css("display","none")
	$(this).parents(".head-nav").css({
		"background":"transparent"
	})
})


/*轮播图*/
//点击
$(".lun-num>li").on("click",function(){
	$(this).addClass("shownum").siblings().removeClass("shownum")
	var i=$(this).index();
	$(".lun-pic>li").eq(i).addClass("active").siblings().removeClass("active")
})
 
//定时
setTimeout(play,2000);
function play(){
	
}




//了解易恒
$(".know-all>div").hover(function(){
	setTimeout(function(){
		$(this).children("span").css("background","#fff")
	},1000)
})



//易恒业务
$(".yewu-ion>div").hover(function(){
	$(this).children("p").css("color","#e61223");
	var num = $(this).index();
	console.log(num);
	$(this).children("img").attr("src","./Public/Home/img/yewu"+num+".png");
},function(){
	$(this).children("p").css("color","#000");
	var num = $(this).index();
	console.log(num);
	$(this).children("img").attr("src","./Public/Home/img/yewu0"+num+".png");
	
})













