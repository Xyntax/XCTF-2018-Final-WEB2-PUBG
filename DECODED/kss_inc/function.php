<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIuGlJGNkJOSj4_JkIeJk4g�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_k42GhouUh5SVj4uSlYqRlYg�( $_obfuscate_hpGUh5GQi5KPlYaThpOMiIk� = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_jI6Lho6UhomJio_IhoaQkJA� = "?";
    if ( $_obfuscate_hpGUh5GQi5KPlYaThpOMiIk� == 0 )
    {
        $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "SELECT kss_tb_manager.id as manager_id,kss_tb_manager.maxusernum as manager_maxusernum,kss_tb_manager.islock as manager_islock,kss_tb_manager.endtime as manager_endtime,kss_tb_soft . * FROM kss_tb_manager LEFT JOIN kss_tb_soft ON kss_tb_manager.pid = kss_tb_soft.pid WHERE kss_tb_manager.level >7" );
        _obfuscate_lIiIjYmLiJCMjZSJjIeJiZI�( KSSINCDIR."cache" );
        _obfuscate_lIiIjYmLiJCMjZSJjIeJiZI�( KSSINCDIR."advapi" );
    }
    else
    {
        $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "SELECT kss_tb_manager.id as manager_id,kss_tb_manager.maxusernum as manager_maxusernum,kss_tb_manager.islock AS manager_islock, kss_tb_manager.endtime AS manager_endtime, kss_tb_soft. * FROM kss_tb_manager RIGHT JOIN kss_tb_soft ON kss_tb_manager.pid = kss_tb_soft.pid WHERE kss_tb_manager.level>7 and kss_tb_soft.id =".$_obfuscate_hpGUh5GQi5KPlYaThpOMiIk� );
        foreach ( $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']." set endtime=starttime+86400*cday where endtime<2110000000", "notsync" );
        }
    }
    $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = "Ax0x0x0x0x0x0x0x0x0x0x0A_GT";
    $_obfuscate_k5GHkoiPi4eQi4yQjoqPiJI� = array_search( "Ax0x0x0x0x0x0x0x0x0x0x0A_GT", get_defined_vars( ), TRUE );
    if ( empty( $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0� ) )
    {
        if ( is_dir( KSSINCDIR."cache" ) )
        {
            @mkdir( @KSSINCDIR."cache", "0777" );
        }
        foreach ( $_obfuscate_i4uVj4uLjIyVkpORlYiHlY0� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            $_obfuscate_kouPjI2Jj46NhpSOjpCLkYY� = "<".$_obfuscate_jI6Lho6UhomJio_IhoaQkJA�."php defined('YH2') or exit('Access denied to view this page!');\r\ndefine('SOFTRSAMODE',".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rsaenable']."); define('SOFTRSAEKEY','".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rsaekey']."');  define('SOFTRSANKEY','".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rsankey']."');\r\n".$_obfuscate_jI6Lho6UhomJio_IhoaQkJA�.">";
            file_put_contents( KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softcode'].".php", $_obfuscate_kouPjI2Jj46NhpSOjpCLkYY� );
            $_obfuscate_kouUjYyRjYaSk5SThpKIj5Q� = "<".$_obfuscate_jI6Lho6UhomJio_IhoaQkJA�."php defined('YH2') or exit('Access denied to view this page!');\r\n".base64_decode( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['advapi'] )."\r\n".$_obfuscate_jI6Lho6UhomJio_IhoaQkJA�.">";
            file_put_contents( KSSINCDIR."advapi".DIRECTORY_SEPARATOR.$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'].".php", $_obfuscate_kouUjYyRjYaSk5SThpKIj5Q� );
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['advapi'] = 0;
            $_obfuscate_iY6VkZSKlImOkpOUjIqVkok� = "";
            foreach ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
            {
                if ( _obfuscate_i46Ti46MkZCVkYaOkYmVi4w�( $_obfuscate_io6UjZWThpOSjYeOj46Qkow� ) )
                {
                    $_obfuscate_iY6VkZSKlImOkpOUjIqVkok� .= "'".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�."' => ".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�.",\n";
                }
                else
                {
                    if ( $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� == "mac_blacklist" )
                    {
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkow� = str_replace( "\r", "", $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkow� = str_replace( "\n", ",", $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkow� = str_replace( ",,", ",", $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
                        $_obfuscate_io6UjZWThpOSjYeOj46Qkow� = str_replace( ",,", ",", $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
                    }
                    $_obfuscate_iY6VkZSKlImOkpOUjIqVkok� .= "'".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�."' => '".mysql_real_escape_string( $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )."',\n";
                }
            }
            $_obfuscate_iY6VkZSKlImOkpOUjIqVkok� = trim( chop( $_obfuscate_iY6VkZSKlImOkpOUjIqVkok� ), "," );
            $_obfuscate_kouUjYyRjYaSk5SThpKIj5Q� = "<".$_obfuscate_jI6Lho6UhomJio_IhoaQkJA�."php\n".chr( 36 ).$_obfuscate_k5GHkoiPi4eQi4yQjoqPiJI�."=array(\n".$_obfuscate_iY6VkZSKlImOkpOUjIqVkok�."\n);\n".$_obfuscate_jI6Lho6UhomJio_IhoaQkJA�.">";
            $_obfuscate_jouMkI6Ii42Mh5WGiouIiIk� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softcode'];
            if ( strlen( $_obfuscate_jouMkI6Ii42Mh5WGiouIiIk� ) == 7 )
            {
                $_obfuscate_jouMkI6Ii42Mh5WGiouIiIk� = substr( $_obfuscate_jouMkI6Ii42Mh5WGiouIiIk�, 0, 5 )."0".substr( $_obfuscate_jouMkI6Ii42Mh5WGiouIiIk�, 5, 2 );
            }
            file_put_contents( KSSINCDIR."cache".DIRECTORY_SEPARATOR."soft_".$_obfuscate_jouMkI6Ii42Mh5WGiouIiIk�.".php", $_obfuscate_kouUjYyRjYaSk5SThpKIj5Q� );
        }
    }
}

function _obfuscate_lIiIjYmLiJCMjZSJjIeJiZI�( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�, $_obfuscate_i4yQjouVlJGIkJKHiJWHiJI� = FALSE )
{
    $_obfuscate_jZOPlIuQk5STi4yRkouSk44� = DIRECTORY_SEPARATOR;
    $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� = $_obfuscate_i4yQjouVlJGIkJKHiJWHiJI� ? realpath( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� ) : $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�;
    $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� = substr( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�, -1 ) == $_obfuscate_jZOPlIuQk5STi4yRkouSk44� ? substr( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�, 0, -1 ) : $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�;
    if ( is_dir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� ) && ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� = opendir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� ) ) )
    {
        while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = readdir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� ) )
        {
            if ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� == "." )
            {
            }
            else
            {
                continue;
            }
            if ( is_dir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�.$_obfuscate_jZOPlIuQk5STi4yRkouSk44�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� ) )
            {
                _obfuscate_lIiIjYmLiJCMjZSJjIeJiZI�( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�.$_obfuscate_jZOPlIuQk5STi4yRkouSk44�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� );
                unlink( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�.$_obfuscate_jZOPlIuQk5STi4yRkouSk44�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� );
            }
            closedir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� );
            return TRUE;
        }
        return FALSE;
    }

