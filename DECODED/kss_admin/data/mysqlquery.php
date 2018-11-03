<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIeSjoeTko_ViY_RhpCOlYY�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 9 );
_obfuscate_lI_NjpSLio_JjZCVh4qUjYc�( );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "执行语句" )
{
    if ( md5( $_POST['syspassword'] ) != MYSQLBAKPASSWORD )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok安全接口密码错误!" );
    }
    $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = $_POST['base64sql'];
    if ( get_magic_quotes_gpc( ) )
    {
        $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = stripslashes( $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    }
    $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = base64_decode( $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = str_replace( "\\;", "┾", $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = str_replace( "\r", "", $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = str_replace( "\n", "", $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� = preg_replace( "/time:\\((\\d{4}-\\d{1,2}-\\d{1,2} \\d{1,2}(:\\d{1,2}){1,2})\\)/ie", "strtotime('$1')", $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    if ( substr( $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE�, 0, 6 ) == "select" )
    {
        $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� = mysql_query( $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
        if ( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� !== FALSE )
        {
            ob_clean( );
            echo "yes<table class=listtable border=0 cellspacing=1 cellpadding=3 align=center>\r\n";
            $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
            echo "\t<tr>\r\n";
            while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < mysql_num_fields( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� ) )
            {
                echo "<td bgcolor=#f6f6f6>".mysql_field_name( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI�, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )."</td>";
                ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�;
            }
            echo "\t</tr>\r\n";
            while ( $_obfuscate_kYmVlIeNho_JlYmOiIaSiZQ� = mysql_fetch_array( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI�, 1 ) )
            {
                echo "\t<tr>\r\n";
                foreach ( $_obfuscate_kYmVlIeNho_JlYmOiIaSiZQ� as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
                {
                    echo "\t\t<td bgcolor=#ffffff  nowrap='nowrap'>".substr( $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�, 0, 32 )."</td>\r\n";
                }
                echo "\t</tr>\r\n";
            }
            echo "</table>";
            mysql_free_result( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� );
            exit( );
        }
        echo "查询错误".$_obfuscate_lJGMlIeQk5GUk42VjpGKiZE�;
        exit( );
    }
    $_obfuscate_jpCTiI6KlI_Hh5SKjoiQk5U� = explode( ";", $_obfuscate_lJGMlIeQk5GUk42VjpGKiZE� );
    $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s� = "ok<textarea style='width:650px;height:100px'>";
    foreach ( $_obfuscate_jpCTiI6KlI_Hh5SKjoiQk5U� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        if ( trim( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) != "" )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = str_replace( "┾", ";", trim( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) );
            $_obfuscate_iIeQlImSkIaQjpGNi46Njo8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
            if ( $_obfuscate_iIeQlImSkIaQjpGNi46Njo8� !== FALSE )
            {
                $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s� = $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s�."Yes->&nbsp;&nbsp;&nbsp;&nbsp;".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�."\r\n";
            }
            else
            {
                $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s� = $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s�."Err->&nbsp;&nbsp;&nbsp;&nbsp;".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�."\r\n";
            }
        }
    }
    $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s� .= "</textarea>";
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_h4aJkIiIiIeNkYiSkoaHh4s� );
}
echo "<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/base64.js\" charset=\"utf-8\"></script>\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"#mysqlquery\").bind(\"click\",function(e){\r\n$(\"#base64sql\").val(Base64.encode($(\"#sqltext\").val()));\r\n});\r\n\r\n$('#mysqlquery').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)=='ok'){\r\nmalert(responseText.substr(2),'执行SQL语句结果',700,150);\r\n}else if(responseText.substr(0,3)=='yes'){\r\n$(\"#sqllisttable\").html(responseText.substr(3));\r\n}else{\r\nmalert(responseText);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\t\r\n});\r\n\r\n</script>\t\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=trd>\r\n<td valign=top >MySQL语句【多条语句请用;号分隔，如果语句中有;号请用\\;表示】<br><textarea id=\"sqltext\" name=\"sqltext\" style=\"width:98%;height:100px\" /></textarea></td>\r\n</tr>\r\n<tr class=trd>\r\n<td>\r\n<form action=\"?action=mysqlquery\" method=\"post\" target=\"_self\" id=\"mysqlquery\" name=\"mysqlquery\">\r\n效验全安接口密码：<input type=password name='syspassword' value=''>\t执行SQL必须效验安全接口密码<br>\t\t\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\t\t\r\n<input type=\"hidden\" name=\"base64sql\" id=\"base64sql\" value=\"\" />\r\n&nbsp;&nbsp;<input type='submit' name='op' id='query' malt='执行输入框中的SQL语句' value='执行语句' class='submitbtn'>\r\n</form>\r\n&nbsp;&nbsp;支持update、delete和简单的select语句，如果你有备服该处执行的update与delete语句也会自动在备服执行。<br><br>\r\n<span style=\"color:red\"><b>软件ID</b>：软件列表页面第一列的蓝色数字即为软件ID</span><br><br>\r\n下边一条select语名可取登陆次数最多的前50个用户名，只用改蓝色文字部份即可<br>\r\nselect username as 用户名,activetimes as 登陆次数  from kss_z_user_10000_<span style=\"color:blue\">软件ID</span> order by activetimes desc limit 0,50<br>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n<div id=sqllisttable></div>";
?>
