<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

require( "../kss_inc/inc.php" );
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>Tab控制窗口--KSS</title>\r\n<meta HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\" />\r\n<LINK rel='stylesheet' type='text/css' href=\"";
echo INSTALLPATH;
echo "kss_inc/style/iframe_tabs.css?version=20130606\" />\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/jquery.1.3.2.pack.js\" charset=\"utf-8\"></script>\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/iframe_tabs.js?version=20140922\" charset=\"utf-8\"></script>\r\n<script type=\"text/javascript\">\r\nvar statusismouseover=0;\r\nfunction write_malt(shtml){\r\nshtml = shtml.replace(/</g, \"&lt;\");\r\nif(shtml.substr(0,7)=='[table]'){\r\nshtml=shtml.replace(\"[table]\",'<table class=\"databartable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">');\r\nshtml=shtml.replace(/\\[(td|tr|\\/td|\\/tr|\\/table)([^\\]]*)\\]/gi,\"<$1$2>\");\r\n\n}\r\n$(\"#viewbartd\").html(shtml);\r\n\r\n}\r\nfunction clear_malt(){\r\n$(\"#viewbartd\").html(\"&nbsp;\");\r\n\r\n}\r\nfunction get_mouse(){\r\nreturn statusismouseover;\r\n}\r\n$(document).ready(function(){\r\nwheight=$(window).height();\r\n$(\"#div_pannel\").height($(window).height()-103);\r\n$(window).resize(function(){\t\r\n$(\"#div_pannel\").height($(window).height()-103);\r\n});\r\n\n$(\"#kkstatusswitch\").bind(\"click\",function(){\r\nvar chkd=$(this).attr(\"view\");\r\nif(chkd==\"1\"){\r\n$(this).attr(\"view\",\"2\");\r\n$(\"#viewbartd\").hide();\t\r\n$(\"#viewbar\").css(\"width\",\"20\");\r\n$(this).attr(\"src\",$(this).attr(\"src\").replace(\"1.png\",\"2.png\"));\t\r\n}else{\r\n$(this).attr(\"view\",\"1\");\r\n$(\"#viewbartd\").show();\r\n$(\"#viewbar\").css(\"width\",\"100%\");\r\n$(this).attr(\"src\",$(this).attr(\"src\").replace(\"2.png\",\"1.png\"));\t\r\n}\r\n});\r\n\r\n\n$(\"#viewbar\").hover(  \r\nfunction () {\r\nstatusismouseover=1;\r\n},\r\nfunction () {\r\nstatusismouseover=0;\r\n}\r\n);\r\n});\r\n</script>\r\n</head>\r\n<body style=\"background-color:#fff\">\r\n<ul class=\"clearfix\" id=\"div_tab\"></ul>\r\n<div id=\"div_pannel\"></div>\r\n<table id=\"viewbar\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=center>\r\n<tr>\r\n<td valign=bottom width=30><img src=\"";
echo INSTALLPATH;
echo "kss_inc/images/b_tipp1.png\" view=\"1\" style=\"cursor:pointer\" id='kkstatusswitch' /></td><td valign=top id=\"viewbartd\">&nbsp;</td></tr>\r\n</table>\r\n<!--\r\n<div style=\"display:block;width:8px;height:13px;position:absolute;top:3px;left:0\"><img src=\"../kss_inc/images/b_nextpage.png\"></div>\r\n<div style=\"display:block;width:8px;height:13px;position:absolute;top:3px;right:0\"><img src=\"../kss_inc/images/b_prevpage.png\"></div>\r\n-->\r\n</body>\r\n</html>";
?>
