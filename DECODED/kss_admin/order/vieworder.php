<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_joeHkIiGkIuHi4eNh5WNkY8�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "gp", "sql", "" );
$_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select A.*, B.`level`, B.`pmid` from kss_tb_order as A left join kss_tb_manager as B on A.`managerid`=B.`id` where A.`ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] != $_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['pid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未找到订单号，订单可能已被清理掉了，或者该订单是代理自助充值订单" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] != $_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['managerid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该订单不是你的，你无权查看" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 && $_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该订单你无权查看" );
}
$_obfuscate_lZCJkIySjI6TipKIio6Ojos� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `keyfix`,`keys`,`keyspassword` from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['softid']."` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' limit 0,".$_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['keycount'] );
if ( empty( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� ) )
{
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "卡号还未生成";
}
else
{
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "";
    foreach ( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyspassword']."\r\n";
    }
}
$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where `id`=".$_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['keygroupid'] );
if ( empty( $_obfuscate_kpCGkYyIlJWKk42KjIuNi5M� ) )
{
    $_obfuscate_kIuPkIeUjoiTlZKLipWIiog� = "卡类未找到";
}
else
{
    $_obfuscate_kIuPkIeUjoiTlZKLipWIiog� = $_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['keyname']." 天数".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['cday'] * 1." 点数".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['points']." 通道".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['linknum']."<br>附属性：".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['extattr1'];
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<table border=0  cellpadding=\"5\" cellspacing=\"5\" class=\"orderkey\">\r\n<tr>\r\n<td align=right>订单号</td>\r\n<td align=left>";
echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
echo "</td>\r\n<td align=right>下单时间</td>\r\n<td align=left>";
echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_k4eGjIaPjoaPlJWMlJSLhoc�['addtime'] );
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡类</td>\r\n<td align=left>";
echo $_obfuscate_kIuPkIeUjoiTlZKLipWIiog�;
echo "</td>\r\n<td colspan=2><input type='button' class=submitbtn value='复制' id='copykey'><span id=copyed></span></td>\r\n\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡号</td>\r\n<td align=left colspan=3><textarea id=\"orderkeynum\" style=\"width:450px;height:150px;font-family:Fixedsys,Verdana;color:#666;\">";
echo $_obfuscate_lImOiY6UiYaUlZKQh4qKiok�;
echo "</textarea></td>\r\n</tr>\r\n</table>\r\n";
echo "<div class=pageruntime>查询用时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
?>
