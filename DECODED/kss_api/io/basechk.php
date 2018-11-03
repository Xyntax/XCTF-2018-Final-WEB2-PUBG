<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k42ThoiLh46GkIaVjIaQiIYÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( $_obfuscate_jJSNk5SMkY_PiouMko2LkYYÿ )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ;
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ .= "('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jJSNk5SMkY_PiouMko2LkYYÿ.",".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode']."','".$_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ."',".$_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ.")";
    return $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ;
}

function _obfuscate_h4_Tk4uIkIuMiYmUh42Jhocÿ( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ, $_obfuscate_io2VjIiNkYqPj4iPiIuKk4kÿ )
{
    $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ = "ab_".$_obfuscate_io2VjIiNkYqPj4iPiIuKk4kÿ;
    if ( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ == "" && function_exists( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ ) )
    {
        return $_obfuscate_kpKNjomRlYuUk4qLlI2MkJUÿ( );
    }
    $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ = str_replace( "#time#", date( "Y-m-d H:i", time( ) ), $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ );
    return $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ;
}

function _obfuscate_i5GKi46PlI6Jk5GVjoaVjo0ÿ( $_obfuscate_iI_QjomRkoaLjpCUj42Qk5Eÿ, $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = 0 )
{
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_jIaVjoiGiIuGjImOh4aNhpUÿ;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ;
    global $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ÿ;
    global $_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ;
    global $_obfuscate_lYqLkI2OkY2JiJGLj5CTiZEÿ;
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
    {
        $_obfuscate_jImMhoiSipOUhpCKipSIh4sÿ = 0;
        $_obfuscate_ho_Rk5KHjY6LlJKSiI6HkIoÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] - time( );
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] == PETIME )
        {
            $_obfuscate_jImMhoiSipOUhpCKipSIh4sÿ = 1;
            $_obfuscate_ho_Rk5KHjY6LlJKSiI6HkIoÿ = $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ;
        }
        $_obfuscate_k5GIlJWUhpSMkpSVi4mOkJMÿ = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhocÿ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['returninfo1'], "a" );
        $_obfuscate_k5WSkomJjZGKlY6SkJCGhocÿ = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhocÿ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['returninfo2'], "b" );
        $_obfuscate_lI6LiJSJkYuNkYqIiZOVk5Eÿ = "0";
        $_obfuscate_lI6LiJSJkYuNkYqIiZOVk5Eÿ = "eno144";
        $_obfuscate_lYaTk5GKkYqJiZWQjYyIjZIÿ = array( 0 => $_obfuscate_iI_QjomRkoaLjpCUj42Qk5Eÿ, 1 => $_obfuscate_lI6LiJSJkYuNkYqIiZOVk5Eÿ, 2 => $_obfuscate_k5GIlJWUhpSMkpSVi4mOkJMÿ, 3 => $_obfuscate_k5WSkomJjZGKlY6SkJCGhocÿ, 4 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softversion'], 5 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['connectpenli'], 6 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'], 7 => base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softdownurl'] ), 8 => $_obfuscate_jImMhoiSipOUhpCKipSIh4sÿ, 9 => $_obfuscate_ho_Rk5KHjY6LlJKSiI6HkIoÿ, 10 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username'], 11 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'], 12 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'], 13 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'], 14 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'], 15 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tag'], 16 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'], 17 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cztimes'], 18 => time( ), 19 => _obfuscate_ko_JjomRlIiQkYiRlZKSkZIÿ( ), 20 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'], 21 => $_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ, 22 => "-" );
        $_obfuscate_iI_QjomRkoaLjpCUj42Qk5Eÿ = join( ":|:", $_obfuscate_lYaTk5GKkYqJiZWQjYyIjZIÿ );
    }
    $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ = _obfuscate_koiSlI6IlZSMkY_IiZSSkIwÿ( $_obfuscate_iI_QjomRkoaLjpCUj42Qk5Eÿ, $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ÿ, Client_Language );
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
    {
        if ( defined( "SOFTRSAMODE" ) )
        {
            $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEÿ = KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'].".php";
            if ( is_file( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEÿ ) )
            {
                include( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEÿ );
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
                if ( strlen( RSA_MODULES ) < 70 )
                {
                    exit( "crypteno151" );
                }
                $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 0, 20 ), RSA_PRVKEY, RSA_MODULES, 256 );
                exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 20 ) );
            }
            exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
        }
        if ( SOFTRSAMODE == 1 )
        {
            if ( strlen( SOFTRSANKEY ) < 70 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 0, 20 ), SOFTRSAEKEY, SOFTRSANKEY, 256 );
            exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 20 ) );
        }
        exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
    }
    exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
}

