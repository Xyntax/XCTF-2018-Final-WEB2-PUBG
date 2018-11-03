<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kYqKjZSGkpKSjpCGkY_VlYcÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_iImThpCMlYmSjIeMi5GOlIgÿ( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ, $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ )
{
    global $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48ÿ;
    if ( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ == 111111 )
    {
        return "ˆ‰“†Œ•‰’Œ‡Œ‹‘”ˆ";
    }
    $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ = ( integer );
    if ( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ == 0 )
    {
        $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ = 1;
    }
    if ( 30 <= $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ = ( integer )( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ / 30 ) * $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48ÿ['30'];
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ += ( integer )( $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ % 30 ) * $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48ÿ['b1'];
    }
    else if ( 20 < $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ = 0.8;
    }
    else if ( 10 < $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ = 0.6;
    }
    else if ( 7 <= $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ )
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ = 0.4;
    }
    else
    {
        $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ = $_obfuscate_ko2Vk5WRkYiOipSOh4aSkZQÿ * $_obfuscate_kpCRkIyMhouRk4yGiY_Sk48ÿ['a1'];
    }
    return round( $_obfuscate_homIkYiRk5SSlImKk4_Jho8ÿ * $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYoÿ, 2 );
}

function error_report_fun( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUÿ )
{
    global $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQÿ;
    if ( preg_match( "/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\\.rmdir|function\\.iconv/i", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ ) )
    {
        return TRUE;
    }
    $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQÿ = TRUE;
    $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ = str_replace( KSSROOTDIR, "", $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ );
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = str_replace( KSSROOTDIR, "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, "mysql_" ) !== FALSE )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = preg_replace( "/\\[.*\\]/", "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
    }
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = str_replace( ADMINFOLDER, "***", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
    $_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sÿ = array( "E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR", "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING", "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE", "E_STRICT", "E_RECOVERABLE_ERROR", "E_ALL" );
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sÿ[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ." in ".$_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ." on line ".$_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUÿ."</b>";
    if ( 1 < PHPERROUPUT )
    {
        $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ = KSSLOGDIR."err_log.php";
        if ( is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ ) )
        {
            if ( 1048576 < filesize( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ ) )
            {
                $_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ = "?";
                $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ.">\r\n";
                file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ, $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ.date( "Y-m-d H:i:s" )."\t".$_SERVER['PHP_SELF']."\r\n\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ."\r\n\r\n" );
            }
            else
            {
                file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ, date( "Y-m-d H:i:s" )."\t".$_SERVER['PHP_SELF']."\r\n\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ."\r\n\r\n", FILE_APPEND );
            }
        }
        else
        {
            $_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ = "?";
            $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ.">\r\n";
            file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ, $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ.date( "Y-m-d H:i:s" )."\t".$_SERVER['PHP_SELF']."\r\n\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ."\r\n\r\n" );
        }
    }
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    if ( PHPERROUPUT == 1 || PHPERROUPUT == 3 )
    {
        echo $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ;
    }
    exit( );
}

function _obfuscate_io_MiI6UjIyKkJOVk5GSjYoÿ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ = "index.php", $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIsÿ = 1 )
{
    global $_obfuscate_lYyNjpSKk5GRkJGKhoyLkpUÿ;
    $_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ = array( "501" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šé‡æ–°ç”³è¯·æ—¶ç³»åˆ—å·åº”ä¸ºYZå¼€å¤´ï¼", "502" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šæˆæƒéæ³•005ï¼", "503" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šæœåŠ¡å™¨æ—¥æœŸå°äºæˆæƒæ—¥æœŸï¼", "504" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šæˆæƒå·²åˆ°æœŸï¼", "505" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šæˆæƒä¸»æœºåæˆ–ç«¯å£å˜åŠ¨ï¼", "506" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šä¸»æœºç¯å¢ƒå˜åŠ¨é¡¹ç›®Nï¼", "507" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šä¸»æœºç¯å¢ƒå˜åŠ¨é¡¹ç›®Dï¼", "508" => "æœåŠ¡ç«¯éœ€è¦é‡æ–°ç™»è®°ï¼šæˆæƒä¸²è‡ªæ•ˆéªŒå¤±è´¥ï¼", "509" => "æœåŠ¡å™¨çš„æ—¥æœŸä¸æ­£ç¡®ï¼Œè¯·çº æ­£ï¼", "510" => "æœåŠ¡å™¨éœ€è¦å®‰è£…ç™»è®°æ‰å¯ä»¥ä½¿ç”¨ï¼", "511" => "æœåŠ¡ç«¯æºç å·²å®‰å…¨ç”Ÿå‘½å‘¨æœŸï¼Œè¯·æ›´æ–°ï¼" );
    if ( time( ) < strtotime( "2018-01-15 01:00:00" ) )
    {
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "index.php" )
        {
            return $_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ['509'];
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "xio.php" )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "509", $_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ['509'] );
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "api.php" )
        {
            if ( $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIsÿ == 1 )
            {
                exit( "crypteno509" );
            }
            exit( "kssdata".$_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ['509'] );
        }
    }
    if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "index.php" && strtotime( "2020-12-20 12:00:00" ) < time( ) )
    {
        $_obfuscate_iIyGk4aPkZONh4mMkoyIj4gÿ = "å·²æ­£å¼ç™»è®°æˆæƒã€ç‰ˆæœ¬ä½ã€‘";
    }
    $_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ = _obfuscate_kYiMkouMiZOGjIqNi4qLkIYÿ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ, $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIsÿ );
    if ( $_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ !== TRUE )
    {
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "index.php" )
        {
            return $_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ[$_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ];
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "xio.php" )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( $_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ, $_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ[$_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ] );
        }
        if ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ == "api.php" )
        {
            if ( $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIsÿ == 1 )
            {
                exit( "crypteno".$_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ );
            }
            exit( "kssdata".$_obfuscate_hpWHlJKLkYeUho2RjpGOkIsÿ[$_obfuscate_kIaPkI2TkI6VjomNkIiUi4kÿ] );
        }
    }
    return TRUE;
}

