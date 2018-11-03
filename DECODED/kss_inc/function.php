<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIuGlJGNkJOSj4_JkIeJk4gÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_k42GhouUh5SVj4uSlYqRlYgÿ( $_obfuscate_hpGUh5GQi5KPlYaThpOMiIkÿ = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ = "?";
    if ( $_obfuscate_hpGUh5GQi5KPlYaThpOMiIkÿ == 0 )
    {
        $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "SELECT kss_tb_manager.id as manager_id,kss_tb_manager.maxusernum as manager_maxusernum,kss_tb_manager.islock as manager_islock,kss_tb_manager.endtime as manager_endtime,kss_tb_soft . * FROM kss_tb_manager LEFT JOIN kss_tb_soft ON kss_tb_manager.pid = kss_tb_soft.pid WHERE kss_tb_manager.level >7" );
        _obfuscate_lIiIjYmLiJCMjZSJjIeJiZIÿ( KSSINCDIR."cache" );
        _obfuscate_lIiIjYmLiJCMjZSJjIeJiZIÿ( KSSINCDIR."advapi" );
    }
    else
    {
        $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "SELECT kss_tb_manager.id as manager_id,kss_tb_manager.maxusernum as manager_maxusernum,kss_tb_manager.islock AS manager_islock, kss_tb_manager.endtime AS manager_endtime, kss_tb_soft. * FROM kss_tb_manager RIGHT JOIN kss_tb_soft ON kss_tb_manager.pid = kss_tb_soft.pid WHERE kss_tb_manager.level>7 and kss_tb_soft.id =".$_obfuscate_hpGUh5GQi5KPlYaThpOMiIkÿ );
        foreach ( $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "update kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']." set endtime=starttime+86400*cday where endtime<2110000000", "notsync" );
        }
    }
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = "Ax0x0x0x0x0x0x0x0x0x0x0A_GT";
    $_obfuscate_k5GHkoiPi4eQi4yQjoqPiJIÿ = array_search( "Ax0x0x0x0x0x0x0x0x0x0x0A_GT", get_defined_vars( ), TRUE );
    if ( empty( $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0ÿ ) )
    {
        if ( is_dir( KSSINCDIR."cache" ) )
        {
            @mkdir( @KSSINCDIR."cache", "0777" );
        }
        foreach ( $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_kouPjI2Jj46NhpSOjpCLkYYÿ = "<".$_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ."php defined('YH2') or exit('Access denied to view this page!');\r\ndefine('SOFTRSAMODE',".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['rsaenable']."); define('SOFTRSAEKEY','".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['rsaekey']."');  define('SOFTRSANKEY','".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['rsankey']."');\r\n".$_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ.">";
            file_put_contents( KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softcode'].".php", $_obfuscate_kouPjI2Jj46NhpSOjpCLkYYÿ );
            $_obfuscate_kouUjYyRjYaSk5SThpKIj5Qÿ = "<".$_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ."php defined('YH2') or exit('Access denied to view this page!');\r\n".base64_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['advapi'] )."\r\n".$_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ.">";
            file_put_contents( KSSINCDIR."advapi".DIRECTORY_SEPARATOR.$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'].".php", $_obfuscate_kouUjYyRjYaSk5SThpKIj5Qÿ );
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['advapi'] = 0;
            $_obfuscate_iY6VkZSKlImOkpOUjIqVkokÿ = "";
            foreach ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
            {
                if ( _obfuscate_i46Ti46MkZCVkYaOkYmVi4wÿ( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ ) )
                {
                    $_obfuscate_iY6VkZSKlImOkpOUjIqVkokÿ .= "'".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ."' => ".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ.",\n";
                }
                else
                {
                    if ( $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ == "mac_blacklist" )
                    {
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ = str_replace( "\r", "", $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ );
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ = str_replace( "\n", ",", $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ );
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ = str_replace( ",,", ",", $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ );
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ = str_replace( ",,", ",", $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ );
                    }
                    $_obfuscate_iY6VkZSKlImOkpOUjIqVkokÿ .= "'".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ."' => '".mysql_real_escape_string( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )."',\n";
                }
            }
            $_obfuscate_iY6VkZSKlImOkpOUjIqVkokÿ = trim( chop( $_obfuscate_iY6VkZSKlImOkpOUjIqVkokÿ ), "," );
            $_obfuscate_kouUjYyRjYaSk5SThpKIj5Qÿ = "<".$_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ."php\n".chr( 36 ).$_obfuscate_k5GHkoiPi4eQi4yQjoqPiJIÿ."=array(\n".$_obfuscate_iY6VkZSKlImOkpOUjIqVkokÿ."\n);\n".$_obfuscate_jI6Lho6UhomJio_IhoaQkJAÿ.">";
            $_obfuscate_jouMkI6Ii42Mh5WGiouIiIkÿ = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softcode'];
            if ( strlen( $_obfuscate_jouMkI6Ii42Mh5WGiouIiIkÿ ) == 7 )
            {
                $_obfuscate_jouMkI6Ii42Mh5WGiouIiIkÿ = substr( $_obfuscate_jouMkI6Ii42Mh5WGiouIiIkÿ, 0, 5 )."0".substr( $_obfuscate_jouMkI6Ii42Mh5WGiouIiIkÿ, 5, 2 );
            }
            file_put_contents( KSSINCDIR."cache".DIRECTORY_SEPARATOR."soft_".$_obfuscate_jouMkI6Ii42Mh5WGiouIiIkÿ.".php", $_obfuscate_kouUjYyRjYaSk5SThpKIj5Qÿ );
        }
    }
}

