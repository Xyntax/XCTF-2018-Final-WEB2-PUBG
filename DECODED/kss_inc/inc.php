<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kYqKjZSGkpKSjpCGkY_VlYc�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ�, $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� )
{
    global $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48�;
    if ( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� == 111111 )
    {
        return "�����������������";
    }
    $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� = ( integer );
    if ( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� == 0 )
    {
        $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� = 1;
    }
    if ( 30 <= $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8� = ( integer )( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� / 30 ) * $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48�['30'];
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8� += ( integer )( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� % 30 ) * $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48�['b1'];
    }
    else if ( 20 < $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8� = 0.8;
    }
    else if ( 10 < $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8� = 0.6;
    }
    else if ( 7 <= $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8� = 0.4;
    }
    else
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8� = $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQ� * $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48�['a1'];
    }
    return round( $_obfuscate_homIkYiRk5SSlImKk4_Jho8� * $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo�, 2 );
}

function error_report_fun( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
{
    global $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQ�;
    if ( preg_match( "/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\\.rmdir|function\\.iconv/i", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� ) )
    {
        return TRUE;
    }
    $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQ� = TRUE;
    $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0� = str_replace( KSSROOTDIR, "", $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0� );
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = str_replace( KSSROOTDIR, "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, "mysql_" ) !== FALSE )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = preg_replace( "/\\[.*\\]/", "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    }
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = str_replace( ADMINFOLDER, "***", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    $_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s� = array( "E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR", "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING", "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE", "E_STRICT", "E_RECOVERABLE_ERROR", "E_ALL" );
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s�[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�." in ".$_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�." on line ".$_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU�."</b>";
    if ( 1 < PHPERROUPUT )
    {
        $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� = KSSLOGDIR."err_log.php";
        if ( is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� ) )
        {
            if ( 1048576 < filesize( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� ) )
            {
                $_obfuscate_ipWMho2NlI2MiI_MioeTlZI� = "?";
                $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI� = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�.">\r\n";
                file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI�.date( "Y-m-d H:i:s" )."\t".$_SERVER['PHP_SELF']."\r\n\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�."\r\n\r\n" );
            }
            else
            {
                file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, date( "Y-m-d H:i:s" )."\t".$_SERVER['PHP_SELF']."\r\n\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�."\r\n\r\n", FILE_APPEND );
            }
        }
        else
        {
            $_obfuscate_ipWMho2NlI2MiI_MioeTlZI� = "?";
            $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI� = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�.">\r\n";
            file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI�.date( "Y-m-d H:i:s" )."\t".$_SERVER['PHP_SELF']."\r\n\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�."\r\n\r\n" );
        }
    }
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    if ( PHPERROUPUT == 1 || PHPERROUPUT == 3 )
    {
        echo $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�;
    }
    exit( );
}

function _obfuscate_io_MiI6UjIyKkJOVk5GSjYo�( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� = "index.php", $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIs� = 1 )
{
    global $_obfuscate_lYyNjpSKk5GRkJGKhoyLkpU�;
    $_obfuscate_hpWHlJKLkYeUho2RjpGOkIs� = array( "501" => "服务端需要重新登记：重新申请时系列号应为YZ开头！", "502" => "服务端需要重新登记：授权非法005！", "503" => "服务端需要重新登记：服务器日期小于授权日期！", "504" => "服务端需要重新登记：授权已到期！", "505" => "服务端需要重新登记：授权主机名或端口变动！", "506" => "服务端需要重新登记：主机环境变动项目N！", "507" => "服务端需要重新登记：主机环境变动项目D！", "508" => "服务端需要重新登记：授权串自效验失败！", "509" => "服务器的日期不正确，请纠正！", "510" => "服务器需要安装登记才可以使用！", "511" => "服务端源码已安全生命周期，请更新！" );
    if ( time( ) < strtotime( "2018-01-15 01:00:00" ) )
    {
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "index.php" )
        {
            return $_obfuscate_hpWHlJKLkYeUho2RjpGOkIs�['509'];
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "xio.php" )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "509", $_obfuscate_hpWHlJKLkYeUho2RjpGOkIs�['509'] );
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "api.php" )
        {
            if ( $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIs� == 1 )
            {
                exit( "crypteno509" );
            }
            exit( "kssdata".$_obfuscate_hpWHlJKLkYeUho2RjpGOkIs�['509'] );
        }
    }
    if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "index.php" && strtotime( "2020-12-20 12:00:00" ) < time( ) )
    {
        $_obfuscate_iIyGk4aPkZONh4mMkoyIj4g� = "已正式登记授权【版本低】";
    }
    $_obfuscate_kIaPkI2TkI6VjomNkIiUi4k� = _obfuscate_kYiMkouMiZOGjIqNi4qLkIY�( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE�, $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIs� );
    if ( $_obfuscate_kIaPkI2TkI6VjomNkIiUi4k� !== TRUE )
    {
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "index.php" )
        {
            return $_obfuscate_hpWHlJKLkYeUho2RjpGOkIs�[$_obfuscate_kIaPkI2TkI6VjomNkIiUi4k�];
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "xio.php" )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( $_obfuscate_kIaPkI2TkI6VjomNkIiUi4k�, $_obfuscate_hpWHlJKLkYeUho2RjpGOkIs�[$_obfuscate_kIaPkI2TkI6VjomNkIiUi4k�] );
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� == "api.php" )
        {
            if ( $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIs� == 1 )
            {
                exit( "crypteno".$_obfuscate_kIaPkI2TkI6VjomNkIiUi4k� );
            }
            exit( "kssdata".$_obfuscate_hpWHlJKLkYeUho2RjpGOkIs�[$_obfuscate_kIaPkI2TkI6VjomNkIiUi4k�] );
        }
    }
    return TRUE;
}