function _obfuscate_kYiMkouMiZOGjIqNi4qLkIYÿ( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ, $_obfuscate_kpSNk4eHj4uMh5KLk5KTkIsÿ )
{
    global $_obfuscate_iIyGk4aPkZONh4mMkoyIj4gÿ;
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ;
    global $_obfuscate_lYyNjpSKk5GRkJGKhoyLkpUÿ;
    $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4cÿ = "YIJ778l8P1yQyL5FiH7yFuiNAj2Hy3bnhYickZ88hxR9P5cUU4FIF7dZvs8m1PQF";
    $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZMÿ = "-----BEGIN PUBLIC KEY-----\r\nMFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAK9U7jWdSBvPBcwwzoO2btYFNB1zt6Wa\r\nd7ZHvvgT7BUrZr+eomtLkiduoXnpOEdSmA/bfg2Itd+2vMWvFLJjuM8CAwEAAQ==\r\n-----END PUBLIC KEY-----";
    $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0ÿ = PRV_SVRLIC;
    if ( strlen( $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0ÿ ) < 30 )
    {
        return "510";
    }
    $_obfuscate_k4qTi4eMlYaHk5WPjY_JiJAÿ = hexdec( substr( $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0ÿ, 1, 2 ) );
    $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4ÿ = substr( $_obfuscate_lI_Nj5KLjYqNhpGMkpKGiY0ÿ, 3 );
    $_obfuscate_jIyOkIyJiZOTkZGLj4qHko8ÿ = substr( $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4ÿ, 0, $_obfuscate_k4qTi4eMlYaHk5WPjY_JiJAÿ );
    $_obfuscate_kZWOkZWGhoqSjZCThouQlJQÿ = substr( $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4ÿ, $_obfuscate_k4qTi4eMlYaHk5WPjY_JiJAÿ );
    $_obfuscate_iZGPko6IkpGUiYiSi4aMipQÿ = crypt_rsa_ex( $_obfuscate_jIyOkIyJiZOTkZGLj4qHko8ÿ, $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZMÿ, "decrypt" );
    $_obfuscate_jI6LjY6KhoeIi4qRlZOUj5Eÿ = decode_rc4base64( $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4cÿ, $_obfuscate_kZWOkZWGhoqSjZCThouQlJQÿ );
    if ( substr( md5( $_obfuscate_jI6LjY6KhoeIi4qRlZOUj5Eÿ.$_obfuscate_j4_OlZWTlYmIi4iSi5CSk4cÿ ), 0, 16 ) != $_obfuscate_iZGPko6IkpGUiYiSi4aMipQÿ )
    {
        return "508";
    }
    $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ = explode( "â”›", $_obfuscate_jI6LjY6KhoeIi4qRlZOUj5Eÿ );
    if ( count( $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ ) != 7 )
    {
        return "502";
    }
    if ( time( ) < $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[1] )
    {
        return "503";
    }
    if ( $_SERVER['HTTP_HOST'] != $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[2] )
    {
        return "505";
    }
    if ( $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[0] != "6999" && $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ != $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[3] )
    {
        return "506";
    }
    if ( dirname( __FILE__ ) != $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[4] )
    {
        return "507";
    }
    if ( $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[1] + 86400 * $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[0] < time( ) )
    {
        return "504";
    }
    if ( 300 < $_obfuscate_kIaGkpKQi5KJi4uPiIyNlIcÿ[0] )
    {
        $_obfuscate_iIyGk4aPkZONh4mMkoyIj4gÿ = "å·²æ­£å¼ç™»è®°æˆæƒ";
        return TRUE;
    }
    $_obfuscate_iIyGk4aPkZONh4mMkoyIj4gÿ = "å·²ä¸´æ—¶ç™»è®°æˆæƒ";
    return TRUE;
}

