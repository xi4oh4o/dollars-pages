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
<!-- 
      _     _ 
     | |   | |
__  _| |__ | |
\ \/ / '_ \| |
 >  <| | | |_|
/_/\_\_| |_(_)
 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="Sublime Text" />
    <meta name="keywords" content="Dollars" />
    <meta name="description" content="Dollars" />
    <meta name="author" content="xi4oh4o@gmail.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <img src="images/dollars-full-color.jpg" alt="Dollars" />
    </div>
    <div id="password">
    <form action="." method="post">
    <div>PASSWORD:&nbsp;&nbsp;<input type="password" name="password" id="passinput" />
    <br /><br /></div>
    <p><input type="submit" class="button" value="ENTER" id="login" /></p>
    </form>
    </div>
<?php }else if($_POST['password'] != password){ ?>
	<div id="err" class="info">
    <p>drrr成員登陸失敗，請使用以下密碼</p>
    <p>Password: mikado</p>
    <br />
    <p><input type="button" class="button" value="后退" onclick="history.go(-1)" /></p>
    </div>
	
<?php }else{?>
    <div id="broadcast">
    <div class="info"><p>有多少人就有多少思念，有多少人就有多少秘密。（《デュラララ!!》）</p>
    <p>Dollars - Mikado</p>
    <br />
    <div id="link_button">
    <p><a href="chat/">聊天室</a></p>
    <p><a href="announcement/">成員公告</a></p>
    <p><a href="assembly/">線下集會</a></p>
    <p><a href="about/">關於本站</a></p>
    
    <div id="designer" class="info">design by MIKADO.I</div>
    </div>
	</div>
	</div>
<?php }?>
</div>
</body>
</html>
