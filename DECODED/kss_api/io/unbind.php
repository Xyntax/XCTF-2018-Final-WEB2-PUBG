<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j5KUjJGLkIeIiYeJiJSTjI4�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 1 )
{
    exit( "kssdata".QQ199 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_set'] != 1 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_set'] != 3 )
{
    exit( "kssdata".QQ200 );
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['isrun'] == "1" )
{
    exit( "kssdata".QQ201 );
}
if ( SVRID == 2 )
{
    exit( "kssdata".QQ202 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'];
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) != 32 )
    {
        exit( "kssdata".QQ203 );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) )
    {
        exit( "kssdata".QQ204 );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'], 20 );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2']."'" );
}
else
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password']."'" );
}
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    exit( "kssdata".QQ205 );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] )
{
    exit( "kssdata".QQ206 );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] == 1 )
{
    exit( "kssdata".QQ207 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode2'] == "1" )
{
    exit( "kssdata".QQ208 );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] )
{
    $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid']."'" );
    if ( empty( $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0� ) )
    {
        exit( "kssdata".QQ209 );
    }
    $_obfuscate_h5GPkpGLkYePioqSiomMlZM� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['unlocktimes'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['pccode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0�['lasttime'];
}
else
{
    $_obfuscate_h5GPkpGLkYePioqSiomMlZM� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlocktimes'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lasttime'];
}
if ( $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� == "" )
{
    exit( "kssdata".QQ210 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_set'] == 3 )
{
    if ( _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� ) !== FALSE )
    {
        exit( "kssdata".QQ232 );
    }
    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpM� - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0� < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_autotime'] * 60 )
    {
        exit( "kssdata".QQ233 );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_set'] == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� ) === FALSE )
{
    exit( "kssdata".QQ211 );
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( );
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlockday'] = $_obfuscate_h5GPkpGLkYePioqSiomMlZM�;
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU�;
if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZM� == date( "d" ) )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] <= $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] < 2 )
    {
        exit( "kssdata".QQ212 );
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJU� + 1;
}
else
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlockday'] = date( "d" );
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlocktimes'] = 1;
}
$_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "";
if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] && 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'] )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_ctset'] == 1 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
        if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� || $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] < 0 )
        {
            exit( "kssdata".QQ237 );
        }
        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'].",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",'','')";
    }
    else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_times'] < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlocktimes'] )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_changetime'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] * 86400;
        if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpM� || $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] < 0 )
        {
            exit( "kssdata".QQ237 );
        }
        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpM�.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'].",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'].",'','')";
    }
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['pccode'] = "";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] == 1 )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        exit( "kssdata".QQ213.$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
}
$_obfuscate_iY2UhpKLiJKRjIiRjIyHi4k� = array( "unlockday" => $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlockday'], "unlocktimes" => $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlocktimes'], "pccode" => "" );
unset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlockday'] );
unset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['unlocktimes'] );
if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� ) )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        exit( "kssdata".QQ213."1!".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
}
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�, $_obfuscate_iY2UhpKLiJKRjIiRjIyHi4k�, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'], "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
{
    exit( "kssdata".QQ213."2!".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
if ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s� != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4s�, "sync" );
}
exit( "kssdata".QQ214 );
?>
