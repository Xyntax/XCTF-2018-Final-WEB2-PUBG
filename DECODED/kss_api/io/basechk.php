<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k42ThoiLh46GkIaVjIaQiIY�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( $_obfuscate_jJSNk5SMkY_PiouMko2LkYY� )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�;
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� .= "('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jJSNk5SMkY_PiouMko2LkYY�.",".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode']."','".$_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�."',".$_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�.")";
    return $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY�;
}

function _obfuscate_h4_Tk4uIkIuMiYmUh42Jhoc�( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�, $_obfuscate_io2VjIiNkYqPj4iPiIuKk4k� )
{
    $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU� = "ab_".$_obfuscate_io2VjIiNkYqPj4iPiIuKk4k�;
    if ( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� == "" && function_exists( $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU� ) )
    {
        return $_obfuscate_kpKNjomRlYuUk4qLlI2MkJU�( );
    }
    $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� = str_replace( "#time#", date( "Y-m-d H:i", time( ) ), $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI� );
    return $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpI�;
}

function _obfuscate_i5GKi46PlI6Jk5GVjoaVjo0�( $_obfuscate_iI_QjomRkoaLjpCUj42Qk5E�, $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = 0 )
{
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    global $_obfuscate_jIaVjoiGiIuGjImOh4aNhpU�;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�;
    global $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4�;
    global $_obfuscate_kpKNkJCHjJCUioiUj4yRkpM�;
    global $_obfuscate_lYqLkI2OkY2JiJGLj5CTiZE�;
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
    {
        $_obfuscate_jImMhoiSipOUhpCKipSIh4s� = 0;
        $_obfuscate_ho_Rk5KHjY6LlJKSiI6HkIo� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] - time( );
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME )
        {
            $_obfuscate_jImMhoiSipOUhpCKipSIh4s� = 1;
            $_obfuscate_ho_Rk5KHjY6LlJKSiI6HkIo� = $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40�;
        }
        $_obfuscate_k5GIlJWUhpSMkpSVi4mOkJM� = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhoc�( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['returninfo1'], "a" );
        $_obfuscate_k5WSkomJjZGKlY6SkJCGhoc� = _obfuscate_h4_Tk4uIkIuMiYmUh42Jhoc�( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['returninfo2'], "b" );
        $_obfuscate_lI6LiJSJkYuNkYqIiZOVk5E� = "0";
        $_obfuscate_lI6LiJSJkYuNkYqIiZOVk5E� = "eno144";
        $_obfuscate_lYaTk5GKkYqJiZWQjYyIjZI� = array( 0 => $_obfuscate_iI_QjomRkoaLjpCUj42Qk5E�, 1 => $_obfuscate_lI6LiJSJkYuNkYqIiZOVk5E�, 2 => $_obfuscate_k5GIlJWUhpSMkpSVi4mOkJM�, 3 => $_obfuscate_k5WSkomJjZGKlY6SkJCGhoc�, 4 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softversion'], 5 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenli'], 6 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'], 7 => base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softdownurl'] ), 8 => $_obfuscate_jImMhoiSipOUhpCKipSIh4s�, 9 => $_obfuscate_ho_Rk5KHjY6LlJKSiI6HkIo�, 10 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username'], 11 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'], 12 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'], 13 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'], 14 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'], 15 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tag'], 16 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'], 17 => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cztimes'], 18 => time( ), 19 => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ), 20 => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'], 21 => $_obfuscate_kpKNkJCHjJCUioiUj4yRkpM�, 22 => "-" );
        $_obfuscate_iI_QjomRkoaLjpCUj42Qk5E� = join( ":|:", $_obfuscate_lYaTk5GKkYqJiZWQjYyIjZI� );
    }
    $_obfuscate_kZWIioyVlJKMho_KiIeJjZE� = _obfuscate_koiSlI6IlZSMkY_IiZSSkIw�( $_obfuscate_iI_QjomRkoaLjpCUj42Qk5E�, $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4�, Client_Language );
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
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
                if ( strlen( RSA_MODULES ) < 70 )
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
            if ( strlen( SOFTRSANKEY ) < 70 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y� = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZE�, 0, 20 ), SOFTRSAEKEY, SOFTRSANKEY, 256 );
            exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Y�."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZE�, 20 ) );
        }
        exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� );
    }
    exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZE� );
}