function _obfuscate_kYiMkouMiZOGjIqNi4qLkIY�( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE�, $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIs� )
{
    global $_obfuscate_iIyGk4aPkZONh4mMkoyIj4g�;
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM�;
    global $_obfuscate_lYyNjpSKk5GRkJGKhoyLkpU�;
    $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4c� = "YIJ778l8P1yQyL5FiH7yFuiNAj2Hy3bnhYickZ88hxR9P5cUU4FIF7dZvs8m1PQF";
    $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZM� = "-----BEGIN PUBLIC KEY-----\r\nMFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAK9U7jWdSBvPBcwwzoO2btYFNB1zt6Wa\r\nd7ZHvvgT7BUrZr+eomtLkiduoXnpOEdSmA/bfg2Itd+2vMWvFLJjuM8CAwEAAQ==\r\n-----END PUBLIC KEY-----";
    $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0� = PRV_SVRLIC;
    if ( strlen( $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0� ) < 30 )
    {
        return "510";
    }
    $_obfuscate_k4qTi4eMlYaHk5WPjY_JiJA� = hexdec( substr( $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0�, 1, 2 ) );
    $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4� = substr( $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0�, 3 );
    $_obfuscate_jIyOkIyJiZOTkZGLj4qHko8� = substr( $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4�, 0, $_obfuscate_k4qTi4eMlYaHk5WPjY_JiJA� );
    $_obfuscate_kZWOkZWGhoqSjZCThouQlJQ� = substr( $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4�, $_obfuscate_k4qTi4eMlYaHk5WPjY_JiJA� );
    $_obfuscate_iZGPko6IkpGUiYiSi4aMipQ� = crypt_rsa_ex( $_obfuscate_jIyOkIyJiZOTkZGLj4qHko8�, $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZM�, "decrypt" );
    $_obfuscate_jI6LjY6KhoeIi4qRlZOUj5E� = decode_rc4base64( $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4c�, $_obfuscate_kZWOkZWGhoqSjZCThouQlJQ� );
    if ( substr( md5( $_obfuscate_jI6LjY6KhoeIi4qRlZOUj5E�.$_obfuscate_j4_OlZWTlYmIi4iSi5CSk4c� ), 0, 16 ) != $_obfuscate_iZGPko6IkpGUiYiSi4aMipQ� )
    {
        return "508";
    }
    $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc� = explode( "┛", $_obfuscate_jI6LjY6KhoeIi4qRlZOUj5E� );
    if ( count( $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc� ) != 7 )
    {
        return "502";
    }
    if ( time( ) < $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[1] )
    {
        return "503";
    }
    if ( $_SERVER['HTTP_HOST'] != $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[2] )
    {
        return "505";
    }
    if ( $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[0] != "6999" && $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� != $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[3] )
    {
        return "506";
    }
    if ( dirname( __FILE__ ) != $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[4] )
    {
        return "507";
    }
    if ( $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[1] + 86400 * $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[0] < time( ) )
    {
        return "504";
    }
    if ( 300 < $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIc�[0] )
    {
        $_obfuscate_iIyGk4aPkZONh4mMkoyIj4g� = "已正式登记授权";
        return TRUE;
    }
    $_obfuscate_iIyGk4aPkZONh4mMkoyIj4g� = "已临时登记授权";
    return TRUE;
}