function _obfuscate_lIiIjYmLiJCMjZSJjIeJiZIÿ( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ, $_obfuscate_i4yQjouVlJGIkJKHiJWHiJIÿ = FALSE )
{
    $_obfuscate_jZOPlIuQk5STi4yRkouSk44ÿ = DIRECTORY_SEPARATOR;
    $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ = $_obfuscate_i4yQjouVlJGIkJKHiJWHiJIÿ ? realpath( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ ) : $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ;
    $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ = substr( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ, -1 ) == $_obfuscate_jZOPlIuQk5STi4yRkouSk44ÿ ? substr( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ, 0, -1 ) : $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ;
    if ( is_dir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ ) && ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ = opendir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ ) ) )
    {
        while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ = readdir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ ) )
        {
            if ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ == "." )
            {
            }
            else
            {
                continue;
            }
            if ( is_dir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ.$_obfuscate_jZOPlIuQk5STi4yRkouSk44ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ ) )
            {
                _obfuscate_lIiIjYmLiJCMjZSJjIeJiZIÿ( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ.$_obfuscate_jZOPlIuQk5STi4yRkouSk44ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ );
                unlink( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQÿ.$_obfuscate_jZOPlIuQk5STi4yRkouSk44ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ );
            }
            closedir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ );
            return TRUE;
        }
        return FALSE;
    }

function _obfuscate_i4eMlI6RipSKiJGLh4uOk5Eÿ( $_obfuscate_h5OLiZCQipSGh46SjpOIhooÿ, $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpUÿ )
{
    $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpUÿ = md5( $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpUÿ );
    $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIYÿ = 0;
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = "";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < strlen( $_obfuscate_h5OLiZCQipSGh46SjpOIhooÿ ); ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
    {
        $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIYÿ = $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIYÿ == strlen( $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpUÿ ) ? 0 : $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIYÿ;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ .= $_obfuscate_h5OLiZCQipSGh46SjpOIhooÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] ^ $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpUÿ[$_obfuscate_i4yGjYmUk4aLkIiSlYqOjIYÿ++];
    }
    return $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
}

function _obfuscate_jZKVlY6HkYmKkIyRj4qSjIcÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ )
{
    setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ, 0, "/", NULL, NULL, TRUE );
    if ( BINDIP == 1 )
    {
        setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ."_ver", md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ.COOKKEY._obfuscate_jZKKjpCGkZSUj4aOiIePlZIÿ( ) ), 0, "/", NULL, NULL, TRUE );
    }
    else
    {
        setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ."_ver", md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ.COOKKEY ), 0, "/", NULL, NULL, TRUE );
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ.COOKKEY;
}

function _obfuscate_kpONlI6UkY_HkouLk4yIk4sÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48ÿ = 0 )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, "c", "sql", "" );
    $_obfuscate_koiTk4aQk5OVjZGHho6Hk4oÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ."_ver", "c", "sql", "" );
    if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ == "" || $_obfuscate_koiTk4aQk5OVjZGHho6Hk4oÿ == "" )
    {
        if ( $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48ÿ == 1 )
        {
            return "";
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªç™»é™†,<a href=index.php>è¯·é‡æ–°ç™»é™†</a>ï¼" );
    }
    if ( BINDIP == 1 )
    {
        if ( $_obfuscate_koiTk4aQk5OVjZGHho6Hk4oÿ != md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ.COOKKEY._obfuscate_jZKKjpCGkZSUj4aOiIePlZIÿ( ) ) )
        {
            if ( $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48ÿ == 1 )
            {
                return "";
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "éæ³•æ“ä½œ(cookies),<a href='index.php' target='_top'>è¯·é‡æ–°ç™»é™†</a>" );
            return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ;
        }
    }
    if ( $_obfuscate_koiTk4aQk5OVjZGHho6Hk4oÿ != md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ.COOKKEY ) )
    {
        if ( $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48ÿ == 1 )
        {
            return "";
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "éæ³•æ“ä½œ(cookies),<a href='index.php' target='_top'>è¯·é‡æ–°ç™»é™†</a>" );
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ;
}

