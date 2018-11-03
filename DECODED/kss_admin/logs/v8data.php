<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k5KVkZGHkYeVk4uSh4yLlYwÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_olddata` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ = array( );
if ( 15 < strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ ) )
{
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ = preg_replace( "/([^a-zA-Z0-9\\n])/", "", $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ );
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ );
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ );
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ );
    if ( strlen( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ ) < 16 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡è¾“å…¥ä»»ä½•å¡å·æˆ–è¾“å…¥çš„å¡å·æ ¼å¼éæ³•", 1 );
    }
    $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4ÿ = explode( "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkocÿ );
    $_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ = "";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    $_obfuscate_kYiQkJKGlI6JlZWRioaKlYgÿ = array( );
    foreach ( $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4ÿ as $_obfuscate_ko2HkJOUh5WSiZKSjomUk4wÿ )
    {
        if ( strlen( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4wÿ ) != 16 && strlen( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4wÿ ) != 24 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ³¨å†Œå¡å·å¿…é¡»æ˜¯16æˆ–24ä½", 1 );
        }
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 1;
        if ( ZPAGESIZE < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ¯æ¬¡æœ€å¤šåªèƒ½æŸ¥è¯¢".ZPAGESIZE."æ¡", 1 );
        }
        $_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ .= "'".$_obfuscate_ko2HkJOUh5WSiZKSjomUk4wÿ."',";
    }
    if ( $_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡è¾“å…¥ä»»ä½•å¡å·æˆ–è¾“å…¥çš„å¡å·æ ¼å¼éæ³•", 1 );
    }
    $_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ = substr( $_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ, 0, strlen( $_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ ) - 1 );
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ['a'] = " `oldkey` in (".$_obfuscate_joeNkJKLko2Hi4aNjomOj4sÿ.") ";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ['b'] = " `agentid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ['c'] = " `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softcode'];
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
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." order by id asc LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
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
    $_obfuscate_homTioySho6Vh5ORiYmUkokÿ .= 1 < count( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ ) ? " in (".$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ.") order by id asc" : $_obfuscate_j4aSkImMlYyRiY6Mho2VkZMÿ;
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
    echo htmlspecialchars( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ."è¡Œ  è€—æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )."æ¯«ç§’</span>";
echo "</textarea><script>\r\n$(document).ready(function() { \r\n$(\"[cls='newkey']\").bind(\"click\",function(e){\r\nMouse(e);//è®¡ç®—æ˜¾ç¤ºå±‚çš„ä½ç½®\r\nif(tcopy(this.innerText)){\r\nmview(\"å·²å¤åˆ¶åˆ°å‰ªè´´æ¿\");\r\n}\r\n});\r\n});\r\n</script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=v8data&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\næœç´¢æ—§çš„æ³¨å†Œå¡å·ï¼Œæ¯è¡Œä¸€å¼ ï¼Œæ¯æ¬¡æœ€å¤šå¯æŸ¥è¯¢";
echo ZPAGESIZE;
echo "å¼ å¡å·<br><textarea style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"keywords\" >";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQÿ;
echo "</textarea>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"æœç´¢\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n<td nowrap=\"nowrap\">æ‰€å±</td>\t\r\n<td nowrap=\"nowrap\">æ—§å¡å·</td>\t\r\n<td nowrap=\"nowrap\">æ–°å¡å·</td>\t\r\n<td nowrap=\"nowrap\">çŠ¶æ€</td>\t\t\r\n<td nowrap=\"nowrap\">å±æ€§</td>\t\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    echo "<tr nodata=1 class=trd><td colspan=6>æ²¡æ‰¾åˆ°ä»»ä½•æ•°æ®</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        echo "<tr class='trd' id='trd'><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['agentid'];
        echo "</td><td nowrap='nowrap' class=dwidth>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['oldkey'];
        echo "</td>";
        echo "<td nowrap='nowrap' class='dwidth' id='copy_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 16 )."' class='keynum' copyt='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['newkey'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['newkey'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ext1'] == "0" ? "æœªä½¿ç”¨" : "<font color=red>å·²ä½¿ç”¨</font>";
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['ext2'];
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