function _obfuscate_i4eMlI6RipSKiJGLh4uOk5E�( $_obfuscate_h5OLiZCQipSGh46SjpOIhoo�, $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpU� )
{
    $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpU� = md5( $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpU� );
    $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIY� = 0;
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = "";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < strlen( $_obfuscate_h5OLiZCQipSGh46SjpOIhoo� ); ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIY� = $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIY� == strlen( $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpU� ) ? 0 : $_obfuscate_i4yGjYmUk4aLkIiSlYqOjIY�;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� .= $_obfuscate_h5OLiZCQipSGh46SjpOIhoo�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] ^ $_obfuscate_kYqJhoaHlZGQjY2QkYiNjpU�[$_obfuscate_i4yGjYmUk4aLkIiSlYqOjIY�++];
    }
    return $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
}

function _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )
{
    setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�, 0, "/", NULL, NULL, TRUE );
    if ( BINDIP == 1 )
    {
        setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�."_ver", md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�.COOKKEY._obfuscate_jZKKjpCGkZSUj4aOiIePlZI�( ) ), 0, "/", NULL, NULL, TRUE );
    }
    else
    {
        setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�."_ver", md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�.COOKKEY ), 0, "/", NULL, NULL, TRUE );
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�.COOKKEY;
}

function _obfuscate_kpONlI6UkY_HkouLk4yIk4s�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48� = 0 )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, "c", "sql", "" );
    $_obfuscate_koiTk4aQk5OVjZGHho6Hk4o� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�."_ver", "c", "sql", "" );
    if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� == "" || $_obfuscate_koiTk4aQk5OVjZGHho6Hk4o� == "" )
    {
        if ( $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48� == 1 )
        {
            return "";
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未登陆,<a href=index.php>请重新登陆</a>！" );
    }
    if ( BINDIP == 1 )
    {
        if ( $_obfuscate_koiTk4aQk5OVjZGHho6Hk4o� != md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�.COOKKEY._obfuscate_jZKKjpCGkZSUj4aOiIePlZI�( ) ) )
        {
            if ( $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48� == 1 )
            {
                return "";
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "非法操作(cookies),<a href='index.php' target='_top'>请重新登陆</a>" );
            return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�;
        }
    }
    if ( $_obfuscate_koiTk4aQk5OVjZGHho6Hk4o� != md5( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�.COOKKEY ) )
    {
        if ( $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48� == 1 )
        {
            return "";
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "非法操作(cookies),<a href='index.php' target='_top'>请重新登陆</a>" );
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�;
}