function _obfuscate_k5OSjY_Rh4_HkYiOko6QhpMÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48ÿ = 0 )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = "";
    if ( isset( $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
    }
    else
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = "";
    }
    if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ != "" )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = _obfuscate_jZORjImLjIeVj5WUiI2Lk4wÿ( COOKKEY2, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ, "decode" );
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ;
}

function _obfuscate_lI2NjoyHh4mLlYqJjJSQlYgÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ )
{
    if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ != "" )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = _obfuscate_jZORjImLjIeVj5WUiI2Lk4wÿ( COOKKEY2, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ, "encode" );
    }
    setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ, time( ) + 2592000, "/", NULL, NULL, TRUE );
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ;
}

function _obfuscate_jZKKjpCGkZSUj4aOiIePlZIÿ( )
{
    $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = "";
    if ( filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE ) )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = $_SERVER['REMOTE_ADDR'];
    }
    else if ( isset( $_SERVER['HTTP_CLIENT_IP'] ) && $_SERVER['HTTP_CLIENT_IP'] != "" )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = $_SERVER['HTTP_X_FORWARDED_FOR'];
        if ( strpos( $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ, "," ) !== FALSE )
        {
            $_obfuscate_jpKKko6OkZGKjoiLjpCNlI0ÿ = explode( ",", $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ );
            $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = end( &$_obfuscate_jpKKko6OkZGKjoiLjpCNlI0ÿ );
        }
    }
    if ( $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ != "" )
    {
        return $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ;
    }
    return "0.0.0.0";
}

function _obfuscate_k4_UjouVjoeQkpKOkIaIkZIÿ( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ = 32 )
{
    if ( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ == "" )
    {
        return "";
    }
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ = md5( COOKKEY."10000000000".$_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ );
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ = substr( $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ, 0, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ );
    return $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ;
}

function _obfuscate_kY2KkZSVh5KLkIqRiI6KjIYÿ( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ = 32 )
{
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ = md5( MD5KEY.chr( 102 ).chr( 104 ).chr( 117 ).chr( 111 ).chr( 121 ).chr( 117 ).chr( 110 ).$_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ );
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ = substr( $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ, 0, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ );
    return $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ;
}

function _obfuscate_jYaRkYmQjo2KjZGOi4qOkY0ÿ( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ = 32 )
{
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ = md5( MD5KEY."signdatasoftkey".$_obfuscate_lYuNhoeVjYmSj4iOlIqMjZUÿ );
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ = substr( $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ, 0, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ );
    return $_obfuscate_jIyLi5GOkouRjpGHkYmNiJUÿ;
}

function _obfuscate_kpOMkpCVi46VlYaSi5KPh44ÿ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ )
{
    if ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ == "" )
    {
        return "";
    }
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = base64_encode( gzcompress( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ ) );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = strtr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ, "+/=", "|_!" );
    return $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ;
}

function _obfuscate_h4iTkpCKlYeHkZWPh5CIhpAÿ( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ, $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ = "GBK", $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ = "utf-8" )
{
    $_obfuscate_lY6SjoiTkoqJiIyVlJWHkpAÿ = "";
    if ( $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ == "nocodeconv" || $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ == "nocodeconv" )
    {
        return $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ;
    }
    if ( function_exists( "mb_convert_encoding" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = mb_convert_encoding( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ, $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ, $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ;
    }
    if ( function_exists( "iconv" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = iconv( $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ, $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ."//IGNORE", $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ;
    }
    exit( "sorry, you have no libs support for charset change." );
}

function _obfuscate_ko_JjomRlIiQkYiRlZKSkZIÿ( )
{
    $_obfuscate_iIyGi4mRkYmVjZCHio_Lj4sÿ = "http://".$_SERVER['HTTP_HOST'];
    return $_obfuscate_iIyGi4mRkYmVjZCHio_Lj4sÿ;
}

function _obfuscate_h4mPjIiTlYmGiouJk42Ph4wÿ( )
{
    $_obfuscate_kYqMiJOHk5WSjI_Ok5GGio8ÿ = !function_exists( "memory_get_usage" ) ? "0" : round( memory_get_usage( ) / 1024 / 1024, 2 )."MB";
    return $_obfuscate_kYqMiJOHk5WSjI_Ok5GGio8ÿ;
}

function _obfuscate_iYaQlIaRjYiMlIeGkJGGhpAÿ( )
{
    return intval( time( ) / 86400 - 15000 );
}

function _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( )
{
    if ( SVRID != 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å¤‡æœç¦æ­¢æ­¤æ“ä½œï¼" );
    }
}

function _obfuscate_lYyMjpSLiZSVkpSLjJGMkYwÿ( $_obfuscate_kIyQjIuPlJGQhoqMk4uTiogÿ )
{
    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "usleep" ) )
    {
        usleep( $_obfuscate_kIyQjIuPlJGQhoqMk4uTiogÿ * 1000 );
    }
    else
    {
        $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8ÿ = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
        while ( ( _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( ) - $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8ÿ ) * 1000 < $_obfuscate_kIyQjIuPlJGQhoqMk4uTiogÿ )
        {
            _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 100 );
        }
    }
}

function _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ )
{
    if ( function_exists( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ ) )
    {
        return FALSE;
    }
    $_obfuscate_jI_UiZKTi4uUkI6NlYqHiYsÿ = ini_get( "safe_mode" );
    $_obfuscate_iY_LiYiQkomRjI6PjoiPjI4ÿ = array( "set_time_limit" );
    $_obfuscate_homViZSMjJWJkoaQkIuSlI4ÿ = ini_get( "disable_functions" );
    $_obfuscate_homViZSMjJWJkoaQkIuSlI4ÿ = str_replace( " ", "", $_obfuscate_homViZSMjJWJkoaQkIuSlI4ÿ );
    if ( empty( $_obfuscate_homViZSMjJWJkoaQkIuSlI4ÿ ) )
    {
        $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ = explode( ",", $_obfuscate_homViZSMjJWJkoaQkIuSlI4ÿ );
        if ( in_array( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ, $_obfuscate_k4mMjZOVkpCRipSKlI2OiYgÿ ) )
        {
            return FALSE;
        }
    }
    if ( !empty( $_obfuscate_jI_UiZKTi4uUkI6NlYqHiYsÿ ) && in_array( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ, $_obfuscate_iY_LiYiQkomRjI6PjoiPjI4ÿ ) )
    {
        return FALSE;
    }
    return TRUE;
}

