<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURD</title>
    <style>
        form{width: 500px;height: 550px;outline: 1px solid #000;text-align: center;margin: 0 auto  }
        form p{margin-top: 20px;}
        form input, select{width: 300px;height: 30px;border-radius: 5px;font-size: 18px}
    </style>
</head>
<body>
    <form method="post" action="http://localhost/thinkphp/index.php/Home/Yonghu/login">
        <h1>注册页面</h1>
        <p>账号：<input type="text" name="name"></p>
        <p>密码：<input type="password" name="pass"></p>
        <p>确认密码：<input type="password" name="passs"></p>
        <p>邮箱：<input type="text" name="email"></p>
        <p>Q Q ：<input type="text" name="qq"></p>
        <p>电话：<input type="text" name="tel"></p>
        <p>头像：<input type="file" name="touxiang"></p>
        <p>性别：
            <select name="sex">
                <option value="男">男</option>
                <option value="女">女</option>
                <option value="保密">保密</option>
            </select>
        </p>
        <input type="submit" value="提交">
    </form>
</body>
</html>