function _obfuscate_k5OSjY_Rh4_HkYiOko6QhpM�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_jI6IlJOSjIeOh5KOkYyRk48� = 0 )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = "";
    if ( isset( $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
    }
    else
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = "";
    }
    if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� != "" )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = _obfuscate_jZORjImLjIeVj5WUiI2Lk4w�( COOKKEY2, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�, "decode" );
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�;
}

function _obfuscate_lI2NjoyHh4mLlYqJjJSQlYg�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )
{
    if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� != "" )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = _obfuscate_jZORjImLjIeVj5WUiI2Lk4w�( COOKKEY2, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�, "encode" );
    }
    setcookie( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�, time( ) + 2592000, "/", NULL, NULL, TRUE );
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�;
}

function _obfuscate_jZKKjpCGkZSUj4aOiIePlZI�( )
{
    $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = "";
    if ( filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE ) )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = $_SERVER['REMOTE_ADDR'];
    }
    else if ( isset( $_SERVER['HTTP_CLIENT_IP'] ) && $_SERVER['HTTP_CLIENT_IP'] != "" )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = $_SERVER['HTTP_X_FORWARDED_FOR'];
        if ( strpos( $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM�, "," ) !== FALSE )
        {
            $_obfuscate_jpKKko6OkZGKjoiLjpCNlI0� = explode( ",", $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� );
            $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = end( &$_obfuscate_jpKKko6OkZGKjoiLjpCNlI0� );
        }
    }
    if ( $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� != "" )
    {
        return $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM�;
    }
    return "0.0.0.0";
}

function _obfuscate_k4_UjouVjoeQkpKOkIaIkZI�( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU�, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU� = 32 )
{
    if ( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU� == "" )
    {
        return "";
    }
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU� = md5( COOKKEY."10000000000".$_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU� );
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU� = substr( $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU�, 0, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU� );
    return $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU�;
}

function _obfuscate_kY2KkZSVh5KLkIqRiI6KjIY�( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU�, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU� = 32 )
{
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU� = md5( MD5KEY.chr( 102 ).chr( 104 ).chr( 117 ).chr( 111 ).chr( 121 ).chr( 117 ).chr( 110 ).$_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU� );
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU� = substr( $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU�, 0, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU� );
    return $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU�;
}

function _obfuscate_jYaRkYmQjo2KjZGOi4qOkY0�( $_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU�, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU� = 32 )
{
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU� = md5( MD5KEY."signdatasoftkey".$_obfuscate_lYuNhoeVjYmSj4iOlIqMjZU� );
    $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU� = substr( $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU�, 0, $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU� );
    return $_obfuscate_jIyLi5GOkouRjpGHkYmNiJU�;
}

function _obfuscate_kpOMkpCVi46VlYaSi5KPh44�( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� )
{
    if ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� == "" )
    {
        return "";
    }
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = base64_encode( gzcompress( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� ) );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = strtr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, "+/=", "|_!" );
    return $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�;
}

function _obfuscate_h4iTkpCKlYeHkZWPh5CIhpA�( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c�, $_obfuscate_kYeOjpKGlJWMjouQkomIj5E� = "GBK", $_obfuscate_jYyLiIiLhomJko6HkIyRkoc� = "utf-8" )
{
    $_obfuscate_lY6SjoiTkoqJiIyVlJWHkpA� = "";
    if ( $_obfuscate_jYyLiIiLhomJko6HkIyRkoc� == "nocodeconv" || $_obfuscate_kYeOjpKGlJWMjouQkomIj5E� == "nocodeconv" )
    {
        return $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c�;
    }
    if ( function_exists( "mb_convert_encoding" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = mb_convert_encoding( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c�, $_obfuscate_jYyLiIiLhomJko6HkIyRkoc�, $_obfuscate_kYeOjpKGlJWMjouQkomIj5E� );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE�;
    }
    if ( function_exists( "iconv" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = iconv( $_obfuscate_kYeOjpKGlJWMjouQkomIj5E�, $_obfuscate_jYyLiIiLhomJko6HkIyRkoc�."//IGNORE", $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c� );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE�;
    }
    exit( "sorry, you have no libs support for charset change." );
}

function _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( )
{
    $_obfuscate_iIyGi4mRkYmVjZCHio_Lj4s� = "http://".$_SERVER['HTTP_HOST'];
    return $_obfuscate_iIyGi4mRkYmVjZCHio_Lj4s�;
}

function _obfuscate_h4mPjIiTlYmGiouJk42Ph4w�( )
{
    $_obfuscate_kYqMiJOHk5WSjI_Ok5GGio8� = !function_exists( "memory_get_usage" ) ? "0" : round( memory_get_usage( ) / 1024 / 1024, 2 )."MB";
    return $_obfuscate_kYqMiJOHk5WSjI_Ok5GGio8�;
}

function _obfuscate_iYaQlIaRjYiMlIeGkJGGhpA�( )
{
    return intval( time( ) / 86400 - 15000 );
}

function _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( )
{
    if ( SVRID != 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "备服禁止此操作！" );
    }
}

function _obfuscate_lYyMjpSLiZSVkpSLjJGMkYw�( $_obfuscate_kIyQjIuPlJGQhoqMk4uTiog� )
{
    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "usleep" ) )
    {
        usleep( $_obfuscate_kIyQjIuPlJGQhoqMk4uTiog� * 1000 );
    }
    else
    {
        $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8� = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
        while ( ( _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( ) - $_obfuscate_kZGIi4yVio2Nh5CNkJOHiY8� ) * 1000 < $_obfuscate_kIyQjIuPlJGQhoqMk4uTiog� )
        {
            _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 100 );
        }
    }
}