function _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( )
{
    list( $_obfuscate_kI6RjomJk4aRlZGMjI_Si4wÿ, $_obfuscate_i4uOiIqMlYeHk4eUhoiPh4Yÿ ) = explode( " ", microtime( ) );
    return ( double ) + ( double );
}

function _obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )
{
    $_obfuscate_jpGTk4aTlZCKjpOSkpCNj44ÿ = count( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ );
    $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44ÿ = 0;
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < $_obfuscate_jpGTk4aTlZCKjpOSkpCNj44ÿ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2 )
    {
        $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44ÿ = $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44ÿ + $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] - $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ];
    }
    return round( $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44ÿ * 1000, 3 );
}

function _obfuscate_kIuUko_Mh42UkZSHjZSQiZIÿ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ )
{
    if ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ == "" )
    {
        return "";
    }
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = strtr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ, "|_!", "+/=" );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = gzuncompress( base64_decode( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ ) );
    return $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ;
}

function _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iÿ( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ, $_obfuscate_ipOUiI2LiYiKlJKKjomQh4oÿ )
{
    if ( ini_get( "safe_mode" ) )
    {
        $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0ÿ = dir( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ );
        $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ = array( );
        while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ = $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0ÿ->read( ) )
        {
            if ( !is_file( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ ) || !( pathinfo( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ, PATHINFO_EXTENSION ) == $_obfuscate_ipOUiI2LiYiKlJKKjomQh4oÿ ) )
            {
                $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ[] = $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ;
            }
        }
        $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0ÿ->close( );
        return $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ;
    }
    return glob( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40ÿ."*.".$_obfuscate_ipOUiI2LiYiKlJKKjomQh4oÿ );
}

function _obfuscate_hpGJi4yHlIqLhpSIh4iJlYwÿ( )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = ADMINFOLDER;
    if ( is_file( KSSROOTDIR.$_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ.DIRECTORY_SEPARATOR."z_datawin.php" ) )
    {
        $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIgÿ = substr( KSSROOTDIR, 0, strlen( KSSROOTDIR ) - 1 );
        $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ = @opendir( $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIgÿ );
        if ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ !== FALSE )
        {
            do
            {
                while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ = readdir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ ) )
                {
                    if ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ == "." )
                    {
                    }
                    else
                    {
                    }
                }
            } while ( !is_dir( $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIgÿ.DIRECTORY_SEPARATOR.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ ) || !is_file( $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIgÿ.DIRECTORY_SEPARATOR.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ.DIRECTORY_SEPARATOR."z_datawin.php" ) );
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ÿ;
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = @file_get_contents( @KSSINCDIR."_config.php" );
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = preg_replace( "/define\\('ADMINFOLDER','[^']*'\\)/i", "define('ADMINFOLDER','".$_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ."')", $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ );
            @file_put_contents( @KSSINCDIR."_config.php", $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ );
            closedir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkÿ );
        }
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function _obfuscate_jY_QjpOPk46MkoqNlZCQiJUÿ( $_obfuscate_jY6MlYuNjIiIj4uKkJKOjZQÿ = "K" )
{
    list( $_obfuscate_lZKQjYaMioqRkY2GjIyIiYgÿ, $_obfuscate_kZKGjYeUiY6VhoaGi5CUkZEÿ ) = explode( " ", microtime( ) );
    return $_obfuscate_jY6MlYuNjIiIj4uKkJKOjZQÿ.substr( date( "ymdHis" ), 1 ).substr( $_obfuscate_lZKQjYaMioqRkY2GjIyIiYgÿ, 2, 6 )._obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 6 );
}

