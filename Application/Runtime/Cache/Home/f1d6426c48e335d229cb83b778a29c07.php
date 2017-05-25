<?php if (!defined('THINK_PATH')) exit();?><!-- 首页-产品服务-服务内容 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta name="description" content="">  
	<meta name="author" content="">  
	<title>易恒</title>
	<link rel="stylesheet" href="/yiheng/Public/Home/css/reset.css">
	<link rel="stylesheet" href="/yiheng/Public/Home/css/style.css">
	<link rel="stylesheet" href="/yiheng/Public/Home/css/yewu.css">
	<link rel="stylesheet" href="/yiheng/Public/Home/css/service.css">
	<link rel="stylesheet" href="/yiheng/Public/Home/css/business.css">
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="/yiheng/Public/Home/css/bootstrap.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
<!--头部导航 -->

<div class="head container-fluid" id="head-bg">
		<!-- 导航条 -->
		<div class="row">
			<div class="col-lg-10 col-md-11 col-sm-11  col-xs-11 inner">
			<div class="head-nav row">
				<div class="head-logo col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<img src="/yiheng/Public/Home/img/yhLogo.png" alt="">
				</div>

				<div class="head-info col-lg-8 col-md-7 col-sm-7 col-xs-7">
					<ul class="nav row">
						<li class="col-lg-1 col-md-1 col-sm-1"></li>
						<li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="##">关于易恒</a>
							<span class="one"></span>
							<ul class="er-nav">
								<li><a href="##">易恒</a></li>
								<li><a href="<?php echo U('Other/history');?>">历史</a></li>
								<li><a href="##">荣耀</a></li>
							</ul>
						</li>
						<li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="##">产品服务</a>
							<span class="two"></span>
							<ul class="er-nav">
								<li><a href="<?php echo U('Other/service');?>">服务内容</a></li>
								<li><a href="<?php echo U('Other/business');?>">合作伙伴</a></li>
								<li><a href="##">我们的优势</a></li>
								<li><a href="##">服务案例</a></li>
								<li><a href="##">自有品牌</a></li>
							</ul>
						</li>
						<li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="##">新闻资讯</a>
							<span class="three"></span>
							<ul class="er-nav">
								<li><a href="##">行业动态</a></li>
								<li><a href="##">易恒新闻</a></li>
							</ul>
						</li>
						<li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="##">招纳贤士</a>
							<span class="four"></span>
							<ul class="er-nav">
								<li><a href="##">热招职位</a></li>
								<li><a href="##">选择易恒</a></li>
								<li><a href="##">易恒小伙伴</a></li>
							</ul>
						</li>
						<li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="##">联系我们</a>
							<span class="five"></span>
							<ul class="er-nav">
								<li><a href="<?php echo U('Other/cooperation');?>">寻求合作</a></li>
								<li><a href="##">联系方式</a></li>
							</ul>
						</li>
						<li class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></li>	
					</ul>
				</div>

				<div class="head-ions col-lg-2 col-md-3 col-sm-3 col-xs-3">
					<ul class="row">
						<li class="dropdown col-lg-3 col-md-3 col-sm-3 col-xs-3">
					      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					        		<span class="guoqi"></span>
					        		<span class="caret"></span>
					      	</a>
					      	<ul class="dropdown-menu">
						        <li><img src="" alt=""></li>     
					      	</ul>
						</li>
						<li class="phone col-lg-8 col-mg-8 col-sm-8 col-xs-8">
							<span class="phone-ion"></span>
							021-61132270
						</li>	
					</ul>
				</div>
				
				<!-- <ul class="nav col-lg-7 col-md-8 col-sm-9 pull-right ">
					<li class="active">
						<a href="##">关于易恒</a>
						<span class="one"></span>
						<ul class="er-nav">
							<li><a href="##">易恒</a></li>
							<li><a href="<?php echo U('Other/history');?>">历史</a></li>
							<li><a href="##">荣耀</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="##">产品服务</a>
						<span class="two"></span>
						<ul class="er-nav">
							<li><a href="<?php echo U('Other/service');?>">服务内容</a></li>
							<li><a href="<?php echo U('Other/business');?>">合作伙伴</a></li>
							<li><a href="##">我们的优势</a></li>
							<li><a href="##">服务案例</a></li>
							<li><a href="##">自有品牌</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="##">新闻资讯</a>
						<span class="three"></span>
						<ul class="er-nav">
							<li><a href="##">行业动态</a></li>
							<li><a href="##">易恒新闻</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="##">招纳贤士</a>
						<span class="four"></span>
						<ul class="er-nav">
							<li><a href="##">热招职位</a></li>
							<li><a href="##">选择易恒</a></li>
							<li><a href="##">易恒小伙伴</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="##">联系我们</a>
						<span class="five"></span>
						<ul class="er-nav">
							<li><a href="<?php echo U('Other/cooperation');?>">寻求合作</a></li>
							<li><a href="##">联系方式</a></li>
						</ul>
					</li>
					<li class="dropdown">
					      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					        		<span class="guoqi"></span>
					        		<span class="caret"></span>
					      	</a>
					      	<ul class="dropdown-menu">
						        <li><img src="" alt=""></li>     
					      	</ul>
					</li>
					<li class="phone">
						<span class="phone-ion"></span>
						021-61132270
					</li>	
				</ul> -->
				<!-- 导航栏nav2 -->
				<div class="nav2 col-sm-2 col-xs-5 pull-right">
					<span class="nav2-ion glyphicon glyphicon-th-list"></span>
					<ul>
						<li><a href="##">关于易恒</a></li>
						<li><a href="##">产品服务</a></li>
						<li><a href="##">新闻资讯</a></li>
						<li><a href="##">招纳贤士</a></li>
						<li><a href="##">联系我们</a></li>
					</ul>
					<!-- <div class="dropdown">
					      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					        		<span class="guoqi"></span>
					        		<span class="caret"></span>
					      	</a>
					      	<ul class="dropdown-menu">
						        <li><img src="" alt=""></li>     
					      	</ul>
					</div>
					<div class="phone">
						<span class="phone-ion"></span>
						021-61132270
					</div>	 -->
				</div>
				<!--<div class="col-lg-1"></div>-->
			</div>
			</div>
		</div>
