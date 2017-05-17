<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/thinkphp/Public/Home/css/denglu.css">
    <script src="/thinkphp/Public/Home/js/jquery-3.1.1.js"></script>
    <script src="/thinkphp/Public/Home/js/denglu.js"></script>
    <style>
        form{width: 500px;height: 300px;background: #eee;margin: 0 auto}
        p{height: 50px;line-height: 50px}
        input{width: 200px;height: 40px;}
    </style>
</head>
<body>
<div id="box">
    <form id="login">
        <p>账号：<input type="text" name="uname" id="uname" value=""><span class="u1"></span></p>
        <p>密码：<input type="password" name="upass" id="upass" value=""><span class="u2"></span></p>
        <input type="submit" name="uname" id="usubmit" value="登陆">
    </form>
</div>
</body>
</html>