function _obfuscate_jZKGhoeQk46KiJCHi5CLjpQ�( )
{
    global $_obfuscate_iIyGk4aPkZONh4mMkoyIj4g�;
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM�;
    $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4c� = "YIJ778l8P1yQyL5FiH7yFuiNAj2Hy3bnhYickZ88hxR9P5cUU4FIF7dZvs8m1PQF";
    $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZM� = "-----BEGIN PUBLIC KEY-----\r\nMFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAK9U7jWdSBvPBcwwzoO2btYFNB1zt6Wa\r\nd7ZHvvgT7BUrZr+eomtLkiduoXnpOEdSmA/bfg2Itd+2vMWvFLJjuM8CAwEAAQ==\r\n-----END PUBLIC KEY-----";
    $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = "0";
    if ( "/" == DIRECTORY_SEPARATOR )
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = $_SERVER['SERVER_ADDR'];
    }
    else
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = @gethostbyname( @$_SERVER['SERVER_NAME'] );
    }
    $_obfuscate_iIqHj4mRjIuMkZWIi5SRkIo� = time( )."┛".$_SERVER['HTTP_HOST']."┛".$_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM�."┛".dirname( __FILE__ )."┛".WEBLIC."┛".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c�;
    $_obfuscate_iIuVjJCHkY2LjIyOkpCOjoo� = substr( md5( $_obfuscate_iIqHj4mRjIuMkZWIi5SRkIo�.$_obfuscate_j4_OlZWTlYmIi4iSi5CSk4c� ), 0, 16 );
    $_obfuscate_lI6PiouVj4qKioaHlZKNi4Y� = encode_rc4base64( $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4c�, $_obfuscate_iIqHj4mRjIuMkZWIi5SRkIo� );
    $_obfuscate_jYmTjYyJlYmQiZSNiI_MkI8� = crypt_rsa_ex( $_obfuscate_iIuVjJCHkY2LjIyOkpCOjoo�, $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZM�, "encrypt" );
    $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4� = "Y".dechex( strlen( $_obfuscate_jYmTjYyJlYmQiZSNiI_MkI8� ) ).$_obfuscate_jYmTjYyJlYmQiZSNiI_MkI8�.$_obfuscate_lI6PiouVj4qKioaHlZKNi4Y�;
    return $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4�;
}

