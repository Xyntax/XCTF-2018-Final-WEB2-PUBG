<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iIuSi4iHkIaKiouRj5WTk4kÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "333", "å¤‡ç”¨æœåŠ¡å™¨ç¦æ­¢ä¿®æ”¹å¸å·ä¿¡æ¯ï¼" );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "username" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "keystr" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password2" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "password" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "bdinfo" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['pccode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5Aÿ( "pccode" );
$_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = "";
$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'] ) || empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "334", "ä¿®æ”¹ç»‘å®šä¿¡æ¯å¿…é¡»è¾“å…¥æ³¨å†Œå¡å·å’Œæ–°çš„ç»‘å®šä¿¡æ¯ï¼" );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'] = trim( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'] );
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'] ) != 32 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "335", "æ³¨å†Œå¡å¿…é¡»æ˜¯32ä½ï¼" );
    }
    if ( _obfuscate_joeQipOGjouJko_VlJSKiJEÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "336", "æ³¨å†Œå¡å·æ ¼å¼é”™è¯¯ï¼" );
    }
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'], 0, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['keystr'], 20 );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password']."' and `password2`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "337", "æ³¨å†Œå¡æœªæ‰¾åˆ°ï¼ˆä¹Ÿå¯èƒ½æ˜¯æœªæ¿€æ´»ï¼Œæœªæ¿€æ´»è¯·å…ˆæ¿€æ´»å†ä¿®æ”¹ç»‘å®šä¿¡æ¯ï¼‰ï¼" );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "338", "å…¬ç”¨å¸å·ç¦æ­¢å®¢æˆ·ç«¯ä¿®æ”¹ä»»ä½•èµ„æ–™ï¼" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "339", "æ³¨å†Œå¡è¢«é”å®šï¼" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['ispause'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "340", "æ³¨å†Œå¡è¢«å†»ç»“ï¼" );
    }
}
else
{
    if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] ) || empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "341", "ä¿®æ”¹ç»‘å®šä¿¡æ¯æˆ–å¯†ç å¿…é¡»è¾“å…¥ç”¨æˆ·åå’Œå®‰å…¨å¯†ç ï¼" );
    }
    if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) && empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "342", "ç»‘å®šä¿¡æ¯å’Œæ–°å¯†ç è‡³å°‘è¦é€‰å¡«ä¸€ä¸ªï¼" );
    }
    if ( !empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] ) && strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] ) < 5 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "343", "æ–°å¯†ç é•¿åº¦å°äº5ä½" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'" );
    if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "344", "ç”¨æˆ·æœªæ‰¾åˆ°ï¼" );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "345", "å…¬ç”¨å¸å·ç¦æ­¢å®¢æˆ·ç«¯ä¿®æ”¹ä»»ä½•èµ„æ–™ï¼" );
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password2'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password2'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "346", "ç”¨æˆ·å®‰å…¨å¯†ç é”™è¯¯ï¼" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "347", "ç”¨æˆ·è¢«é”å®šï¼" );
    }
    if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['ispause'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "348", "ç”¨æˆ·è¢«å†»ç»“ï¼" );
    }
    if ( !empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] ) && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] != $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['password'] )
    {
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['password'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'];
    }
}
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = "ä¿®æ”¹ç”¨æˆ·èµ„æ–™æˆåŠŸï¼";
$_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ = array( );
if ( empty( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) )
{
    if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] ) < 3 )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "349", "ç»‘å®šä¿¡æ¯å¿…é¡»å¤§äº2ä¸ªå­—ç¬¦ã€‚" );
    }
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] == $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'] )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "350", "ç»‘å®šä¿¡æ¯æœªå˜åŠ¨ï¼Œä¸ä¿®æ”¹è¯·ç•™ç©ºï¼" );
    }
    $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['bdinfo'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'];
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['onlyonebdinfo'] == "1" )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `bdinfo`='".mysql_real_escape_string( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo'] )."'" );
        if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "351", "ç»‘å®šä¿¡æ¯å·²è¢«å…¶ä»–å¸å·ä½¿ç”¨" );
        }
    }
    if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'] )
    {
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] - $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'] * 86400 )
        {
            _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "352", "å¸å·å‰©ä½™æ—¶é—´ä¸è¶³ï¼Œä¿®æ”¹ç»‘å®šä¿¡æ¯éœ€è¦æ‰£å»VAL_decdayå¤©ï¼", array( "VAL_decday" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'] ) );
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "å¹¶æ‰£é™¤äº†ä¿®æ”¹ç»‘å®šä¿¡æ¯çš„è´¹ç”¨VAL_decdayå¤©ã€‚";
        $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ['VAL_decday'] = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'];
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['cday'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'] - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['editbdinfo_changetime'];
        $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['endtime'] = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['starttime'] + $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['cday'] * 86400;
        $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ = "insert into kss_z_cz_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",5,'".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['cday'].",".$_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ['cday'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'].",'".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo']." - ".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['bdinfo']."','')";
    }
    else if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['bdinfo'] != "" )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "353", "ç¦æ­¢ä¿®æ”¹ç»‘å®šä¿¡æ¯ï¼" );
    }
}
if ( empty( $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "354", "æ‚¨æœªä¿®æ”¹ä»»ä½•ä¿¡æ¯ï¼" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']( "kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ, $_obfuscate_jJCMkpKRj4mNh4eNjpKGi4gÿ, "username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sql" );
$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "sync" );
if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "355", "ä¿®æ”¹ç”¨æˆ·èµ„æ–™å‡ºé”™ï¼å‡ºé”™ä¿¡æ¯ï¼šVAL_sqlerr", array( "VAL_sqlerr" => $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) ) );
}
if ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ != "" )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
    {
        _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_lI6Oh5CKh42Ri5STio2HjpEÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 130 );
    }
}
_obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Qÿ( "356", $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ, $_obfuscate_kIaHkJSNhpOPi5OSh4eJlIYÿ );
?>