</div> 


<!-- 头图 -->
<div class="service-bg">
	<img src="/yiheng/Public/Home/img/servicebeijing.jpg" alt="">
	<div class="service-text center-block container">
		<h1 class="">SERVICE</h1>
		<div class="service-mokuai row">
			<div class="col-lg-8 col-xs-8 row1">
				<div class="row">
					<a href="##" class="center-block mokuai col-lg-3 col-md-3  col-sm-3  col-xs-6 odd">
						<!-- <span> -->
							<p>服务模块</p>
							<h2>ABOUT</h2>
							<span class="color1"></span>
						<!-- </span> -->
					</a>
					<a href="##" class="center-block mokuai col-lg-3 col-md-3  col-sm-3  col-xs-6 even">
						<!-- <span> -->
							<p>合作伙伴</p>
							<h2>FAMILY</h2>
							<span class="color2"></span>
						<!-- </span> -->
					</a>
					<a href="##" class="center-block mokuai col-lg-3 col-md-3  col-sm-3  col-xs-6 odd">
						<!-- <span> -->
							<p>我们的优势</p>
							<h2>ADVANTAGE</h2>
							<span class="color3"></span>
						<!-- </span> -->
					</a>
					<a href="##" class="center-block mokuai col-lg-3 col-md-3  col-sm-3  col-xs-6 even">
						<!-- <span> -->
							<p>服务案例</p>
							<h2>CASES</h2>
							<span class="color4"></span>
						<!-- </span> -->
					</a>
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- 服务模块 -->
<div class="service-module container-fluid">
	<div class="row">
		<div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<didv class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 left">
					<h1>SERVICE</h1>
					<span></span>
					<div>
						<h3>服务模块</h3>
						<p>品牌全案代理、品牌代理B2B、品牌代理B2C</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 right">
					<ul>
						<li>
							<div class="num">
								<i>1.</i>
							</div>
							<div class="text">
								<h4>品牌全案代理</h4>
								<p>包括健康品中国区/线上总代，由易恒健康与品牌企业签订合作协议，全面代理属下产品在线上的直销和分销的零售与灌流业务。</p>
							</div>	
						</li>
						<li>
							<div class="num">
								<i>2.</i>
							</div>
							<div class="text">
								<h4>品牌代理B2B</h4>
								<p>包括以易恒健康为供货方，向京东、苏宁易购、一号店、亚马逊等自营模式的B2C商城进行货品供应和管理的业务形态。</p>
							</div>	
						</li>
						<li>
							<div class="num">
								<i>3.</i>
							</div>
							<div class="text">
								<h4>品牌代理B2C</h4>
								<p>包括以易恒健康为经销主体，在天猫商城、唯品会等开设和运营品牌直营的旗舰店和专卖店等业务形态。</p>
							</div>	
						</li>
						<li>
							<div class="num">
								<i>4.</i>
							</div>
							<div class="text">
								<h4>BBC分销</h4>
								<p>包括以易恒健康为分销主题，其中业务包括跨境一件代发，贸易批量采购、定制款集单。</p>
							</div>	
						</li>
					</ul>
				</div>
			</didv>
			
		</div>
	</div>
