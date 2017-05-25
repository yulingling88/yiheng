// service.html页面的js效果

// 头图-悬浮
$(".mokuai").hover(function(){
	var num = $(this).index();
	if(num==0){
		$(this).css("background","#f9b121")
	}else if(num==1){
		$(this).css("background","#e60012")
	}else if(num==2){
		$(this).css("background","#01b8af")
	}else if(num==3){
		$(this).css("background","#00ace5")
	}
	$(this).find("span").css({
		"width":"100%",
		"background":"#fff"
	})
},function(){
	var num = $(this).index();
	if(num==0){
		$(this).css("background","")
	}else if(num==1){
		$(this).css("background","")
	}else if(num==2){
		$(this).css("background","")
	}else if(num==3){
		$(this).css("background","")
	}
	$(this).find("span").css({
		"width":"15px",
		"background":""
	})
})