function _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU� )
{
    if ( function_exists( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU� ) )
    {
        return FALSE;
    }
    $_obfuscate_jI_UiZKTi4uUkI6NlYqHiYs� = ini_get( "safe_mode" );
    $_obfuscate_iY_LiYiQkomRjI6PjoiPjI4� = array( "set_time_limit" );
    $_obfuscate_homViZSMjJWJkoaQkIuSlI4� = ini_get( "disable_functions" );
    $_obfuscate_homViZSMjJWJkoaQkIuSlI4� = str_replace( " ", "", $_obfuscate_homViZSMjJWJkoaQkIuSlI4� );
    if ( empty( $_obfuscate_homViZSMjJWJkoaQkIuSlI4� ) )
    {
        $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� = explode( ",", $_obfuscate_homViZSMjJWJkoaQkIuSlI4� );
        if ( in_array( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU�, $_obfuscate_k4mMjZOVkpCRipSKlI2OiYg� ) )
        {
            return FALSE;
        }
    }
    if ( !empty( $_obfuscate_jI_UiZKTi4uUkI6NlYqHiYs� ) && in_array( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU�, $_obfuscate_iY_LiYiQkomRjI6PjoiPjI4� ) )
    {
        return FALSE;
    }
    return TRUE;
}

function _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( )
{
    list( $_obfuscate_kI6RjomJk4aRlZGMjI_Si4w�, $_obfuscate_i4uOiIqMlYeHk4eUhoiPh4Y� ) = explode( " ", microtime( ) );
    return ( double ) + ( double );
}

function _obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )
{
    $_obfuscate_jpGTk4aTlZCKjpOSkpCNj44� = count( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� );
    $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44� = 0;
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < $_obfuscate_jpGTk4aTlZCKjpOSkpCNj44�; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2 )
    {
        $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44� = $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44� + $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] - $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�];
    }
    return round( $_obfuscate_iJGIlZOLhoaSh4mPjIqOj44� * 1000, 3 );
}

function _obfuscate_kIuUko_Mh42UkZSHjZSQiZI�( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� )
{
    if ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� == "" )
    {
        return "";
    }
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = strtr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, "|_!", "+/=" );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = gzuncompress( base64_decode( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� ) );
    return $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�;
}

function _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5I�( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�, $_obfuscate_ipOUiI2LiYiKlJKKjomQh4o� )
{
    if ( ini_get( "safe_mode" ) )
    {
        $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0� = dir( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40� );
        $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array( );
        while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0�->read( ) )
        {
            if ( !is_file( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� ) || !( pathinfo( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�, PATHINFO_EXTENSION ) == $_obfuscate_ipOUiI2LiYiKlJKKjomQh4o� ) )
            {
                $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c�[] = $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�;
            }
        }
        $_obfuscate_jZCHlIqNkJSSiYaQk4eVko0�->close( );
        return $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c�;
    }
    return glob( $_obfuscate_j4uTjpCNho6Kh4qGh4eLi40�."*.".$_obfuscate_ipOUiI2LiYiKlJKKjomQh4o� );
}

function _obfuscate_hpGJi4yHlIqLhpSIh4iJlYw�( )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = ADMINFOLDER;
    if ( is_file( KSSROOTDIR.$_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�.DIRECTORY_SEPARATOR."z_datawin.php" ) )
    {
        $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIg� = substr( KSSROOTDIR, 0, strlen( KSSROOTDIR ) - 1 );
        $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� = @opendir( $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIg� );
        if ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� !== FALSE )
        {
            do
            {
                while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = readdir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� ) )
                {
                    if ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� == "." )
                    {
                    }
                    else
                    {
                    }
                }
            } while ( !is_dir( $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIg�.DIRECTORY_SEPARATOR.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� ) || !is_file( $_obfuscate_lYiOi5KHk4uIiIaMk5CMkIg�.DIRECTORY_SEPARATOR.$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�.DIRECTORY_SEPARATOR."z_datawin.php" ) );
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�;
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = @file_get_contents( @KSSINCDIR."_config.php" );
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = preg_replace( "/define\\('ADMINFOLDER','[^']*'\\)/i", "define('ADMINFOLDER','".$_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�."')", $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� );
            @file_put_contents( @KSSINCDIR."_config.php", $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� );
            closedir( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� );
        }
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function _obfuscate_jY_QjpOPk46MkoqNlZCQiJU�( $_obfuscate_jY6MlYuNjIiIj4uKkJKOjZQ� = "K" )
{
    list( $_obfuscate_lZKQjYaMioqRkY2GjIyIiYg�, $_obfuscate_kZKGjYeUiY6VhoaGi5CUkZE� ) = explode( " ", microtime( ) );
    return $_obfuscate_jY6MlYuNjIiIj4uKkJKOjZQ�.substr( date( "ymdHis" ), 1 ).substr( $_obfuscate_lZKQjYaMioqRkY2GjIyIiYg�, 2, 6 )._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 6 );
}

