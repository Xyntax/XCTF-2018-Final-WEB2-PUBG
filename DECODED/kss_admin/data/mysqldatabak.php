<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h42OioaQiIuLk4aNio_Pk5M�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_lJKGkJGVj5KGjYyMi4qKjY4�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, $_obfuscate_j5WOjY2HlIuHhpCKkZONipU� = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� = "";
    $_obfuscate_joiUiYmUjpKKiI_SjIyIko0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "SHOW CREATE TABLE `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."`" );
    $_obfuscate_h4aLhomMi5SOjYmQioqRio4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kJOTjpKUiJWSjY_LjYyQj5M�( $_obfuscate_joiUiYmUjpKKiI_SjIyIko0� );
    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� = "DROP TABLE IF EXISTS `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."`;\r\n";
    $_obfuscate_lZWQhomSj5WTi4uIh4uQk48� = str_replace( "\r", "", $_obfuscate_h4aLhomMi5SOjYmQioqRio4�[1] );
    $_obfuscate_lZWQhomSj5WTi4uIh4uQk48� = str_replace( "\n", "\r\n", $_obfuscate_lZWQhomSj5WTi4uIh4uQk48� );
    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= $_obfuscate_lZWQhomSj5WTi4uIh4uQk48�.";\r\n";
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lYuPlIeUlYuMiJGJiI2LiZE�( $_obfuscate_joiUiYmUjpKKiI_SjIyIko0� );
    fwrite( $_obfuscate_j5WOjY2HlIuHhpCKkZONipU�, $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� );
    $_obfuscate_kpGQkJCNkI6IjYaQh5OJioY� = array( "kss_tb_log_ws", "kss_tb_log_login", "kss_tb_log_task", "kss_tb_sql" );
    if ( !in_array( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, $_obfuscate_kpGQkJCNkI6IjYaQh5OJioY� ) && "kss_z_log" != substr( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, 0, 9 ) )
    {
        $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� = "";
        $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "SELECT * FROM ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, "not_sync", 0 );
        $_obfuscate_k5OTk4aMj5SKkYeRj4_Kj4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jJGUj5WRioqViZWHjo2KhpE�( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� );
        $_obfuscate_j4_KlYiOj4mQkoiVlJWJlJM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_k5WGh4yNj5ORhpKIjJGPi5M�( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� );
        $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIw� = 0;
        while ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5M�( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y�, MYSQL_NUM ) )
        {
            $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIw� += 1;
            $_obfuscate_kJSVjI6PiIiKh4_Nh4yTioc� = $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIw� % 30;
            $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� = "";
            if ( $_obfuscate_kJSVjI6PiIiKh4_Nh4yTioc� == 1 )
            {
                $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� = "INSERT INTO `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."` VALUES ";
            }
            $_obfuscate_iYqHjZCRiouTh4yQk46UjY0� = -1;
            $_obfuscate_kpGGipKTj4_PjoiVjY2IlIw� = 1;
            $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= "(";
            while ( ++$_obfuscate_iYqHjZCRiouTh4yQk46UjY0� < $_obfuscate_k5OTk4aMj5SKkYeRj4_Kj4g� )
            {
                if ( $_obfuscate_kpGGipKTj4_PjoiVjY2IlIw� )
                {
                    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= ", ";
                }
                else
                {
                    $_obfuscate_kpGGipKTj4_PjoiVjY2IlIw� = 0;
                }
                if ( isset( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40�[$_obfuscate_iYqHjZCRiouTh4yQk46UjY0�] ) )
                {
                    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= "NULL";
                }
                else
                {
                    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= "'".mysql_escape_string( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40�[$_obfuscate_iYqHjZCRiouTh4yQk46UjY0�] )."'";
                }
            }
            if ( $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIw� == $_obfuscate_j4_KlYiOj4mQkoiVlJWJlJM� || $_obfuscate_kJSVjI6PiIiKh4_Nh4yTioc� == 0 )
            {
                $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= ");\n";
            }
            else
            {
                $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� .= "),\n";
            }
            fwrite( $_obfuscate_j5WOjY2HlIuHhpCKkZONipU�, $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZM� );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lYuPlIeUlYuMiJGJiI2LiZE�( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� );
    }
    return "";
}

if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "set_time_limit" ) )
{
    @set_time_limit( 300 );
}
if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jZOHkYqQhpKLioiTlZWMjJM� = KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databasecache".DIRECTORY_SEPARATOR;
$_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8� = KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR;
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "pwd", "gp", "no", "" );
if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� == "" )
{
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 9 );
    ob_clean( );
}
else if ( md5( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� ) == MYSQLBAKPASSWORD || $_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� == MYSQLBAKPASSWORD )
{
    if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� == MYSQLBAKPASSWORD )
    {
        if ( BAKDATAMODE == 0 )
        {
            exit( "未开启自动备份数据库！" );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
        $_obfuscate_ko6VipSQi4yPi4uTj4aUlJM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( "databaklock" );
        $_obfuscate_h5WLhpOLlYqHh46LjIqUjJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "qz", "g", "int", 0 );
        $_obfuscate_kpSRlIaMh4qJk46IkIeKlIk� = file_get_contents( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8�."index.html" );
        if ( trim( $_obfuscate_kpSRlIaMh4qJk46IkIeKlIk� ) == intval( date( "d" ) ) && $_obfuscate_h5WLhpOLlYqHh46LjIqUjJU� == 0 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( "databaklock" );
            exit( "今天已经自动备份过数据库！" );
        }
        if ( $_obfuscate_h5WLhpOLlYqHh46LjIqUjJU� == 0 )
        {
            file_put_contents( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8�."index.html", intval( date( "d" ) ) );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( "databaklock" );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    }
}
else
{
    exit( "无权限访问备份接口！" );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "mysqldatabak_down" )
{
    if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� == "" && md5( $_GET['spp'] ) != MYSQLBAKPASSWORD )
    {
        exit( "安全接口密码错误！" );
    }
    $_obfuscate_kpWNiYyMkZGJi5KJjIyGipI� = 0;
    $_obfuscate_h5KVlIaHlYyTj5KUio2Jios� = "";
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5I�( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJM�, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
        {
            if ( 2048 < filesize( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� ) && time( ) - filectime( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� ) < 60 )
            {
                $_obfuscate_kpWNiYyMkZGJi5KJjIyGipI� = 1;
                $_obfuscate_h5KVlIaHlYyTj5KUio2Jios� = $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y�;
            }
            else
            {
                @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
            }
        }
    }
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5I�( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8�, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
        {
            $_obfuscate_kZOKk4qOjIyVkpWGh4_Gh5Q� = substr( basename( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� ), 0, 10 );
            if ( 604800 < time( ) - strtotime( $_obfuscate_kZOKk4qOjIyVkpWGh4_Gh5Q� ) )
            {
                @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
            }
        }
    }
    if ( $_obfuscate_kpWNiYyMkZGJi5KJjIyGipI� == 1 )
    {
        header( "location:".$_obfuscate_h5KVlIaHlYyTj5KUio2Jios� );
        exit( );
    }
    $_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc� = date( "Y-m-d_H-i-s" )._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 32 );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "SHOW tables" );
    $_obfuscate_j4eVjYiMi42TlY6NlYqIi4o� = @fopen( @$_obfuscate_jZOHkYqQhpKLioiTlZWMjJM�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql", "w" );
    while ( $_obfuscate_i5OTlI6Kk4_ThoeHkZCMjY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5M�( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, MYSQL_NUM ) )
    {
        if ( "kss_" == substr( $_obfuscate_i5OTlI6Kk4_ThoeHkZCMjY8�[0], 0, 4 ) )
        {
            _obfuscate_lJKGkJGVj5KGjYyMi4qKjY4�( $_obfuscate_i5OTlI6Kk4_ThoeHkZCMjY8�[0], $_obfuscate_j4eVjYiMi42TlY6NlYqIi4o� );
        }
    }
    fclose( $_obfuscate_j4eVjYiMi42TlY6NlYqIi4o� );
    include( KSSINCDIR."zip.cls.php" );
    $_obfuscate_h5KPjIyRk4yPipSPkIqHj4c� = new PHPzip( );
    if ( $_obfuscate_h5KPjIyRk4yPipSPkIqHj4c�->startfile( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".zip" ) )
    {
        file_get_contents( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJM�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql" )( file_get_contents( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJM�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql" ), $_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql" );
        $_obfuscate_h5KPjIyRk4yPipSPkIqHj4c�->createfile( );
    }
    $_obfuscate_kZKRk4mRjJOGi5GMlZSNj4s� = 0;
    if ( is_file( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".zip" ) && 1024 < filesize( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".zip" ) )
    {
        unlink( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJM�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql" );
        $_obfuscate_kZKRk4mRjJOGi5GMlZSNj4s� = 1;
    }
    if ( $_obfuscate_kZKRk4mRjJOGi5GMlZSNj4s� == 1 )
    {
        unlink( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJM�.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql" );
        if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpI� == MYSQLBAKPASSWORD )
        {
            if ( BAKDATAMODE < 2 )
            {
                exit( "bakok" );
            }
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = array( );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['filename'] = $_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".zip";
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['begin'] = 0;
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['password'] = MYSQLBAKPASSWORD;
            $_obfuscate_kpCRiIiOk42KjIuKiZOSjY8� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/sendbak.php", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 1 );
            if ( substr( $_obfuscate_kpCRiIiOk42KjIuKiZOSjY8�, 0, 8 ) == "curlerr:" )
            {
                exit( substr( $_obfuscate_kpCRiIiOk42KjIuKiZOSjY8�, 8 ) );
            }
            exit( "正在备份数据库……" );
        }
        header( "location:../kss_logs/databak/".$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".zip" );
        exit( );
    }
    header( "location:../kss_logs/databasecache/".$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYc�.".sql" );
    exit( );
}
$_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5I�( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databasecache".DIRECTORY_SEPARATOR, "zip" );
if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� ) )
{
    foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
    {
        if ( 180 < time( ) - filectime( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� ) )
        {
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
        }
    }
}
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"input[clear=1]\").bind(\"click\",function(e){\r\nMouse(e);\nvar op=$(this).val();\r\n$.ajax({\r\nurl: 'admin_data.php?action=mysqldatayh&isajax=1&op='+encodeURIComponent(op),\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,7)=='clearok'){\r\nmview(html.substr(7));\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n</script>\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">数据库备份</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n";
if ( IS2SVR == 1 && SVRID == 1 )
{
    echo "<tr><td >如果你本次备份是想手动同步数据库到备服，请先执行：<input type='button' clear='1' malt='清空所有kss_z_log_*_*表的所有数据' value='手动同步前清理数据' class='submitbtnn'></td></tr>\r\n";
}
echo "<tr><td >立即备份数据库到你当前使用的电脑：<input id=\"downsql\" type=button class=submitbtn onclick=window.open(\"admin_data.php?action=mysqldatabak_down&spp=\"+$(\"#spp\").val()+\"&cmdtime=\"+sTime()) value=\"开始备份\">需输入安全接口密码<input type=password id=spp name=spp class=longinput></td></tr>\t\t\t\r\n<tr>\r\n<td>使用备份的数据恢复数据库，请参见官方网站文档</td>\r\n</tr>\r\n</table>\r\n</div>\r\n\r\n</div>\r\n</body>\r\n</html>";
?>