function _obfuscate_jZKGhoeQk46KiJCHi5CLjpQÿ( )
{
    global $_obfuscate_iIyGk4aPkZONh4mMkoyIj4gÿ;
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ;
    $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4cÿ = "YIJ778l8P1yQyL5FiH7yFuiNAj2Hy3bnhYickZ88hxR9P5cUU4FIF7dZvs8m1PQF";
    $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZMÿ = "-----BEGIN PUBLIC KEY-----\r\nMFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAK9U7jWdSBvPBcwwzoO2btYFNB1zt6Wa\r\nd7ZHvvgT7BUrZr+eomtLkiduoXnpOEdSmA/bfg2Itd+2vMWvFLJjuM8CAwEAAQ==\r\n-----END PUBLIC KEY-----";
    $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ = "0";
    if ( "/" == DIRECTORY_SEPARATOR )
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ = $_SERVER['SERVER_ADDR'];
    }
    else
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ = @gethostbyname( @$_SERVER['SERVER_NAME'] );
    }
    $_obfuscate_iIqHj4mRjIuMkZWIi5SRkIoÿ = time( )."â”›".$_SERVER['HTTP_HOST']."â”›".$_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ."â”›".dirname( __FILE__ )."â”›".WEBLIC."â”›".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ;
    $_obfuscate_iIuVjJCHkY2LjIyOkpCOjooÿ = substr( md5( $_obfuscate_iIqHj4mRjIuMkZWIi5SRkIoÿ.$_obfuscate_j4_OlZWTlYmIi4iSi5CSk4cÿ ), 0, 16 );
    $_obfuscate_lI6PiouVj4qKioaHlZKNi4Yÿ = encode_rc4base64( $_obfuscate_j4_OlZWTlYmIi4iSi5CSk4cÿ, $_obfuscate_iIqHj4mRjIuMkZWIi5SRkIoÿ );
    $_obfuscate_jYmTjYyJlYmQiZSNiI_MkI8ÿ = crypt_rsa_ex( $_obfuscate_iIuVjJCHkY2LjIyOkpCOjooÿ, $_obfuscate_iYmSi4uGio2Hh4_Qio6HkZMÿ, "encrypt" );
    $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4ÿ = "Y".dechex( strlen( $_obfuscate_jYmTjYyJlYmQiZSNiI_MkI8ÿ ) ).$_obfuscate_jYmTjYyJlYmQiZSNiI_MkI8ÿ.$_obfuscate_lI6PiouVj4qKioaHlZKNi4Yÿ;
    return $_obfuscate_kJOTiIaNkY6Uh5CUho2Tho4ÿ;
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
$_obfuscate_iY6Gi4qJipOUiImLlY2Rj48ÿ = FALSE;
$_obfuscate_iIyGk4aPkZONh4mMkoyIj4gÿ = "è¿˜æœªç™»è®°";
$_obfuscate_lYyNjpSKk5GRkJGKhoyLkpUÿ = "";
define( "YH2", chr( 34 ) );
define( "YH1", chr( 39 ) );
define( "PETIME", 2110000000 );
$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ = array( 9 => "ç®¡ç†å‘˜", 8 => "ä½œè€…", 7 => "æ€»ä»£ç†", 6 => "ä»£ç†" );
$_obfuscate_kpCRkIyMhouRk4yGiY_Sk48ÿ = array( "a1" => 0.05, "b1" => 0.03, "7" => 0.4, "30" => 1 );
define( "KSSROOTDIR", str_ireplace( "kss_inc", "", dirname( __FILE__ ) ) );
define( "KSSINCDIR", dirname( __FILE__ ).DIRECTORY_SEPARATOR );
define( "KSSLOGDIR", KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR );
$_obfuscate_houUipCMk4uPlYyUh4ePkoYÿ = array( "blank.htm" => array( "52" => "7dc67e623a3d995af5466bf9a667ca6c", "53" => "7dc67e623a3d995af5466bf9a667ca6c" ) );
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
$_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ = "notfind";
if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "php_uname" ) )
{
    $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ = php_uname( );
}
else
{
    $_obfuscate_iI2OjZWQioqOko2KiZOOkJEÿ = array( "admin_homepage.php", "api.php", "admin_lic.php", "admin_soft.php", "io.php", "rpc.php" );
    $_obfuscate_kYqNk4aKh46RiI2LlYyKjJMÿ = substr( $_SERVER['SCRIPT_NAME'], strripos( $_SERVER['SCRIPT_NAME'], "/" ) + 1 );
    if ( in_array( $_obfuscate_kYqNk4aKh46RiI2LlYyKjJMÿ, $_obfuscate_iI2OjZWQioqOko2KiZOOkJEÿ ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "phpinfo" ) )
    {
        phpinfo( );
        $_obfuscate_iJSSk42LkI_PiIuHiY2VlYcÿ = ob_get_contents( );
        ob_end_clean( );
        $_obfuscate_iZKGiouHjYaMlIaNio_IkIgÿ = stripos( $_obfuscate_iJSSk42LkI_PiIuHiY2VlYcÿ, "system" );
        $_obfuscate_jYeUkIePioeOjYeNlJWPkJQÿ = substr( $_obfuscate_iJSSk42LkI_PiIuHiY2VlYcÿ, $_obfuscate_iZKGiouHjYaMlIaNio_IkIgÿ + 15, 200 );
        $_obfuscate_iJSSk42LkI_PiIuHiY2VlYcÿ = "";
        $_obfuscate_k4_LlIuPi4uPkYuOk4mSlIgÿ = stripos( $_obfuscate_jYeUkIePioeOjYeNlJWPkJQÿ, ">" );
        $_obfuscate_kJONhpSJjJKPjJSSkZCVkI8ÿ = stripos( $_obfuscate_jYeUkIePioeOjYeNlJWPkJQÿ, "<" );
        $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ = trim( substr( $_obfuscate_jYeUkIePioeOjYeNlJWPkJQÿ, $_obfuscate_k4_LlIuPi4uPkYuOk4mSlIgÿ + 1, $_obfuscate_kJONhpSJjJKPjJSSkZCVkI8ÿ - $_obfuscate_k4_LlIuPi4uPkYuOk4mSlIgÿ - 1 ) );
    }
}
$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ = _obfuscate_iIuRj5CUkIuHi4mPkY2Vio0ÿ( 1 );
$_obfuscate_iZGLlYiTk42PlJOHh4aJkokÿ = array( );
if ( SVRID == 1 )
{
    $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ = array( "dbhost" => MYSQL1HostNameOrIp, "dbuser" => MYSQL1UserName, "dbpass" => MYSQL1Password, "dbname" => MYSQL1DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 0 );
    $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ = array( "dbhost" => MYSQL2HostNameOrIp, "dbuser" => MYSQL2UserName, "dbpass" => MYSQL2Password, "dbname" => MYSQL2DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 1 );
}
else
{
    $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ = array( "dbhost" => MYSQL2HostNameOrIp, "dbuser" => MYSQL2UserName, "dbpass" => MYSQL2Password, "dbname" => MYSQL2DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 0 );
    $_obfuscate_kJCSj4qIjZCUjZSQlYuKi4sÿ = array( "dbhost" => MYSQL1HostNameOrIp, "dbuser" => MYSQL1UserName, "dbpass" => MYSQL1Password, "dbname" => MYSQL1DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 1 );
}
?>
