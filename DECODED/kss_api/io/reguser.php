<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4aNj4iRh5WPipSRjYeQjoc�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( $_obfuscate_i5SGi4qQhoqUko2HhoeTlZM� )
{
    global $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8�;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� );
    exit( $_obfuscate_i5SGi4qQhoqUko2HhoeTlZM� );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 0, $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 2 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 4 )
    {
        exit( "kssdata".QQ168 );
    }
    if ( SVRID == 2 )
    {
        exit( "kssdata".QQ169 );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        exit( "kssdata".QQ170.$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 2 )
{
    exit( "crypteno114" );
}
if ( _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� ) !== TRUE )
{
    exit( "crypteno123" );
}
if ( 0 < $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44�['maxusernum'] )
{
    $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum,sum(`linknum`) from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs� );
    if ( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44�['maxusernum'] <= $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48�['tnum'] + ( $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48�['tnum'] - $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48�['tnum'] ) / 2 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
        {
            exit( "crypteno109" );
        }
        exit( "kssdata".QQ171 );
    }
}
$_obfuscate_iImHk5CLiY2Gk5OTlZONk4k� = array( );
$_obfuscate_iYuKhpCNhoaJlYmThpOTiIY� = FALSE;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" )
{
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] == "" ) )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'] == "0.00" )
        {
            exit( "kssdata".QQ172 );
        }
        if ( SVRID == 2 )
        {
            exit( "kssdata".QQ173 );
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['freeregs'] == "0" )
        {
            $_obfuscate_h46JiZOTlZSPhpGIj4yHi5I� = "('".join( "','", $_obfuscate_io_UkouIkIyHj42UlI_GiZA� )."')";
            $_obfuscate_jI6LkY2TlJSJjJCHlImHj4Y� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_havereg where `pccode` in ".$_obfuscate_h46JiZOTlZSPhpGIj4yHi5I�." and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'] );
            if ( empty( $_obfuscate_jI6LkY2TlJSJjJCHlImHj4Y� ) )
            {
                exit( "kssdata".QQ174 );
            }
            foreach ( $_obfuscate_io_UkouIkIyHj42UlI_GiZA� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
            {
                $_obfuscate_iImHk5CLiY2Gk5OTlZONk4k�[] = "insert into kss_tb_log_havereg (`softid`,`addtime`,`pccode`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'].",".time( ).",'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�."')";
            }
        }
        $_obfuscate_iYuKhpCNhoaJlYmThpOTiIY� = TRUE;
    }
    else if ( ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) + 1 ) % 33 != 0 )
    {
        exit( "kssdata".QQ175 );
    }
}
if ( 100 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) )
{
    exit( "kssdata".QQ176 );
}
$_obfuscate_jZCGhpKRipWQjY_UjZWMj5M� = crc32( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'].$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
$_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� = "regu".sprintf( "%u", $_obfuscate_jZCGhpKRipWQjY_UjZWMj5M� );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onlyonebdinfo'] == "1" && !empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] )."'" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        exit( "kssdata".QQ260 );
    }
}
if ( $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� == 0 )
{
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
    {
        exit( "kssdata".QQ177.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
    {
        exit( "kssdata".QQ178.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
    {
        exit( "kssdata".QQ179.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
    {
        exit( "kssdata".QQ180.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
    {
        exit( "kssdata".QQ181.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
    }
    $_obfuscate_jpOPko_LjYiHkoqPjZWLiog� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� );
    if ( $_obfuscate_jpOPko_LjYiHkoqPjZWLiog� !== TRUE )
    {
        exit( "kssdata".QQ234 );
    }
    $_obfuscate_h42NjZKIkoqSkouPh5WIiYw� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", 1, 1 );
    if ( empty( $_obfuscate_h42NjZKIkoqSkouPh5WIiYw� ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ182 );
    }
    else
    {
        $_obfuscate_ko_OkJOPkIqLjY_Mj4_SjoY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."_recycle` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
        if ( empty( $_obfuscate_ko_OkJOPkIqLjY_Mj4_SjoY� ) )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."_recycle` set `username`=concat('delete_',`username`) where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
        }
    }
    if ( $_obfuscate_iYuKhpCNhoaJlYmThpOTiIY� === TRUE )
    {
        $_obfuscate_iouSi4_PlIuKhoeUlI_LkpE� = $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44�['id'];
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregmanagerid'] != 0 )
        {
            $_obfuscate_iouSi4_PlIuKhoeUlI_LkpE� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregmanagerid'];
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "managerid" => $_obfuscate_iouSi4_PlIuKhoeUlI_LkpE�, "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], "password" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'], "password2" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'], "cday" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'], "points" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg_points'], "tag" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregtag'], "keyextattr" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['fregattr'], "bdinfo" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'], "addtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM�, "starttime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM�, "endtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg'] * 86400, "isusetestkey" => 1, "intro" => "无卡注册" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
        {
            if ( empty( $_obfuscate_iImHk5CLiY2Gk5OTlZONk4k� ) )
            {
                foreach ( $_obfuscate_iImHk5CLiY2Gk5OTlZONk4k� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
                {
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
                }
            }
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ183.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg']."天".( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg_points'] != 0 ? $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['nokeyreg_points'].QQ142 : "" )."。" );
        }
        else
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ184.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
    }
}
else
{
    $_obfuscate_jpOPko_LjYiHkoqPjZWLiog� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8� );
    if ( $_obfuscate_jpOPko_LjYiHkoqPjZWLiog� !== TRUE )
    {
        exit( "crypteno116" );
    }
    $_obfuscate_ko2Uh4eRkoqRjYqHiIaPjIk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", 1, 1 );
    if ( empty( $_obfuscate_ko2Uh4eRkoqRjYqHiIaPjIk� ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "crypteno117" );
    }
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], "password" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'], "password2" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'], "bdinfo" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'], "addtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM�, "starttime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpM� );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pccode'] = $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
}
if ( SVRID == 2 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['istempuser'] = 1;
}
if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_addtimetype'] && $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� == 0 )
{
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ185.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
    }
    if ( _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'] ) != 0 && _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'] ) < 3 )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ186 );
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'] != "" )
    {
        $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser']."'" );
        if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� ) )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ187 );
        }
        if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ188 );
        }
        if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['islock'] ) != 0 )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ189 );
        }
        if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] ) < time( ) )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ190 );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['parentuser'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'];
    }
}
else
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'] = "";
}
if ( $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� == 0 )
{
    $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = explode( "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
    if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ128 );
    }
    $_obfuscate_iJCHjZWRiJONk5OGlIqMipM� = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� );
    if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipM� ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ129 );
    }
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10 )."' and cztime=0 " );
    if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
    {
        _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 1 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "crypteno111" );
    }
    if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['islock'] != 0 )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "crypteno112" );
    }
    if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['isback'] != 0 )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "crypteno113" );
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['managerid'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['points'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['tag'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['linknum'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keyextattr'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['cday'] * 86400;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = 1;
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sql" );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 232 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "crypteno116" );
    }
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update `kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set cztime=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",czusername='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' where `keys`='".$_obfuscate_j46GkYaTj5KIkIyUh4aTjYs�['keys']."'";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 239 );
    }
    if ( SVRID == 2 )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "insert into kss_tb_sql_active (`tbname`,`username`,`starttime`,`pccode`) values ('".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."')";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 245 );
        }
    }
    $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� = 2;
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
}
else
{
    $_obfuscate_ipGJkpOKioePjIaGkIuQiJA� = array( );
    $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� = array( );
    $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU� = array( );
    foreach ( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
    {
        $_obfuscate_lIqUjpSPk4uMjZKMhoyTlZU� = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�, 4, 6 );
        $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lIqUjpSPk4uMjZKMhoyTlZU�] = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�, 4, 6 );
        $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lIqUjpSPk4uMjZKMhoyTlZU�] = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�, 0, 4 );
        $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lIqUjpSPk4uMjZKMhoyTlZU�] = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�, 10 );
    }
    $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� )."') and isback=0" );
    if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) )
    {
        _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 1 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ130 );
    }
    if ( count( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) != count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
    {
        _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 1 );
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = "";
        foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
        {
            if ( in_array( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys'], $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� ) )
            {
                $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� .= QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ132."\r\n";
            }
        }
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    }
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = "";
    $_obfuscate_homPkY_KioeUiIeMipSQjZU� = 0;
    foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
    {
        if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']] )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = QQ132.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ133."\r\n";
        }
        else if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['islock'] != 0 )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = QQ132.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ134."\r\n";
        }
        else
        {
            if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cztime'] )
            {
                $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = QQ132.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ191."\r\n";
            }
            else
            {
                if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] == $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_keytypeid'] )
                {
                    $_obfuscate_homPkY_KioeUiIeMipSQjZU� += 1;
                }
                if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] ) )
                {
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] + 1;
                    if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'] )
                    {
                        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ136 );
                    }
                    if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'] )
                    {
                        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ137 );
                    }
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] )
                    {
                        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] + 1;
                        if ( 1 < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] )
                        {
                            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'].QQ138 );
                        }
                    }
                }
                else
                {
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['managerid'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tag'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['tag'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = 1;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'];
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] )
                    {
                        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = 1;
                    }
                    else
                    {
                        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = 0;
                    }
                }
            }
        }
    }
    if ( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� != "" )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    }
    $_obfuscate_iYaHkYiJk5WVk4qPkIiRiYo� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
    $_obfuscate_iZSKjI_SipKTioySj4iSjJQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = "";
    $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� = "";
    $_obfuscate_iImPiZWTko6HlI_TiZCSk4g� = 0;
    $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM� = 0;
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_keytypeid'] != "" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_cday'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] <= $_obfuscate_homPkY_KioeUiIeMipSQjZU� )
    {
        $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
        $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
        $_obfuscate_iImPiZWTko6HlI_TiZCSk4g� = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZU� / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_cday'];
        $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM� = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZU� / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_points'];
        if ( $_obfuscate_iImPiZWTko6HlI_TiZCSk4g� != 0 )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_iImPiZWTko6HlI_TiZCSk4g�;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
        }
        if ( $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM� != 0 )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM�;
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",7,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."','')";
    }
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_addtimetype'] && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser'] != "" )
    {
        $_obfuscate_k4uUiZCSkI2PhpWQjZWHjJU� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
        $_obfuscate_iIuSjomOk4eRioaPlJWIiJQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] )
        {
            $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
            $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] )
            {
                $_obfuscate_iImPiZWTko6HlI_TiZCSk4g� += round( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] / 100, 2 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + round( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] / 100, 2 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM� + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] )
            {
                $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM� += floor( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] / 100 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + floor( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] / 100 );
            }
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",4,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."')";
        }
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg� = array( );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_parentuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points2'] )
        {
            $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
            $_obfuscate_kJWKkYuPko2SkZORiI6UiZM� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
            $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
            $_obfuscate_iYqRkpWJiY2Nj4_IkYuJkJU� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_parentuseraddtime'] )
            {
                $_obfuscate_kIeSj42MiJSPjpCRjo2MlZE� = round( $_obfuscate_k4uUiZCSkI2PhpWQjZWHjJU� * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_parentuseraddtime'] / 100, 2 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZE�;
                $_obfuscate_kJWKkYuPko2SkZORiI6UiZM� = $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'];
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZE� * 86400;
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� = QQ192.$_obfuscate_kIeSj42MiJSPjpCRjo2MlZE�."天";
                $_obfuscate_kJWKkYuPko2SkZORiI6UiZM� = $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'];
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points2'] && 0 < $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM� )
            {
                $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpI� = floor( $_obfuscate_iIuSjomOk4eRioaPlJWIiJQ� * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points2'] / 100 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'] + $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpI�;
                $_obfuscate_iYqRkpWJiY2Nj4_IkYuJkJU� = $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'];
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� .= $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpI�.QQ142;
            }
            if ( $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� != "" )
            {
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� .= "，";
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['puser']."'", "sql" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
                {
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
                }
                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4k�.",".$_obfuscate_kJWKkYuPko2SkZORiI6UiZM�.",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQ�.",".$_obfuscate_iYqRkpWJiY2Nj4_IkYuJkJU�.",'','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."')";
            }
        }
    }
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40�;
    if ( 0 < $_obfuscate_iImPiZWTko6HlI_TiZCSk4g� )
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= QQ193.$_obfuscate_iImPiZWTko6HlI_TiZCSk4g�."天";
    }
    if ( 0 < $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM� )
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpM�.QQ142;
    }
    if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� != "" )
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "，";
    }
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",`czusername`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� )."')";
    $_obfuscate_kY2Qi5OGjImIh46TjZKNk48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
    if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48� !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 416 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ194.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",0,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',0,".$_obfuscate_iYaHkYiJk5WVk4qPkIiRiYo�.",0,".$_obfuscate_iZSKjI_SipKTioySj4iSjJQ�.",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."','')";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 424 );
        }
        if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� ) )
        {
            foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
                {
                    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 430 );
                }
            }
        }
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ195.$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�.QQ197.$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday']."天".( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] != 0 ? $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].QQ142 : "" )."。" );
    }
    else
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5U�( "kssdata".QQ196.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."，\r\n".QQ198 );
    }
}
?>