function _obfuscate_hoaMjI_TjpOThpKLi5WVjYo�( $_obfuscate_kY2VkYmHjYaLhpKTiJKHioo�, $_obfuscate_lYeSkIeGiYmPiZKGlIyVlIo� = 1 )
{
    $_obfuscate_komNlJORioqPkZWTlJSVk4w� = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk� = "";
    do
    {
        $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk� = $_obfuscate_komNlJORioqPkZWTlJSVk4w�[$_obfuscate_kY2VkYmHjYaLhpKTiJKHioo� % 52].$_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk�;
        $_obfuscate_kY2VkYmHjYaLhpKTiJKHioo� = intval( $_obfuscate_kY2VkYmHjYaLhpKTiJKHioo� / 52 );
    } while ( $_obfuscate_kY2VkYmHjYaLhpKTiJKHioo� != 0 );
    $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 5 - strlen( $_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk� ), 1 ).$_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk�;
    if ( $_obfuscate_lYeSkIeGiYmPiZKGlIyVlIo� == 1 )
    {
        $_obfuscate_k4uRh4uLkIaSjIySkZOUkY8� = chr( mt_rand( 65, 90 ) );
    }
    else
    {
        $_obfuscate_k4uRh4uLkIaSjIySkZOUkY8� = chr( mt_rand( 97, 122 ) );
    }
    $_obfuscate_homRh5WGiYaRkpOKhpKVjoY� = array( );
    $_obfuscate_homRh5WGiYaRkpOKhpKVjoY�[] = $_obfuscate_k4uRh4uLkIaSjIySkZOUkY8�.$_obfuscate_lZCGkY_HkY_SiI2NkIqKjYk�;
    $_obfuscate_homRh5WGiYaRkpOKhpKVjoY�[] = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 22 );
    return $_obfuscate_homRh5WGiYaRkpOKhpKVjoY�;
}

function _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU�, $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQ� = 0 )
{
    $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = "";
    $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� = 0;
    for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� < $_obfuscate_kYeHjY_HkpWUipWIkYeMjJU�; ++$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� )
    {
        if ( defined( "KEYAZ" ) )
        {
            $_obfuscate_jpKNkoqNiZKGlZWLipKNiJI� = mt_rand( 0, 1 );
            if ( $_obfuscate_jpKNkoqNiZKGlZWLipKNiJI� == 1 )
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� .= chr( mt_rand( 65, 90 ) );
            }
            else
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� .= chr( mt_rand( 97, 122 ) );
            }
        }
        else if ( $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQ� == 1 )
        {
            $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� .= mt_rand( 0, 9 );
        }
        else
        {
            $_obfuscate_jpKNkoqNiZKGlZWLipKNiJI� = mt_rand( 0, 2 );
            if ( $_obfuscate_jpKNkoqNiZKGlZWLipKNiJI� == 0 )
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� .= mt_rand( 0, 9 );
            }
            else if ( $_obfuscate_jpKNkoqNiZKGlZWLipKNiJI� == 1 )
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� .= chr( mt_rand( 65, 90 ) );
            }
            else
            {
                $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� .= chr( mt_rand( 97, 122 ) );
            }
        }
    }
    $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = strtr( $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE�, "eEoO0", "iIpP8" );
    $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = str_ireplace( "char", "Dhar", $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� );
    return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE�;
}

function _obfuscate_h4uGi5CNhpOUiZCKiYyOhpA�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )
{
    if ( preg_match( "/^(\\d{4,4})-(\\d{2,2})-(\\d{2,2}) (\\d{2,2}):(\\d{2,2}):(\\d{2,2})$/", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) && strlen( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) == 19 )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_hpCTj4mKj5WSkpWPjouJkoc� = 0, $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g� = "Y-m-d H:i:s" )
{
    if ( $_obfuscate_hpCTj4mKj5WSkpWPjouJkoc� == 0 )
    {
        return date( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g� );
    }
    return date( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g�, $_obfuscate_hpCTj4mKj5WSkpWPjouJkoc� );
}