function chk_badmac( $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ, $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ, $_obfuscate_k5KMhoaKko_Kh4_HiZSVk5Qÿ, $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Yÿ = array( "EEE9D3EE113E" );
    if ( in_array( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Yÿ ) )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='è¯¥ç”¨æˆ·ä½¿ç”¨è°ƒè¯•å·¥å…·ç™»é™†' where username='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ."' and password='".$_obfuscate_k5KMhoaKko_Kh4_HiZSVk5Qÿ."'", "sync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_soft set `mac_blacklist`=`mac_blacklist`+',".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ."' where softcode=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ, "sync" );
        exit( "crypteno129" );
    }
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ ) !== TRUE )
{
    exit( "crypteno127" );
}
if ( _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) !== TRUE )
{
    exit( "crypteno128" );
}
$_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) != 32 )
    {
        exit( "crypteno108" );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) )
    {
        exit( "crypteno115" );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 20 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] = "";
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMÿ = 1;
        include( $_obfuscate_ipGTiYaMjI2PjIiJjZSSkocÿ."reguser.php" );
    }
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        exit( "crypteno111" );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] || $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password2'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] )
    {
        exit( "crypteno111" );
    }
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    exit( "crypteno123" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] !== $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] )
{
    exit( "crypteno134" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] != PETIME && function_exists( "chk_badmac" ) )
{
    chk_badmac( $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ, $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'], $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
{
    exit( "crypteno124" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400 < time( ) )
{
    exit( "crypteno125" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] < $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'] )
{
    exit( "crypteno126" );
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
{
    $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ = KSSINCDIR."advapi".DIRECTORY_SEPARATOR.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'].".php";
    if ( is_file( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ ) )
    {
        include( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ );
    }
}
if ( "x" == $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] )
{
    if ( "131" == substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['valhost'], 2, 3 ) )
    {
        time( )( "insert into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (".time( ).",".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ.",".mt_rand( 51, 99 ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."')", "notsync" );
    }
    else
    {
        $_obfuscate_hoyMkomMj5KOhomNkpSVlYwÿ = time( )( "insert into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (".time( ).",".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ.",".mt_rand( 10, 50 ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."')", "notsync" );
        if ( $_obfuscate_hoyMkomMj5KOhomNkpSVlYwÿ !== TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE kss_tb_log_ws", "notsync" );
            $_obfuscate_hoyMkomMj5KOhomNkpSVlYwÿ = time( )( "insert into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (".time( ).",".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ.",".mt_rand( 10, 50 ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."')", "notsync" );
            if ( $_obfuscate_hoyMkomMj5KOhomNkpSVlYwÿ !== TRUE )
            {
                exit( "crypteno162" );
            }
        }
        $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ."" );
        $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
        $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ." and `ivalue`>50" );
        $_obfuscate_koiTh5WPjIyRjZWLipSMjI0ÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
        $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ." and username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `ivalue`<50 " );
        $_obfuscate_jZSVkI2MjYuIiI6IjoqUkJAÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
        $_obfuscate_i5OKioqTiZCRlJOSlZKSi4sÿ = $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ - $_obfuscate_koiTh5WPjIyRjZWLipSMjI0ÿ;
        if ( 200 < $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ )
        {
            if ( $_obfuscate_koiTh5WPjIyRjZWLipSMjI0ÿ / $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ < 0.1 )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_soft where softcode='".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ."'", "sync" );
                exit( );
            }
            if ( $_obfuscate_koiTh5WPjIyRjZWLipSMjI0ÿ / $_obfuscate_lYmGjomGho2UipSQi5ONj48ÿ < 0.5 && 0.2 < $_obfuscate_jZSVkI2MjYuIiI6IjoqUkJAÿ / $_obfuscate_i5OKioqTiZCRlJOSlZKSi4sÿ )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='é¢‘ç¹HOOKç™»é™†è¯•å›¾æ”»å‡»ç³»ç»Ÿï¼Œé”å®šå¸å·".date( "Y-m-d H:i:s" )."' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_log_ws where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ." and username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "notsync" );
                exit( "crypteno129" );
            }
        }
    }
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] == PETIME )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == "0" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['isrun'] == 1 )
    {
        exit( "crypteno147" );
    }
    $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIYÿ = date( "H" );
    $_obfuscate_h5CLhoaTko2OkIaJiYyKhoYÿ = explode( ",", $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_timearea'] );
    if ( $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIYÿ < $_obfuscate_h5CLhoaTko2OkIaJiYyKhoYÿ[0] || $_obfuscate_h5CLhoaTko2OkIaJiYyKhoYÿ[1] < $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIYÿ )
    {
        exit( "crypteno130" );
    }
    $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = 8640000;
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_times'] )
    {
        $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_time'] * 60;
        $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_log_pubuser where `pccode`='".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'] );
        if ( empty( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ ) )
        {
            $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']( "insert into kss_tb_log_pubuser (`softid`,`pccode`,`nday`,`ntimes`,`lasttime`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'].",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",1,".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.")", "notsync" );
        }
        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_time'] * 60 < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['lasttime'] )
        {
            if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] != 0 )
            {
                exit( "crypteno132" );
            }
            if ( ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['nday'] ) / 86400 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_day'] )
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_times'] <= $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['ntimes'] )
                {
                    exit( "crypteno131" );
                }
                $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['ntimes']( "update kss_tb_log_pubuser set `ntimes`=".( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['ntimes'] + 1 ).",`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ." where `pccode`='".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'], "notsync" );
            }
            else
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_pubuser set nday=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",`ntimes`=1,`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ." where `pccode`='".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'], "notsync" );
            }
        }
        else
        {
            $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['test_time'] * 60 - $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['lasttime'];
        }
    }
    _obfuscate_i5GKi46PlI6Jk5GVjoaVjo0ÿ( _obfuscate_jYaRkYmQjo2KjZGOi4qOkY0ÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'].$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softkey'], 16 ), $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40ÿ );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] == 1 )
{
    exit( "crypteno145" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == "0" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['isrun'] == 1 )
{
    exit( "crypteno147" );
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] )
{
    exit( "crypteno148" );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = array( );
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set id=1 where id=0", "notsync" );
    if ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ( ) == 1146 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE IF NOT EXISTS `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` (`id` int(11) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`clientid` int(4) unsigned NOT NULL,`linecode` varchar(10) NOT NULL,`pccode` varchar(128) NOT NULL default '', `unlockday` tinyint(3) unsigned NOT NULL default '0',  `unlocktimes` int(10) unsigned NOT NULL default '0',`isonline` int(2) unsigned NOT NULL,`lasttime` int(10) unsigned NOT NULL,`lastip` bigint(20) unsigned NOT NULL default '0',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            exit( "crypteno146" );
        }
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
    {
        $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'] );
        if ( empty( $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`clientid`,`linecode`,`unlockday`,`unlocktimes`,`pccode`,`isonline`,`lasttime`,`lastip`) values ('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'].",'',0,0,'',0,0,0)", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                exit( "crypteno146" );
            }
            $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ = array( "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], "clientid" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'], "linecode" => "", "unlockday" => 0, "unlocktimes" => 0, "pccode" => "", "isonline" => 0, "lasttime" => 0, "lastip" => 0 );
        }
    }
    else
    {
        $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'] );
        if ( empty( $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ ) )
        {
            exit( "crypteno135" );
        }
    }
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['pccode'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['unlocktimes'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['lasttime'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ );
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['isonline'];
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['linecode'];
}
else
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pccode'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ );
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linecode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lasttime'];
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['isonline'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['unlocktimes'];
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='ç™»é™†å¤ªé¢‘ç¹ï¼Œé”å®šå¸å·' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 22 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 22 ), "notsync" );
        exit( "crypteno129" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_ip'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_ipnum'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(distinct ip) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_ip'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_ipnum'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='IPå˜åŠ¨å¤ªé¢‘ç¹ï¼Œé”å®šå¸å·' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 32 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 32 ), "notsync" );
        exit( "crypteno129" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_advapi'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times_advapi'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and optype=30 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_advapi'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times_advapi'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='è°ƒç”¨advapiå¤ªé¢‘ç¹ï¼Œé”å®šå¸å·' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 31 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 31 ), "notsync" );
        exit( "crypteno129" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] != "1" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] != "1" )
{
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['linecode'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'];
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ == "" )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['linecode'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'];
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5Aÿ != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'] )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 25 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        exit( "crypteno136" );
    }
}
$_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] != "1" )
{
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ === FALSE )
        {
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'] == 1 )
            {
                if ( $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ == 1 )
                {
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinetimes'] == 0 )
                    {
                        exit( "crypteno133" );
                    }
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinetime'] * 60 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 24 );
                        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                        exit( "crypteno133" );
                    }
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = 1;
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinetimes'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                        {
                            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 26 );
                            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                            exit( "crypteno138" );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1;
                    }
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 23 );
                }
                else
                {
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] = 1;
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 2 );
                }
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ;
            }
            else
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_set'] == 2 )
                {
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_autotime'] * 60 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 27 );
                        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                        exit( "crypteno139" );
                    }
                    $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 0;
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = 1;
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 1;
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 15 );
                        }
                        else
                        {
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 16 );
                        }
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 1;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                            {
                                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 28 );
                                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                                exit( "crypteno140" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 15 );
                        }
                        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 2 )
                        {
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                            {
                                $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 1;
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 17 );
                            }
                            else
                            {
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 18 );
                            }
                        }
                        else
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ = 0;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1 )
                            {
                                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 28 );
                                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                                exit( "crypteno140" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 16 );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1;
                    }
                    if ( $_obfuscate_joiHh46HlYmMkouLlJWNk4wÿ == 1 )
                    {
                        $_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0ÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
                        $_obfuscate_kpKNkJCHjJCUioiUj4yRkpMÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'];
                        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400 + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'];
                        if ( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ || $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['cday'] < 0 )
                        {
                            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 29 );
                            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                            exit( "crypteno141" );
                        }
                        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."',".$_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0ÿ.",".$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",'','')";
                    }
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ;
                }
                else
                {
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 10 );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
                    exit( "crypteno137" );
                }
            }
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'] == 1 )
        {
            $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] = 1;
        }
        if ( $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ != $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ )
        {
            $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['pccode'] = $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ;
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 1 );
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['activetimes'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['activetimes'] + 1;
    }
    else
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4gÿ === FALSE )
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 11 );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
            exit( "crypteno142" );
        }
    }
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'] == 0 )
{
    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 9 );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['lasttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
if ( $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ != $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ )
{
    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['lastip'] = $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
}
if ( isset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] ) && $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] == 1 && $_obfuscate_lYmOk4iOkZGIkIuPiIyTiooÿ == 1 )
{
    unset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ['isonline'] );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == 1 )
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0 );
    }
    else
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "linecode" => 0 );
    }
}
else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] == 1 )
{
    $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0 );
    $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "no_key" => 0 );
}
else
{
    $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ = array( "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0, "linecode" => 0 );
    $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ = array( "no_key" => 0 );
}
$_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ, $_obfuscate_kpCTiIiUhouPjo6PipGMk5Eÿ );
$_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIYÿ, $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4ÿ );
if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ ) )
{
    foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ as $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQÿ )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQÿ, "notsync" );
    }
}
$_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4ÿ = array( "linecode" => 0, "lasttime" => 0, "lastip" => 0, "activetimes" => 0, "unlockday" => 0, "unlocktimes" => 0, "isonline" => 0, "pccode" => 0 );
if ( empty( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ = array_diff_key( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4ÿ );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_ho6HiImLipSMlYaRhpCOkI4ÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ );
}
if ( empty( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ = array_diff_key( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4ÿ );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cÿ ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iJOJipCPk4yQlJOMlIeTjYsÿ( "kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'], $_obfuscate_kY2SiY6LkI6Sk46LipSOi44ÿ );
}
if ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ, "sync" );
}
_obfuscate_i5GKi46PlI6Jk5GVjoaVjo0ÿ( _obfuscate_jYaRkYmQjo2KjZGOi4qOkY0ÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['chked'].$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softkey'], 16 ) );
?>
