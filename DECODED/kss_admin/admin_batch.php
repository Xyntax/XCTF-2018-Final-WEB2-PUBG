<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h42SipGLj4iSlIaIlYuKkJEÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "action", "gp", "sql", "" );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 8 );
if ( isset( $openids ) )
{
    $openids = array( 1 );
}
if ( !in_array( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], $openids ) && stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æƒé™æœªå¯¹ä½ å¼€æ”¾" );
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where id=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è½¯ä»¶ä¸å­˜åœ¨" );
}
$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "table", "gp", "sql", "" );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "managerid", "gp", "int", 0 );
$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keyfix", "gp", "sql", "" );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "ordernum", "gp", "sql", "" );
$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "addday", "gp", "num", "0" );
$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "points", "gp", "int", "0" );
$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "tags", "gp", "sql", "" );
$_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cztime", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_j5WMjpGGjY_UipCPjY6GjYwÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cztime0", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "endtime", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "addtime1", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "addtime2", "gp", "time", "2000-01-01 00:00:00" );
$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ = strtotime( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4ÿ );
$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ = strtotime( $_obfuscate_j5WMjpGGjY_UipCPjY6GjYwÿ );
$_obfuscate_kIaKlIiUkZWRj4yLhoqUjJMÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" ? "å……å€¼" : "æ¿€æ´»";
switch ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ )
{
    case "æ‰¹é‡åˆ é™¤" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."%' ";
        }
        if ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ == "æ³¨å†Œå¡" )
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
            if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ ) == 4 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ."' ";
            }
            if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4ÿ != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJMÿ."æ—¥æœŸ å‰è¾¹çš„å¿…é¡»å°äºåè¾¹çš„ï¼" );
                }
                if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ < 946742400 )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ." ";
                }
                else
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ;
                }
            }
            if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ ) == 24 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' ";
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ·»åŠ æ—¥æœŸåè¾¹çš„è¦æ¯”å‰è¾¹çš„å°" );
                }
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ == "2000-01-01 00:00:00" )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
                }
                else
                {
                    if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ == "2000-01-01 00:00:00" )
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." ";
                    }
                    else
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
                    }
                }
            }
        }
        else
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
            if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ != "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " endtime < ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ )." ";
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æœ€å°‘è¦é€‰æ‹©ä¸€ä¸ªæ¡ä»¶ï¼" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡åˆ é™¤æˆåŠŸï¼Œå…±å½±å“".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->”•‘‰‡Š’“ŒŠ‡Š’."æ¡ï¼<br>SQLï¼š<input type=text style='width:400px' value=".YH2."delete from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡åˆ é™¤å¤±è´¥ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>SQLï¼š<input type=text style='width:400px' value=".YH2."delete from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        break;
    case "æ‰¹é‡é”å®š" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."%' ";
        }
        if ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ == "æ³¨å†Œå¡" )
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
            if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ ) == 4 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ."' ";
            }
            if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4ÿ != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJMÿ."æ—¥æœŸ å‰è¾¹çš„å¿…é¡»å°äºåè¾¹çš„ï¼" );
                }
                if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ < 946742400 )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ." ";
                }
                else
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ;
                }
            }
            if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ ) == 24 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' ";
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ·»åŠ æ—¥æœŸåè¾¹çš„è¦æ¯”å‰è¾¹çš„å°" );
                }
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ == "2000-01-01 00:00:00" )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
                }
                else
                {
                    if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ == "2000-01-01 00:00:00" )
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." ";
                    }
                    else
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
                    }
                }
            }
        }
        else
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
            if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ != "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " endtime < ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ )." ";
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æœ€å°‘è¦é€‰æ‹©ä¸€ä¸ªæ¡ä»¶ï¼" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡é”å®šæˆåŠŸï¼Œå…±å½±å“".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->”•‘‰‡Š’“ŒŠ‡Š’."æ¡ï¼<br>SQLï¼š<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡é”å®šå¤±è´¥ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>SQLï¼š<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        break;
    case "æ‰¹é‡è§£é”" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."%' ";
        }
        if ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ == "æ³¨å†Œå¡" )
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
            if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ ) == 4 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ."' ";
            }
            if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4ÿ != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJMÿ."æ—¥æœŸ å‰è¾¹çš„å¿…é¡»å°äºåè¾¹çš„ï¼" );
                }
                if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ < 946742400 )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ." ";
                }
                else
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ;
                }
            }
            if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ ) == 24 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' ";
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" )
            {
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )
                {
                    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ·»åŠ æ—¥æœŸåè¾¹çš„è¦æ¯”å‰è¾¹çš„å°" );
                }
                if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ == "2000-01-01 00:00:00" )
                {
                    $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
                }
                else
                {
                    if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ == "2000-01-01 00:00:00" )
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." ";
                    }
                    else
                    {
                        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
                    }
                }
            }
        }
        else
        {
            $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
            if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ != "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " endtime < ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ )." ";
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æœ€å°‘è¦é€‰æ‹©ä¸€ä¸ªæ¡ä»¶ï¼" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set islock=0 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡è§£é”æˆåŠŸï¼Œå…±å½±å“".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->”•‘‰‡Š’“ŒŠ‡Š’."æ¡ï¼<br>SQLï¼š<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡è§£é”å¤±è´¥ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>SQLï¼š<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set islock=3 ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        break;
    case "æ‰¹é‡å¯¼å‡º" :
        ob_clean( );
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ = array( );
        if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ != 0 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['7'] = " managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." ";
        }
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."%' ";
        }
        if ( strlen( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ ) == 24 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' ";
        }
        if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" || $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" )
        {
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ != "2000-01-01 00:00:00" && $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ < $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ·»åŠ æ—¥æœŸåè¾¹çš„è¦æ¯”å‰è¾¹çš„å°" );
            }
            if ( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ == "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime <".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
            }
            else if ( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ == "2000-01-01 00:00:00" )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime >".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." ";
            }
            else
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['11'] = " addtime between ".strtotime( $_obfuscate_lIiSi4yJkoqIiZCSk4yRlZUÿ )." and ".strtotime( $_obfuscate_hpSVho2Lh4qQiIiTkomLho8ÿ )." ";
            }
        }
        if ( strlen( $_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ ) == 4 )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['6'] = " keyfix='".$_obfuscate_jo_SiI6SjIeSjoiMjoyTkpAÿ."' ";
        }
        if ( $_obfuscate_kJKGk5SVkY_RiI2TjY2RkI4ÿ != "2000-01-01 00:00:00" )
        {
            if ( $_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ < $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kIaKlIiUkZWRj4yLhoqUjJMÿ."æ—¥æœŸ å‰è¾¹çš„å¿…é¡»å°äºåè¾¹çš„ï¼" );
            }
            if ( $_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ < 946742400 )
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime < ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ." ";
            }
            else
            {
                $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['8'] = " cztime between ".$_obfuscate_lY_Gi4mGlJKGjZSUj5GMjIYÿ." and ".$_obfuscate_h46Uj5SIkZOHioqGjZGQkY8ÿ;
            }
        }
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æœ€å°‘è¦é€‰æ‹©ä¸€ä¸ªæ¡ä»¶ï¼" );
        }
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_kIaSjoeRlIeJhomQkY6QjZIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `keyfix`,`keys`,`keyspassword` from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ );
        if ( empty( $_obfuscate_kIaSjoeRlIeJhomQkY6QjZIÿ ) )
        {
            $_obfuscate_hoaLkYuIk5KVlIyHj4yTlIoÿ = "";
            foreach ( $_obfuscate_kIaSjoeRlIeJhomQkY6QjZIÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
            {
                $_obfuscate_hoaLkYuIk5KVlIyHj4yTlIoÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyspassword']."\r\n";
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡å¯¼å‡ºæ³¨å†Œå¡æˆåŠŸï¼<br><textarea class=dwidth style='width:400px;height:200px'>".$_obfuscate_hoaLkYuIk5KVlIyHj4yTlIoÿ."</textarea><br>SQLï¼š<input type=text style='width:400px' value=".YH2."select `keyfix`,`keys`,`keyspassword` from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ²¡æœ‰æ‰¾åˆ°éœ€è¦å¯¼å‡ºçš„æ•°æ®ã€‚<br>SQLï¼š<input type=text style='width:400px' value=".YH2."select `keyfix`,`keys`,`keyspassword` from ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        break;
    case "æ‰¹é‡åŠ æ—¶" :
        ob_clean( );
        _obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
        if ( $_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ == 0 && $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ == 0 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åŠ æ—¶å’ŒåŠ ç‚¹ä¸èƒ½éƒ½ä¸º0ï¼ŒåŠ æ—¶é—´æˆ–ç‚¹æ•°è¯·ç”¨æ­£æ•°ï¼Œå‡æ—¶é—´æˆ–ç‚¹æ•°è¯·ç”¨è´Ÿæ•°ï¼" );
        }
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ = array( );
        $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0ÿ = "ç»™";
        if ( $_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ != "" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['1'] = " tag like '".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."%' ";
            $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0ÿ .= "æ ‡ç­¾ä¸º".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ;
        }
        if ( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ != "2000-01-01 00:00:00" )
        {
            $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['2'] = " endtime > ".strtotime( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ )." ";
            $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0ÿ .= "åˆ°æœŸæ—¥æœŸå¤§äº".$_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ;
        }
        $_obfuscate_h5OHlYqIh46Li4uMk5CMjo0ÿ .= "çš„ç”¨æˆ·æ‰¹é‡åŠ æ—¶";
        if ( empty( $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æœ€å°‘è¦é€‰æ‹©ä¸€ä¸ªæ¡ä»¶ã€æ ‡ç­¾æˆ–åˆ°æœŸæ—¥æœŸã€‘ï¼" );
        }
        $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ['3'] = " endtime <> ".PETIME." ";
        ksort( &$_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        $_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ = "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
        $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_jo2SkYaVh4_RjJKJjpWUjYcÿ );
        if ( $_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ == 0 )
        {
            $_obfuscate_i5WOlZONiY6Ik5WSkI6Skosÿ = "`points`=`points`+".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
        }
        else if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ == 0 )
        {
            $_obfuscate_i5WOlZONiY6Ik5WSkI6Skosÿ = "`cday`=`cday`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ.",`endtime`=`endtime`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ * 86400;
        }
        else
        {
            $_obfuscate_i5WOlZONiY6Ik5WSkI6Skosÿ = "`cday`=`cday`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ.",`endtime`=`endtime`+".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ * 86400.", `points`=`points`+".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ;
        }
        if ( 0 < $_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ )
        {
            if ( !in_array( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], $openids ) && stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç¦æ­¢åŠ æ—¶æ“ä½œï¼" );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.",".time( ).",".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ.",'','æ‰¹é‡ï¼Œæ ‡ç­¾ã€".$_obfuscate_lYqOkIyVi5WGhoqLhouThooÿ."ã€‘åˆ°æœŸæ—¥æœŸå¤§äºã€".$_obfuscate_kJSSjJKSkIyJiZCViI2TlJQÿ."ã€‘ï¼ŒåŠ æ—¶".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ."å¤©')", "notsync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_addcday`", "notsync" );
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set ".$_obfuscate_i5WOlZONiY6Ik5WSkI6Skosÿ." ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ, "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ )
        {
            $_obfuscate_kZWHjJGJkpOMjZGQkIuHiZUÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->”•‘‰‡Š’“ŒŠ‡Š’;
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "insert into kss_z_cz_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(".time( ).",10,'admin_addtime',0,".$_obfuscate_jpWNko2RipCJjIySjYyJkY4ÿ.",0,".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjogÿ.",'".$_obfuscate_h5OHlYqIh46Li4uMk5CMjo0ÿ."','')";
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== TRUE )
            {
                _obfuscate_h4aIlI6QlYmUkY6MlI6Qhosÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ), __FILE__, 289 );
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡åŠ æ—¶æˆåŠŸï¼Œå…±æ”¹å˜".$_obfuscate_kZWHjJGJkpOMjZGQkIuHiZUÿ."ç”¨æˆ·çš„æ—¶é—´ï¼<br>SQLï¼š<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set ".$_obfuscate_i5WOlZONiY6Ik5WSkI6Skosÿ." ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‰¹é‡åŠ æ—¶å¤±è´¥ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>SQLï¼š<input type=text style='width:400px' value=".YH2."update ".$_obfuscate_h42UkpKSh46Jh4eHh46PkYwÿ." set ".$_obfuscate_i5WOlZONiY6Ik5WSkI6Skosÿ." ".$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ.YH2.">" );
}
$_obfuscate_kouLj4_JkJWKkJCQkIaMjZEÿ = "æ‰¹å¤„ç†æ•°æ®";
include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."c_head.php" );
$_obfuscate_kIiMk4_SkpOVho2SjoyMjZUÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select `id`,`username`,`level` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and isdel=0 order by id asc" );
echo "\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() {\r\n$('#admin_batch').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"#op_1\").attr(\"checked\")==true){\r\nif(confirm(\"æ‰¹é‡åˆ é™¤æ˜¯å°†æ•°æ®ä»æ•°æ®åº“ä¸­å½»åº•åˆ é™¤ï¼Œæ“ä½œä¸å¯è¿˜åŸï¼\\r\\n\\r\\nè¯·åœ¨æ‰¹é‡åˆ é™¤å‰åšå¥½æ•°æ®åº“å¤‡ä»½ï¼Œä»¥é˜²æ•°æ®ä¸¢å¤±ã€‚\\r\\n\\r\\næ˜¯å¦ç»§ç»­æ‰§è¡Œæ‰¹é‡åˆ é™¤æ“ä½œï¼Ÿ\")){\r\nreturn true; \r\n}else{\r\nreturn false;\r\n}\r\n}else{\r\nreturn true;\r\n}\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif($(\"#op_2\").attr(\"checked\")==true){\r\nmalert(responseText,'å¯¼å‡ºæ•°æ®',420,300);\r\n}else{\r\nmalert(responseText); \r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n$(\"#cztime,#cztime0,#endtime,#addtime1,#addtime2\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$(\"input[id^='table_']\").bind(\"click\",function(){\r\nif($(this).attr(\"id\")==\"table_1\"){\r\n$(\"#b_table_1\").show();\r\n$(\"#b_table_2\").hide();\r\n$(\"#b_keyg\").show();\r\n$(\"#ordernumtr,#addtimetr\").show();\t\r\n}else{\r\n$(\"#b_table_2\").show();\r\n$(\"#b_table_1\").hide();\t\r\n$(\"#b_keyg\").hide();\t\r\n$(\"#ordernumtr,#addtimetr\").hide();\t\r\n}\t\r\n});\r\n$(\"input[name='op']\").bind(\"click\",function(){\r\nif($(this).val()=='æ‰¹é‡åŠ æ—¶'){\r\n$(\"#b_js\").show();\t\r\n$(\"#b_notaddtime\").hide();\r\n$(\"#b_jds\").show();\t\r\n$(\"#table_1\").attr('disabled','disabled');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#table_2\").click();\t\r\n$(\"#b_etime\").text(\"åˆ°æœŸæ—¥æœŸå¤§äº\");\r\n}else if($(this).val()=='æ‰¹é‡å¯¼å‡º'){\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\r\n$(\"#table_1\").attr('disabled','');\r\n$(\"#table_2\").attr('disabled','disabled');\t\r\n$(\"#table_1\").click();\t\r\n$(\"#b_etime\").text(\"åˆ°æœŸæ—¥æœŸå°äº\");\r\n}else{\t\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\t\r\n$(\"#table_1\").attr('disabled','');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#b_etime\").text(\"åˆ°æœŸæ—¥æœŸå°äº\");\r\n}\r\n\r\n});\r\n\r\n\r\n});\r\n\r\n</script>\r\n<form id=\"admin_batch\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajaxæäº¤å¿…é¡»æ·»åŠ æ­¤é¡¹\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" id=\"softid\" value=\"";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" />\r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softname'];
echo "æ‰¹é‡å¤„ç†æ•°æ®</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>æ‰§è¡Œæ“ä½œ</td>\r\n<td align=left>\r\n<input type=radio value='æ‰¹é‡åˆ é™¤' name=\"op\" id=\"op_1\" checked><label for=\"op_1\">æ‰¹é‡åˆ é™¤</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='æ‰¹é‡é”å®š' name=\"op\" id=\"op_3\"><label for=\"op_3\">æ‰¹é‡é”å®š</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='æ‰¹é‡è§£é”' name=\"op\" id=\"op_4\"><label for=\"op_4\">æ‰¹é‡è§£é”</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='æ‰¹é‡å¯¼å‡º' name=\"op\" id=\"op_2\"><label for=\"op_2\">æ‰¹é‡å¯¼å‡º</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='æ‰¹é‡åŠ æ—¶' name=\"op\" id=\"op_5\"><label for=\"op_5\">æ‰¹é‡åŠ æ—¶åŠ ç‚¹</label>\r\n</td>\r\n</tr>\r\n<tr>  \r\n<td align=right>æ“ä½œå¯¹åƒ</td>\r\n<td align=left>\r\n<input type=radio value='æ³¨å†Œå¡' name=\"table\" id=\"table_1\" checked><label for=\"table_1\">æ³¨å†Œå¡</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='ç”¨æˆ·' name=\"table\" id=\"table_2\"><label for=\"table_2\">ç”¨æˆ·ï¼ˆå¡å·æ¨¡å¼çš„å·²æ¿€æ´»æ³¨å†Œå¡åœ¨ç”¨æˆ·è¡¨ä»¥10ä½ç”¨æˆ·å+22ä½å¯†ç çš„å½¢å¼è¡¨ç¤ºï¼‰</label>\r\n</td>\r\n</tr>\r\n<tr id=\"b_notaddtime\">\r\n<td align=right>æ‰€å±ç”¨æˆ·</td>\r\n<td align=left>\t\t\t\t\t\r\n<select name='managerid'>\r\n<option value=0>æ‰€æœ‰åå°ç”¨æˆ·</option>\r\n";
foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZUÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    echo "\t\t\t<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."'>".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level']]."]</option>";
}
echo "\t\r\n</select>\r\n</td>\r\n</tr>\r\n<tr id=\"b_keyg\"><td align=right>æ³¨å†Œå¡ç±»</td><td align=left><select name=\"keyfix\" id=\"keygroupid\">\r\n<option value='0'>ä¸é™</option>\r\n";
echo _obfuscate_lIeLiY6Gk4aNiY2Si4uJiIsÿ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, 0, 2 );
echo "</select></td></tr>\r\n<tr id=\"b_js\" style=\"display:none\">\r\n<td align=right>åŠ æ—¶</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"addday\" id=\"addday\" value=\"\" />å¤©ï¼Œ0.04å¤©çº¦ç­‰äº1å°æ—¶</td>\r\n</tr>\r\n<tr id=\"b_jds\" style=\"display:none\">\r\n<td align=right>åŠ ç‚¹</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"points\" id=\"points\" value=\"\" />ç‚¹</td>\r\n</tr>\r\n<tr>\r\n<td align=right>æ ‡ç­¾ç­‰äº</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"tags\" id=\"tags\" value=\"\" /></td>\r\n</tr>\r\n<tr id='ordernumtr'>\r\n<td align=right>è®¢å•å·</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"ordernum\" id=\"ordernum\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"addtimetr\" malt=\"å¦‚æœä¸ç”¨è¯¥æ¡ä»¶ï¼Œè¯·åˆ é™¤è¾“å…¥æ¡†é‡Œçš„å†…å®¹\">\r\n<td align=right>æ·»åŠ æ—¥æœŸ</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime1\" id=\"addtime1\" value=\"\" />&lt; æ—¥æœŸ &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime2\" id=\"addtime2\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_1\" malt=\"ç”¨æˆ·æ¨¡å¼å·²ä½¿ç”¨çš„å……å€¼å¡ã€æ³¨å†Œå¡å·æ¨¡å¼å·²æ¿€æ´»çš„æ³¨å†Œå¡ï¼Œå……å€¼æˆ–æ¿€æ´»æ—¥æœŸåœ¨æŸå¤©ä¹‹å‰çš„<br>å¦‚æœæƒ³é€‰æœªå……å€¼æˆ–æœªæ¿€æ´»çš„æ³¨å†Œå¡ï¼Œè¿™é‡Œé€‰ä¸€ä¸ªå¾ˆæ—©çš„æ—¶é—´å³å¯ï¼Œæ¯”å¦‚2010å¹´çš„æŸä¸€å¤©<br>å¦‚æœä¸ç”¨è¯¥æ¡ä»¶ï¼Œè¯·åˆ é™¤è¾“å…¥æ¡†é‡Œçš„å†…å®¹\">\r\n<td align=right>";
echo $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" ? "å……å€¼" : "æ¿€æ´»";
echo "æ—¥æœŸ</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime0\" id=\"cztime0\" value=\"\" />&lt; æ—¥æœŸ &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime\" id=\"cztime\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_2\" style=\"display:none\" malt=\"å¦‚æœä¸ç”¨è¯¥æ¡ä»¶ï¼Œè¯·åˆ é™¤è¾“å…¥æ¡†é‡Œçš„å†…å®¹\">\r\n<td align=right id=\"b_etime\">åˆ°æœŸæ—¥æœŸå°äº</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"\" /></td>\r\n</tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit class=\"submitbtn\" id=\"submit1\" value=\"æ‰§è¡Œæ“ä½œ\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