function _obfuscate_hoaMjI_TjpOThpKLi5WVjYoÿ( $_obfuscate_kY2VkYmHjYaLhpKTiJKHiooÿ, $_obfuscate_lYeSkIeGiYmPiZKGlIyVlIoÿ = 1 )
{
    $_obfuscate_komNlJORioqPkZWTlJSVk4wÿ = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ = "";
    do
    {
        $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ = $_obfuscate_komNlJORioqPkZWTlJSVk4wÿ[$_obfuscate_kY2VkYmHjYaLhpKTiJKHiooÿ % 52].$_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ;
        $_obfuscate_kY2VkYmHjYaLhpKTiJKHiooÿ = intval( $_obfuscate_kY2VkYmHjYaLhpKTiJKHiooÿ / 52 );
    } while ( $_obfuscate_kY2VkYmHjYaLhpKTiJKHiooÿ != 0 );
    $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ = _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 5 - strlen( $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ ), 1 ).$_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ;
    if ( $_obfuscate_lYeSkIeGiYmPiZKGlIyVlIoÿ == 1 )
    {
        $_obfuscate_k4uRh4uLkIaSjIySkZOUkY8ÿ = chr( mt_rand( 65, 90 ) );
    }
    else
    {
        $_obfuscate_k4uRh4uLkIaSjIySkZOUkY8ÿ = chr( mt_rand( 97, 122 ) );
    }
    $_obfuscate_homRh5WGiYaRkpOKhpKVjoYÿ = array( );
    $_obfuscate_homRh5WGiYaRkpOKhpKVjoYÿ[] = $_obfuscate_k4uRh4uLkIaSjIySkZOUkY8ÿ.$_obfuscate_lZCGkY_HkY_SiI2NkIqKjYkÿ;
    $_obfuscate_homRh5WGiYaRkpOKhpKVjoYÿ[] = _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 22 );
    return $_obfuscate_homRh5WGiYaRkpOKhpKVjoYÿ;
}

function _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ, $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQÿ = 0 )
{
    $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = "";
    $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ = 0;
    for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ < $_obfuscate_kYeHjY_HkpWUipWIkYeMjJUÿ; ++$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ )
    {
        if ( defined( "KEYAZ" ) )
        {
            $_obfuscate_jpKNkoqNiZKGlZWLipKNiJIÿ = mt_rand( 0, 1 );
            if ( $_obfuscate_jpKNkoqNiZKGlZWLipKNiJIÿ == 1 )
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ .= chr( mt_rand( 65, 90 ) );
            }
            else
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ .= chr( mt_rand( 97, 122 ) );
            }
        }
        else if ( $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQÿ == 1 )
        {
            $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ .= mt_rand( 0, 9 );
        }
        else
        {
            $_obfuscate_jpKNkoqNiZKGlZWLipKNiJIÿ = mt_rand( 0, 2 );
            if ( $_obfuscate_jpKNkoqNiZKGlZWLipKNiJIÿ == 0 )
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ .= mt_rand( 0, 9 );
            }
            else if ( $_obfuscate_jpKNkoqNiZKGlZWLipKNiJIÿ == 1 )
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ .= chr( mt_rand( 65, 90 ) );
            }
            else
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ .= chr( mt_rand( 97, 122 ) );
            }
        }
    }
    $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = strtr( $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ, "eEoO0", "iIpP8" );
    $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = str_ireplace( "char", "Dhar", $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ );
    return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ;
}

function _obfuscate_h4uGi5CNhpOUiZCKiYyOhpAÿ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ )
{
    if ( preg_match( "/^(\\d{4,4})-(\\d{2,2})-(\\d{2,2}) (\\d{2,2}):(\\d{2,2}):(\\d{2,2})$/", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) && strlen( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) == 19 )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ = 0, $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ = "Y-m-d H:i:s" )
{
    if ( $_obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ == 0 )
    {
        return date( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ );
    }
    return date( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ, $_obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ );
}

