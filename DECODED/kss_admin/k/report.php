<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYeNkoeMlY2Ph5KGjY6VkIkÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softid", "gp", "int", 0 );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "managerid", "gp", "int", 0 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
}
$_obfuscate_kYmQkIuQkpOLjo6RlY6LkJUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cztime1", "gp", "time", "2012-01-01 00:00:00" );
$_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "cztime2", "gp", "time", _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( ) );
$_obfuscate_iYeTlYuQiIuTlIqQi5KOkooÿ = strtotime( $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJUÿ );
$_obfuscate_h42Vi5OUi5OGlJCOjYmPlJEÿ = strtotime( $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4ÿ );
if ( $_obfuscate_h42Vi5OUi5OGlJCOjYmPlJEÿ < $_obfuscate_iYeTlYuQiIuTlIqQi5KOkooÿ )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ é€‰æ‹©çš„å……å€¼æ—¥æœŸæ—¶é—´æ®µé”™è¯¯ï¼Œå‰è¾¹çš„åº”è¯¥è¦æ¯”åè¾¹çš„å°" );
}
$_obfuscate_jJWJi46Gi4yJjYqRiY6TjYkÿ = "";
if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ != 0 )
{
    $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and `id`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ );
    if ( empty( $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYkÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ è¦ç»Ÿè®¡çš„ç”¨æˆ·æœªæ‰¾åˆ°" );
    }
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4ÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ æ²¡æœ‰è¯¥è½¯ä»¶çš„æˆæƒ", 1 );
    }
}
else
{
    $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYcÿ = array( );
    $_obfuscate_ioiKkImNk5KKlZSIjomPkowÿ = array( );
    $_obfuscate_kIiMk4_SkpOVho2SjoyMjZUÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select `id`,`username`,`level`,`pmid` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and isdel=0 order by id asc" );
    foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZUÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYcÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username'];
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pmid'] )
        {
            $_obfuscate_ioiKkImNk5KKlZSIjomPkowÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'] )
        {
            $_obfuscate_ioiKkImNk5KKlZSIjomPkowÿ[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        }
    }
}
$_obfuscate_kIyNj4uPjZGOiouLiYiQlZQÿ = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_kIyNj4uPjZGOiouLiYiQlZQÿ = " and `id` in (select distinct `keygroupid` from kss_tb_agentprice where managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ.") ";
}
$_obfuscate_hoqKho2Mh4iNkpOTiZONio4ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and islock=0".$_obfuscate_kIyNj4uPjZGOiouLiYiQlZQÿ );
echo "<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\r\n$(\"#cztime1,#cztime2\").date_input({addhss: \"00:00:00\"});\r\n});\r\n\r\n\r\n</script>\r\n\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=report&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    echo "\t\t<select id='managerid' name='managerid'>\t\t\t<option value=0>æ‰€æœ‰åå°ç”¨æˆ·</option>\r\n";
    foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZUÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
        {
            if ( in_array( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'], $_obfuscate_ioiKkImNk5KKlZSIjomPkowÿ ) )
            {
                echo "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
                if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'] )
                {
                    echo " selected";
                }
                echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level']]."]</option>";
            }
        }
        else
        {
            echo "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
            if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'] )
            {
                echo " selected";
            }
            echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level']]."]</option>";
        }
    }
    echo "\t\t</select>";
}
echo "\r\n<input name=\"cztime1\" id=\"cztime1\" class=\"my_date_input\" type=\"text\" value=\"";
echo $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJUÿ;
echo "\" /><span style=\"font-family: å®‹ä½“\">ï¼œå……å€¼æ—¥æœŸâ‰¤</span><input name=\"cztime2\" id=\"cztime2\" class=\"my_date_input\" type=\"text\" value=\"";
echo $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4ÿ;
echo "\" />\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"ç»Ÿè®¡\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n";
$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
{
    $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." and ";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
{
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == 0 )
    {
        $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZAÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_manager where pmid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] );
        $_obfuscate_ipSOh4yIjomLjoqVkJOKk5Aÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'];
        if ( empty( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZAÿ ) )
        {
            foreach ( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZAÿ as $_obfuscate_jomUjIaRjIaQj5GNiIqUiowÿ )
            {
                $_obfuscate_ipSOh4yIjomLjoqVkJOKk5Aÿ .= ",".$_obfuscate_jomUjIaRjIaQj5GNiIqUiowÿ['id'];
            }
        }
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = " `managerid` in (".$_obfuscate_ipSOh4yIjomLjoqVkJOKk5Aÿ.") and ";
    }
    else
    {
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." and ";
    }
}
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] )
{
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ == 0 )
    {
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = " `managerid`>0 and ";
    }
    else if ( $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYkÿ['level'] == 7 )
    {
        $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZAÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_manager where pmid=".$_obfuscate_jJWJi46Gi4yJjYqRiY6TjYkÿ['id'] );
        $_obfuscate_ipSOh4yIjomLjoqVkJOKk5Aÿ = $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYkÿ['id'];
        if ( empty( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZAÿ ) )
        {
            foreach ( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZAÿ as $_obfuscate_jomUjIaRjIaQj5GNiIqUiowÿ )
            {
                $_obfuscate_ipSOh4yIjomLjoqVkJOKk5Aÿ .= ",".$_obfuscate_jomUjIaRjIaQj5GNiIqUiowÿ['id'];
            }
        }
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = " `managerid` in (".$_obfuscate_ipSOh4yIjomLjoqVkJOKk5Aÿ.") and ";
    }
    else
    {
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5Aÿ." and ";
    }
}
echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td>æ³¨å†Œå¡ç±»</td>\r\n<td>å·²å……å€¼æ³¨å†Œå¡æ•°é‡</td>\r\n<td>æœªå……å€¼æ³¨å†Œå¡æ•°é‡</td>\r\n<td>é€€å¡æ•°é‡</td>\r\n</tr>\r\n";
$_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQÿ = 0;
foreach ( $_obfuscate_hoqKho2Mh4iNkpOTiZONio4ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    $_obfuscate_lIeHjpGOi5WTlIeGj4_Jj48ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "SELECT count(*) as tnum from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where ".$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ." `keyfix`='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']."' and cztime between ".$_obfuscate_iYeTlYuQiIuTlIqQi5KOkooÿ." and ".$_obfuscate_h42Vi5OUi5OGlJCOjYmPlJEÿ." and isback=0" );
    $_obfuscate_iYyPi4uTk46UkYyNjY6Rj44ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "SELECT count(*) as tnum from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where ".$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ." `keyfix`='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']."' and cztime=0 and isback=0" );
    $_obfuscate_iYqNh4yVi4mMkZCHh4mUkoYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "SELECT count(*) as tnum from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." where  isback=1 and ".$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYYÿ."  `keyfix`='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']."'" );
    $_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQÿ = $_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQÿ + $_obfuscate_lIeHjpGOi5WTlIeGj4_Jj48ÿ['tnum'] + $_obfuscate_iYyPi4uTk46UkYyNjY6Rj44ÿ['tnum'] + $_obfuscate_iYqNh4yVi4mMkZCHh4mUkoYÿ['tnum'];
    echo "<tr class=trd><td>"._obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname'] )."</td><td>".$_obfuscate_lIeHjpGOi5WTlIeGj4_Jj48ÿ['tnum']."</td><td>".$_obfuscate_iYyPi4uTk46UkYyNjY6Rj44ÿ['tnum']."</td><td>".$_obfuscate_iYqNh4yVi4mMkZCHh4mUkoYÿ['tnum']."</td></tr>";
}
echo "<tr class=trd><td>æ³¨å†Œå¡æ€»æ•°</td><td colspan=3 align=center>".$_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQÿ."</td></tr>";
echo "</table>";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<div id=pageruntime>é¡µé¢è¿è¡Œæ—¶é—´"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
echo "</body>\r\n</html>";
?>
