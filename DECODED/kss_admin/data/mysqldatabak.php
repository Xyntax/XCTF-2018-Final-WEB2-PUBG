<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h42OioaQiIuLk4aNio_Pk5Mÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_lJKGkJGVj5KGjYyMi4qKjY4ÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, $_obfuscate_j5WOjY2HlIuHhpCKkZONipUÿ = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ = "";
    $_obfuscate_joiUiYmUjpKKiI_SjIyIko0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "SHOW CREATE TABLE `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."`" );
    $_obfuscate_h4aLhomMi5SOjYmQioqRio4ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kJOTjpKUiJWSjY_LjYyQj5Mÿ( $_obfuscate_joiUiYmUjpKKiI_SjIyIko0ÿ );
    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ = "DROP TABLE IF EXISTS `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."`;\r\n";
    $_obfuscate_lZWQhomSj5WTi4uIh4uQk48ÿ = str_replace( "\r", "", $_obfuscate_h4aLhomMi5SOjYmQioqRio4ÿ[1] );
    $_obfuscate_lZWQhomSj5WTi4uIh4uQk48ÿ = str_replace( "\n", "\r\n", $_obfuscate_lZWQhomSj5WTi4uIh4uQk48ÿ );
    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= $_obfuscate_lZWQhomSj5WTi4uIh4uQk48ÿ.";\r\n";
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lYuPlIeUlYuMiJGJiI2LiZEÿ( $_obfuscate_joiUiYmUjpKKiI_SjIyIko0ÿ );
    fwrite( $_obfuscate_j5WOjY2HlIuHhpCKkZONipUÿ, $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ );
    $_obfuscate_kpGQkJCNkI6IjYaQh5OJioYÿ = array( "kss_tb_log_ws", "kss_tb_log_login", "kss_tb_log_task", "kss_tb_sql" );
    if ( !in_array( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, $_obfuscate_kpGQkJCNkI6IjYaQh5OJioYÿ ) && "kss_z_log" != substr( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, 0, 9 ) )
    {
        $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ = "";
        $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "SELECT * FROM ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, "not_sync", 0 );
        $_obfuscate_k5OTk4aMj5SKkYeRj4_Kj4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jJGUj5WRioqViZWHjo2KhpEÿ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ );
        $_obfuscate_j4_KlYiOj4mQkoiVlJWJlJMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_k5WGh4yNj5ORhpKIjJGPi5Mÿ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ );
        $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIwÿ = 0;
        while ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5Mÿ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ, MYSQL_NUM ) )
        {
            $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIwÿ += 1;
            $_obfuscate_kJSVjI6PiIiKh4_Nh4yTiocÿ = $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIwÿ % 30;
            $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ = "";
            if ( $_obfuscate_kJSVjI6PiIiKh4_Nh4yTiocÿ == 1 )
            {
                $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ = "INSERT INTO `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."` VALUES ";
            }
            $_obfuscate_iYqHjZCRiouTh4yQk46UjY0ÿ = -1;
            $_obfuscate_kpGGipKTj4_PjoiVjY2IlIwÿ = 1;
            $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= "(";
            while ( ++$_obfuscate_iYqHjZCRiouTh4yQk46UjY0ÿ < $_obfuscate_k5OTk4aMj5SKkYeRj4_Kj4gÿ )
            {
                if ( $_obfuscate_kpGGipKTj4_PjoiVjY2IlIwÿ )
                {
                    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= ", ";
                }
                else
                {
                    $_obfuscate_kpGGipKTj4_PjoiVjY2IlIwÿ = 0;
                }
                if ( isset( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ[$_obfuscate_iYqHjZCRiouTh4yQk46UjY0ÿ] ) )
                {
                    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= "NULL";
                }
                else
                {
                    $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= "'".mysql_escape_string( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ[$_obfuscate_iYqHjZCRiouTh4yQk46UjY0ÿ] )."'";
                }
            }
            if ( $_obfuscate_ioeRkIuMlZCMk5WMlIaVjIwÿ == $_obfuscate_j4_KlYiOj4mQkoiVlJWJlJMÿ || $_obfuscate_kJSVjI6PiIiKh4_Nh4yTiocÿ == 0 )
            {
                $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= ");\n";
            }
            else
            {
                $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ .= "),\n";
            }
            fwrite( $_obfuscate_j5WOjY2HlIuHhpCKkZONipUÿ, $_obfuscate_kI_Qk46Sk5SHio_JlZSSjZMÿ );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lYuPlIeUlYuMiJGJiI2LiZEÿ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ );
    }
    return "";
}

if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "set_time_limit" ) )
{
    @set_time_limit( 300 );
}
if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ = KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databasecache".DIRECTORY_SEPARATOR;
$_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ = KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR;
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "pwd", "gp", "no", "" );
if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ == "" )
{
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 9 );
    ob_clean( );
}
else if ( md5( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ ) == MYSQLBAKPASSWORD || $_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ == MYSQLBAKPASSWORD )
{
    if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ == MYSQLBAKPASSWORD )
    {
        if ( BAKDATAMODE == 0 )
        {
            exit( "æœªå¼€å¯è‡ªåŠ¨å¤‡ä»½æ•°æ®åº“ï¼" );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
        $_obfuscate_ko6VipSQi4yPi4uTj4aUlJMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( "databaklock" );
        $_obfuscate_h5WLhpOLlYqHh46LjIqUjJUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "qz", "g", "int", 0 );
        $_obfuscate_kpSRlIaMh4qJk46IkIeKlIkÿ = file_get_contents( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ."index.html" );
        if ( trim( $_obfuscate_kpSRlIaMh4qJk46IkIeKlIkÿ ) == intval( date( "d" ) ) && $_obfuscate_h5WLhpOLlYqHh46LjIqUjJUÿ == 0 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEÿ( "databaklock" );
            exit( "ä»Šå¤©å·²ç»è‡ªåŠ¨å¤‡ä»½è¿‡æ•°æ®åº“ï¼" );
        }
        if ( $_obfuscate_h5WLhpOLlYqHh46LjIqUjJUÿ == 0 )
        {
            file_put_contents( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ."index.html", intval( date( "d" ) ) );
        }
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEÿ( "databaklock" );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    }
}
else
{
    exit( "æ— æƒé™è®¿é—®å¤‡ä»½æ¥å£ï¼" );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ == "mysqldatabak_down" )
{
    if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ == "" && md5( $_GET['spp'] ) != MYSQLBAKPASSWORD )
    {
        exit( "å®‰å…¨æ¥å£å¯†ç é”™è¯¯ï¼" );
    }
    $_obfuscate_kpWNiYyMkZGJi5KJjIyGipIÿ = 0;
    $_obfuscate_h5KVlIaHlYyTj5KUio2Jiosÿ = "";
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iÿ( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ )
        {
            if ( 2048 < filesize( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ ) && time( ) - filectime( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ ) < 60 )
            {
                $_obfuscate_kpWNiYyMkZGJi5KJjIyGipIÿ = 1;
                $_obfuscate_h5KVlIaHlYyTj5KUio2Jiosÿ = $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ;
            }
            else
            {
                @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ );
            }
        }
    }
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iÿ( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ )
        {
            $_obfuscate_kZOKk4qOjIyVkpWGh4_Gh5Qÿ = substr( basename( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ ), 0, 10 );
            if ( 604800 < time( ) - strtotime( $_obfuscate_kZOKk4qOjIyVkpWGh4_Gh5Qÿ ) )
            {
                @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ );
            }
        }
    }
    if ( $_obfuscate_kpWNiYyMkZGJi5KJjIyGipIÿ == 1 )
    {
        header( "location:".$_obfuscate_h5KVlIaHlYyTj5KUio2Jiosÿ );
        exit( );
    }
    $_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ = date( "Y-m-d_H-i-s" )._obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 32 );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "SHOW tables" );
    $_obfuscate_j4eVjYiMi42TlY6NlYqIi4oÿ = @fopen( @$_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql", "w" );
    while ( $_obfuscate_i5OTlI6Kk4_ThoeHkZCMjY8ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5Mÿ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, MYSQL_NUM ) )
    {
        if ( "kss_" == substr( $_obfuscate_i5OTlI6Kk4_ThoeHkZCMjY8ÿ[0], 0, 4 ) )
        {
            _obfuscate_lJKGkJGVj5KGjYyMi4qKjY4ÿ( $_obfuscate_i5OTlI6Kk4_ThoeHkZCMjY8ÿ[0], $_obfuscate_j4eVjYiMi42TlY6NlYqIi4oÿ );
        }
    }
    fclose( $_obfuscate_j4eVjYiMi42TlY6NlYqIi4oÿ );
    include( KSSINCDIR."zip.cls.php" );
    $_obfuscate_h5KPjIyRk4yPipSPkIqHj4cÿ = new PHPzip( );
    if ( $_obfuscate_h5KPjIyRk4yPipSPkIqHj4cÿ->startfile( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".zip" ) )
    {
        file_get_contents( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql" )( file_get_contents( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql" ), $_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql" );
        $_obfuscate_h5KPjIyRk4yPipSPkIqHj4cÿ->createfile( );
    }
    $_obfuscate_kZKRk4mRjJOGi5GMlZSNj4sÿ = 0;
    if ( is_file( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".zip" ) && 1024 < filesize( $_obfuscate_j4_KjZSMko_Ri4yQlIyKlI8ÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".zip" ) )
    {
        unlink( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql" );
        $_obfuscate_kZKRk4mRjJOGi5GMlZSNj4sÿ = 1;
    }
    if ( $_obfuscate_kZKRk4mRjJOGi5GMlZSNj4sÿ == 1 )
    {
        unlink( $_obfuscate_jZOHkYqQhpKLioiTlZWMjJMÿ.$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql" );
        if ( $_obfuscate_jIiRjYuKk4uQjJSNkImGjpIÿ == MYSQLBAKPASSWORD )
        {
            if ( BAKDATAMODE < 2 )
            {
                exit( "bakok" );
            }
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = array( );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ['filename'] = $_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".zip";
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ['begin'] = 0;
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ['password'] = MYSQLBAKPASSWORD;
            $_obfuscate_kpCRiIiOk42KjIuKiZOSjY8ÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( _obfuscate_ko_JjomRlIiQkYiRlZKSkZIÿ( ).INSTALLPATH."kss_inc/sendbak.php", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ, 1 );
            if ( substr( $_obfuscate_kpCRiIiOk42KjIuKiZOSjY8ÿ, 0, 8 ) == "curlerr:" )
            {
                exit( substr( $_obfuscate_kpCRiIiOk42KjIuKiZOSjY8ÿ, 8 ) );
            }
            exit( "æ­£åœ¨å¤‡ä»½æ•°æ®åº“â€¦â€¦" );
        }
        header( "location:../kss_logs/databak/".$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".zip" );
        exit( );
    }
    header( "location:../kss_logs/databasecache/".$_obfuscate_iJWTjpKOkpOTiZOGkJKQkYcÿ.".sql" );
    exit( );
}
$_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iÿ( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databasecache".DIRECTORY_SEPARATOR, "zip" );
if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ ) )
{
    foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ )
    {
        if ( 180 < time( ) - filectime( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ ) )
        {
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ );
        }
    }
}
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"input[clear=1]\").bind(\"click\",function(e){\r\nMouse(e);\nvar op=$(this).val();\r\n$.ajax({\r\nurl: 'admin_data.php?action=mysqldatayh&isajax=1&op='+encodeURIComponent(op),\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,7)=='clearok'){\r\nmview(html.substr(7));\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n</script>\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">æ•°æ®åº“å¤‡ä»½</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n";
if ( IS2SVR == 1 && SVRID == 1 )
{
    echo "<tr><td >å¦‚æœä½ æœ¬æ¬¡å¤‡ä»½æ˜¯æƒ³æ‰‹åŠ¨åŒæ­¥æ•°æ®åº“åˆ°å¤‡æœï¼Œè¯·å…ˆæ‰§è¡Œï¼š<input type='button' clear='1' malt='æ¸…ç©ºæ‰€æœ‰kss_z_log_*_*è¡¨çš„æ‰€æœ‰æ•°æ®' value='æ‰‹åŠ¨åŒæ­¥å‰æ¸…ç†æ•°æ®' class='submitbtnn'></td></tr>\r\n";
}
echo "<tr><td >ç«‹å³å¤‡ä»½æ•°æ®åº“åˆ°ä½ å½“å‰ä½¿ç”¨çš„ç”µè„‘ï¼š<input id=\"downsql\" type=button class=submitbtn onclick=window.open(\"admin_data.php?action=mysqldatabak_down&spp=\"+$(\"#spp\").val()+\"&cmdtime=\"+sTime()) value=\"å¼€å§‹å¤‡ä»½\">éœ€è¾“å…¥å®‰å…¨æ¥å£å¯†ç <input type=password id=spp name=spp class=longinput></td></tr>\t\t\t\r\n<tr>\r\n<td>ä½¿ç”¨å¤‡ä»½çš„æ•°æ®æ¢å¤æ•°æ®åº“ï¼Œè¯·å‚è§å®˜æ–¹ç½‘ç«™æ–‡æ¡£</td>\r\n</tr>\r\n</table>\r\n</div>\r\n\r\n</div>\r\n</body>\r\n</html>";
?>