function chk_badmac( $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�, $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�, $_obfuscate_k5KMhoaKko_Kh4_HiZSVk5Q�, $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Y� = array( "EEE9D3EE113E" );
    if ( in_array( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_ioiVhomLjJSHiYqRiJWOk4Y� ) )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='该用户使用调试工具登陆' where username='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."' and password='".$_obfuscate_k5KMhoaKko_Kh4_HiZSVk5Q�."'", "sync" );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_soft set `mac_blacklist`=`mac_blacklist`+',".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�."' where softcode=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�, "sync" );
        exit( "crypteno129" );
    }
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� ) !== TRUE )
{
    exit( "crypteno127" );
}
if ( _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) !== TRUE )
{
    exit( "crypteno128" );
}
$_obfuscate_kpKNkJCHjJCUioiUj4yRkpM� = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) != 32 )
    {
        exit( "crypteno108" );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) )
    {
        exit( "crypteno115" );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 20 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] = "";
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� = 1;
        include( $_obfuscate_ipGTiYaMjI2PjIiJjZSSkoc�."reguser.php" );
    }
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
    {
        exit( "crypteno111" );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] || $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password2'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] )
    {
        exit( "crypteno111" );
    }
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    exit( "crypteno123" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] !== $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] )
{
    exit( "crypteno134" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] != PETIME && function_exists( "chk_badmac" ) )
{
    chk_badmac( $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�, $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'], $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
{
    exit( "crypteno124" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400 < time( ) )
{
    exit( "crypteno125" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] < $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] )
{
    exit( "crypteno126" );
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
{
    $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� = KSSINCDIR."advapi".DIRECTORY_SEPARATOR.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].".php";
    if ( is_file( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� ) )
    {
        include( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8� );
    }
}
if ( "x" == $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] )
{
    if ( "131" == substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['valhost'], 2, 3 ) )
    {
        time( )( "insert into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (".time( ).",".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�.",".mt_rand( 51, 99 ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."')", "notsync" );
    }
    else
    {
        $_obfuscate_hoyMkomMj5KOhomNkpSVlYw� = time( )( "insert into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (".time( ).",".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�.",".mt_rand( 10, 50 ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."')", "notsync" );
        if ( $_obfuscate_hoyMkomMj5KOhomNkpSVlYw� !== TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE kss_tb_log_ws", "notsync" );
            $_obfuscate_hoyMkomMj5KOhomNkpSVlYw� = time( )( "insert into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (".time( ).",".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�.",".mt_rand( 10, 50 ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."')", "notsync" );
            if ( $_obfuscate_hoyMkomMj5KOhomNkpSVlYw� !== TRUE )
            {
                exit( "crypteno162" );
            }
        }
        $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�."" );
        $_obfuscate_lYmGjomGho2UipSQi5ONj48� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
        $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�." and `ivalue`>50" );
        $_obfuscate_koiTh5WPjIyRjZWLipSMjI0� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
        $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�." and username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `ivalue`<50 " );
        $_obfuscate_jZSVkI2MjYuIiI6IjoqUkJA� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
        $_obfuscate_i5OKioqTiZCRlJOSlZKSi4s� = $_obfuscate_lYmGjomGho2UipSQi5ONj48� - $_obfuscate_koiTh5WPjIyRjZWLipSMjI0�;
        if ( 200 < $_obfuscate_lYmGjomGho2UipSQi5ONj48� )
        {
            if ( $_obfuscate_koiTh5WPjIyRjZWLipSMjI0� / $_obfuscate_lYmGjomGho2UipSQi5ONj48� < 0.1 )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_soft where softcode='".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�."'", "sync" );
                exit( );
            }
            if ( $_obfuscate_koiTh5WPjIyRjZWLipSMjI0� / $_obfuscate_lYmGjomGho2UipSQi5ONj48� < 0.5 && 0.2 < $_obfuscate_jZSVkI2MjYuIiI6IjoqUkJA� / $_obfuscate_i5OKioqTiZCRlJOSlZKSi4s� )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='频繁HOOK登陆试图攻击系统，锁定帐号".date( "Y-m-d H:i:s" )."' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_log_ws where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q�." and username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "notsync" );
                exit( "crypteno129" );
            }
        }
    }
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == "0" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['isrun'] == 1 )
    {
        exit( "crypteno147" );
    }
    $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIY� = date( "H" );
    $_obfuscate_h5CLhoaTko2OkIaJiYyKhoY� = explode( ",", $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_timearea'] );
    if ( $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIY� < $_obfuscate_h5CLhoaTko2OkIaJiYyKhoY�[0] || $_obfuscate_h5CLhoaTko2OkIaJiYyKhoY�[1] < $_obfuscate_lZCTlJCVlYmKlZGRiZCJjIY� )
    {
        exit( "crypteno130" );
    }
    $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = 8640000;
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_times'] )
    {
        $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_time'] * 60;
        $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_pubuser where `pccode`='".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'] );
        if ( empty( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� ) )
        {
            $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']( "insert into kss_tb_log_pubuser (`softid`,`pccode`,`nday`,`ntimes`,`lasttime`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",1,".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.")", "notsync" );
        }
        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_time'] * 60 < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['lasttime'] )
        {
            if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] != 0 )
            {
                exit( "crypteno132" );
            }
            if ( ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['nday'] ) / 86400 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_day'] )
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_times'] <= $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['ntimes'] )
                {
                    exit( "crypteno131" );
                }
                $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['ntimes']( "update kss_tb_log_pubuser set `ntimes`=".( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['ntimes'] + 1 ).",`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�." where `pccode`='".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'], "notsync" );
            }
            else
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_pubuser set nday=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",`ntimes`=1,`lasttime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�." where `pccode`='".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."' and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'], "notsync" );
            }
        }
        else
        {
            $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['test_time'] * 60 - $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['lasttime'];
        }
    }
    _obfuscate_i5GKi46PlI6Jk5GVjoaVjo0�( _obfuscate_jYaRkYmQjo2KjZGOi4qOkY0�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'].$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softkey'], 16 ), $_obfuscate_iomQiY_NjIiVkJWGi4_Qj40� );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] == 1 )
{
    exit( "crypteno145" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == "0" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['isrun'] == 1 )
{
    exit( "crypteno147" );
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] )
{
    exit( "crypteno148" );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY� = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = array( );
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set id=1 where id=0", "notsync" );
    if ( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�( ) == 1146 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE IF NOT EXISTS `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` (`id` int(11) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`clientid` int(4) unsigned NOT NULL,`linecode` varchar(10) NOT NULL,`pccode` varchar(128) NOT NULL default '', `unlockday` tinyint(3) unsigned NOT NULL default '0',  `unlocktimes` int(10) unsigned NOT NULL default '0',`isonline` int(2) unsigned NOT NULL,`lasttime` int(10) unsigned NOT NULL,`lastip` bigint(20) unsigned NOT NULL default '0',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            exit( "crypteno146" );
        }
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
    {
        $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] );
        if ( empty( $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� ) )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`clientid`,`linecode`,`unlockday`,`unlocktimes`,`pccode`,`isonline`,`lasttime`,`lastip`) values ('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'].",'',0,0,'',0,0,0)", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                exit( "crypteno146" );
            }
            $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� = array( "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], "clientid" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'], "linecode" => "", "unlockday" => 0, "unlocktimes" => 0, "pccode" => "", "isonline" => 0, "lasttime" => 0, "lastip" => 0 );
        }
    }
    else
    {
        $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] );
        if ( empty( $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� ) )
        {
            exit( "crypteno135" );
        }
    }
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['pccode'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZM� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['unlocktimes'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['lasttime'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� );
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['isonline'];
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['linecode'];
}
else
{
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lastip'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'];
    $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� = _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� );
    $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linecode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lasttime'];
    $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['isonline'];
    $_obfuscate_h5GPkpGLkYePioqSiomMlZM� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlocktimes'];
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='登陆太频繁，锁定帐号' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 22 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 22 ), "notsync" );
        exit( "crypteno129" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_ip'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_ipnum'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(distinct ip) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and optype=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_ip'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_ipnum'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='IP变动太频繁，锁定帐号' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 32 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 32 ), "notsync" );
        exit( "crypteno129" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_advapi'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times_advapi'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and optype=30 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_time_advapi'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['autolock_times_advapi'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkok�['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set islock=3,intro='调用advapi太频繁，锁定帐号' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
        _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 31 )( _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 31 ), "notsync" );
        exit( "crypteno129" );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] != "1" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" )
{
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['linecode'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'];
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� == "" )
    {
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['linecode'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'];
    }
    else if ( $_obfuscate_k4yQlYyNkpOJkZCIiIiMj5A� != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 25 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        exit( "crypteno136" );
    }
}
$_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] != "1" )
{
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� === FALSE )
        {
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 1 )
            {
                if ( $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� == 1 )
                {
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetimes'] == 0 )
                    {
                        exit( "crypteno133" );
                    }
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetime'] * 60 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 24 );
                        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                        exit( "crypteno133" );
                    }
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZM� != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = 1;
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetimes'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                        {
                            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 26 );
                            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                            exit( "crypteno138" );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1;
                    }
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 23 );
                }
                else
                {
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] = 1;
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 2 );
                }
                $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
            }
            else
            {
                if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_set'] == 2 )
                {
                    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_autotime'] * 60 )
                    {
                        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 27 );
                        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                        exit( "crypteno139" );
                    }
                    $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 0;
                    if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZM� != date( "d" ) )
                    {
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlockday'] = date( "d" );
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = 1;
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 1;
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 15 );
                        }
                        else
                        {
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 16 );
                        }
                    }
                    else
                    {
                        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 1 )
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 1;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                            {
                                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 28 );
                                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                                exit( "crypteno140" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 15 );
                        }
                        else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 2 )
                        {
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                            {
                                $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 1;
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 17 );
                            }
                            else
                            {
                                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 18 );
                            }
                        }
                        else
                        {
                            $_obfuscate_joiHh46HlYmMkouLlJWNk4w� = 0;
                            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1 )
                            {
                                $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 28 );
                                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                                exit( "crypteno140" );
                            }
                            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 16 );
                        }
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1;
                    }
                    if ( $_obfuscate_joiHh46HlYmMkouLlJWNk4w� == 1 )
                    {
                        $_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
                        $_obfuscate_kpKNkJCHjJCUioiUj4yRkpM� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'];
                        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
                        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400 + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'];
                        if ( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� || $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['cday'] < 0 )
                        {
                            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 29 );
                            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                            exit( "crypteno141" );
                        }
                        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."',".$_obfuscate_ioiIkIyNi4uSiY2GlY6Oko0�.",".$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",'','')";
                    }
                    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
                }
                else
                {
                    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 10 );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
                    exit( "crypteno137" );
                }
            }
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 1 )
        {
            $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] = 1;
        }
        if ( $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� != $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� )
        {
            $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['pccode'] = $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g�;
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 1 );
        $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['activetimes'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['activetimes'] + 1;
    }
    else
    {
        if ( $_obfuscate_iouLk4eQj5KOj4eQh42Vi4g� === FALSE )
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 11 );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
            exit( "crypteno142" );
        }
    }
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'] == 0 )
{
    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�['notsync_01'] = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 9 );
}
$_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['lasttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
if ( $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� != $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� )
{
    $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['lastip'] = $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
}
if ( isset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] ) && $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] == 1 && $_obfuscate_lYmOk4iOkZGIkIuPiIyTioo� == 1 )
{
    unset( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�['isonline'] );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == 1 )
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0 );
    }
    else
    {
        $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "cday" => 0, "endtime" => 0, "activetimes" => 0 );
        $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "linecode" => 0 );
    }
}
else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] == 1 )
{
    $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0 );
    $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "no_key" => 0 );
}
else
{
    $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� = array( "cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0, "linecode" => 0 );
    $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� = array( "no_key" => 0 );
}
$_obfuscate_ho6HiImLipSMlYaRhpCOkI4� = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�, $_obfuscate_kpCTiIiUhouPjo6PipGMk5E� );
$_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ� = array_intersect_key( $_obfuscate_hpGLjYmMi5CJkoqGjJSIiIY�, $_obfuscate_j4mGiJCKlI6QjJCGkpCQjo4� );
if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� ) )
{
    foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� as $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQ� )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qNkYqQlYuOh4iLiIuOjpQ�, "notsync" );
    }
}
$_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4� = array( "linecode" => 0, "lasttime" => 0, "lastip" => 0, "activetimes" => 0, "unlockday" => 0, "unlocktimes" => 0, "isonline" => 0, "pccode" => 0 );
if ( empty( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4� ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_diff_key( $_obfuscate_ho6HiImLipSMlYaRhpCOkI4�, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4� );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_ho6HiImLipSMlYaRhpCOkI4�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� );
}
if ( empty( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ� ) )
{
    $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "sync";
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_diff_key( $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ�, $_obfuscate_lZCSkpOUjoaNi5OUkY6Pjo4� );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� ) )
    {
        $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� = "notsync";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_lZWLlYqJiZSQkYuVkJGKkZQ�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'], $_obfuscate_kY2SiY6LkI6Sk46LipSOi44� );
}
if ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s�, "sync" );
}
_obfuscate_i5GKi46PlI6Jk5GVjoaVjo0�( _obfuscate_jYaRkYmQjo2KjZGOi4qOkY0�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['chked'].$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softkey'], 16 ) );
?>