error_reporting( E_ALL );
@ini_set( "display_errors", "On" );
if ( stripos( $_SERVER['PHP_SELF'], "/io.php" ) === FALSE )
{
    session_start( );
}
@ob_start( );
@header( "content-type:text/html;charset=utf-8" );
if ( function_exists( "date_default_timezone_set" ) )
{
    date_default_timezone_set( "PRC" );
}
if ( 5.3 < substr( PHP_VERSION, 0, 3 ) * 1 )
{
    exit( "Does not support this version of PHP".PHP_VERSION );
}
$_obfuscate_iY6Gi4qJipOUiImLlY2Rj48� = FALSE;
$_obfuscate_iIyGk4aPkZONh4mMkoyIj4g� = "还未登记";
$_obfuscate_lYyNjpSKk5GRkJGKhoyLkpU� = "";
define( "YH2", chr( 34 ) );
define( "YH1", chr( 39 ) );
define( "PETIME", 2110000000 );
$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE� = array( 9 => "管理员", 8 => "作者", 7 => "总代理", 6 => "代理" );
$_obfuscate_kpCRkIyMhouRk4yGiY_Sk48� = array( "a1" => 0.05, "b1" => 0.03, "7" => 0.4, "30" => 1 );
define( "KSSROOTDIR", str_ireplace( "kss_inc", "", dirname( __FILE__ ) ) );
define( "KSSINCDIR", dirname( __FILE__ ).DIRECTORY_SEPARATOR );
define( "KSSLOGDIR", KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR );
$_obfuscate_houUipCMk4uPlYyUh4ePkoY� = array( "blank.htm" => array( "52" => "7dc67e623a3d995af5466bf9a667ca6c", "53" => "7dc67e623a3d995af5466bf9a667ca6c" ) );
require( KSSINCDIR."version.php" );
require( KSSINCDIR."_config.php" );
set_error_handler( "error_report_fun" );
define( "SYNC1URL", "http://".HOST1_DOMAIN.INSTALLPATH."kss_inc/sync_mysql.php" );
define( "SYNC2URL", "http://".HOST2_DOMAIN.INSTALLPATH."kss_inc/sync_mysql.php" );
define( "FORM_URL", "http://".( SVRID == 1 ? HOST1_DOMAIN : HOST2_DOMAIN ).INSTALLPATH.ADMINFOLDER."/" );
require( KSSINCDIR."function.php" );
require( KSSINCDIR."db_function.php" );
require( KSSINCDIR."mysql.cls.php" );
require( KSSINCDIR."rsa.php" );
$_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� = "notfind";
if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "php_uname" ) )
{
    $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� = php_uname( );
}
else
{
    $_obfuscate_iI2OjZWQioqOko2KiZOOkJE� = array( "admin_homepage.php", "api.php", "admin_lic.php", "admin_soft.php", "io.php", "rpc.php" );
    $_obfuscate_kYqNk4aKh46RiI2LlYyKjJM� = substr( $_SERVER['SCRIPT_NAME'], strripos( $_SERVER['SCRIPT_NAME'], "/" ) + 1 );
    if ( in_array( $_obfuscate_kYqNk4aKh46RiI2LlYyKjJM�, $_obfuscate_iI2OjZWQioqOko2KiZOOkJE� ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "phpinfo" ) )
    {
        phpinfo( );
        $_obfuscate_iJSSk42LkI_PiIuHiY2VlYc� = ob_get_contents( );
        ob_end_clean( );
        $_obfuscate_iZKGiouHjYaMlIaNio_IkIg� = stripos( $_obfuscate_iJSSk42LkI_PiIuHiY2VlYc�, "system" );
        $_obfuscate_jYeUkIePioeOjYeNlJWPkJQ� = substr( $_obfuscate_iJSSk42LkI_PiIuHiY2VlYc�, $_obfuscate_iZKGiouHjYaMlIaNio_IkIg� + 15, 200 );
        $_obfuscate_iJSSk42LkI_PiIuHiY2VlYc� = "";
        $_obfuscate_k4_LlIuPi4uPkYuOk4mSlIg� = stripos( $_obfuscate_jYeUkIePioeOjYeNlJWPkJQ�, ">" );
        $_obfuscate_kJONhpSJjJKPjJSSkZCVkI8� = stripos( $_obfuscate_jYeUkIePioeOjYeNlJWPkJQ�, "<" );
        $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� = trim( substr( $_obfuscate_jYeUkIePioeOjYeNlJWPkJQ�, $_obfuscate_k4_LlIuPi4uPkYuOk4mSlIg� + 1, $_obfuscate_kJONhpSJjJKPjJSSkZCVkI8� - $_obfuscate_k4_LlIuPi4uPkYuOk4mSlIg� - 1 ) );
    }
}
$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� = _obfuscate_iIuRj5CUkIuHi4mPkY2Vio0�( 1 );
$_obfuscate_iZGLlYiTk42PlJOHh4aJkok� = array( );
if ( SVRID == 1 )
{
    $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� = array( "dbhost" => MYSQL1HostNameOrIp, "dbuser" => MYSQL1UserName, "dbpass" => MYSQL1Password, "dbname" => MYSQL1DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 0 );
    $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s� = array( "dbhost" => MYSQL2HostNameOrIp, "dbuser" => MYSQL2UserName, "dbpass" => MYSQL2Password, "dbname" => MYSQL2DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 1 );
}
else
{
    $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� = array( "dbhost" => MYSQL2HostNameOrIp, "dbuser" => MYSQL2UserName, "dbpass" => MYSQL2Password, "dbname" => MYSQL2DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 0 );
    $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4s� = array( "dbhost" => MYSQL1HostNameOrIp, "dbuser" => MYSQL1UserName, "dbpass" => MYSQL1Password, "dbname" => MYSQL1DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 1 );
}
?>