function _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )
{
    $_obfuscate_hpSPhpKRjpGTio2UjYaMlY0� = unpack( "C*", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    foreach ( $_obfuscate_hpSPhpKRjpGTio2UjYaMlY0� as $_obfuscate_lZGKh5OTlI6OkomMkIeRj4g� )
    {
        if ( !( $_obfuscate_lZGKh5OTlI6OkomMkIeRj4g� < 48 ) && !( 57 < $_obfuscate_lZGKh5OTlI6OkomMkIeRj4g� ) || !( $_obfuscate_lZGKh5OTlI6OkomMkIeRj4g� != 45 ) )
        {
            return FALSE;
            break;
        }
    }
    return TRUE;
}

function _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = htmlspecialchars_decode( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = str_replace( "<", "&lt;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = str_replace( ">", "&gt;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = str_replace( YH2, "&#34;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = str_replace( "'", "&#39;", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�;
}

function _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�, $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQ�, $_obfuscate_i5CJkYuGjYuKiI2LjYuUlYg� = "sql", $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s� = "0" )
{
    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = "";
    switch ( strtoupper( $_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQ� ) )
    {
        case "GP" :
            if ( isset( $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                break;
            }
            else
            {
                if ( isset( $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                    break;
                }
                else
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                    break;
                }
            }
        case "PG" :
            if ( isset( $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                break;
            }
            else
            {
                if ( isset( $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                    break;
                }
                else
                {
                    $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                    break;
                }
            }
        case "G" :
            if ( isset( $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_GET[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                break;
            }
            else
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                break;
            }
        case "P" :
            if ( isset( $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_POST[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                break;
            }
            else
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                break;
            }
        case "C" :
            if ( isset( $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�] ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_COOKIE[$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�];
                break;
            }
            else
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                break;
            }
        default :
            $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�;
    }
    if ( is_array( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = implode( ",", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    }
    if ( get_magic_quotes_gpc( ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = stripslashes( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
    }
    switch ( strtolower( $_obfuscate_i5CJkYuGjYuKiI2LjYuUlYg� ) )
    {
        case "sqljs" :
            if ( preg_match( "/s\\s*c\\s*r\\s*i\\s*p\\s*t|<.*?>|select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\/\\*|'/i", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) )
            {
                ob_clean( );
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = preg_replace( "/(s\\s*c\\s*r\\s*i\\s*p\\s*t|<.*?>|select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\*|')/i", "<font color=red>$1</font>", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "信息部份有禁止使用的字符串".$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�.",".$_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
                break;
            }
        case "sql" :
            if ( preg_match( "/select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\/\\*|'/i", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) )
            {
                ob_clean( );
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = preg_replace( "/(select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\*|')/i", "<font color=red>$1</font>", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� );
                exit( "<p>MySQL injection:".$_obfuscate_lIyOioeNkY6Vj4qPkJGMiJQ�.",".$_obfuscate_iYyTho_HlJCOh4yRj4ePj4k�.",".$_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�."</p>" );
            }
        case "int" :
            if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                break;
            }
        case "num" :
            if ( _obfuscate_i46Ti46MkZCVkYaOkYmVi4w�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
                break;
            }
        case "time" :
            if ( _obfuscate_h4uGi5CNhpOUiZCKiYyOhpA�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� ) )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = $_obfuscate_koiTi5CIio6Qho_Qh5GOi4s�;
            }
            if ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� == "0" )
            {
                $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = "2000-01-01 00:00:00";
            }
    }
    return $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�;
}

function _obfuscate_i46Ti46MkZCVkYaOkYmVi4w�( $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� )
{
    if ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� == "" )
    {
        return FALSE;
    }
    if ( preg_match( "/^-{0,1}[0-9]*[\\.]{0,1}[0-9]*$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4k�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_iIuRj5CUkIuHi4mPkY2Vio0�( $_obfuscate_i4uIiouJjZGHlJWTlJSLipA� = 0 )
{
    if ( empty( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� ) )
    {
        if ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipA� == 0 )
        {
            return $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI�;
        }
        return $_obfuscate_koeHlJCLj4mLiYmRhpWUj5I�;
    }
    $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� = user_ext_getip( );
    if ( 7 < strlen( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� ) )
    {
        if ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipA� == 1 )
        {
            $_obfuscate_koeHlJCLj4mLiYmRhpWUj5I� = bindec( decbin( ip2long( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� ) ) );
            return $_obfuscate_koeHlJCLj4mLiYmRhpWUj5I�;
        }
        return $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI�;
    }
    $_obfuscate_lZKSjIqVh4iKjYiTiJCVlJU� = isset( $_SERVER['HTTP_CLIENT_IP'] ) && $_SERVER['HTTP_CLIENT_IP'] != "" ? $_SERVER['HTTP_CLIENT_IP'] : FALSE;
    $_obfuscate_komJlIiMioyGkZWNkpCVh44� = isset( $_SERVER['REMOTE_ADDR'] ) && $_SERVER['REMOTE_ADDR'] != "" ? $_SERVER['REMOTE_ADDR'] : FALSE;
    $_obfuscate_k5CMh46Ri4iTlY_Vj4uJk40� = isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && $_SERVER['HTTP_X_FORWARDED_FOR'] != "" ? $_SERVER['HTTP_X_FORWARDED_FOR'] : FALSE;
    $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = FALSE;
    if ( $_obfuscate_lZKSjIqVh4iKjYiTiJCVlJU� )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = $_obfuscate_lZKSjIqVh4iKjYiTiJCVlJU�;
    }
    if ( $_obfuscate_k5CMh46Ri4iTlY_Vj4uJk40� )
    {
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = $_obfuscate_k5CMh46Ri4iTlY_Vj4uJk40�;
    }
    if ( strpos( $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM�, "," ) !== FALSE )
    {
        $_obfuscate_jpKKko6OkZGKjoiLjpCNlI0� = explode( ",", $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� );
        $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� = end( &$_obfuscate_jpKKko6OkZGKjoiLjpCNlI0� );
    }
    $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� = $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� ? $_obfuscate_kIaUkJSThoyUi4yVkIuOkZM� : $_SERVER['REMOTE_ADDR'];
    if ( preg_match( "/^[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}$/", $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� ) )
    {
        $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� = "0.0.0.0";
    }
    if ( $_obfuscate_i4uIiouJjZGHlJWTlJSLipA� == 1 )
    {
        $_obfuscate_koeHlJCLj4mLiYmRhpWUj5I� = bindec( decbin( ip2long( $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI� ) ) );
        return $_obfuscate_koeHlJCLj4mLiYmRhpWUj5I�;
    }
    return $_obfuscate_jY_KhpWMlYuJkpGIi4uRjpI�;
}

function _obfuscate_kpCOhomRj5CHh5SLjZKIi4Y�( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM�, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
{
    preg_match_all( "/./us", $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM�, $_obfuscate_i4eRk5OHhpONhpWMjpCRlZI� );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "";
    foreach ( $_obfuscate_i4eRk5OHhpONhpWMjpCRlZI�[0] as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
    {
        if ( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
        {
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�;
        }
    }
    if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < count( $_obfuscate_i4eRk5OHhpONhpWMjpCRlZI�[0] ) )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "…";
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function _obfuscate_ioeJkYuOkIeLk4eLjJKSlYs�( &$_obfuscate_jIiQlIiOi5OIkJOLipSVhoc�, $_obfuscate_lIiOkpGGhpSVlYmRjIeUiZE� )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIiQlIiOi5OIkJOLipSVhoc�;
    $_obfuscate_jIiQlIiOi5OIkJOLipSVhoc� = chr( 123 ).chr( 158 ).mt_rand( );
    $_obfuscate_iZCGk4uKkImIjoaQipGLioc� = array_search( $_obfuscate_jIiQlIiOi5OIkJOLipSVhoc�, get_defined_vars( ), TRUE );
    if ( $_obfuscate_iZCGk4uKkImIjoaQipGLioc� != $_obfuscate_lIiOkpGGhpSVlYmRjIeUiZE� )
    {
        file_put_contents( "/kss_api/db.log", "DBCONFIGNAME  --  ".$_obfuscate_iZCGk4uKkImIjoaQipGLioc�."\r\n\r\n\r\n", FILE_APPEND );
    }
    if ( $_obfuscate_iZCGk4uKkImIjoaQipGLioc� != $_obfuscate_lIiOkpGGhpSVlYmRjIeUiZE� && mt_rand( 1, 3 ) != 2 )
    {
        $_obfuscate_jIiQlIiOi5OIkJOLipSVhoc� = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
    }
}

function _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM� = NULL )
{
    preg_match_all( "/./us", $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM�, $_obfuscate_i4eRk5OHhpONhpWMjpCRlZI� );
    return count( $_obfuscate_i4eRk5OHhpONhpWMjpCRlZI�[0] );
}

function _obfuscate_hpSOjImTiIuPiJKUjoaKjpA�( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c�, $_obfuscate_kYeOjpKGlJWMjouQkomIj5E� = "GBK", $_obfuscate_jYyLiIiLhomJko6HkIyRkoc� = "utf-8" )
{
    $_obfuscate_lY6SjoiTkoqJiIyVlJWHkpA� = "";
    if ( function_exists( "mb_convert_encoding" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = mb_convert_encoding( $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c�, $_obfuscate_jYyLiIiLhomJko6HkIyRkoc�, $_obfuscate_kYeOjpKGlJWMjouQkomIj5E� );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE�;
    }
    if ( function_exists( "iconv" ) )
    {
        $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE� = iconv( $_obfuscate_kYeOjpKGlJWMjouQkomIj5E�, $_obfuscate_jYyLiIiLhomJko6HkIyRkoc�, $_obfuscate_iYmKi4mIjIyJkY_Sk5CGk4c� );
        return $_obfuscate_k5SUjIqNi4yIi5KMjpCKjJE�;
    }
    exit( "sorry, you have no libs support for charset change." );
}

function _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kZGJho2VkZWGkZWJkYyHjoY�, $_obfuscate_jI6Sko6Si5GPiIqJjpWMkoo� = 0, $_obfuscate_kpOOiZSJkYqHh4uThpOKjos� = "" )
{
    global $_obfuscate_iY6Gi4qJipOUiImLlY2Rj48�;
    if ( empty( $_obfuscate_iY6Gi4qJipOUiImLlY2Rj48� ) )
    {
        ob_clean( );
    }
    $_obfuscate_lIiKi4mHiYaPj5OGkJKJkIo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "isajax", "pg", "int", 0 );
    if ( $_obfuscate_lIiKi4mHiYaPj5OGkJKJkIo� == 0 )
    {
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html>\r\n<head>\r\n<title>MsgBox</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo INSTALLPATH;
        echo "kss_inc/style/admin_style.css\">\r\n</head>\r\n<body>\r\n<div id=\"errbox\">&nbsp;";
        echo $_obfuscate_kZGJho2VkZWGkZWJkYyHjoY�."<br><br>";
        if ( $_obfuscate_jI6Sko6Si5GPiIqJjpWMkoo� == 1 )
        {
            echo "<p align=center><input type='button' class='submitbtn' value='返回' onclick='history.go(-1)'></p>";
        }
        echo "</div>\r\n</body>\r\n</html>";
        exit( );
    }
    exit( $_obfuscate_kZGJho2VkZWGkZWJkYyHjoY� );
}

function _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�, $_obfuscate_iouGh4aRkYmSioiOlImUio4�, $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4k� = 25 )
{
    if ( !_obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) || !_obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
    {
        return "curlerr:php not curl";
    }
    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
    {
        return "curlerr:curl_exec disable";
    }
    $_obfuscate_joiNh4aIhouViZGQho_JiI4� = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_RETURNTRANSFER, 1 );
    if ( empty( $_obfuscate_iouGh4aRkYmSioiOlImUio4� ) )
    {
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = "";
        foreach ( $_obfuscate_iouGh4aRkYmSioiOlImUio4� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."&";
        }
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� .= "nowtime=".time( );
        curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POST, 1 );
        curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POSTFIELDS, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� );
    }
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_TIMEOUT, $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4k� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4� ) )
    {
        $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� = curl_error( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        if ( $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4k� == 1 && stripos( $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�, "peration timed out after" ) )
        {
            return "sendok";
        }
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = "curlerr:".$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�;
        return $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g�;
    }
    curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    return $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g�;
}

function _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_kouViYyOlJWMkpSKkpGSlJE�, $_obfuscate_lY_TjZOSjouUj5SUj42Hjow� )
{
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� = KSSLOGDIR."query_errlog.php";
    if ( !is_file( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� ) || 262144 < filesize( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� ) )
    {
        $_obfuscate_ipWMho2NlI2MiI_MioeTlZI� = "?";
        $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI� = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�.">\r\n";
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE�, @$_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI�.$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�."\r\n file:".@basename( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� )."\tline:".$_obfuscate_lY_TjZOSjouUj5SUj42Hjow�."\terr:".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE�, @$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�."\r\n file:".@basename( $_obfuscate_kouViYyOlJWMkpSKkpGSlJE� )."\tline:".$_obfuscate_lY_TjZOSjouUj5SUj42Hjow�."\terr:".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�."\r\n\r\n", @FILE_APPEND );
    }
}

