<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYeNkoeMlY2Ph5KGjY6VkIk�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", 0 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
}
$_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cztime1", "gp", "time", "2012-01-01 00:00:00" );
$_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cztime2", "gp", "time", _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) );
$_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo� = strtotime( $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU� );
$_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE� = strtotime( $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4� );
if ( $_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE� < $_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo� )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你选择的充值日期时间段错误，前边的应该要比后边的小" );
}
$_obfuscate_jJWJi46Gi4yJjYqRiY6TjYk� = "";
if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� != 0 )
{
    $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `id`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� );
    if ( empty( $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYk� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要统计的用户未找到" );
    }
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有该软件的授权", 1 );
    }
}
else
{
    $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc� = array( );
    $_obfuscate_ioiKkImNk5KKlZSIjomPkow� = array( );
    $_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select `id`,`username`,`level`,`pmid` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and isdel=0 order by id asc" );
    foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_j5OIiY_GkpCLh5CJh5SIlYc�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'] )
        {
            $_obfuscate_ioiKkImNk5KKlZSIjomPkow�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] )
        {
            $_obfuscate_ioiKkImNk5KKlZSIjomPkow�[] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        }
    }
}
$_obfuscate_kIyNj4uPjZGOiouLiYiQlZQ� = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_kIyNj4uPjZGOiouLiYiQlZQ� = " and `id` in (select distinct `keygroupid` from kss_tb_agentprice where managerid=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.") ";
}
$_obfuscate_hoqKho2Mh4iNkpOTiZONio4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_keyset where `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and islock=0".$_obfuscate_kIyNj4uPjZGOiouLiYiQlZQ� );
echo "<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\r\n$(\"#cztime1,#cztime2\").date_input({addhss: \"00:00:00\"});\r\n});\r\n\r\n\r\n</script>\r\n\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=report&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";
if ( 6 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "\t\t<select id='managerid' name='managerid'>\t\t\t<option value=0>所有后台用户</option>\r\n";
    foreach ( $_obfuscate_kIiMk4_SkpOVho2SjoyMjZU� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
        {
            if ( in_array( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'], $_obfuscate_ioiKkImNk5KKlZSIjomPkow� ) )
            {
                echo "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
                if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] )
                {
                    echo " selected";
                }
                echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']]."]</option>";
            }
        }
        else
        {
            echo "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
            if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] )
            {
                echo " selected";
            }
            echo ">".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username']."[".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']]."]</option>";
        }
    }
    echo "\t\t</select>";
}
echo "\r\n<input name=\"cztime1\" id=\"cztime1\" class=\"my_date_input\" type=\"text\" value=\"";
echo $_obfuscate_kYmQkIuQkpOLjo6RlY6LkJU�;
echo "\" /><span style=\"font-family: 宋体\">＜充值日期≤</span><input name=\"cztime2\" id=\"cztime2\" class=\"my_date_input\" type=\"text\" value=\"";
echo $_obfuscate_kJSJjYyPlYyKj5GPiYyKjY4�;
echo "\" />\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"统计\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n";
$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = "";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." and ";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
{
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
    {
        $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_manager where pmid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
        $_obfuscate_ipSOh4yIjomLjoqVkJOKk5A� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
        if ( empty( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZA� ) )
        {
            foreach ( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZA� as $_obfuscate_jomUjIaRjIaQj5GNiIqUiow� )
            {
                $_obfuscate_ipSOh4yIjomLjoqVkJOKk5A� .= ",".$_obfuscate_jomUjIaRjIaQj5GNiIqUiow�['id'];
            }
        }
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = " `managerid` in (".$_obfuscate_ipSOh4yIjomLjoqVkJOKk5A�.") and ";
    }
    else
    {
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." and ";
    }
}
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
    {
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = " `managerid`>0 and ";
    }
    else if ( $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYk�['level'] == 7 )
    {
        $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_manager where pmid=".$_obfuscate_jJWJi46Gi4yJjYqRiY6TjYk�['id'] );
        $_obfuscate_ipSOh4yIjomLjoqVkJOKk5A� = $_obfuscate_jJWJi46Gi4yJjYqRiY6TjYk�['id'];
        if ( empty( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZA� ) )
        {
            foreach ( $_obfuscate_lIaKh5WUhpSOiJCNiYmGjZA� as $_obfuscate_jomUjIaRjIaQj5GNiIqUiow� )
            {
                $_obfuscate_ipSOh4yIjomLjoqVkJOKk5A� .= ",".$_obfuscate_jomUjIaRjIaQj5GNiIqUiow�['id'];
            }
        }
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = " `managerid` in (".$_obfuscate_ipSOh4yIjomLjoqVkJOKk5A�.") and ";
    }
    else
    {
        $_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY� = " `managerid`=".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�." and ";
    }
}
echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td>注册卡类</td>\r\n<td>已充值注册卡数量</td>\r\n<td>未充值注册卡数量</td>\r\n<td>退卡数量</td>\r\n</tr>\r\n";
$_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQ� = 0;
foreach ( $_obfuscate_hoqKho2Mh4iNkpOTiZONio4� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_lIeHjpGOi5WTlIeGj4_Jj48� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "SELECT count(*) as tnum from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where ".$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY�." `keyfix`='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']."' and cztime between ".$_obfuscate_iYeTlYuQiIuTlIqQi5KOkoo�." and ".$_obfuscate_h42Vi5OUi5OGlJCOjYmPlJE�." and isback=0" );
    $_obfuscate_iYyPi4uTk46UkYyNjY6Rj44� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "SELECT count(*) as tnum from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where ".$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY�." `keyfix`='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']."' and cztime=0 and isback=0" );
    $_obfuscate_iYqNh4yVi4mMkZCHh4mUkoY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "SELECT count(*) as tnum from kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where  isback=1 and ".$_obfuscate_i4iJk4iJjI_JkJKUi4iMiYY�."  `keyfix`='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']."'" );
    $_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQ� = $_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQ� + $_obfuscate_lIeHjpGOi5WTlIeGj4_Jj48�['tnum'] + $_obfuscate_iYyPi4uTk46UkYyNjY6Rj44�['tnum'] + $_obfuscate_iYqNh4yVi4mMkZCHh4mUkoY�['tnum'];
    echo "<tr class=trd><td>"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname'] )."</td><td>".$_obfuscate_lIeHjpGOi5WTlIeGj4_Jj48�['tnum']."</td><td>".$_obfuscate_iYyPi4uTk46UkYyNjY6Rj44�['tnum']."</td><td>".$_obfuscate_iYqNh4yVi4mMkZCHh4mUkoY�['tnum']."</td></tr>";
}
echo "<tr class=trd><td>注册卡总数</td><td colspan=3 align=center>".$_obfuscate_k5CIjpGIlZOGk5WJi4eTkZQ�."</td></tr>";
echo "</table>";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
