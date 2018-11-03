<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYqMiY2Mj4aIhouOlZOVjpIÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_k4yVh4iNjZOMk5OTiJWHiZAÿ = "";
$_obfuscate_iIuTh4yVh4mShoiIiouMjIYÿ = array( 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31 );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keyorusername" );
if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] === FALSE || strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) < 3 )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "380", "æŸ¥è¯¢çš„ä¿¡æ¯ä¸ºç©ºæˆ–å°äº3ä¸ªå­—ç¬¦ï¼" );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = trim( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ = array( );
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = RNBR;
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['viewkey'] != 1 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "381", "ç³»ç»Ÿè®¾ç½®ç¦æ­¢æŸ¥è¯¢æ³¨å†Œå¡ï¼" );
    }
    if ( _obfuscate_jpOIlY_HlIaJi46IiYySiJUÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "382", "è¦æŸ¥è¯¢çš„æ³¨å†Œå¡é‡Œä»…èƒ½ç”¨çš„å­—ç¬¦ä¸º[0..9a..zA..Z]ï¼" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ, $_obfuscate_iIuTh4yVh4mShoiIiouMjIYÿ ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'] );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "383", "æ—§çš„æ³¨å†Œå¡å·æœªæ‰¾åˆ°ï¼" );
        }
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['newkey'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_newkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "åŸå¡æ˜¯æ—§å¡ï¼Œæ–°çš„å¡å·ï¼šVAL_newkey".RNBR;
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) != 32 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "384", "æ³¨å†Œå¡å·é•¿åº¦é”™è¯¯ï¼" );
    }
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 0, 10 )."' and `password`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 10, 10 )."' and `password2`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 20 )."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "385", "æ³¨å†Œå¡è¢«é”å®šï¼" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['ispause'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "386", "æ³¨å†Œå¡è¢«å†»ç»“ï¼" );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å¡æ¨¡å¼ï¼Œå·²æ¿€æ´»çš„æ³¨å†Œå¡".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æ¿€æ´»æ—¥æœŸï¼šVAL_activedate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "åˆ°æœŸæ—¥æœŸï¼šVAL_enddate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€æ€»å¤©æ•°ï¼šVAL_cday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å‰©ä½™å¤©æ•°ï¼šVAL_sday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€å‰©ç‚¹æ•°ï¼šVAL_points".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é€šé“æ•°ï¼šVAL_linknum".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç»‘å®šä¿¡æ¯ï¼šVAL_bdinfo".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€æ ‡ç­¾ï¼šVAL_tag".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é™„å±æ€§ï¼šVAL_extattr".RNBR;
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_enddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_sday'] = round( ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - time( ) ) / 86400, 2 );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_points'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_linknum'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_bdinfo'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_tag'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tag'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_extattr'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'];
    }
    else
    {
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "387", "æ³¨å†Œå¡æœªæ‰¾åˆ°ï¼" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "385", "æ³¨å†Œå¡è¢«é”å®šï¼" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['ispause'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "386", "æ³¨å†Œå¡è¢«å†»ç»“ï¼" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å¡æ¨¡å¼ï¼Œæ³¨å†Œå¡å·²æ¿€æ´»è¿‡ï¼Œåœ¨æ¿€æ´»è¡¨ï¼ˆç”¨æˆ·è¡¨ï¼‰ä¸­æ— è®°å½•ï¼ˆå¯èƒ½è¿‡æœŸå¤ªä¹…è¢«ä½œè€…åˆ é™¤ï¼Œä¹Ÿå¯èƒ½æ˜¯ç”¨æˆ·è¡¨å¼‚å¸¸éœ€ä¿®å¤ï¼‰".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”Ÿæˆæ—¥æœŸï¼šVAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æ¿€æ´»æ—¥æœŸï¼šVAL_activedate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€å¤©æ•°ï¼šVAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€ç‚¹æ•°ï¼šVAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é€šé“æ•°ï¼šVAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€æ ‡ç­¾ï¼šVAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é™„å±æ€§ï¼šVAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'];
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å¡æ¨¡å¼ï¼Œæ³¨å†Œå¡è¿˜æœªè¢«ä½¿ç”¨".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”Ÿæˆæ—¥æœŸï¼šVAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€å¤©æ•°ï¼šVAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€ç‚¹æ•°ï¼šVAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é€šé“æ•°ï¼šVAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€æ ‡ç­¾ï¼šVAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é™„å±æ€§ï¼šVAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'];
        }
    }
}
else
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ = strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] );
    if ( in_array( $_obfuscate_jYaVkI6TlJGRipSPkIyRjYwÿ, $_obfuscate_iIuTh4yVh4mShoiIiouMjIYÿ ) )
    {
        $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_olddata where `oldkey`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'] );
        if ( empty( $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ ) )
        {
            $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = $_obfuscate_jJOSkYeSjJSJkoaUkIaTkpIÿ['newkey'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_newkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "åŸå¡æ˜¯æ—§å¡ï¼Œæ–°çš„å¡å·ï¼šVAL_newkey".RNBR;
        }
    }
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) == 32 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['viewkey'] != 1 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "381", "ç³»ç»Ÿè®¾ç½®ç¦æ­¢æŸ¥è¯¢æ³¨å†Œå¡ï¼" );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) != 32 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "384", "æ³¨å†Œå¡å·é•¿åº¦é”™è¯¯ï¼" );
        }
        $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_key_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `keys`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 4, 6 )."' and `keyfix`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 0, 4 )."' and `keyspassword`='".substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 10 )."'" );
        if ( empty( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "387", "æ³¨å†Œå¡æœªæ‰¾åˆ°ï¼" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "385", "æ³¨å†Œå¡è¢«é”å®šï¼" );
        }
        if ( 0 < $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”¨æˆ·æ¨¡å¼ï¼Œæ³¨å†Œå¡å·²è¢«ä½¿ç”¨è¿‡".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”Ÿæˆæ—¥æœŸï¼šVAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ä½¿ç”¨æ—¥æœŸï¼šVAL_activedate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å……å€¼å¸å·ï¼šVAL_czuser".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€å¤©æ•°ï¼šVAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€ç‚¹æ•°ï¼šVAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é€šé“æ•°ï¼šVAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€æ ‡ç­¾ï¼šVAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é™„å±æ€§ï¼šVAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cztime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_czuser'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['czusername'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'];
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”¨æˆ·æ¨¡å¼ï¼Œæ³¨å†Œå¡è¿˜æœªè¢«ä½¿ç”¨è¿‡".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”Ÿæˆæ—¥æœŸï¼šVAL_adddate".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€å¤©æ•°ï¼šVAL_cday".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€ç‚¹æ•°ï¼šVAL_points".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é€šé“æ•°ï¼šVAL_linknum".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€æ ‡ç­¾ï¼šVAL_tag".RNBR;
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é™„å±æ€§ï¼šVAL_extattr".RNBR;
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['addtime'] );
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_cday'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['cday'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_points'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['points'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_linknum'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['linknum'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_tag'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['tag'];
            $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_extattr'] = $_obfuscate_j46GkYaTj5KIkIyUh4aTjYsÿ['keyextattr'];
        }
    }
    else
    {
        $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
        if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "388", "ç”¨æˆ·æœªæ‰¾åˆ°ï¼" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "389", "ç”¨æˆ·è¢«é”å®šï¼" );
        }
        if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['ispause'] )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "390", "ç”¨æˆ·è¢«å†»ç»“ï¼" );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç”¨æˆ·æ¨¡å¼ï¼ŒæŸ¥è¯¢ç”¨æˆ·æˆåŠŸ".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æ³¨å†Œæ—¥æœŸï¼šVAL_adddate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "æ¿€æ´»æ—¥æœŸï¼šVAL_activedate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "åˆ°æœŸæ—¥æœŸï¼šVAL_enddate".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€æ€»å¤©æ•°ï¼šVAL_cday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å‰©ä½™å¤©æ•°ï¼šVAL_sday".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€ç‚¹æ•°ï¼šVAL_points".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é€šé“æ•°ï¼šVAL_linknum".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ç»‘å®šä¿¡æ¯ï¼šVAL_bdinfo".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€ã€€æ ‡ç­¾ï¼šVAL_tag".RNBR;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "ã€€é™„å±æ€§ï¼šVAL_extattr".RNBR;
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_adddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['addtime'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_activedate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_enddate'] = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_sday'] = round( ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + 86400 * $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - time( ) ) / 86400, 2 );
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_points'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_linknum'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_bdinfo'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_tag'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tag'];
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_extattr'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['keyextattr'];
    }
}
_obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "391", $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ );
?>