function _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ )
{
    $_obfuscate_hpSPhpKRjpGTio2UjYaMlY0ÿ = unpack( "C*", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    foreach ( $_obfuscate_hpSPhpKRjpGTio2UjYaMlY0ÿ as $_obfuscate_lZGKh5OTlI6OkomMkIeRj4gÿ )
    {
        if ( !( $_obfuscate_lZGKh5OTlI6OkomMkIeRj4gÿ < 48 ) && !( 57 < $_obfuscate_lZGKh5OTlI6OkomMkIeRj4gÿ ) || !( $_obfuscate_lZGKh5OTlI6OkomMkIeRj4gÿ != 45 ) )
        {
            return FALSE;
            break;
        }
    }
    return TRUE;
}

function _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = htmlspecialchars_decode( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = str_replace( "<", "&lt;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = str_replace( ">", "&gt;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = str_replace( YH2, "&#34;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = str_replace( "'", "&#39;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ;
}

function _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ, $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQÿ, $_obfuscate_i5CJkYuGjYuKiI2LjYuUlYgÿ = "sql", $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ = "0" )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = "";
    switch ( strtoupper( $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQÿ ) )
    {
        case "GP" :
            if ( isset( $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                break;
            }
            else
            {
                if ( isset( $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                    break;
                }
                else
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                    break;
                }
            }
        case "PG" :
            if ( isset( $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                break;
            }
            else
            {
                if ( isset( $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                    break;
                }
                else
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                    break;
                }
            }
        case "G" :
            if ( isset( $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                break;
            }
            else
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                break;
            }
        case "P" :
            if ( isset( $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                break;
            }
            else
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                break;
            }
        case "C" :
            if ( isset( $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ];
                break;
            }
            else
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                break;
            }
        default :
            $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ;
    }
    if ( is_array( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = implode( ",", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    }
    if ( get_magic_quotes_gpc( ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = stripslashes( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
    }
    switch ( strtolower( $_obfuscate_i5CJkYuGjYuKiI2LjYuUlYgÿ ) )
    {
        case "sqljs" :
            if ( preg_match( "/s\\s*c\\s*r\\s*i\\s*p\\s*t|<.*?>|select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\/\\*|'/i", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) )
            {
                ob_clean( );
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = preg_replace( "/(s\\s*c\\s*r\\s*i\\s*p\\s*t|<.*?>|select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\*|')/i", "<font color=red>$1</font>", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¿¡æ¯éƒ¨ä»½æœ‰ç¦æ­¢ä½¿ç”¨çš„å­—ç¬¦ä¸²".$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ.",".$_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
                break;
            }
        case "sql" :
            if ( preg_match( "/select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\/\\*|'/i", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) )
            {
                ob_clean( );
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = preg_replace( "/(select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\*|')/i", "<font color=red>$1</font>", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ );
                exit( "<p>MySQL injection:".$_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQÿ.",".$_obfuscate_iYyTho_HlJCOh4yRj4ePj4kÿ.",".$_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ."</p>" );
            }
        case "int" :
            if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                break;
            }
        case "num" :
            if ( _obfuscate_i46Ti46MkZCVkYaOkYmVi4wÿ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
                break;
            }
        case "time" :
            if ( _obfuscate_h4uGi5CNhpOUiZCKiYyOhpAÿ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4sÿ;
            }
            if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ == "0" )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ = "2000-01-01 00:00:00";
            }
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsÿ;
}

function _obfuscate_i46Ti46MkZCVkYaOkYmVi4wÿ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ )
{
    if ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ == "" )
    {
        return FALSE;
    }
    if ( preg_match( "/^-{0,1}[0-9]*[\\.]{0,1}[0-9]*$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocÿ ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_iIuRj5CUkIuHi4mPkY2Vio0ÿ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipAÿ = 0 )
{
    if ( empty( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ ) )
    {
        if ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipAÿ == 0 )
        {
            return $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ;
        }
        return $_obfuscate_koeHlJCLj4mLiYmRhpWUj5Iÿ;
    }
    $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ = user_ext_getip( );
    if ( 7 < strlen( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ ) )
    {
        if ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipAÿ == 1 )
        {
            $_obfuscate_koeHlJCLj4mLiYmRhpWUj5Iÿ = bindec( decbin( ip2long( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ ) ) );
            return $_obfuscate_koeHlJCLj4mLiYmRhpWUj5Iÿ;
        }
        return $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ;
    }
    $_obfuscate_lZKSjIqVh4iKjYiTiJCVlJUÿ = isset( $_SERVER['HTTP_CLIENT_IP'] ) && $_SERVER['HTTP_CLIENT_IP'] != "" ? $_SERVER['HTTP_CLIENT_IP'] : FALSE;
    $_obfuscate_komJlIiMioyGkZWNkpCVh44ÿ = isset( $_SERVER['REMOTE_ADDR'] ) && $_SERVER['REMOTE_ADDR'] != "" ? $_SERVER['REMOTE_ADDR'] : FALSE;
    $_obfuscate_k5CMh46Ri4iTlY_Vj4uJk40ÿ = isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && $_SERVER['HTTP_X_FORWARDED_FOR'] != "" ? $_SERVER['HTTP_X_FORWARDED_FOR'] : FALSE;
    $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = FALSE;
    if ( $_obfuscate_lZKSjIqVh4iKjYiTiJCVlJUÿ )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = $_obfuscate_lZKSjIqVh4iKjYiTiJCVlJUÿ;
    }
    if ( $_obfuscate_k5CMh46Ri4iTlY_Vj4uJk40ÿ )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = $_obfuscate_k5CMh46Ri4iTlY_Vj4uJk40ÿ;
    }
    if ( strpos( $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ, "," ) !== FALSE )
    {
        $_obfuscate_jpKKko6OkZGKjoiLjpCNlI0ÿ = explode( ",", $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ );
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ = end( &$_obfuscate_jpKKko6OkZGKjoiLjpCNlI0ÿ );
    }
    $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ = $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ ? $_obfuscate_kIaUkJSThoyUi4yVkIuOkZMÿ : $_SERVER['REMOTE_ADDR'];
    if ( preg_match( "/^[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}$/", $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ ) )
    {
        $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ = "0.0.0.0";
    }
    if ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipAÿ == 1 )
    {
        $_obfuscate_koeHlJCLj4mLiYmRhpWUj5Iÿ = bindec( decbin( ip2long( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ ) ) );
        return $_obfuscate_koeHlJCLj4mLiYmRhpWUj5Iÿ;
    }
    return $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpIÿ;
}

function _obfuscate_kpCOhomRj5CHh5SLjZKIi4Yÿ( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipMÿ, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
{
    preg_match_all( "/./us", $_obfuscate_jJWMiJWJjoyIkYmLjY6VipMÿ, $_obfuscate_i4eRk5OHhpONhpWMjpCRlZIÿ );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "";
    foreach ( $_obfuscate_i4eRk5OHhpONhpWMjpCRlZIÿ[0] as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
    {
        if ( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
        {
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ;
        }
    }
    if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < count( $_obfuscate_i4eRk5OHhpONhpWMjpCRlZIÿ[0] ) )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "â€¦";
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function _obfuscate_ioeJkYuOkIeLk4eLjJKSlYsÿ( &$_obfuscate_jIiQlIiOi5OIkJOLipSVhocÿ, $_obfuscate_lIiOkpGGhpSVlYmRjIeUiZEÿ )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIiQlIiOi5OIkJOLipSVhocÿ;
    $_obfuscate_jIiQlIiOi5OIkJOLipSVhocÿ = chr( 123 ).chr( 158 ).mt_rand( );
    $_obfuscate_iZCGk4uKkImIjoaQipGLiocÿ = array_search( $_obfuscate_jIiQlIiOi5OIkJOLipSVhocÿ, get_defined_vars( ), TRUE );
    if ( $_obfuscate_iZCGk4uKkImIjoaQipGLiocÿ != $_obfuscate_lIiOkpGGhpSVlYmRjIeUiZEÿ )
    {
        file_put_contents( "/kss_api/db.log", "DBCONFIGNAME  --  ".$_obfuscate_iZCGk4uKkImIjoaQipGLiocÿ."\r\n\r\n\r\n", FILE_APPEND );
    }
    if ( $_obfuscate_iZCGk4uKkImIjoaQipGLiocÿ != $_obfuscate_lIiOkpGGhpSVlYmRjIeUiZEÿ && mt_rand( 1, 3 ) != 2 )
    {
        $_obfuscate_jIiQlIiOi5OIkJOLipSVhocÿ = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
    }
}

function _obfuscate_ioqHi5WHiJKIkoeIhouHjYwÿ( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipMÿ = NULL )
{
    preg_match_all( "/./us", $_obfuscate_jJWMiJWJjoyIkYmLjY6VipMÿ, $_obfuscate_i4eRk5OHhpONhpWMjpCRlZIÿ );
    return count( $_obfuscate_i4eRk5OHhpONhpWMjpCRlZIÿ[0] );
}

function _obfuscate_hpSOjImTiIuPiJKUjoaKjpAÿ( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ, $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ = "GBK", $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ = "utf-8" )
{
    $_obfuscate_lY6SjoiTkoqJiIyVlJWHkpAÿ = "";
    if ( function_exists( "mb_convert_encoding" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = mb_convert_encoding( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ, $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ, $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ;
    }
    if ( function_exists( "iconv" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ = iconv( $_obfuscate_kYeOjpKGlJWMjouQkomIj5Eÿ, $_obfuscate_jYyLiIiLhomJko6HkIyRkocÿ, $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4cÿ );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJEÿ;
    }
    exit( "sorry, you have no libs support for charset change." );
}

function _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kZGJho2VkZWGkZWJkYyHjoYÿ, $_obfuscate_jI6Sko6Si5GPiIqJjpWMkooÿ = 0, $_obfuscate_kpOOiZSJkYqHh4uThpOKjosÿ = "" )
{
    global $_obfuscate_iY6Gi4qJipOUiImLlY2Rj48ÿ;
    if ( empty( $_obfuscate_iY6Gi4qJipOUiImLlY2Rj48ÿ ) )
    {
        ob_clean( );
    }
    $_obfuscate_lIiKi4mHiYaPj5OGkJKJkIoÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "isajax", "pg", "int", 0 );
    if ( $_obfuscate_lIiKi4mHiYaPj5OGkJKJkIoÿ == 0 )
    {
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html>\r\n<head>\r\n<title>MsgBox</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo INSTALLPATH;
        echo "kss_inc/style/admin_style.css\">\r\n</head>\r\n<body>\r\n<div id=\"errbox\">&nbsp;";
        echo $_obfuscate_kZGJho2VkZWGkZWJkYyHjoYÿ."<br><br>";
        if ( $_obfuscate_jI6Sko6Si5GPiIqJjpWMkooÿ == 1 )
        {
            echo "<p align=center><input type='button' class='submitbtn' value='è¿”å›' onclick='history.go(-1)'></p>";
        }
        echo "</div>\r\n</body>\r\n</html>";
        exit( );
    }
    exit( $_obfuscate_kZGJho2VkZWGkZWJkYyHjoYÿ );
}

function _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ, $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ, $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4kÿ = 25 )
{
    if ( !_obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_init" ) || !_obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_exec" ) )
    {
        return "curlerr:php not curl";
    }
    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_exec" ) )
    {
        return "curlerr:curl_exec disable";
    }
    $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_RETURNTRANSFER, 1 );
    if ( empty( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ ) )
    {
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ = "";
        foreach ( $_obfuscate_iouGh4aRkYmSioiOlImUio4ÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ."&";
        }
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ .= "nowtime=".time( );
        curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_POST, 1 );
        curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_POSTFIELDS, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocÿ );
    }
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_TIMEOUT, $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4kÿ );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gÿ = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ ) )
    {
        $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ = curl_error( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
        if ( $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4kÿ == 1 && stripos( $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ, "peration timed out after" ) )
        {
            return "sendok";
        }
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gÿ = "curlerr:".$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoYÿ;
        return $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gÿ;
    }
    curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
    return $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gÿ;
}

