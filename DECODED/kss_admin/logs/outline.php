<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jYmUi46TkZOGjoqNhoyLi5Mÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 7 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "page", "gp", "int", 1 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keywords", "gp", "sql", "" );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = trim( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkokÿ = " where `id` ";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_tb_log_outline` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ, 0, 10 );
}
if ( 1 < strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ ) )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ['a'] = " `username`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ."' ";
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ / ZPAGESIZE * -1 ) );
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ = "";
$_obfuscate_j4aSkImMlYyRiY6Mho2VkZMÿ = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ['id'].",";
        $_obfuscate_j4aSkImMlYyRiY6Mho2VkZMÿ = "=".$_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ['id'];
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = FALSE;
$_obfuscate_koeUkImOlYeQiZSJkZWPiJUÿ = "";
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkokÿ .= 1 < count( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ ) ? " in (".$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ.")" : $_obfuscate_j4aSkImMlYyRiY6Mho2VkZMÿ;
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
    echo htmlspecialchars( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ."è¡Œ  è€—æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )."æ¯«ç§’</span>";
echo "</textarea><table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=outline&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\nç”¨æˆ·åï¼š<input class=\"longinput\" type=text name=\"keywords\" value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
echo "\">\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"æœç´¢\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "USOFT" )
{
    echo "<td nowrap='nowrap' malt='ç”¨æˆ·å'>ç”¨æˆ·å</td>";
}
else
{
    echo "<td nowrap='nowrap' malt='æ³¨å†Œå¡å·å‰åä½'>ç”¨æˆ·å</td>";
}
echo "<td nowrap=\"nowrap\" malt=\"ç”¨æˆ·åœ¨çº¿çŠ¶æ€æ—¶ï¼Œè¶…å‡ºä¿æŠ¤æ—¶é—´çš„æƒ…å†µä¸‹ï¼Œåœ¨æ–°æœºç™»é™†çš„æ—¥æœŸ\">å¼ºåˆ¶ä¸‹çº¿æ—¶é—´</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"ç”¨æˆ·åœ¨çº¿çŠ¶æ€æ—¶åŸæ¥çš„IP\">åŸIP</td>\r\n<td nowrap=\"nowrap\" malt=\"æ–°æœºçš„ç½‘ç»œIP\">æ–°IP</td>\r\n<td nowrap=\"nowrap\" malt=\"ç”¨æˆ·åœ¨çº¿çŠ¶æ€æ—¶åŸæ¥çš„æœºå™¨ç \">åŸæœºå™¨ç </td>\r\n<td nowrap=\"nowrap\" malt=\"æ–°æœºçš„æœºå™¨ç \">æ–°æœºå™¨ç </td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    echo "<tr nodata=1 class=trd><td colspan=7>æ²¡æ‰¾åˆ°ä»»ä½•æ—¥å¿—</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        echo "<tr class='trd' id='trd'><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username'];
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['addtime'], "m-d H:i:s" );
        echo "</td><td nowrap='nowrap'>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['oldip'] );
        echo "</td><td nowrap='nowrap'>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['newip'] );
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['oldpccode'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['newpccode'];
        echo "</td></tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<div id=pageruntime>é¡µé¢è¿è¡Œæ—¶é—´"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
echo "</body>\r\n</html>";
?>