</div>

<!-- 专业系统 system -->

<div class="system container-fluid">
	<div class="row inner">
		<div class="col-lg-9 col-sm-10 col-xs-10">
			<h1>SYSTEM<span class="line"></span></h1>
			<p>易恒健康代理运用的专业体系</p>
			<div class="row content">
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<img src="/yiheng/Public/Home/img/service1.jpg" alt="">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<img src="/yiheng/Public/Home/img/service2.jpg" alt="">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<img src="/yiheng/Public/Home/img/service3.jpg" alt="">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<img src="/yiheng/Public/Home/img/service4.jpg" alt="">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<img src="/yiheng/Public/Home/img/service5.jpg" alt="">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<img src="/yiheng/Public/Home/img/service6.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 联系我们 -->
<div class="business-link container-fluid">
	<div class="local-link row">
		<div class="address col-lg-4 col-lg-offset-1">
			<span></span>
			<div class="link-text">
				<p class="link-up">Address</p>
				<p class="link-down">上海市徐汇区天玥桥路1000号徐汇苑商务楼2/3F</p>
			</div>
		</div>
		<div class="email col-lg-3">
			<span></span>
			<div class="link-text">
				<p class="link-up">Email</p>
				<p class="link-down">shacwei@ecmoho.com</p>
			</div>
		</div>
		<div class="call col-lg-2">
			<span></span>
			<div class="link-text">
				<p class="link-up">Call us</p>
				<p class="link-down">021-61132270</p>
			</div>
		</div>
	</div>
</div>

<!--底部链接-->
<div class="foot container-fluid">
	<div class="row">
		<div class="col-lg-10 inner">
			<div class="foot-nav row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<h3>了解易恒</h3>
					<ul>
						<li><a href="##">企业简介</a><span>></span></li>
						<li><a href="<?php echo U('Other/history');?>">发展历程</a><span> ></span></li>
						<li><a href="##">企业荣耀</a><span> ></span></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<h3>新闻资讯</h3>
					<ul>
						<li><a href="##">易恒动态</a><span> ></span></li>
						<li><a href="##">行业新闻</a><span> ></span></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<h3>企业服务</h3>
					<ul>
						<li><a href="##">服务内容</a><span> ></span></li>
						<li><a href="##">合作伙伴</a><span> ></span></li>
						<li><a href="##">我们的优势</a><span> ></span></li>
						<li><a href="##">服务案例</a><span> ></span></li>
					</ul>
				</div>	
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<h3>成功案例</h3>
					<ul>
						<li><a href="##">膳食营养</a><span> ></span></li>
						<li><a href="##">保健健康</a><span> ></span></li>
						<li><a href="##">传统滋补</a><span> ></span></li>
						<li><a href="##">更过...</a><span> </span></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<h3>招贤纳士</h3>
					<ul>
						<li><a href="##">热招职位</a><span> ></span></li>
						<li><a href="##">选择易恒</a><span> ></span></li>
						<li><a href="##">易恒小伙伴</a><span> ></span></li>
					</ul>
				</div>	
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<h3>联系方式</h3>
					<ul>
						<li><a href="##">寻求合作</a><span> ></span></li>
						<li><a href="##">联系方式</a><span> ></span></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	
	<div class="foot-us">
		<p>联系我们 <i></i> 员工通道</p>
		<p>沪|CP备14010467号-5 Copyright &copy; 2014-2015 ECMOHO.一加三餐-易恒官网 版权所有</p>
	</div>
</div> 


<!-- 引入js -->
	<script src="/yiheng/Public/Home/js/jquery-1.12.4.min.js"></script>
	<script src="/yiheng/Public/Home/js/bootstrap.js"></script>
	<script src="/yiheng/Public/Home/js/head.js"></script>
	<script src="/yiheng/Public/Home/js/service.js"></script>
	<!--<script src="js/rem.js"></script>-->
	<!--<script src="js/bootstrap.min.js"></script>-->
</body>
</html>