<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k4aNj4iRh5WPipSRjYeQjocÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( $_obfuscate_i5SGi4qQhoqUko2HhoeTlZMÿ )
{
    global $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8ÿ;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEÿ( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8ÿ );
    exit( $_obfuscate_i5SGi4qQhoqUko2HhoeTlZMÿ );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 0, $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMÿ );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 2 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 4 )
    {
        exit( "kssdata".QQ168 );
    }
    if ( SVRID == 2 )
    {
        exit( "kssdata".QQ169 );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        exit( "kssdata".QQ170.$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 2 )
{
    exit( "crypteno114" );
}
if ( _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ ) !== TRUE )
{
    exit( "crypteno123" );
}
if ( 0 < $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ÿ['maxusernum'] )
{
    $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum,sum(`linknum`) from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ );
    if ( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ÿ['maxusernum'] <= $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48ÿ['tnum'] + ( $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48ÿ['tnum'] - $_obfuscate_iZWGh5SKipCTk4mUkI_Kk48ÿ['tnum'] ) / 2 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
        {
            exit( "crypteno109" );
        }
        exit( "kssdata".QQ171 );
    }
}
$_obfuscate_iImHk5CLiY2Gk5OTlZONk4kÿ = array( );
$_obfuscate_iYuKhpCNhoaJlYmThpOTiIYÿ = FALSE;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" )
{
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] == "" ) )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg'] == "0.00" )
        {
            exit( "kssdata".QQ172 );
        }
        if ( SVRID == 2 )
        {
            exit( "kssdata".QQ173 );
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['freeregs'] == "0" )
        {
            $_obfuscate_h46JiZOTlZSPhpGIj4yHi5Iÿ = "('".join( "','", $_obfuscate_io_UkouIkIyHj42UlI_GiZAÿ )."')";
            $_obfuscate_jI6LkY2TlJSJjJCHlImHj4Yÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_log_havereg where `pccode` in ".$_obfuscate_h46JiZOTlZSPhpGIj4yHi5Iÿ." and `softid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'] );
            if ( empty( $_obfuscate_jI6LkY2TlJSJjJCHlImHj4Yÿ ) )
            {
                exit( "kssdata".QQ174 );
            }
            foreach ( $_obfuscate_io_UkouIkIyHj42UlI_GiZAÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
            {
                $_obfuscate_iImHk5CLiY2Gk5OTlZONk4kÿ[] = "insert into kss_tb_log_havereg (`softid`,`addtime`,`pccode`) values (".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'].",".time( ).",'".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ."')";
            }
        }
        $_obfuscate_iYuKhpCNhoaJlYmThpOTiIYÿ = TRUE;
    }
    else if ( ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) + 1 ) % 33 != 0 )
    {
        exit( "kssdata".QQ175 );
    }
}
if ( 100 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYwÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) )
{
    exit( "kssdata".QQ176 );
}
$_obfuscate_jZCGhpKRipWQjY_UjZWMj5Mÿ = crc32( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'].$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
$_obfuscate_joyHlI2KjY6PkJKQhpSGkI8ÿ = "regu".sprintf( "%u", $_obfuscate_jZCGhpKRipWQjY_UjZWMj5Mÿ );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onlyonebdinfo'] == "1" && !empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] )."'" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        exit( "kssdata".QQ260 );
    }
}
if ( $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMÿ == 0 )
{
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
    {
        exit( "kssdata".QQ177.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
    {
        exit( "kssdata".QQ178.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
    {
        exit( "kssdata".QQ179.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
    {
        exit( "kssdata".QQ180.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
    }
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
    {
        exit( "kssdata".QQ181.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
    }
    $_obfuscate_jpOPko_LjYiHkoqPjZWLiogÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8ÿ );
    if ( $_obfuscate_jpOPko_LjYiHkoqPjZWLiogÿ !== TRUE )
    {
        exit( "kssdata".QQ234 );
    }
    $_obfuscate_h42NjZKIkoqSkouPh5WIiYwÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", 1, 1 );
    if ( empty( $_obfuscate_h42NjZKIkoqSkouPh5WIiYwÿ ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ182 );
    }
    else
    {
        $_obfuscate_ko_OkJOPkIqLjY_Mj4_SjoYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."_recycle` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
        if ( empty( $_obfuscate_ko_OkJOPkIqLjY_Mj4_SjoYÿ ) )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."_recycle` set `username`=concat('delete_',`username`) where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
        }
    }
    if ( $_obfuscate_iYuKhpCNhoaJlYmThpOTiIYÿ === TRUE )
    {
        $_obfuscate_iouSi4_PlIuKhoeUlI_LkpEÿ = $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ÿ['id'];
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['fregmanagerid'] != 0 )
        {
            $_obfuscate_iouSi4_PlIuKhoeUlI_LkpEÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['fregmanagerid'];
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array( "managerid" => $_obfuscate_iouSi4_PlIuKhoeUlI_LkpEÿ, "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], "password" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'], "password2" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'], "cday" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg'], "points" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg_points'], "tag" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['fregtag'], "keyextattr" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['fregattr'], "bdinfo" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'], "addtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ, "starttime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ, "endtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg'] * 86400, "isusetestkey" => 1, "intro" => "æ— å¡æ³¨å†Œ" );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            if ( empty( $_obfuscate_iImHk5CLiY2Gk5OTlZONk4kÿ ) )
            {
                foreach ( $_obfuscate_iImHk5CLiY2Gk5OTlZONk4kÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
                {
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, "sync" );
                }
            }
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ183.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg']."å¤©".( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg_points'] != 0 ? $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['nokeyreg_points'].QQ142 : "" )."ã€‚" );
        }
        else
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ184.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
    }
}
else
{
    $_obfuscate_jpOPko_LjYiHkoqPjZWLiogÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( $_obfuscate_joyHlI2KjY6PkJKQhpSGkI8ÿ );
    if ( $_obfuscate_jpOPko_LjYiHkoqPjZWLiogÿ !== TRUE )
    {
        exit( "crypteno116" );
    }
    $_obfuscate_ko2Uh4eRkoqRjYqHiIaPjIkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", 1, 1 );
    if ( empty( $_obfuscate_ko2Uh4eRkoqRjYqHiIaPjIkÿ ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "crypteno117" );
    }
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array( "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], "password" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'], "password2" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'], "bdinfo" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'], "addtime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ, "starttime" => $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['pccode'] = $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ;
}
if ( SVRID == 2 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['istempuser'] = 1;
}
if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_addtimetype'] && $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMÿ == 0 )
{
    $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'] );
    if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ185.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
    }
    if ( _obfuscate_ioqHi5WHiJKIkoeIhouHjYwÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'] ) != 0 && _obfuscate_ioqHi5WHiJKIkoeIhouHjYwÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'] ) < 3 )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ186 );
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'] != "" )
    {
        $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser']."'" );
        if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ ) )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ187 );
        }
        if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ188 );
        }
        if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['islock'] ) != 0 )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ189 );
        }
        if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] ) < time( ) )
        {
            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ190 );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['parentuser'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'];
    }
}
else
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'] = "";
}
if ( $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMÿ == 0 )
{
    $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ = explode( "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
    if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ128 );
    }
    $_obfuscate_iJCHjZWRiJONk5OGlIqMipMÿ = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ );
    if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipMÿ ) )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ129 );
    }
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10 )."' and cztime=0 " );
    if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
    {
        _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 1 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "crypteno111" );
    }
    if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['islock'] != 0 )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "crypteno112" );
    }
    if ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['isback'] != 0 )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "crypteno113" );
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['managerid'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['managerid'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'] * 86400;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = 1;
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "sql" );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 232 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "crypteno116" );
    }
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update `kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set cztime=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",czusername='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' where `keys`='".$_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keys']."'";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 239 );
    }
    if ( SVRID == 2 )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "insert into kss_tb_sql_active (`tbname`,`username`,`starttime`,`pccode`) values ('".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."')";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 245 );
        }
    }
    $_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMÿ = 2;
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
}
else
{
    $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ = array( );
    $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ = array( );
    $_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ = array( );
    foreach ( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
    {
        $_obfuscate_lIqUjpSPk4uMjZKMhoyTlZUÿ = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ, 4, 6 );
        $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lIqUjpSPk4uMjZKMhoyTlZUÿ] = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ, 4, 6 );
        $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lIqUjpSPk4uMjZKMhoyTlZUÿ] = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ, 0, 4 );
        $_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lIqUjpSPk4uMjZKMhoyTlZUÿ] = substr( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ, 10 );
    }
    $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ )."') and isback=0" );
    if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
    {
        _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 1 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ130 );
    }
    if ( count( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) != count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) )
    {
        _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 1 );
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = "";
        foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
        {
            if ( in_array( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys'], $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ ) )
            {
                $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ .= QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ132."\r\n";
            }
        }
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
    }
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = "";
    $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ = 0;
    foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
    {
        if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']] )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = QQ132.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ133."\r\n";
        }
        else if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['islock'] != 0 )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = QQ132.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ134."\r\n";
        }
        else
        {
            if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cztime'] )
            {
                $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = QQ132.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ191."\r\n";
            }
            else
            {
                if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] == $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_keytypeid'] )
                {
                    $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ += 1;
                }
                if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] ) )
                {
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['points'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] + 1;
                    if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'] )
                    {
                        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ136 );
                    }
                    if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'] )
                    {
                        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ137 );
                    }
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] )
                    {
                        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['isusetestkey'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['isusetestkey'] + 1;
                        if ( 1 < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['isusetestkey'] )
                        {
                            _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'].QQ138 );
                        }
                    }
                }
                else
                {
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['managerid'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['tag'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['tag'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['points'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = 1;
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'];
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'];
                    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] )
                    {
                        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['isusetestkey'] = 1;
                    }
                    else
                    {
                        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['isusetestkey'] = 0;
                    }
                }
            }
        }
    }
    if ( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ != "" )
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
    }
    $_obfuscate_iYaHkYiJk5WVk4qPkIiRiYoÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
    $_obfuscate_iZSKjI_SipKTioySj4iSjJQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = "";
    $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ = "";
    $_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ = 0;
    $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ = 0;
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_keytypeid'] != "" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_cday'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] <= $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ )
    {
        $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
        $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
        $_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_cday'];
        $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_points'];
        if ( $_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ != 0 )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
        }
        if ( $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ != 0 )
        {
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ;
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",7,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."','')";
    }
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_addtimetype'] && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser'] != "" )
    {
        $_obfuscate_k4uUiZCSkI2PhpWQjZWHjJUÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
        $_obfuscate_iIuSjomOk4eRioaPlJWIiJQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] )
        {
            $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
            $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] )
            {
                $_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ += round( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] / 100, 2 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + round( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] / 100, 2 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] )
            {
                $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ += floor( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] / 100 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + floor( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] / 100 );
            }
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",4,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."')";
        }
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ = array( );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_parentuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points2'] )
        {
            $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'];
            $_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'];
            $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'];
            $_obfuscate_iYqRkpWJiY2Nj4_IkYuJkJUÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'];
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_parentuseraddtime'] )
            {
                $_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ = round( $_obfuscate_k4uUiZCSkI2PhpWQjZWHjJUÿ * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_parentuseraddtime'] / 100, 2 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ;
                $_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ = $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'];
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ * 86400;
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ = QQ192.$_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ."å¤©";
                $_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ = $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'];
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points2'] && 0 < $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ )
            {
                $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpIÿ = floor( $_obfuscate_iIuSjomOk4eRioaPlJWIiJQÿ * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points2'] / 100 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'] + $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpIÿ;
                $_obfuscate_iYqRkpWJiY2Nj4_IkYuJkJUÿ = $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'];
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ .= $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpIÿ.QQ142;
            }
            if ( $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ != "" )
            {
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ .= "ï¼Œ";
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['puser']."'", "sql" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
                {
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
                }
                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ.",".$_obfuscate_kJWKkYuPko2SkZORiI6UiZMÿ.",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ.",".$_obfuscate_iYqRkpWJiY2Nj4_IkYuJkJUÿ.",'','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."')";
            }
        }
    }
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ;
    if ( 0 < $_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ )
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= QQ193.$_obfuscate_iImPiZWTko6HlI_TiZCSk4gÿ."å¤©";
    }
    if ( 0 < $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ )
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= $_obfuscate_ioyRlYaGjIuMh4mJk5GIkpMÿ.QQ142;
    }
    if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ != "" )
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ï¼Œ";
    }
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",`czusername`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ )."')";
    $_obfuscate_kY2Qi5OGjImIh46TjZKNk48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
    if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48ÿ !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 416 );
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ194.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",0,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',0,".$_obfuscate_iYaHkYiJk5WVk4qPkIiRiYoÿ.",0,".$_obfuscate_iZSKjI_SipKTioySj4iSjJQÿ.",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."','')";
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 424 );
        }
        if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ ) )
        {
            foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
                {
                    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 430 );
                }
            }
        }
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ195.$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ.QQ197.$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday']."å¤©".( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] != 0 ? $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].QQ142 : "" )."ã€‚" );
    }
    else
    {
        _obfuscate_jI2LjJOIhoeUi4iVjYmKh5Uÿ( "kssdata".QQ196.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."ï¼Œ\r\n".QQ198 );
    }
}
?>
