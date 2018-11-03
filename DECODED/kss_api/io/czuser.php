<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kouLiIaPjJWUhoqLkYaQjIgÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( SVRID == 2 )
{
    exit( "kssdata".QQ120 );
}
_obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 0 );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] != "USOFT" )
{
    exit( "kssdata".QQ121 );
}
if ( 2 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] )
{
    exit( "kssdata".QQ122 );
}
if ( ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) + 1 ) % 33 != 0 )
{
    exit( "kssdata".QQ123 );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
{
    exit( "kssdata".QQ124.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ !== TRUE )
{
    exit( "kssdata".QQ125.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4ÿ );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    exit( "kssdata".QQ126 );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
{
    exit( "kssdata".QQ127 );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
{
    exit( "kssdata".QQ128 );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] < PETIME )
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400;
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array( "username" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username'], "starttime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'], "endtime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'], "cztimes" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cztimes'], "cday" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'], "points" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'], "managerid" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['managerid'] );
$_obfuscate_jI6JkpSHj5SQkY2UiIeJkYcÿ = 0;
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['starttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = 0;
    $_obfuscate_jI6JkpSHj5SQkY2UiIeJkYcÿ = 8;
}
$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8ÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
$_obfuscate_k5SGkIiQkJKPiIuUlYmHhowÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
$_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ = explode( "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) )
{
    exit( "kssdata".QQ128 );
}
$_obfuscate_iJCHjZWRiJONk5OGlIqMipMÿ = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ );
if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipMÿ ) )
{
    exit( "kssdata".QQ129 );
}
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
    exit( "kssdata".QQ130 );
}
if ( count( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) != count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) )
{
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = "";
    _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ÿ( 1 );
    foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
    {
        if ( in_array( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys'], $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ ) )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ .= QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ132."\r\n";
        }
    }
    exit( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
}
$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = "";
$_obfuscate_homPkY_KioeUiIeMipSQjZUÿ = 0;
$_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ = 0;
$_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ = 0;
foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
{
    if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']] )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ133."ï¼Œ\r\n";
    }
    else if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['islock'] != 0 )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ134."\r\n";
    }
    else
    {
        if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cztime'] )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ = QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys']].QQ135."\r\n";
        }
        else
        {
            if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] == $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_keytypeid'] )
            {
                $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ += 1;
            }
            $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ += $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'];
            $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ += $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['points'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['points'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'] * 86400;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] + 1;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['managerid'];
            if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] ) )
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'];
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'];
            }
            else
            {
                if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'] )
                {
                    exit( "kssdata".QQ136 );
                }
                if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'] )
                {
                    exit( "kssdata".QQ137 );
                }
            }
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] )
            {
                $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['isusetestkey'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['isusetestkey'] + 1;
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['isusetestkey'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['isusetestkey'];
                if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['isusetestkey'] )
                {
                    exit( "kssdata".$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'].QQ138 );
                    break;
                }
            }
        }
    }
}
if ( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ != "" )
{
    exit( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosÿ );
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = array( );
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cztimes'] )
{
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'] != $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] && time( ) + 86400 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400 )
    {
        exit( "kssdata".QQ139 );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] != $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] && time( ) + 86400 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400 )
    {
        exit( "kssdata".QQ140 );
    }
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",".( 1 + $_obfuscate_jI6JkpSHj5SQkY2UiIeJkYcÿ ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8ÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_k5SGkIiQkJKPiIuUlYmHhowÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."','')";
$_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ = 0;
$_obfuscate_jomKiJWJhoyUlY_JjJKJiI8ÿ = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_keytypeid'] != "" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_cday'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] <= $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ )
{
    $_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_cday'];
    $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8ÿ = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZUÿ / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['czzs_points'];
    if ( $_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] + $_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ * 86400;
    }
    if ( $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8ÿ != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8ÿ;
    }
    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",7,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".( $_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8ÿ + $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".( $_obfuscate_k5SGkIiQkJKPiIuUlYmHhowÿ + $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."','')";
}
$_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ = "";
$_obfuscate_i5KQiouLlYiLjJCLkomJjZQÿ = 0;
$_obfuscate_iIaKj4eHh46NkYeHiJWUjpIÿ = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_addtimetype'] == 2 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser'] != "" )
{
    $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = 1;
    $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser']."'" );
    if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ ) )
    {
        $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = 0;
    }
    else
    {
        if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] )
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = 0;
        }
        $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['starttime'] + $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'] * 86400;
        if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['islock'] ) != 0 || intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] ) < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ )
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = 0;
        }
    }
    if ( $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ == 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['parentuser'] = "";
    }
    else
    {
        $_obfuscate_k4uUiZCSkI2PhpWQjZWHjJUÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
        $_obfuscate_iIuSjomOk4eRioaPlJWIiJQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] )
        {
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] )
            {
                $_obfuscate_i5KQiouLlYiLjJCLkomJjZQÿ = round( $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_newuseraddtime'] / 100, 2 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_i5KQiouLlYiLjJCLkomJjZQÿ;
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] + $_obfuscate_i5KQiouLlYiLjJCLkomJjZQÿ * 86400;
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] )
            {
                $_obfuscate_iIaKj4eHh46NkYeHiJWUjpIÿ = floor( $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points1'] / 100 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_iIaKj4eHh46NkYeHiJWUjpIÿ;
            }
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",4,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".( $_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8ÿ + $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ + $_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".( $_obfuscate_k5SGkIiQkJKPiIuUlYmHhowÿ + $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ + $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8ÿ ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."')";
        }
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ = array( );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_parentuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points2'] )
        {
            $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'];
            $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'];
            $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'];
            $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'];
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_parentuseraddtime'] && 0 < $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ )
            {
                $_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ = round( $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_parentuseraddtime'] / 100, 2 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ;
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ * 86400;
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ = QQ141.$_obfuscate_kIeSj42MiJSPjpCRjo2MlZEÿ."å¤©";
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points2'] && 0 < $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ )
            {
                $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpIÿ = floor( $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['tg_points2'] / 100 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'] + $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpIÿ;
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ .= $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpIÿ.QQ142;
            }
            if ( $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ != "" )
            {
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ .= "ï¼Œ";
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ, "username='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser']."'", "sql" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
                {
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
                }
                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."',".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'].",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'].",".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'].",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'].",'','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."')";
            }
        }
    }
}
$_obfuscate_kZOKjJCNkZGVh4yPkoyQk4cÿ = $_obfuscate_jImSiIyUiouIiZWUlIeHh5Eÿ + $_obfuscate_komOhpCIlI6SkYqSkYqHhoYÿ + $_obfuscate_i5KQiouLlYiLjJCLkomJjZQÿ;
$_obfuscate_jouOjpWUiIqRi4eNiIiRjYwÿ = $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIsÿ + $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8ÿ + $_obfuscate_iIaKj4eHh46NkYeHiJWUjpIÿ;
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40ÿ;
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",`czusername`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ )."')";
$_obfuscate_kY2Qi5OGjImIh46TjZKNk48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48ÿ !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 251 );
    exit( "kssdata".QQ143.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['starttime'] + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sql" );
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 258 );
    exit( "kssdata".QQ144.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
}
if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ ) )
{
    foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 266 );
        }
    }
}
exit( "kssdata".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ.QQ145.$_obfuscate_kZOKjJCNkZGVh4yPkoyQk4cÿ."å¤©".$_obfuscate_jouOjpWUiIqRi4eNiIiRjYwÿ.QQ142 );
?>
