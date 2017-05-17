<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--普通的模板变量需要首先赋值后才能在模板中输出，但是系统变量则不需要，
可以直接在模板中输出，系统变量的输出通常以   {$Think} 打头，例如：
    支持输出 $_SERVER、$_ENV、 $_POST、 $_GET、 $_REQUEST、$_SESSION和 $_COOKIE变量。-->

<!--<?php echo ($_SERVER['SCRIPT_NAME']); ?>   // 输出$_SERVER['SCRIPT_NAME']变量-->
<!--<?php echo (session('user_id')); ?>      // 输出$_SESSION['user_id']变量-->
<!--<?php echo ($_GET['pageNumber']); ?>       // 输出$_GET['pageNumber']变量-->
<!--<?php echo (cookie('name')); ?>          // 输出$_COOKIE['name']变量-->


<h1><?php echo (md5($num)); ?></h1>
<h1><?php echo (sha1($num)); ?></h1>
<h1><?php echo ($num+10); ?></h1>
<h1><?php echo ($num>0?'大于0':'小于0'); ?></h1>



</body>
</html>