<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j5KUjJGLkIeIiYeJiJSTjI4ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'] == 1 )
{
    exit( "kssdata".QQ199 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_set'] != 1 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_set'] != 3 )
{
    exit( "kssdata".QQ200 );
}
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['isrun'] == "1" )
{
    exit( "kssdata".QQ201 );
}
if ( SVRID == 2 )
{
    exit( "kssdata".QQ202 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) != 32 )
    {
        exit( "kssdata".QQ203 );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) )
    {
        exit( "kssdata".QQ204 );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 20 );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2']."'" );
}
else
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password']."'" );
}
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    exit( "kssdata".QQ205 );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
{
    exit( "kssdata".QQ206 );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] == 1 )
{
    exit( "kssdata".QQ207 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] == "1" )
{
    exit( "kssdata".QQ208 );
}
if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
{
    $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid']."'" );
    if ( empty( $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ ) )
    {
        exit( "kssdata".QQ209 );
    }
    $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['unlocktimes'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['pccode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ = $_obfuscate_j5CSkZSGiJKNiZSQlY_Iio0ÿ['lasttime'];
}
else
{
    $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['unlockday'];
    $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['unlocktimes'];
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pccode'];
    $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lasttime'];
}
if ( $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ == "" )
{
    exit( "kssdata".QQ210 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_set'] == 3 )
{
    if ( _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ ) !== FALSE )
    {
        exit( "kssdata".QQ232 );
    }
    if ( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_j42KiZKIk5OMi4yGlYyPlI0ÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_autotime'] * 60 )
    {
        exit( "kssdata".QQ233 );
    }
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_set'] == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ ) === FALSE )
{
    exit( "kssdata".QQ211 );
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array( );
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlockday'] = $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ;
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ;
if ( $_obfuscate_h5GPkpGLkYePioqSiomMlZMÿ == date( "d" ) )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] <= $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] < 2 )
    {
        exit( "kssdata".QQ212 );
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlocktimes'] = $_obfuscate_j5WGlIqLlYqNlYqJjo_JiJUÿ + 1;
}
else
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlockday'] = date( "d" );
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlocktimes'] = 1;
}
$_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "";
if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] && 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'] )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_ctset'] == 1 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
        if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ || $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] < 0 )
        {
            exit( "kssdata".QQ237 );
        }
        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'].",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",'','')";
    }
    else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_times'] < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlocktimes'] )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['unbindpc_changetime'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] * 86400;
        if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ || $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] < 0 )
        {
            exit( "kssdata".QQ237 );
        }
        $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",6,'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'].",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",'','')";
    }
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['pccode'] = "";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] == 1 )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        exit( "kssdata".QQ213.$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
}
$_obfuscate_iY2UhpKLiJKRjIiRjIyHi4kÿ = array( "unlockday" => $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlockday'], "unlocktimes" => $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlocktimes'], "pccode" => "" );
unset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlockday'] );
unset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['unlocktimes'] );
if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ ) )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        exit( "kssdata".QQ213."1!".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
    }
}
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iJOJipCPk4yQlJOMlIeTjYsÿ( "kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_iY2UhpKLiJKRjIiRjIyHi4kÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'], "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
{
    exit( "kssdata".QQ213."2!".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
}
if ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kpSSj5GNj4eIh5WGkI_Gk4sÿ, "sync" );
}
exit( "kssdata".QQ214 );
?>
