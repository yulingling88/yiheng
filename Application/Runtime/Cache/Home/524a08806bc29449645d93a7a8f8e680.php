<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/thinkphp/Public/Home/css/denglu.css">
    <script src="/thinkphp/Public/Home/js/jquery-3.1.1.js"></script>
    <script src="/thinkphp/Public/Home/js/zhuce.js"></script>
</head>
<body>
<div id="fxf">
    <form id="register">
        <h1 class="h1">注 册</h1>
        <p><span>电话：</span><input type="tel" name="utel" id="utel" value=""><b class="b1">*必填</b></p>
        <p><span>昵称：</span><input type="text" name="uname" id="uname" value=""><b class="b2">*必填</b></p>
        <p><span>密码：</span><input type="password" name="upass" id="upass" value="" required="required"><b class="b3">*必填</b></p>
        <p><span>确认密码：</span><input type="password" name="upasss" id="upasss" value=""><b class="b4">*必填</b></p>
        <p><span>验证码：</span>
            <input type="password" id="yzm" value="" name="yzm">
            <img src="<?php echo U('Login/yzm');?>" class="picture" onclick="this.src='<?php echo U(yzm);?>?'+Math.random()">
            <b class="b5">*必填</b></p>
        <input type="submit" name="uname" id="usubmit" value="注册" class="submit">
        <a class="dl" href="/">已有账号，去登录</a>
    </form>
</div>
</body>
</html>