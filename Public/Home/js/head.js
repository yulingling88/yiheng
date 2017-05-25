
/*=======划过一屏，导航条的背景为黑色=======*/
var h = $(".lun").height();
$(window).scroll(function(){
	if($(window).scrollTop()>h){
		$('.head-nav').css({
			"background":"rgba(0,0,0,.8)"
		});
	}
	else{
		$('.head-nav').css({
			"background":"transparent"
		});
	}
})



/*===头部导航条 hover====*/
// 八格
$(".active").hover(function(){
	$(this).children("span").css("display","block")
	// $(this).children("ul").css("display","block")
	$(this).children("ul").slideDown();
	$(this).parents(".head-nav").css({
		"background":"rgba(0,0,0,.3)"
	})
},function(){
	$(this).children("span").css("display","none")
	$(this).children("ul").slideUp();
	$(this).parents(".head-nav").css({
		"background":"transparent"
	})
})

// 四格 点击面包出二级菜单
$(".nav2-ion").on("click",function(){
	// $(".nav2").children("ul").css("display","block")
	$(".nav2").children("ul").slideToggle();
	$(".head-nav").css({
		"background":"rgba(0,0,0,.8)"
	})

})
$(".nav2 li").hover(function(){
	var aColor = $(this).children("a");
	var num = $(this).index();
	if(num==0){
		aColor.css("border-bottom","2px solid #f6e73e")
	}else if(num==1){
		aColor.css("border-bottom","2px solid #e60012")
	}else if(num==2){
		aColor.css("border-bottom","2px solid #00ace5")
	}else if(num==3){
		aColor.css("border-bottom","2px solid #f9b121")
	}else if(num==4){
		aColor.css("border-bottom","2px solid #a4a9ac")
	}
},function(){
	$(this).children("a").css("border-bottom","none")
})


/*========轮播图=======*/
//点击索引值
$(".lun-num>li").on("click",function(){
	$(this).addClass("shownum").siblings().removeClass("shownum")
	var i=$(this).index();
	$(".lun-pic>li").eq(i).addClass("active").siblings().removeClass("active")
})
// 自动播放
 var index = 0;
 var timer = null;
 timer = setInterval(scrollImg,2000);

function scrollImg() {
	index++;
	if (index >= $('.lun-pic li').length) {
		index = 0;
	}
	change($('.lun-pic li'),$('.lun-num li'),index);
}
function change(imgArr,orderArr,index) {
	imgArr.removeClass('active');
	orderArr.removeClass('shownum');
	imgArr.eq(index).addClass('active');
	orderArr.eq(index).addClass('shownum');
}
// 鼠标悬浮到具体图片li上，关闭定时，图片放大
$('.lun-pic li').hover(function () {
	clearInterval(timer);
	index = $(this).index();
	change($('.lun-pic li'),$('.lun-num li'),index);
},function(){
 	timer = setInterval(scrollImg,2000);
});

// 鼠标悬浮到具体索引值li上，关闭定时，图片放大
$('.lun-num li').hover(function () {
	clearInterval(timer);
	index = $(this).index();
	change($('.lun-pic li'),$('.lun-num li'),index);
},function(){
 	timer = setInterval(scrollImg,2000);
});




/*=======了解易恒=======*/
$(".know-all>div").hover(function(){
	var num = $(this).index();
	if(num==1){
		$(this).css("background","#f9b121")
	}else if(num==2){
		$(this).css("background","#e60012")
	}else if(num==3){
		$(this).css("background","#01b8af")
	}else if(num==4){
		$(this).css("background","#00ace5")
	}else if(num==5){
		$(this).css("background","#fd5420")
	}
	$(this).find("span").css({
		"width":"100%",
		"background":"#fff"
	})
},function(){
	var num = $(this).index();
	if(num==1){
		$(this).css("background","")
	}else if(num==2){
		$(this).css("background","")
	}else if(num==3){
		$(this).css("background","")
	}else if(num==4){
		$(this).css("background","")
	}else if(num==5){
		$(this).css("background","")
	}
	$(this).find("span").css({
		"width":"24px",
		"background":""
	})
})



/*=======易恒业务=======*/
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


// 成功案例--悬浮翻转

// var turn = function(target,time,opts){
// 	target.find(".item").hover(function(){
// 		$(this).find('img').stop().animate(opts[0],time,function(){
// 			$(this).hide().next().show();
// 			$(this).next().animate(opts[1],time);
// 		});
// 	},function(){
// 		$(this).find('.info').animate(opts[0],time,function(){
// 			$(this).hide().prev().show();
// 			$(this).prev().animate(opts[1],time);
// 		});
// 	});
// }
// var imgW = $(".case-ion>.item").width();
// var imgH = $(".case-ion>.item").height();
// $(".item").find(".info").css("height",imgH);
// console.log(imgH);
// var verticalOpts = [{'width':0},{'width':imgH}];
// turn($('#ions'),100,verticalOpts);









