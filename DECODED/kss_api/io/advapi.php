<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j4_IiouMj4qMkYqNhoyIjooÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function api_set( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ, $_obfuscate_iYyKk4eTjYuQlIqLiZWHkokÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    global $_obfuscate_kpOMjo6Mh4yUk42Uh4mNh4sÿ;
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    $_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ = array( "é”" => "islock", "é”å®š" => "islock", "æ ‡ç­¾" => "tag", "å¤‡æ³¨" => "intro", "å¤©æ•°" => "cday", "ç‚¹æ•°" => "points", "å¼€å§‹æ—¶é—´" => "starttime", "åˆ°æœŸæ—¶é—´" => "endtime", "é™„å±æ€§" => "keyextattr", "ä»˜å±æ€§" => "keyextattr", "æœºå™¨ç " => "pccode", "ç§æœ‰æ•°æ®" => "updata", "ç»‘å®šä¿¡æ¯" => "bdinfo" );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = FALSE;
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ, $_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ ) )
    {
        return "par1err";
    }
    $_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ = mysql_real_escape_string( $_obfuscate_iYyKk4eTjYuQlIqLiZWHkokÿ );
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ )
    {
        case "é”" :
        case "é”å®š" :
        case "æ ‡ç­¾" :
        case "å¤‡æ³¨" :
        case "å¤©æ•°" :
        case "å¼€å§‹æ—¶é—´" :
        case "åˆ°æœŸæ—¶é—´" :
        case "ç‚¹æ•°" :
        case "é™„å±æ€§" :
        case "ä»˜å±æ€§" :
            $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."' ", "sync" );
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        case "æœºå™¨ç " :
        case "ç§æœ‰æ•°æ®" :
        case "ç»‘å®šä¿¡æ¯" :
            if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] == 1 )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "UPDATE `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."'", "sync" );
            }
            else
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "UPDATE `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `".$_obfuscate_jI6OlImSkJKVjImHkIaUipAÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]."`='".$_obfuscate_iJGJjY2NkYqSkoqMho6Tio0ÿ."' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."' and `clientid`=".$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['clientid'], "sync" );
            }
            if ( $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ !== TRUE )
            {
                $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_j4uUkJCTkIuMko6Vj5SSlYYÿ;
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = FALSE;
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function api_get( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    global $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ = array( "å½“å‰IP" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ, "ç”¨æˆ·å" => "username", "é”" => "islock", "é”å®š" => "islock", "ç™»é™†å¯†ç " => "password", "ç”¨æˆ·å¯†ç " => "password", "å®‰å…¨å¯†ç " => "password2", "æ ‡ç­¾" => "tag", "ç™»é™†æ¬¡æ•°" => "activetimes", "å¤‡æ³¨" => "intro", "å¤©æ•°" => "cday", "ç‚¹æ•°" => "points", "é™„å±æ€§" => "keyextattr", "ä»˜å±æ€§" => "keyextattr", "å¼€å§‹æ—¶é—´æˆ®" => "starttime", "å¼€å§‹æ—¶é—´" => "starttime", "æœºå™¨ç " => "pccode", "ç§æœ‰æ•°æ®" => "updata", "ç»‘å®šä¿¡æ¯" => "bdinfo", "ä¸Šä¸€æ¬¡IP" => "lastip" );
    if ( array_key_exists( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ, $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ ) )
    {
        return "par1err";
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "";
    switch ( $_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ )
    {
        case "å½“å‰IP" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        case "ç”¨æˆ·å" :
        case "é”" :
        case "é”å®š" :
        case "ç™»é™†å¯†ç " :
        case "ç”¨æˆ·å¯†ç " :
        case "å®‰å…¨å¯†ç " :
        case "æ ‡ç­¾" :
        case "ç™»é™†æ¬¡æ•°" :
        case "å¤‡æ³¨" :
        case "å¤©æ•°" :
        case "ç‚¹æ•°" :
        case "é™„å±æ€§" :
        case "ä»˜å±æ€§" :
        case "å¼€å§‹æ—¶é—´æˆ®" :
        case "å¼€å§‹æ—¶é—´" :
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        case "æœºå™¨ç " :
        case "ç§æœ‰æ•°æ®" :
        case "ç»‘å®šä¿¡æ¯" :
        case "ä¸Šä¸€æ¬¡IP" :
            if ( 1 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] )
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]];
                return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
            }
            $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ[$_obfuscate_hoaLk5CMjo6RlZGTlY_GjpEÿ[$_obfuscate_h42RjJWNj5CGkYyGjpCJiooÿ]];
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "par1err";
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function api_points( &$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ, $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ, $_obfuscate_jYaTjpCOhpGOhoaJjpGKjpEÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
    $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ = time( );
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ < 0 )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "è¦æ‰£çš„ç‚¹æ•°å°äº0";
        return FALSE;
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'] < $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "ç”¨æˆ·ç‚¹æ•°ä¸å¤Ÿæ‰£";
        return FALSE;
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_sql_points where guid='".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpEÿ."' and `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."' and tbname='".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']."' and svrid=1 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - 180 )." limit 0,1" );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "æœ¬æ¬¡æœªæ‰£ç‚¹ï¼Œå¯èƒ½æ˜¯é‡å¤æ‰£ç‚¹æ“ä½œ";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'];
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']( "update kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']." set `points`=`points`-".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ." where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === TRUE )
    {
        if ( SVRID == 2 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ.",'".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']."','".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['username']."',".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ.",'".$_obfuscate_jYaTjpCOhpGOhoaJjpGKjpEÿ."',".SVRID.")", "notsync" );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "æ‰£ç‚¹æˆåŠŸ";
        return $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['points'] - $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
    }
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocÿ = "æ‰§è¡Œæ‰£ç‚¹SQLå¤±è´¥";
    return FALSE;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'] = $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'];
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 10, 10 );
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['czkey'], 0, 10 );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `password`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password']."' " );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    exit( "crypteno300" );
}
if ( 0 < $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['islock'] )
{
    exit( "crypteno301" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] < $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ )
{
    exit( "crypteno302" );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode2'] != "1" && $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['ischangesvr'] != 1 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] != PETIME )
{
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] == 1 )
    {
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] != "1" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'] )
        {
            exit( "crypteno305" );
        }
    }
    $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'] );
    if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ ) )
    {
        exit( "crypteno304" );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] != "1" && $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'] )
    {
        exit( "crypteno305" );
    }
}
$_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ = KSSINCDIR."advapi".DIRECTORY_SEPARATOR.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid'].$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id'].".php";
if ( is_file( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ ) )
{
    include( $_obfuscate_lIeKioqNiYaOlIyQjouSlY8ÿ );
}
else
{
    exit( "crypteno306" );
}
$_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ = explode( ",", $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['cmd'] );
$_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ = $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[0];
if ( substr( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ, 0, 2 ) != "v_" )
{
    exit( "crypteno307" );
}
if ( function_exists( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ ) )
{
    exit( "crypteno308" );
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['advapi'] = "";
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softintro'] = "";
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softnotice'] = "";
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['updatelog'] = "";
$_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ = array( "soft" => $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ, "member" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ, "client" => $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ, "ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ ), "intip" => $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ, "pccode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[4], "username" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], "password" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['password'], "clientid" => $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[8], "ischangesvr" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[9], "cmd" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[10] );
$adv_db = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
$adv_table = $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
$adb_pdata = $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ;
$adv_user = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ;
$adv_user2 = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ;
switch ( count( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ ) )
{
    case 1 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 2 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 3 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 4 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 5 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 6 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 7 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 8 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[7], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 9 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[8], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    case 10 :
        $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ = $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ( $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[1], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[2], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[3], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[4], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[5], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[6], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[7], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[8], $_obfuscate_kYeVlJWTjYuNjoeSkYuPiZEÿ[9], $_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ );
        break;
    default :
        exit( "crypteno309" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set lasttime=".$_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ." where `username`='".$_obfuscate_jYmJi42Gh42MhoqLkY_MlZMÿ['username']."'", "notsync" );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_advapi'] != 0 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times_advapi'] != 0 )
{
    $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select count(*) as tnum from kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and optype=30 and addtime>".( $_obfuscate_jomPk5WKioeLipGGi4_PhpMÿ - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_time_advapi'] * 60 ) );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['autolock_times_advapi'] < $_obfuscate_kZKOjI2JjoaKiJCGi4qQkokÿ['tnum'] )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." set islock=3,intro='è°ƒç”¨advapiå¤ªé¢‘ç¹ï¼Œé”å®šå¸å·' where username='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "sync" );
        $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
        $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ .= "('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',31,".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode']."','',".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.")";
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ, "notsync" );
        exit( "crypteno129" );
    }
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values  ('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',30,".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode']."','".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."',".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.")", "notsync" );
$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ = _obfuscate_koiSlI6IlZSMkY_IiZSSkIwÿ( $_obfuscate_kI_Gho_HjoqTk4mJiIuIh5Mÿ, $_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ÿ, Client_Language );
if ( $_obfuscate_kpWTkImVh4yUiZGLlIuPiIkÿ != "v_points" )
{
    if ( defined( "SOFTRSAMODE" ) )
    {
        $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEÿ = KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'].".php";
        if ( is_file( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEÿ ) )
        {
            include( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEÿ );
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
            if ( strlen( RSA_PRVKEY ) < 70 || strlen( RSA_MODULES ) < 70 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 0, 20 ), RSA_PRVKEY, RSA_MODULES, 256 );
            exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 20 ) );
        }
        exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
    }
    if ( SOFTRSAMODE == 1 )
    {
        if ( strlen( SOFTRSAEKEY ) < 70 || strlen( SOFTRSANKEY ) < 70 )
        {
            exit( "crypteno151" );
        }
        $_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ = rsa_encrypt( substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 0, 20 ), SOFTRSAEKEY, SOFTRSANKEY, 256 );
        exit( "cryptrsadata".$_obfuscate_hoaVjJGTj4uNioeOjpSVh4Yÿ."`".substr( $_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ, 20 ) );
    }
    exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
}
exit( "crypt".$_obfuscate_kZWIioyVlJKMho_KiIeJjZEÿ );
?>
