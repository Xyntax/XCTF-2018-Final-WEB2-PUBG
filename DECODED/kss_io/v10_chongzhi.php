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

function zsarr_sort( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ, $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ )
{
    if ( $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ['num'] == $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ['num'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "328", "ä½œè€…åœ¨åå°è®¾ç½®ä¸æ­£ç¡®ï¼šå‘ç°å¡åç›¸åŒå……å€¼å¼ æ•°ç›¸åŒçš„è®°å½•ã€‚" );
    }
    if ( $_obfuscate_j4qUhoiVipWQj4iNh5CJj4wÿ['num'] < $_obfuscate_iJSNjIuPjoqSjYyUiIyIi5Aÿ['num'] )
    {
        return -1;
    }
    return 1;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( SVRID == 2 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "308", "å¤‡ç”¨æœåŠ¡å™¨ç¦æ­¢å¯¹å¸å·å……å€¼ï¼" );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ = array( );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "czkey" );
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] === FALSE )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = "";
}
if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) == "" )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "309", "ä½ å¥½åƒæ²¡æœ‰è¾“å…¥è¦å……å€¼çš„ç”¨æˆ·åï¼" );
}
if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) < 3 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "310", "ç”¨æˆ·åé•¿åº¦å°äº3ä½ã€‚" );
}
if ( ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] ) + 1 ) % 33 != 0 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "311", "æ³¨å†Œå¡å¡«å†™é”™è¯¯ï¼Œé•¿åº¦å¿…é¡»32ä½ï¼Œå¤šå¼ å¡å·è¯·ç”¨è‹±æ–‡é€—å·åˆ†éš”ã€‚" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] != "USOFT" )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "312", "å¡æ¨¡å¼è½¯ä»¶ä¸èƒ½ä½¿ç”¨å……å€¼åŠŸèƒ½ï¼" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 3 || $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softstatus'] == 4 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "313", "è½¯ä»¶å·²å…³é—­ç”¨æˆ·å……å€¼åŠŸèƒ½ï¼" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "314", "ç”¨æˆ·å¸å·æœªæ‰¾åˆ°ï¼Œæ— æ³•å……å€¼ã€‚" );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "315", "ç”¨æˆ·å¸å·è¢«é”å®šï¼Œæ— æ³•å……å€¼ã€‚" );
}
if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "316", "å…¬ç”¨å¸å·ä¸å…è®¸å……å€¼ã€‚ï¼ˆå¦‚æœä¸æ˜¯å…¬ç”¨å¸å·å¯èƒ½æ˜¯ä½ çš„å¸å·æœ‰æ•ˆæœŸè¶…å‡ºè®¾å®šï¼‰" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] < PETIME )
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] * 86400;
}
$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ = array( "username" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username'], "starttime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'], "endtime" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'], "cztimes" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cztimes'], "cday" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'], "points" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'], "keyextattr" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'], "linknum" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'], "managerid" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['managerid'], "parentuser" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser'] );
$_obfuscate_io6Jj4aRipKKkoiOi5SJi5Uÿ = 1;
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ )
{
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['starttime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = 0;
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = "";
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = 1;
    $_obfuscate_jI6JkpSHj5SQkY2UiIeJkYcÿ = 9;
}
$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8ÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
$_obfuscate_k5SGkIiQkJKPiIuUlYmHhowÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = str_replace( ",", "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
$_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ = explode( "|", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] );
if ( 5 < count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "317", "æ¯æ¬¡æœ€å¤šå¯ä½¿ç”¨äº”å¼ æ³¨å†Œå¡" );
}
$_obfuscate_iJCHjZWRiJONk5OGlIqMipMÿ = array_unique( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ );
if ( count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) != count( $_obfuscate_iJCHjZWRiJONk5OGlIqMipMÿ ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "318", "ä½ è¾“å…¥çš„å¡å·æœ‰é‡å¤çš„ã€‚" );
}
$_obfuscate_jIaRh4iNjpKMioaTjZWGkY4ÿ = array( );
$_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ = array( );
$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ = array( );
$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ = array( );
foreach ( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ as $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
{
    $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ, 4, 6 );
    $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ, 0, 4 );
    $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ, 4, 6 );
    $_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ, 10 );
    $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4ÿ[] = substr( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ, 0, 4 );
}
$_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ )."') and isback=0" );
if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "319", "æ³¨å†Œå¡æœªæ‰¾åˆ°" );
}
if ( count( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) != count( $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ ) )
{
    $_obfuscate_jY6MioyHj4iOi4aUjpOTkpQÿ = array( );
    foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
    {
        $_obfuscate_jY6MioyHj4iOi4aUjpOTkpQÿ[] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys'];
    }
    foreach ( $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
    {
        if ( in_array( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ, $_obfuscate_jY6MioyHj4iOi4aUjpOTkpQÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "320", "æ³¨å†Œå¡å·VAL_errkeyæœªæ‰¾åˆ°ã€‚", array( "VAL_errkey" => $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] ) );
        }
    }
}
$_obfuscate_j5CIk4qSjZKKjImVkYmHh48ÿ = 0;
$_obfuscate_jpKNh4eVkY2Tio6RlZGMiI8ÿ = 0;
$_obfuscate_ipCMlJGQiY2ShoqQjImHlI0ÿ = array( );
foreach ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ as $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ )
{
    $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keys'];
    $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYYÿ = $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ].$_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ].$_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ];
    if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] != $_obfuscate_ipGJkpOKioePjIaGkIuQiJAÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] || $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyspassword'] != $_obfuscate_lZONjIiPhoiGk4_JkJKGlJUÿ[$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "321", "æ³¨å†Œå¡VAL_errkeyé”™è¯¯ã€‚", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYYÿ ) );
    }
    else
    {
        if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['islock'] != 0 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "322", "æ³¨å†Œå¡VAL_errkeyè¢«é”å®šã€‚", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYYÿ ) );
        }
        if ( 0 < $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cztime'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "323", "æ³¨å†Œå¡VAL_errkeyå·²ä½¿ç”¨è¿‡ã€‚", array( "VAL_errkey" => $_obfuscate_kJKGlYqQkoiHjYeVkIuKkYYÿ ) );
        }
        if ( isset( $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0ÿ['keyextattr'] ) )
        {
            $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0ÿ['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'];
            $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0ÿ['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'];
            if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'] )
            {
                if ( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] == "" )
                {
                    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['keyextattr'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'];
                }
                else
                {
                    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "324", "ä½ æ‰€ä½¿ç”¨çš„æ³¨å†Œå¡å¦‚åŸå¸å·çš„é™„å±æ€§ä¸åŒï¼Œä¸å…è®¸ä½¿ç”¨ã€‚" );
                }
            }
            if ( $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'] < $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "325", "ä½ æ‰€ä½¿ç”¨çš„æ³¨å†Œå¡é€šé“å·å°äºåŸå¡ï¼Œä¸å…è®¸ä½¿ç”¨ã€‚" );
            }
            else
            {
                $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['linknum'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'];
            }
        }
        else
        {
            if ( $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0ÿ['keyextattr'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyextattr'] )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "326", "ä¸åŒé™„å±æ€§çš„æ³¨å†Œå¡ä¸èƒ½æ··åœ¨ä¸€èµ·ä½¿ç”¨ã€‚" );
            }
            if ( $_obfuscate_ipCMlJGQiY2ShoqQjImHlI0ÿ['linknum'] != $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['linknum'] )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "327", "ä¸åŒé€šé“æ•°çš„æ³¨å†Œå¡ä¸èƒ½æ··åœ¨ä¸€èµ·ä½¿ç”¨ã€‚" );
            }
        }
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onetimeskeyattrid'] == $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "SELECT * from `kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `keys` like '".$_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix']."%' and cztype<2" );
            if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
            {
                _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "296", "VAL_errkeyå¼€å¤´çš„æ³¨å†Œå¡æ¯ä¸ªå¸å·åªèƒ½ä½¿ç”¨ä¸€å¼ ï¼", array( "VAL_errkey" => $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['keyfix'] ) );
            }
        }
        $_obfuscate_j5CIk4qSjZKKjImVkYmHh48ÿ += $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'];
        $_obfuscate_jpKNh4eVkY2Tio6RlZGMiI8ÿ += $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['points'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['points'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] + $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['cday'] * 86400;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cztimes'] + 1;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['managerid'] = $_obfuscate_lZSGkoqUio_RlZGNkY6Liokÿ['managerid'];
    }
}
$_obfuscate_ioyQkY6QhoeUjo6MjIaSkJMÿ = $_obfuscate_j5CIk4qSjZKKjImVkYmHh48ÿ;
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = array( );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",".$_obfuscate_io6Jj4aRipKKkoiOi5SJi5Uÿ.",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jpSHk4yRh5CUiZKVkJSPkY8ÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_k5SGkIiQkJKPiIuUlYmHhowÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."','')";
$_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ = 0;
$_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ = 0;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['zs_czset'] != "" )
{
    $_obfuscate_lI_Jj4uGiZGPh5SUj4yNi4kÿ = array_unique( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4ÿ );
    $_obfuscate_lJKNk5OTkYiOj4uTlI_JiYcÿ = json_decode( base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['zs_czset'] ), TRUE );
    foreach ( $_obfuscate_lI_Jj4uGiZGPh5SUj4yNi4kÿ as $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ )
    {
        if ( isset( $_obfuscate_lJKNk5OTkYiOj4uTlI_JiYcÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ] ) )
        {
            $_obfuscate_i5OKioaRlY6TkIaGkZSGlIoÿ = 0;
            foreach ( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4ÿ as $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
            {
                if ( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ == $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ )
                {
                    ++$_obfuscate_i5OKioaRlY6TkIaGkZSGlIoÿ;
                }
            }
            uasort( &$_obfuscate_lJKNk5OTkYiOj4uTlI_JiYcÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ], "zsarr_sort" );
            foreach ( $_obfuscate_lJKNk5OTkYiOj4uTlI_JiYcÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ] as $_obfuscate_jIyQkoaHk5OPiImPh4uUjYwÿ )
            {
                $_obfuscate_jpSNkJSGhpGKiImJi4_LkJMÿ = floor( $_obfuscate_i5OKioaRlY6TkIaGkZSGlIoÿ / $_obfuscate_jIyQkoaHk5OPiImPh4uUjYwÿ['num'] );
                if ( $_obfuscate_jpSNkJSGhpGKiImJi4_LkJMÿ == 0 )
                {
                    $_obfuscate_i5OKioaRlY6TkIaGkZSGlIoÿ -= $_obfuscate_jIyQkoaHk5OPiImPh4uUjYwÿ['num'] * $_obfuscate_jpSNkJSGhpGKiImJi4_LkJMÿ;
                    $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ += $_obfuscate_jIyQkoaHk5OPiImPh4uUjYwÿ['zsday'] * $_obfuscate_jpSNkJSGhpGKiImJi4_LkJMÿ;
                    $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ += $_obfuscate_jIyQkoaHk5OPiImPh4uUjYwÿ['zspoints'] * $_obfuscate_jpSNkJSGhpGKiImJi4_LkJMÿ;
                }
            }
        }
    }
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
    if ( $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ * 86400;
    }
    if ( $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ;
    }
    if ( $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ != 0 || $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ != 0 )
    {
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",7,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey']."','')";
    }
}
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ = array( );
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = "";
$_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ = 0;
$_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ = 0;
$_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ = 0;
$_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpMÿ = 0;
$_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = FALSE;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['zs_tgset'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser'] != "" )
{
    $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['parentuser']."'" );
    if ( empty( $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ ) )
    {
        $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['starttime'] + $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'] * 86400;
        if ( 0 < $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['islock'] || 0 < $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['ispause'] || $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ )
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = FALSE;
        }
        else
        {
            $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = TRUE;
            if ( PETIME <= $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] )
            {
                $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ = FALSE;
            }
        }
    }
    if ( $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['parentuser'] = "";
    }
}
if ( $_obfuscate_h4aOh4mKiZCUkoaIhouTiIgÿ )
{
    $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ = json_decode( base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['zs_tgset'] ), TRUE );
    foreach ( $_obfuscate_jIaRh4iNjpKMioaTjZWGkY4ÿ as $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ )
    {
        if ( !isset( $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ] ) || !( $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ]['cj'] == 2 ) )
        {
            $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ]['zsday1'];
            $_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ]['zspoints1'];
            $_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ]['zsday2'];
            $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpMÿ += $_obfuscate_kpWRkZOIkYuNiIeTlIqPkpQÿ[$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ]['zspoints2'];
        }
    }
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
    if ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'] + $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['endtime'] + $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ * 86400;
    }
    if ( $_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ != 0 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'] + $_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ;
    }
    if ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ != 0 || $_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ != 0 )
    {
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values \t(".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",4,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ.",".$_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'].",'','".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."')";
    }
    $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ = array( );
    $_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'];
    $_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'];
    if ( $_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ != 0 )
    {
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['cday'] + $_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ;
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['endtime'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['endtime'] + $_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ * 86400;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æ¨å¹¿å¸å·èµ é€VAL_pBdayå¤©";
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_pBday'] = $_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ;
    }
    if ( $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpMÿ != 0 )
    {
        $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'] = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['points'] + $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpMÿ;
        if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ == "" )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æ¨å¹¿å¸å·èµ é€";
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "VAL_pBpointsç‚¹";
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_pBpoints'] = $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpMÿ;
    }
    if ( $_obfuscate_iJWQj5WQlY_NkYePk5OGjZMÿ != 0 || $_obfuscate_iZOGi4uQkI2Uho_Lk5CPhpMÿ != 0 )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ, "username='".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."'", "sql" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
        {
            $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ;
        }
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ[] = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",3,'".$_obfuscate_kI2Li4aJk4aMiIeSiIeUjIoÿ['username']."',".$_obfuscate_iJSNkomSi4qVlJOHlYuSi4kÿ.",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['cday'].",".$_obfuscate_k42Sho2GiIeHk42OjIaPipQÿ.",".$_obfuscate_iI_QkZGJh4yRk4mIkYuOiYgÿ['points'].",'','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."')";
    }
}
if ( 10001 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid'] && 0.5 < ( $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ ) / $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJMÿ )
{
    _obfuscate_lJCQjZSSkpSSiI2Sh42LjYkÿ( "329", "æœˆä»˜ç‰ˆå®¢æˆ·çš„èµ é€å¤©æ•°ä¸èƒ½è¶…å‡ºå¡é¢å¤©æ•°çš„50%[ VAL_zsday / VAL_kmday ]", array( "VAL_zsday" => $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ, "VAL_kmday" => $_obfuscate_ioyQkY6QhoeUjo6MjIaSkJMÿ ) );
}
if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ != "" )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ï¼Œ";
}
$_obfuscate_iIqGj4aSiJOUkY6HiYeGiYkÿ = "æœ¬å¸å·èµ é€";
if ( 0 < $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ + $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= $_obfuscate_iIqGj4aSiJOUkY6HiYeGiYkÿ."VAL_Bdayå¤©";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_Bday'] = $_obfuscate_iZWHiZKQjpOJk5GKiJSPkpEÿ + $_obfuscate_hpSOkJGOiZGNiJOPiY_ViZQÿ;
    $_obfuscate_iIqGj4aSiJOUkY6HiYeGiYkÿ = "";
}
if ( 0 < $_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ + $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= $_obfuscate_iIqGj4aSiJOUkY6HiYeGiYkÿ."VAL_Bpointsç‚¹";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_Bpoints'] = $_obfuscate_lIyIi5GQlYaNkIeIlI6LiIoÿ + $_obfuscate_kYuMjomSiYiHioePiYmQiIoÿ;
}
if ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ != "" )
{
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ï¼Œ";
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "update kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set `cztime`=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",`czusername`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' where `keys` in ('".join( "','", $_obfuscate_jZCUjpOJiY6Iio_SiIyGk48ÿ )."')";
$_obfuscate_kY2Qi5OGjImIh46TjZKNk48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
if ( $_obfuscate_kY2Qi5OGjImIh46TjZKNk48ÿ !== TRUE )
{
    _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 309 );
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "330", "å¸å·å……å€¼å¤±è´¥ï¼ä¿®æ”¹æ³¨å†Œå¡çŠ¶æ€æ—¶å‡ºé”™VAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) ) );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sql" );
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
{
    if ( empty( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ ) )
    {
        foreach ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 320 );
            }
        }
    }
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æœ¬å¸å·æ—¶é—´VAL_Adayå¤©";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_Aday'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['cday'];
    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "VAL_Apointsç‚¹ã€‚";
    $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_Apoints'] = $_obfuscate_j42HkJGSkI6UhoaJlYuVk4kÿ['points'];
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "332", "å……å€¼å¸å·æˆåŠŸï¼Œ".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ );
}
else
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "331", "å¸å·å……å€¼å¤±è´¥ï¼åŸå› ï¼šVAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) ) );
}
?>
