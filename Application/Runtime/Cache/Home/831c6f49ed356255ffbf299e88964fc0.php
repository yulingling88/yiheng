<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>瓢城Web俱乐部多用户留言系统 </title>
<link rel="shortcut icon" href="favicon.ico" />

	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/basic.css" />
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/login.css" />

<script type="text/javascript" src="public/js/code.js"></script>
<script type="text/javascript" src="public/js/login.js"></script>
</head>
<body> 
<script type="text/javascript" src="public/js/skin.js"></script>

<div id="header">
	<h1><a href="index.php">瓢城Web俱乐部多用户留言系统</a></h1>
	<ul>
		<li><a href="./index.php">首页</a></li>
		<li><a href='./login.php'>登录</a></li>
		<li><a href='./register.php'>注册</a></li>
		<li><a href="blog.php">博友</a></li>
		<li><a href="photo.php">相册</a></li>
		<li class="skin"><a href="javascript:;">风格</a></li>
	</ul>
</div>

<div id="login">
	<h2>登录</h2>
	<form method="post" name="login" action="<?php echo U(checkcode);?>">
		<dl>
			<dt></dt>
			<dd>用 户 名：<input type="text" name="username" class="text" /></dd>
			<dd>密　　码：<input type="password" name="password" class="text" /></dd>			 
			<dd>验 证 码：<input type="text" name="code" class="text code"  />
				<img src="http://localhost/thinkphp/index.php/Home/Goods/indexs"
					 onclick="this.src='<?php echo U(code);?>?p='+Math.random();"></dd>
			<!--onclick="this.src='http://localhost/thinkphp/index.php/Home/Goods/indexs?p='+Math.random();"></dd>-->
			<dd><input type="submit" value="登录" class="button" />
				<a href="register.php"><input type="button" value="注册" id="location" class="button location" /></a></dd>
		</dl>
	</form>
</div>



</body>
</html>