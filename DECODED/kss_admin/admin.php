<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_ioaPko_MkYuUkJGTiYaIlYo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

require( "../kss_inc/inc.php" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6, "index" );
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>";
echo ADMINWEBNAME;
echo "</title>\t\r\n<meta HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\">\r\n<meta name=\"Author\" content=\"可可-- 邮箱：keke@hphu.com  网站：www.hphu.com\" />\r\n<link rel=\"shortcut icon\" href=\"/favicon.ico\" />\r\n<link rel='stylesheet' type='text/css' href=\"";
echo INSTALLPATH;
echo "kss_inc/style/manager_dir.css?s=20130605\" />\r\n<style>\r\n.mbg_1{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px 0px;}\r\n.mbg_2{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -30px;}\r\n.mbg_3{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -60px;}\r\n.mbg_4{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -90px;}\r\n.mbg_5{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -120px;}\r\n.mbg_6{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -150px;}\r\n.mbg_7{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -180px;}\r\n.mbg_8{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -210px;}\r\n.mbg_9{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -240px;}\r\n.mbg_10{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -270px;}\r\n.mbg_11{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -300px;}\r\n.mbg_12{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -330px;}\r\n.mbg_13{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -360px;}\r\n.mbg_14{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -390px;}\r\n.mbg_15{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -420px;}\r\n.mbg_16{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -450px;}\r\n.mbg_17{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -480px;}\r\n.mbg_18{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -510px;}\r\n.mbg_19{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -540px;}\r\n\r\n#oparea{background:#f6f6f6;position:absolute; top:48px; left:150px;border:3px solid #4FA1D0;display:none;width:166px;height:";
echo 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] ? "380" : "300";
echo "px}\r\n</style>\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/jquery.1.3.2.pack.js\"></script>\r\n<script type=\"text/javascript\">\r\n\r\nvar softlisturl='';\r\nvar softlistextname='';\r\nvar softlistextid='';\r\nvar onewin=0;\r\nvar softmode='';\r\nvar dsoftid=0;\r\nvar dsoftname='';\r\nvar insmenu=0;\r\nvar isleft=0;\r\nvar et=0;\r\n\r\nvar setTimeoutID=new Array();\r\nvar setTimeoutIndex=-1;\r\n\r\n\r\n\nfunction cwin(winid,winname,winurl,winname2){\r\nvar wintitle2=winname2||winname;\r\ndocument.getElementById(\"win_data\").contentWindow.CreateDiv(winid,winurl,winname,wintitle2)\r\n}\r\n\r\nfunction mackcache(){\r\n$.ajax({type:\"GET\",url:'admin_makecache.php',cache:false,\r\nsuccess: function(msg){\r\nalert(msg);\r\n},\r\nerror:function(ajaxobj){\r\nalert(\"error!\");\r\n}\r\n});\r\n}\r\n\r\n\nfunction pwin(winid,winname,winurl,one_win){\r\nonewin=one_win||0;\r\nsoftlisturl=winurl;\r\nsoftlistextname=winname;\r\nsoftlistextid=winid;\r\n";
if ( SELSOFTMODE == 1 )
{
    echo "$(\"#maskc\").show();\r\n$(\"#maskcbg\").show();\r\n$(\"#softlistbar\").show();\r\nreturn true;\r\n";
}
else
{
    echo "if(dsoftid==0 || winid=='soft_change'){\r\n$(\"#maskc\").show();\r\n$(\"#maskcbg\").show();\r\n$(\"#softlistbar\").show();\r\n}else{\r\ntid=dsoftid;\r\ntname=dsoftname;\r\nif(onewin==1){\r\ncwin(softlistextid,tname+softlistextname,softlisturl+\"&softid=\"+tid);\t\t\r\n}else{\r\ncwin(softlistextid+tid,tname+softlistextname,softlisturl+\"&softid=\"+tid);\r\n}\r\n}\r\n";
}
echo "}\r\n\r\n\nfunction randstr() {\r\nvar x=\"123456789poiuytrewqasdfghjklmnbvcxzQWERTYUIPLKJHGFDSAZXCVBNM\";\r\nvar tmp=\"\";\r\nvar l=12;\r\nfor(var i=0;i< l;i++) {\r\ntmp += x.charAt(Math.ceil(Math.random()*100000000)%x.length);\r\n}\r\nreturn tmp;\r\n}\r\n\r\nfunction backbind(){\r\n\n$(\".softboxa\").bind(\"click\",function(){\r\nvar tid=$(this).attr(\"softid\");\r\nvar tname=$(this).text();\r\nvar tnametitle=$(this).attr(\"title\");\r\ndsoftid=tid;\r\ndsoftname=tname;\r\n$(\"#softchange\").text(dsoftname);\r\nif(softlistextid=='soft_change'){\r\n$(\"#maskcbg\").hide();\r\n$(\"#softlistbar\").hide();\r\n\n$(\"#maskc\").hide();\t\r\nreturn true;\t\r\n}\r\nif(onewin==1){\r\ncwin(softlistextid,tname+softlistextname,softlisturl+\"&softid=\"+tid,tnametitle);\t\t\r\n}else{\r\ncwin(softlistextid+tid,tname+softlistextname,softlisturl+\"&softid=\"+tid,tnametitle);\r\n}\r\n$(\"#maskcbg\").hide();\r\n$(\"#softlistbar\").hide();\r\n\n$(\"#maskc\").hide();\r\n});\t\r\n}\r\n$(document).ready(function(){\r\n\r\n\nvar wheight=0;\r\nwheight=$(window).height();\r\n$(\"#bodytable\").height(wheight);\r\n$(\"#win_data\").height(wheight);\r\n$(\"#maskc\").height(wheight);\r\n$(\"#maskc\").height(wheight);\r\n$(window).resize(function(){\r\nwheight=$(window).height();\r\n$(\"#bodytable\").height(wheight);\r\n$(\"#win_data\").height(wheight);\r\n$(\"#maskc\").height(wheight);\r\n});\r\n\r\n\n$.ajax({type:\"GET\",url:\"admin_soft.php?action=softlistbar&isajax=1&rndid=\"+randstr(),cache:false,\r\nsuccess: function(msg){\r\n$(\"#ajaxsoftlist\").html(msg);\r\n},\r\nerror:function(ajaxobj){\r\n$(\"#ajaxsoftlist\").html(\"读取软件列表出错，请按右上角的刷新按钮刷新！\");\r\n}\r\n}); \r\n\r\n\n$(\"#hvm\").bind(\"click\",function(){\r\nif($(this).attr(\"dis\")==\"1\"){\r\n$(this).attr(\"dis\",\"0\");\r\n$(\"#hvmdir\").hide();\r\n$(\"#hvmimg\").attr(\"src\",\"../kss_inc/images/lopen.gif\")\r\n}\r\nelse{\r\n$(this).attr(\"dis\",\"1\");\r\n$(\"#hvmdir\").show();\r\n$(\"#hvmimg\").attr(\"src\",\"../kss_inc/images/lclose.gif\")\r\n}\r\n});\r\n\r\n\r\n\n$(\".hoverbtn\").hover(  \r\nfunction () {\r\n$(this).attr(\"src\",$(this).attr(\"src\").replace(\"1.gif\",\"2.gif\"));\r\n},\r\nfunction () {\r\n$(this).attr(\"src\",$(this).attr(\"src\").replace(\"2.gif\",\"1.gif\"));\r\n}\r\n);\t\r\n\r\n$(\"#softchange,#smenu\").bind(\"click\",function(){\r\npwin('soft_change','切换软件','___',0);\r\n});\r\n\r\n\n$(\"#gbsoftlist\").bind(\"click\",function(){\r\n$(\"#maskcbg\").hide();\r\n$(\"#maskc\").hide();\r\n$(\"#softlistbar\").hide();\r\n});\r\n\r\n\n$(\"#refeshsoftlist\").bind(\"click\",function(){\r\n$.ajax({type:\"GET\",url:\"admin_soft.php?action=softlistbar&isajax=1&rndid=\"+randstr(),cache:false,\r\nsuccess: function(msg){\r\n$(\"#ajaxsoftlist\").html(msg);\r\n},\r\nerror:function(ajaxobj){\r\nalert(\"刷新数据出错：\"+ajaxobj.status);\r\n}\r\n}); \r\n});\r\n\r\n\r\n\n$(\".softboxa\").live(\"click\",function(){\r\nvar tid=$(this).attr(\"softid\");\r\nvar tname=$(this).text();\r\ndsoftid=tid;\r\ndsoftname=tname;\r\n$(\"#softchange\").text(dsoftname);\r\nif(softlistextid=='soft_change'){\r\n$(\"#maskcbg\").hide();\r\n$(\"#softlistbar\").hide();\r\n\n$(\"#maskc\").hide();\t\r\nreturn true;\t\r\n}\r\nif(onewin==1){\r\ncwin(softlistextid,tname+softlistextname,softlisturl+\"&softid=\"+tid);\t\t\r\n}else{\r\ncwin(softlistextid+tid,tname+softlistextname,softlisturl+\"&softid=\"+tid);\r\n}\r\n$(\"#maskcbg\").hide();\r\n$(\"#softlistbar\").hide();\r\n\n$(\"#maskc\").hide();\r\n});\t\r\n\r\n\r\n\n$(\"[malt]\").hover(  \r\nfunction () {\r\nsetTimeoutIndex=setTimeoutIndex+1;\r\nif(setTimeoutIndex>0)window.clearTimeout(setTimeoutID[setTimeoutIndex-1]);\r\nif(setTimeoutIndex>100)setTimeoutIndex=-1;\r\ndocument.frames[1].write_malt($(this).attr(\"malt\"));\r\n},\r\nfunction () {\r\nsetTimeoutID[setTimeoutIndex]=window.setTimeout(clearmalt, 1000);\r\n\r\n}\r\n);\r\n\r\n\r\n\r\n\r\n\r\n$(\"li[f=1]\").live(\"mouseover\",function(){$(this).removeClass(\"li1\").addClass(\"li2\");}).live(\"mouseout\",function(){$(this).removeClass(\"li2\").addClass(\"li1\");});\r\n$(\"li[class^='snav']\").hover(function(){$(this).removeClass(\"snav1\").addClass(\"snav2\");\t},function(){$(this).removeClass(\"snav2\").addClass(\"snav1\");});\r\n\r\n$(\"li[s]\").hover(\r\nfunction (){\r\n$(this).children(\"ul\").show();\r\nvar cc2=$(this).children().filter(\":last-child\").children().filter(\":last-child\").offset();\r\n$(\"#fbg\").css(\"left\",(cc2.left)+\"px\");\r\n$(\"#fbg\").css(\"height\",(cc2.top-6)+\"px\");\r\n},\r\nfunction (){\r\n$(\"#fbg\").css(\"left\",\"-300px\");\r\n$(this).children(\"ul\").hide();\r\n}\r\n);\t\r\n$(\"li[f]\").hover(\r\nfunction (){\r\n$(this).css({background:\"url('../kss_inc/images/libg.gif') no-repeat 0 0;\"});\r\n},\r\nfunction (){\r\n$(this).css({background:\"url('../kss_inc/images/oldbg.gif') no-repeat 0 0;\"});\r\n}\r\n);\r\n});\r\nfunction closesmenu(){\r\n\r\n}\r\n\nfunction clearmalt(){\t\r\nif(document.frames[1].get_mouse()==0) document.frames[1].clear_malt();\r\n}\r\n</script>\r\n</head>\r\n<body scroll=\"no\">\r\n<iframe style=\"position:absolute;left:-203px;top:35px;width:203px;height:0;background:#ccc\" src=\"blank.htm\" frameborder='0' id='fbg' name='fbg' ></iframe>\r\n<table id=\"bodytable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" width=\"100%\" height=\"600\">\r\n<tr>\r\n<td id=\"hvmdir\" style=\"background:url(../kss_inc/images/93tbg.png)\" width=100% height=47 valign=\"top\">\r\n<div id='nave'>\r\n<ul id='navmenu'>\r\n<li class='snav1'><a href=\"index.php?action=exit&id=";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
echo "&linecode=";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['linecode'];
echo "\" style=\"color:#D9E5E9\" target=\"_top\">退出管理</a></li>\r\n";
if ( SELSOFTMODE == 2 )
{
    echo "<li class='snav1' id=\"smenu\"><span style=\"color:#D9E5E9\">切换软件</span></li>\r\n";
}
echo "<li class='snav1' s=\"1\"><span style=\"color:#D9E5E9\">软件管理</span>\r\n<ul>\r\n<li f=\"1\"><a onclick=\"cwin('soft_softlist','软件列表','admin_soft.php?action=softlist')\"><span class=\"mbg_3\">　　软件列表</span></a></li>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && SVRID == 1 )
{
    echo "<li f=\"1\"><a onclick=\"cwin('soft_add','添加软件','admin_soft.php?action=addsoft&softid=0')\"><span class=\"mbg_2\">　　添加软件</span></a></li>\r\n";
}
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<li f=\"1\"><a onclick=\"pwin('soft_set','参数设置','admin_soft.php?action=addsoft')\"><span class=\"mbg_1\">　　软件参数设置</span></a></li>\r\n";
}
echo "<li f=\"1\"><a onclick=\"pwin('info_myorder','的订单','admin_order.php?action=orderlist')\"><span class=\"mbg_4\">　　订单管理</a></span></li>\r\n</ul>\r\n</li>\r\n<li class='snav1' s=\"1\"><span style=\"color:#D9E5E9\">用户管理</span>\r\n<ul>\r\n<li f=\"1\"><a onclick=\"pwin('user_userlist','用户列表','admin_key.php?action=userlist',0)\"><span class=\"mbg_15\">　　用户列表</span></a></li>\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<li f=\"1\"><a onclick=\"pwin('user_adduser','添加用户','admin_key.php?action=adduser',0)\"><span class=\"mbg_16\">　　添加用户</span></a></li>\r\n<li f=\"1\"><a onclick=\"pwin('adv_derived','批处理数据','admin_batch.php?')\"><span class=\"mbg_11\">　　批量加时.删除.导出.锁定</span></a></li>\r\n<li f=\"1\"><a onclick=\"cwin('log_addcday','加时日志','admin_logs.php?action=addcday')\">　　加时日志</a></li>\r\n";
}
echo "<li f=\"1\"><a onclick=\"pwin('key_czlog','用户充值日志','admin_logs.php?action=userczlog',0)\">　　用户充值日志</a></li>\r\n<li f=\"1\"><a onclick=\"pwin('key_userlog','客户验证日志','admin_logs.php?action=user_log',0)\">　　用户登陆日志</a></li>\r\n<li f=\"1\"><a onclick=\"pwin('user_dklist','用户多开日志','admin_key.php?action=dklist',0)\">　　用户多开日志</a></li>\r\n<li f=\"1\"><a onclick=\"pwin('key_testlog','公用帐号记录','admin_logs.php?action=pubuser_log',0)\">　　公用帐号日志</a></li>\r\n</ul>\r\n</li>\r\n<li class='snav1' s=\"1\"><span style=\"color:#D9E5E9\">注册卡管理</span>\r\n<ul>\r\n<li f=\"1\"><a onclick=\"pwin('user_key1_','注册卡列表','admin_key.php?action=keylist',0)\"><span class=\"mbg_8\">　　注册卡列表</span></a></li>\r\n<li f=\"1\"><a onclick=\"pwin('key_addkey','添加注册卡','admin_key.php?action=addkey',1)\"><span class=\"mbg_7\">　　添加注册卡</span></a></li>\r\n<li f=\"1\"><a onclick=\"pwin('soft_keyset','卡类价格','admin_soft.php?action=keygroup')\"><span class=\"mbg_6\">　　卡类和零售价设置</span></a></li>\r\n<li f=\"1\"><a onclick=\"pwin('user_report_','注册卡统计表','admin_key.php?action=report',0)\">　　注册卡统计表</a></li>\r\n<li f=\"1\"><a onclick=\"pwin('adv_derived','批处理数据','admin_batch.php?')\"><span class=\"mbg_11\">　　批量加时.删除.导出.锁定</span></a></li>\r\n";
$_obfuscate_ho6Iho6OkoiSiIeNlYmPjZA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from `kss_olddata` where id>0 limit 0,1" );
if ( empty( $_obfuscate_ho6Iho6OkoiSiIeNlYmPjZA� ) )
{
    echo "<li f=\"1\"><a onclick=\"pwin('key_oldkey','旧卡查询','admin_logs.php?action=v8data')\">　　旧卡查询</a></li>\t\t\t\t\t\r\n";
}
echo "</ul>\r\n</li>\r\n<li class='snav1' s=\"1\"><span style=\"color:#D9E5E9\">我的信息</span>\r\n<ul>\r\n<li f=\"1\"><a onclick=\"cwin('info_myinfo','我的资料','admin_manager.php?action=viewmanager')\"><span class=\"mbg_5\">　　我的资料</span></a></li>\r\n<li f=\"1\"><a onclick=\"cwin('logs_agentrmb','财务日志','admin_logs.php?action=agentrmb')\"><span class=\"mbg_13\">　　财务日志</span></a></li>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    echo "<li f=\"1\"><a onclick=\"cwin('info_cz','充值','admin_manager.php?action=cz')\">　　我要充值</a></li>\r\n";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 || $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 && 1000 < LICTYPE )
{
    echo "<li f=\"1\"><a onclick=\"cwin('info_cz','充值','admin_manager.php?action=cz')\">　　我要充值</a></li>\r\n";
}
echo "<li f=\"1\"><a onclick=\"cwin('info_myoplog','管理登陆日志','admin_logs.php?action=managerlogin')\"><span class=\"mbg_12\">　　登陆日志</span></a></li>\r\n</ul>\r\n</li>\r\n";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<li class='snav1' s=\"1\"><span style=\"color:#D9E5E9\">后台帐号</span>\r\n<ul>\r\n<li f=\"1\"><a onclick=\"cwin('sup_manageruser','帐号列表','admin_manager.php?action=managerlist')\"><span class=\"mbg_17\">　　帐号列表(代理";
    echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 ? "" : "、总代、作者";
    echo ")</span></a></li>\r\n<li f=\"1\"><a onclick=\"cwin('sup_addmanageruser','添加后台帐号','admin_manager.php?action=addmanager&id=0')\"><span class=\"mbg_18\">　　添加帐号(代理";
    echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 ? "" : "、总代、作者";
    echo ")</span></a></li>\r\n";
    if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
    {
        echo "<li f=\"1\"><a onclick=\"cwin('sup_notices','站内公告管理','admin_manager.php?action=notices&id=0')\">　　站内公告管理</a></li>\r\n";
    }
    echo "</ul>\r\n</li>\r\n";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    echo "<li class='snav1' s=\"1\"><span style=\"color:#D9E5E9\">高级管理</span>\r\n<ul>\r\n<li f=\"1\"><a onclick=\"cwin('sup_sysset','系统设置','admin_sysset.php')\"><span class=\"mbg_19\">　　系统设置</span></a></li>\r\n";
    if ( SVRID == 1 )
    {
        echo "<li f=\"1\"><a onclick=\"cwin('data_sqlquery','执行SQL语句','admin_data.php?action=mysqlquery')\">　　执行SQL语句</a></li>\r\n";
    }
    echo "<li f=\"1\"><a onclick=\"cwin('data_databak','数据库备份','admin_data.php?action=mysqldatabak')\"><span class=\"mbg_9\">　　备份数据库</span></a></li>\r\n<li f=\"1\"><a onclick=\"cwin('data_datayh','清理、优化、修复数据库','admin_data.php?action=mysqldatayh')\"><span class=\"mbg_10\">　　清理优化修复数据库</span></a></li>\r\n";
    if ( IS2SVR == 1 && SVRID == 1 )
    {
        $_obfuscate_jZWOh4_JjJCHkYiIlJWSj5U� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_tb_sql" );
        echo "<li f=\"1\"><a onclick=\"cwin('data_syncdata','待同步数据','admin_logs.php?action=witesyncdata')\">　　待同步数据(<span id=\"synddatanum\">";
        echo $_obfuscate_jZWOh4_JjJCHkYiIlJWSj5U�['tnum'];
        echo "</span>)</a></li>\r\n<li f=\"1\"><a onclick=\"cwin('data_synclog','数据同步日志','admin_logs.php?action=synclogs')\">　　数据同步日志</a></li>\r\n";
    }
    echo "<li f=\"1\"><a onclick=\"mackcache();\">　　更新缓存</a></li>\r\n</ul>\r\n</li>\r\n";
}
echo "</ul>\r\n</div>\r\n<div id=\"admname\" style=\"float:left;line-height:35px;color:#fff\">【";
echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']];
echo " : ";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'];
echo "】</div>\r\n<div id=\"admname22\" style=\"float:left;line-height:35px;color:#fff\"><a onclick=\"cwin('info_myinfo','我的资料','admin_manager.php?action=viewmanager')\">【修改密码】</a></div>\t\t\t\r\n</td></tr>\r\n<tr>\r\n<td valign=top><iframe allowTransparency=\"true\" frameborder=0 framespacing=0 scrolling=\"no\" width=\"100%\" height=\"300\" name=\"win_data\" id=\"win_data\" src='z_datawin.php'></iframe></td>\r\n</tr>\r\n</table>\r\n<iframe id=\"maskcbg2\" src=\"blank.htm\" scrolling=\"no\" frameborder=\"0\" style=\"position:absolute; top:48px; left:150px; display:none;width:166px;height:";
echo 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] ? "380" : "300";
echo "px\"></iframe>\r\n<iframe id=\"maskcbg\" src=\"blank.htm\" scrolling=\"no\" frameborder=\"0\" style=\"position:absolute; top:60px; left:180px; display:none;width:850px;*width:870px;height:330px\"></iframe>\r\n\r\n<div id=\"maskc\"></div>\r\n\r\n<table id=\"softlistbar\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=center height=330>\r\n<tr bgcolor=\"#cacaca\">\r\n<td>&nbsp;&nbsp;&nbsp;<b>请选择软件</b></td>\r\n<td align=right height=30><img class=\"hoverbtn\" id=\"refeshsoftlist\" src=\"../kss_inc/images/sx1.gif\">&nbsp;<img id=\"gbsoftlist\" class=\"hoverbtn\" src=\"../kss_inc/images/gb1.gif\">&nbsp;</td></tr>\r\n<tr>\r\n<td colspan=\"2\" height=300 valign=top><div id=\"ajaxsoftlist\">&nbsp;</div></td></tr>\r\n</table>\r\n</body>\r\n</html>\r\n";
?>
