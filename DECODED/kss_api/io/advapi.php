<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j4_IiouMj4qMkYqNhoyIjoo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function api_set( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo�, $_obfuscate_iYyKk4eTjYuQlIqLiZWHkok� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    global $_obfuscate_kpOMjo6Mh4yUk42Uh4mNh4s�;
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    $_obfuscate_jI6OlImSkJKVjImHkIaUipA� = array( "锁" => "islock", "锁定" => "islock", "标签" => "tag", "备注" => "intro", "天数" => "cday", "点数" => "points", "开始时间" => "starttime", "到期时间" => "endtime", "附属性" => "keyextattr", "付属性" => "keyextattr", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo" );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = FALSE;
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo�, $_obfuscate_jI6OlImSkJKVjImHkIaUipA� ) )
    {
        return "par1err";
    }
    $_obfuscate_iJGJjY2NkYqSkoqMho6Tio0� = mysql_real_escape_string( $_obfuscate_iYyKk4eTjYuQlIqLiZWHkok� );
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo� )
    {
        case "锁" :
        case "锁定" :
        case "标签" :
        case "备注" :
        case "天数" :
        case "开始时间" :
        case "到期时间" :
        case "点数" :
        case "附属性" :
        case "付属性" :
            $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipA�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0�."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' ", "sync" );
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY�;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        case "机器码" :
        case "私有数据" :
        case "绑定信息" :
            if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] == 1 )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipA�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0�."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."'", "sync" );
            }
            else
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "UPDATE `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipA�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0�."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' and `clientid`=".$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['clientid'], "sync" );
            }
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYY�;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = FALSE;
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function api_get( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE� = array( "当前IP" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�, "用户名" => "username", "锁" => "islock", "锁定" => "islock", "登陆密码" => "password", "用户密码" => "password", "安全密码" => "password2", "标签" => "tag", "登陆次数" => "activetimes", "备注" => "intro", "天数" => "cday", "点数" => "points", "附属性" => "keyextattr", "付属性" => "keyextattr", "开始时间戮" => "starttime", "开始时间" => "starttime", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo", "上一次IP" => "lastip" );
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo�, $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE� ) )
    {
        return "par1err";
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "";
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJioo� )
    {
        case "当前IP" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        case "用户名" :
        case "锁" :
        case "锁定" :
        case "登陆密码" :
        case "用户密码" :
        case "安全密码" :
        case "标签" :
        case "登陆次数" :
        case "备注" :
        case "天数" :
        case "点数" :
        case "附属性" :
        case "付属性" :
        case "开始时间戮" :
        case "开始时间" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        case "机器码" :
        case "私有数据" :
        case "绑定信息" :
        case "上一次IP" :
            if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]];
                return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpE�[$_obfuscate_h42RjJWNj5CGkYyGjpCJioo�]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "par1err";
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function api_points( &$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�, $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�, $_obfuscate_jYaTjpCOhpGOhoaJjpGKjpE� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    $_obfuscate_jomPk5WKioeLipGGi4_PhpM� = time( );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� < 0 )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "要扣的点数小于0";
        return FALSE;
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'] < $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "用户点数不够扣";
        return FALSE;
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_sql_points where guid='".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpE�."' and `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' and tbname='".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."' and svrid=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - 180 )." limit 0,1" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "本次未扣点，可能是重复扣点操作";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'];
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']( "update kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']." set `points`=`points`-".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�." where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
    {
        if ( SVRID == 2 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",'".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."','".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."',".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�.",'".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpE�."',".SVRID.")", "notsync" );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "扣点成功";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'] - $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
    }
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "执行扣点SQL失败";
    return FALSE;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 10 );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password']."' " );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    exit( "crypteno300" );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
{
    exit( "crypteno301" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� )
{
    exit( "crypteno302" );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] != "1" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['ischangesvr'] != 1 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] != PETIME )
{
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] == 1 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
        {
            exit( "crypteno305" );
        }
    }
    $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] );
    if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� ) )
    {
        exit( "crypteno304" );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" && $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
    {
        exit( "crypteno305" );
    }
}
$_obfuscate_lIeKioqNiYaOlIyQjouSlY8� = KSSINCDIR."advapi".DIRECTORY_SEPARATOR.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].".php";
if ( is_file( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� ) )
{
    include( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� );
}
else
{
    exit( "crypteno306" );
}
$_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE� = explode( ",", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['cmd'] );
$_obfuscate_kpWTkImVh4yUiZGLlIuPiIk� = $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[0];
if ( substr( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�, 0, 2 ) != "v_" )
{
    exit( "crypteno307" );
}
if ( function_exists( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk� ) )
{
    exit( "crypteno308" );
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['advapi'] = "";
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softintro'] = "";
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softnotice'] = "";
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['updatelog'] = "";
$_obfuscate_jYmJi42Gh42MhoqLkY_MlZM� = array( "soft" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�, "member" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�, "client" => $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�, "ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� ), "intip" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�, "pccode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[4], "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], "password" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'], "clientid" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8], "ischangesvr" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[9], "cmd" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[10] );
$adv_db = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
$adv_table = $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
$adb_pdata = $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�;
$adv_user = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
$adv_user2 = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�;
switch ( count( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE� ) )
{
    case 1 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 2 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 3 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 4 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 5 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 6 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 7 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 8 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[7], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 9 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[8], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    case 10 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M� = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk�( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[8], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZE�[9], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� );
        break;
    default :
        exit( "crypteno309" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set lasttime=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�." where `username`='".$_obfuscate_jYmJi42Gh42MhoqLkY_MlZM�['username']."'", "notsync" );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_advapi'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times_advapi'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and optype=30 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_advapi'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times_advapi'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='调用advapi太频繁，锁定帐号' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
        $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
        $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� .= "('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',31,".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode']."','',".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.")";
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY�, "notsync" );
        exit( "crypteno129" );
    }
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values  ('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',30,".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode']."','".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."',".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.")", "notsync" );
$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� = _obfuscate_koiSlI6IlZSMkY_IiZSSkIw�( $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5M�, $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4�, Client_Language );
if ( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIk� != "v_points" )
{
    if ( defined( "SOFTRSAMODE" ) )
    {
        $_obfuscate_hpKMkImIjJSUh4aVkYuIlZE� = KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'].".php";
        if ( is_file( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZE� ) )
        {
            include( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZE� );
        }
        else
        {
            exit( "crypteno171" );
        }
    }
    if ( SOFTRSAMODE == 0 )
    {
        if ( RSACRYPT == 1 )
        {
            if ( strlen( RSA_PRVKEY ) < 70 || strlen( RSA_MODULES ) < 70 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZE�, 0, 20 ), RSA_PRVKEY, RSA_MODULES, 256 );
            exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y�."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZE�, 20 ) );
        }
        exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� );
    }
    if ( SOFTRSAMODE == 1 )
    {
        if ( strlen( SOFTRSAEKEY ) < 70 || strlen( SOFTRSANKEY ) < 70 )
        {
            exit( "crypteno151" );
        }
        $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZE�, 0, 20 ), SOFTRSAEKEY, SOFTRSANKEY, 256 );
        exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y�."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZE�, 20 ) );
    }
    exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� );
}
exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� );
?>
