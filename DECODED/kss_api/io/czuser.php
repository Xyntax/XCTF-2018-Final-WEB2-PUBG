<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kouLiIaPjJWUhoqLkYaQjIg�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( SVRID == 2 )
{
    exit( "kssdata".QQ120 );
}
_obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 0 );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] != "USOFT" )
{
    exit( "kssdata".QQ121 );
}
if ( 2 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] )
{
    exit( "kssdata".QQ122 );
}
if ( ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) + 1 ) % 33 != 0 )
{
    exit( "kssdata".QQ123 );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
{
    exit( "kssdata".QQ124.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
}
$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� = _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
if ( $_obfuscate_ho6VjYuRh5SJkomOjouOiY4� !== TRUE )
{
    exit( "kssdata".QQ125.$_obfuscate_ho6VjYuRh5SJkomOjouOiY4� );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    exit( "kssdata".QQ126 );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['islock'] )
{
    exit( "kssdata".QQ127 );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
{
    exit( "kssdata".QQ128 );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] < PETIME )
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400;
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "username" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username'], "starttime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'], "endtime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'], "cztimes" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cztimes'], "cday" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'], "points" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'], "managerid" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['managerid'] );
$_obfuscate_jI6JkpSHj5SQkY2UiIeJkYc� = 0;
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['starttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpM�;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = 0;
    $_obfuscate_jI6JkpSHj5SQkY2UiIeJkYc� = 8;
}
$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
$_obfuscate_k5SGkIiQkJKPiIuUlYmHhow� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
$_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = explode( "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] );
if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
{
    exit( "kssdata".QQ128 );
}
$_obfuscate_iJCHjZWRiJONk5OGlIqMipM� = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� );
if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipM� ) )
{
    exit( "kssdata".QQ129 );
}
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
    exit( "kssdata".QQ130 );
}
if ( count( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� ) != count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� ) )
{
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = "";
    _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( 1 );
    foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
    {
        if ( in_array( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys'], $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� ) )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� .= QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ132."\r\n";
        }
    }
    exit( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
}
$_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = "";
$_obfuscate_homPkY_KioeUiIeMipSQjZU� = 0;
$_obfuscate_jImSiIyUiouIiZWUlIeHh5E� = 0;
$_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� = 0;
foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYs� as $_obfuscate_lZSGkoqUio_RlZGNkY6Liok� )
{
    if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']] )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ133."，\r\n";
    }
    else if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['islock'] != 0 )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ134."\r\n";
    }
    else
    {
        if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cztime'] )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = QQ131.$_obfuscate_ipGJkpOKioePjIaGkIuQiJA�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJU�[$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keys']].QQ135."\r\n";
        }
        else
        {
            if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] == $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_keytypeid'] )
            {
                $_obfuscate_homPkY_KioeUiIeMipSQjZU� += 1;
            }
            $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� += $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
            $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� += $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['points'];
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['cday'] * 86400;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cztimes'] + 1;
            $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['managerid'];
            if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] ) )
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'];
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'];
            }
            else
            {
                if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyextattr'] )
                {
                    exit( "kssdata".QQ136 );
                }
                if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['linknum'] )
                {
                    exit( "kssdata".QQ137 );
                }
            }
            if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'] )
            {
                $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['isusetestkey'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['isusetestkey'] + 1;
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['isusetestkey'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['isusetestkey'];
                if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['isusetestkey'] )
                {
                    exit( "kssdata".$_obfuscate_lZSGkoqUio_RlZGNkY6Liok�['keyfix'].QQ138 );
                    break;
                }
            }
        }
    }
}
if ( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� != "" )
{
    exit( "kssdata".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� = array( );
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cztimes'] )
{
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'] != $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] && time( ) + 86400 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400 )
    {
        exit( "kssdata".QQ139 );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] != $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] && time( ) + 86400 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] * 86400 )
    {
        exit( "kssdata".QQ140 );
    }
}
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",".( 1 + $_obfuscate_jI6JkpSHj5SQkY2UiIeJkYc� ).",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_k5SGkIiQkJKPiIuUlYmHhow�.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."','')";
$_obfuscate_komOhpCIlI6SkYqSkYqHhoY� = 0;
$_obfuscate_jomKiJWJhoyUlY_JjJKJiI8� = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_keytypeid'] != "" && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_cday'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] <= $_obfuscate_homPkY_KioeUiIeMipSQjZU� )
{
    $_obfuscate_komOhpCIlI6SkYqSkYqHhoY� = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZU� / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_cday'];
    $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8� = floor( $_obfuscate_homPkY_KioeUiIeMipSQjZU� / $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_number'] ) * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['czzs_points'];
    if ( $_obfuscate_komOhpCIlI6SkYqSkYqHhoY� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_komOhpCIlI6SkYqSkYqHhoY�;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] + $_obfuscate_komOhpCIlI6SkYqSkYqHhoY� * 86400;
    }
    if ( $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8� != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8�;
    }
    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",7,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".( $_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8� + $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".( $_obfuscate_k5SGkIiQkJKPiIuUlYmHhow� + $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey']."','')";
}
$_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� = "";
$_obfuscate_i5KQiouLlYiLjJCLkomJjZQ� = 0;
$_obfuscate_iIaKj4eHh46NkYeHiJWUjpI� = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_addtimetype'] == 2 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser'] != "" )
{
    $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = 1;
    $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser']."'" );
    if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo� ) )
    {
        $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = 0;
    }
    else
    {
        if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] )
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = 0;
        }
        $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['starttime'] + $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'] * 86400;
        if ( intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['islock'] ) != 0 || intval( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] ) < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� )
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� = 0;
        }
    }
    if ( $_obfuscate_h4aOh4mKiZCUkoaIhouTiIg� == 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['parentuser'] = "";
    }
    else
    {
        $_obfuscate_k4uUiZCSkI2PhpWQjZWHjJU� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'];
        $_obfuscate_iIuSjomOk4eRioaPlJWIiJQ� = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'];
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] )
        {
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] )
            {
                $_obfuscate_i5KQiouLlYiLjJCLkomJjZQ� = round( $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_newuseraddtime'] / 100, 2 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] + $_obfuscate_i5KQiouLlYiLjJCLkomJjZQ�;
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] + $_obfuscate_i5KQiouLlYiLjJCLkomJjZQ� * 86400;
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] )
            {
                $_obfuscate_iIaKj4eHh46NkYeHiJWUjpI� = floor( $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points1'] / 100 );
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] + $_obfuscate_iIaKj4eHh46NkYeHiJWUjpI�;
            }
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",4,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".( $_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8� + $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� + $_obfuscate_komOhpCIlI6SkYqSkYqHhoY� ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".( $_obfuscate_k5SGkIiQkJKPiIuUlYmHhow� + $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� + $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8� ).",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."')";
        }
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg� = array( );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_parentuseraddtime'] || 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points2'] )
        {
            $_obfuscate_iJSNkomSi4qVlJOHlYuSi4k� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
            $_obfuscate_k42Sho2GiIeHk42OjIaPipQ� = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
            $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'];
            $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'];
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_parentuseraddtime'] && 0 < $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� )
            {
                $_obfuscate_kIeSj42MiJSPjpCRjo2MlZE� = round( $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_parentuseraddtime'] / 100, 2 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZE�;
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['endtime'] + $_obfuscate_kIeSj42MiJSPjpCRjo2MlZE� * 86400;
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� = QQ141.$_obfuscate_kIeSj42MiJSPjpCRjo2MlZE�."天";
            }
            if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points2'] && 0 < $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� )
            {
                $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpI� = floor( $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['tg_points2'] / 100 );
                $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'] + $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpI�;
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� .= $_obfuscate_j4eQiIyUjoeRiY6UjJSQjpI�.QQ142;
            }
            if ( $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� != "" )
            {
                $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40� .= "，";
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�, "username='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['parentuser']."'", "sql" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
                {
                    $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�;
                }
                $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE�[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['username']."',".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['cday'].",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['cday'].",".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIo�['points'].",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYg�['points'].",'','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."')";
            }
        }
    }
}
$_obfuscate_kZOKjJCNkZGVh4yPkoyQk4c� = $_obfuscate_jImSiIyUiouIiZWUlIeHh5E� + $_obfuscate_komOhpCIlI6SkYqSkYqHhoY� + $_obfuscate_i5KQiouLlYiLjJCLkomJjZQ�;
$_obfuscate_jouOjpWUiIqRi4eNiIiRjYw� = $_obfuscate_jYmSi4iRi4mJjZWUjI2PjIs� + $_obfuscate_jomKiJWJhoyUlY_JjJKJiI8� + $_obfuscate_iIaKj4eHh46NkYeHiJWUjpI�;
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = $_obfuscate_k42Nk5GRj42Ii4iKjo2Sk40�;
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",`czusername`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48� )."')";
$_obfuscate_kY2Qi5OGjImIh46TjZKNk48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48� !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 251 );
    exit( "kssdata".QQ143.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['starttime'] + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sql" );
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 258 );
    exit( "kssdata".QQ144.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� ) )
{
    foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpE� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            _obfuscate_h4aIlI6QlYmUkY6MlI6Qhos�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ), __FILE__, 266 );
        }
    }
}
exit( "kssdata".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�.QQ145.$_obfuscate_kZOKjJCNkZGVh4yPkoyQk4c�."天".$_obfuscate_jouOjpWUiIqRi4eNiIiRjYw�.QQ142 );
?>
