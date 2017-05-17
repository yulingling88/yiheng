<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>瓢城Web俱乐部多用户留言系统 </title>
<link rel="shortcut icon" href="favicon.ico" />

	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/basic.css" />
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/index.css" />				<!--  这是第一种方法   -->
	<!--<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/basic.css" />
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/index.css" />					这是链接css样式第二种方法				-->
<!--<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/index.css"> 这是它解析之后的 样子-->

<script type="text/javascript" src="public/js/blog.js"></script>
<style type="text/css">
		.fxf>a{width: 50px;height: 20px;display: inline-block;text-align: center}
		.fxf>a>input{width: 50px;height: 20px;text-align: center}
</style>
</head>
<!--<?php echo ($session); ?>-->
<body>

<div id="header">
	<h1><a href="index.php">瓢城Web俱乐部多用户留言系统</a></h1>
	<ul>
		<!--<?php echo ($names); ?>-->
		<li><a href="index.php">首页</a></li>
		<!--<?php echo ($dlz); ?>-->
		<li><a href="blog.php">博友</a></li>
		<li><a href="photo.php">相册</a></li>
		<li class="skin"><a href="javascript:;">风格</a></li>
		<!--<?php echo ($tuchu); ?>-->
	</ul>
</div>

<div id="list">
	<h2>帖子列表</h2>
	<a href="./post.php" class="post">发表帖子</a>
	<ul class="article">

		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="icon<?php echo ($v['tg_type']); ?>">
			<em>阅读数(<strong><?php echo ($v['tg_readcount']); ?></strong>)
			评论数(<strong><?php echo ($v['tg_commendcount']); ?></strong>)</em>
			<a href="./article.php?id=1"><?php echo ($v['tg_title']); ?></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>

	</ul>
	<div id="page_text"><?php echo ($show); ?></div>
	</div>
</div>

<div id="user">
	<h2>我的资料</h2>
	<dl>
		<!--<?php echo ($tname); ?>-->
		<!--<?php echo ($tdizhi); ?>-->
		<dd class="message"><a title="我的消息" href="#">我的消息</a></dd>
		<dd class="friend"><a title="我的好友"  href="#">我的好友</a></dd>
		<dd class="guest"><a title="查看留言"   href="#">查看留言</a></dd>
		<dd class="flower"><a title="查看花朵"  href="#">查看花朵</a></dd>
		<dd class="email">邮件：<a href="#"></a>1285987500@qq.com</dd>
		<dd class="url">网址：<a  href="#"></a>www.baidu.com</dd>
	</dl>
</div>
<div id="pics">
	<h2>最新图片 -- 网络游戏11</h2>
	<a href="#"><img style="width:160px;height: 200px;" alt="11" src="/thinkphp/public/Home/images/1286241247.jpg"></a>
</div>

<!--{{include file="footer.html"}}-->

</body>
</html>