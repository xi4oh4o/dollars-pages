<?php
/**
 * Dollars Enter Pages
 *
 * used for show broadcast
 *
 *@author xi4oh4o@gmail.com
 *@package Dollars
 *@subpackage dollars chat
 *
 */
?>
<?php
define("password", "mikado");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="Sublime Text" />
    <meta name="keywords" content="Dollars" />
    <meta name="description" content="Dollars" />
    <meta name="author" content="xi4oh4o@gmail.com" />
    
    <link rel="stylesheet" type="text/css" href="stylesheets/style_dollars_login.css" />
<!--
    <script type="text/javascript" src="js/common.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" />
-->
    <title>Dollars | 東雲研究所</title>
</head>
<body>
	<div id="wrapper">
<?php
/**
 * Show dollars login pages
 *
 * Determine whether there is login information.
 * provide is Login window or go to broadcast pages.
 */
if(!isset($_POST['password'])) {?>
    <div id="logo">
    <img src="dollars.jpg" alt="Dollars" />
    </div>
    <br /><br /><br />
    <div id="password">
    <form action="/dollars/" method="post">
    PASSWORD:&nbsp;&nbsp;<input type="password" name="password" id="passinput" />
    <br /><br />
    <p><input type="submit" value="ENTER" id="login" /></p>
    </form>
    </div>
<?php }else if($_POST['password'] != password){ ?>
	<div id="err" class="info">
    <p>drrr成員登陸失敗，請使用以下密碼</p>
    <p>Password: mikado</p>
    </div>
	
<?php }else{?>
    <div id="broadcast">
    <div class="info"><p>有多少人就有多少思念，有多少人就有多少秘密。（《デュラララ!!》）</p>
    <p>Our Dollars - MIKADO.I</p>
    <br />
    <p>/ ** 站務鏈接 ** /</p>
    <div id="link_button">
    <p><a href="http://drrr.603.jp/chat/">聊天室</a></p>
    <p><a href="announcement/">成員公告</a></p>
    <p><a href="http://drrr.603.jp/">線下集會</a></p>
    <p><a href="http://drrr.603.jp/">關於本站</a></p>
    
    <div id="designer" class="info">design by MIKADO.I</div>
    </div>
	</div>
	</div>
<?php }?>
</div>
</body>
</html>