function _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ, $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ, $_obfuscate_lY_TjZOSjouUj5SUj42Hjowÿ )
{
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ = KSSLOGDIR."query_errlog.php";
    if ( !is_file( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ ) || 262144 < filesize( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ ) )
    {
        $_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ = "?";
        $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ.">\r\n";
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ, @$_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ.$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ."\r\n file:".@basename( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ )."\tline:".$_obfuscate_lY_TjZOSjouUj5SUj42Hjowÿ."\terr:".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ, @$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ."\r\n file:".@basename( $_obfuscate_kouViYyOlJWMkpSKkpGSlJEÿ )."\tline:".$_obfuscate_lY_TjZOSjouUj5SUj42Hjowÿ."\terr:".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ."\r\n\r\n", @FILE_APPEND );
    }
}

function _obfuscate_jZORjImLjIeVj5WUiI2Lk4wÿ( $_obfuscate_k4uOiIuPjpWSlYmOk5CMhooÿ, $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ, $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ )
{
    if ( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ == "decode" )
    {
        $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ = base64_decode( $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ );
    }
    $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ[] = "";
    $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[] = "";
    $_obfuscate_lI6GkY6IjYyRk5OPiIeUj5Aÿ = strlen( $_obfuscate_k4uOiIuPjpWSlYmOk5CMhooÿ );
    $_obfuscate_k42VlIuTipSPkI6HlYaRi4gÿ = strlen( $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 256; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
    {
        $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] = ord( $_obfuscate_k4uOiIuPjpWSlYmOk5CMhooÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ % $_obfuscate_lI6GkY6IjYyRk5OPiIeUj5Aÿ] );
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ;
    }
    $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 256; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
    {
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = ( $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ + $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] + $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] ) % 256;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
    }
    $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48ÿ = "";
    $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ = $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < $_obfuscate_k42VlIuTipSPkI6HlYaRi4gÿ; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
    {
        $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ = ( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ + 1 ) % 256;
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = ( $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ + $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ] ) % 256;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ] = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
        $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[( $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ] + $_obfuscate_iI_MjYmLiomOiZGTkJOPk5Aÿ[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ] ) % 256];
        $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48ÿ .= chr( ord( $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] ) ^ $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ );
    }
    if ( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4gÿ == "encode" )
    {
        $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48ÿ = base64_encode( $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48ÿ );
    }
    return $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48ÿ;
}

require( KSSINCDIR."ext_ip.php" );
$_obfuscate_i4yQhoyIkoiSkJONjImJjZMÿ = "dbconfig";
_obfuscate_ioeJkYuOkIeLk4eLjJKSlYsÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ, $_obfuscate_i4yQhoyIkoiSkJONjImJjZMÿ );
?>
