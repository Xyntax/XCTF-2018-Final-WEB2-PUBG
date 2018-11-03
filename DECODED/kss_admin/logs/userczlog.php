<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGUkJSMlZCNjYeJkouTlY4ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "sql", "" );
$_obfuscate_iY6GioqOjomTiIiKh4mGkZEÿ = array( 0 => "ç”¨æˆ·æ³¨å†Œ", 1 => "ç”¨æˆ·å……å€¼", 2 => "æ‰‹å·¥æ“ä½œ", 3 => "æ¨å¹¿èµ é€P", 4 => "æ¨å¹¿èµ é€S", 5 => "ä¿®æ”¹ç»‘å®šä¿¡æ¯", 6 => "è§£ç»‘æœºå™¨", 7 => "å……å€¼å¥—é¤", 8 => "å…è´¹æ³¨å†Œ", 9 => "å……å€¼ï¼ˆå……å€¼å‰è¿‡æœŸï¼‰", 10 => "æ‰¹é‡åŠ æ—¶" );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "page", "gp", "int", 1 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "keywords", "gp", "sql", "" );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = trim( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4ÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡æœ‰è¯¥è½¯ä»¶çš„æˆæƒ", 1 );
    }
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkokÿ = " where `id` ";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_z_cz_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ = substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ, 0, 10 );
}
if ( 1 < strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ ) )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ['a'] = " `username`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ."' ";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ['a'] = " `username`=(select `czusername` from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` where `czusername`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ."' and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." limit 0,1)";
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
echo "</textarea><table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=userczlog&softid=";
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
echo "<td nowrap=\"nowrap\">æ—¥æœŸ</td>\r\n<td nowrap=\"nowrap\" >å˜æ›´å‰å¤©æ•°</td>\t\t\r\n<td nowrap=\"nowrap\">å˜æ›´åå¤©æ•°</td>\r\n<td nowrap=\"nowrap\" >å˜æ›´å‰ç‚¹æ•°</td>\r\n<td nowrap=\"nowrap\" >å˜æ›´åç‚¹æ•°</td>\r\n<td nowrap=\"nowrap\" >ç±»å‹</td>\r\n<td nowrap=\"nowrap\" >å¤‡æ³¨</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    echo "<tr nodata=1 class=trd><td colspan=9>æ²¡æ‰¾åˆ°ä»»ä½•å……å€¼æ—¥å¿—</td></tr>";
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
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['oldcday'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['newcday'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['oldtimes'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['newtimes'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_iY6GioqOjomTiIiKh4mGkZEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cztype']];
        echo "</td><td nowrap='nowrap'>";
        switch ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cztype'] )
        {
            case 0 :
            case 1 :
            case 7 :
                echo "å¡å·ï¼š".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                break;
            case 2 :
                echo "ç®¡ç†æ‰‹å·¥æ“ä½œ";
                break;
            case 3 :
                echo "å­å¸å·ï¼š".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['tzxguser'];
                break;
            case 4 :
                echo "çˆ¶å¸å·ï¼š".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['tzxguser'];
                break;
            case 5 :
                echo "æ—§->æ–°ï¼š".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                break;
            case 10 :
                echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'];
                break;
            default :
                echo "&nbsp;";
        }
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