function _obfuscate_jZORjImLjIeVj5WUiI2Lk4w�( $_obfuscate_k4uOiIuPjpWSlYmOk5CMhoo�, $_obfuscate_lIyUkIaVk46LiZCNipOIkJA�, $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g� )
{
    if ( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g� == "decode" )
    {
        $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� = base64_decode( $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� );
    }
    $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�[] = "";
    $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[] = "";
    $_obfuscate_lI6GkY6IjYyRk5OPiIeUj5A� = strlen( $_obfuscate_k4uOiIuPjpWSlYmOk5CMhoo� );
    $_obfuscate_k42VlIuTipSPkI6HlYaRi4g� = strlen( $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 256; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] = ord( $_obfuscate_k4uOiIuPjpWSlYmOk5CMhoo�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� % $_obfuscate_lI6GkY6IjYyRk5OPiIeUj5A�] );
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�;
    }
    $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 256; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = ( $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� + $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] + $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] ) % 256;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
    }
    $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48� = "";
    $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A� = $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < $_obfuscate_k42VlIuTipSPkI6HlYaRi4g�; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A� = ( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A� + 1 ) % 256;
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = ( $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� + $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�] ) % 256;
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�] = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�];
        $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
        $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� = $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[( $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_iJSNjIuPjoqSjYyUiIyIi5A�] + $_obfuscate_iI_MjYmLiomOiZGTkJOPk5A�[$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�] ) % 256];
        $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48� .= chr( ord( $_obfuscate_lIyUkIaVk46LiZCNipOIkJA�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] ) ^ $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� );
    }
    if ( $_obfuscate_h4ySh4aGiY6QlZKUh42Jh4g� == "encode" )
    {
        $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48� = base64_encode( $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48� );
    }
    return $_obfuscate_iI6MiZSQhpGSjYyIlJCIi48�;
}

require( KSSINCDIR."ext_ip.php" );
$_obfuscate_i4yQhoyIkoiSkJONjImJjZM� = "dbconfig";
_obfuscate_ioeJkYuOkIeLk4eLjJKSlYs�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�, $_obfuscate_i4yQhoyIkoiSkJONjImJjZM� );
?>
