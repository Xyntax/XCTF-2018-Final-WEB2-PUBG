<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_joeHkIiGkIuHi4eNh5WNkY8ÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "ordernum", "gp", "sql", "" );
$_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select A.*, B.`level`, B.`pmid` from kss_tb_order as A left join kss_tb_manager as B on A.`managerid`=B.`id` where A.`ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] != $_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['pid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªæ‰¾åˆ°è®¢å•å·ï¼Œè®¢å•å¯èƒ½å·²è¢«æ¸…ç†æ‰äº†ï¼Œæˆ–è€…è¯¥è®¢å•æ˜¯ä»£ç†è‡ªåŠ©å……å€¼è®¢å•" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] != $_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['managerid'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥è®¢å•ä¸æ˜¯ä½ çš„ï¼Œä½ æ— æƒæŸ¥çœ‹" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 && $_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['pmid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è¯¥è®¢å•ä½ æ— æƒæŸ¥çœ‹" );
}
$_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `keyfix`,`keys`,`keyspassword` from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['softid']."` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' limit 0,".$_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['keycount'] );
if ( empty( $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ ) )
{
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ = "å¡å·è¿˜æœªç”Ÿæˆ";
}
else
{
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ = "";
    foreach ( $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyspassword']."\r\n";
    }
}
$_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where `id`=".$_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['keygroupid'] );
if ( empty( $_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ ) )
{
    $_obfuscate_kIuPkIeUjoiTlZKLipWIiogÿ = "å¡ç±»æœªæ‰¾åˆ°";
}
else
{
    $_obfuscate_kIuPkIeUjoiTlZKLipWIiogÿ = $_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ['keyname']." å¤©æ•°".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ['cday'] * 1." ç‚¹æ•°".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ['points']." é€šé“".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ['linknum']."<br>é™„å±æ€§ï¼š".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5Mÿ['extattr1'];
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<table border=0  cellpadding=\"5\" cellspacing=\"5\" class=\"orderkey\">\r\n<tr>\r\n<td align=right>è®¢å•å·</td>\r\n<td align=left>";
echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ;
echo "</td>\r\n<td align=right>ä¸‹å•æ—¶é—´</td>\r\n<td align=left>";
echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_k4eGjIaPjoaPlJWMlJSLhocÿ['addtime'] );
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>æ³¨å†Œå¡ç±»</td>\r\n<td align=left>";
echo $_obfuscate_kIuPkIeUjoiTlZKLipWIiogÿ;
echo "</td>\r\n<td colspan=2><input type='button' class=submitbtn value='å¤åˆ¶' id='copykey'><span id=copyed></span></td>\r\n\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>æ³¨å†Œå¡å·</td>\r\n<td align=left colspan=3><textarea id=\"orderkeynum\" style=\"width:450px;height:150px;font-family:Fixedsys,Verdana;color:#666;\">";
echo $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ;
echo "</textarea></td>\r\n</tr>\r\n</table>\r\n";
echo "<div class=pageruntime>æŸ¥è¯¢ç”¨æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
?>
