<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_i4iGjYyGjouVioyKi4yPhpA�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

require( "../kss_inc/inc.php" );
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "uid", "pg", "int", 1 );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "pg", "sql", "" );
$_obfuscate_i46NkpCVjoqTipKRlYuVlZE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keygroupid", "pg", "int", 0 );
$_obfuscate_jYmIioqIkImSjpGMkY6Hh40� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "sordernum", "gp", "sql", "" );
$_obfuscate_jYmIioqIkImSjpGMkY6Hh40� = trim( $_obfuscate_jYmIioqIkImSjpGMkY6Hh40� );
if ( $_obfuscate_i46NkpCVjoqTipKRlYuVlZE� == 0 && $_obfuscate_lZOThomRipOIi5SRhpWRjY4� != "alino" && strlen( $_obfuscate_jYmIioqIkImSjpGMkY6Hh40� ) != 24 )
{
    if ( isset( $_GET['sordernum'] ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单号应该是一个24位的字符串。".strlen( $_obfuscate_jYmIioqIkImSjpGMkY6Hh40� ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "参数传递错误".strlen( $_obfuscate_jYmIioqIkImSjpGMkY6Hh40� ) );
}
$_obfuscate_iIyOiJCMj4qOi5GOk5KSiYs� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "pagecook", "pg", "sql", "" );
$_obfuscate_j4uSjIeHlYqIjYyNlZOGh5M� = isset( $_SESSION['pagecook'] ) ? $_SESSION['pagecook'] : "";
if ( $_obfuscate_j4uSjIeHlYqIjYyNlZOGh5M� != $_obfuscate_iIyOiJCMj4qOi5GOk5KSiYs� && SALECOOK == 1 )
{
    exit( "Access denied to view this page![2]" );
}
$_obfuscate_iI6Sh5OHlI6MkJSLjZGOiYc� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 32 );
$_SESSION['pagecook'] = $_obfuscate_iI6Sh5OHlI6MkJSLjZGOiYc�;
$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY� = "$('#pagecook').val('".$_obfuscate_iI6Sh5OHlI6MkJSLjZGOiYc�."');";
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "alino" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "pg", "sql", "" );
    $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_order where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
    if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "$('#pagecook').val('".$_obfuscate_iI6Sh5OHlI6MkJSLjZGOiYc�."');" );
    }
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['aliorderno'] == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "$('#pagecook').val('".$_obfuscate_iI6Sh5OHlI6MkJSLjZGOiYc�."');" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok$('#pagecook').val('".$_obfuscate_iI6Sh5OHlI6MkJSLjZGOiYc�."');".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['aliorderno'] );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`='".$_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商ID未找到！" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 7 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商未授权！" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 6 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['powerlist'], 11 ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商未授权！" );
}
$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['alipayset'] );
$_obfuscate_jo_TkYyIiIiUiImPhpSOio8� = explode( ",", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['wxpayset'] );
if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tenpayset'] ) < 10 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['chinabankset'] ) < 4 && strlen( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1] ) < 8 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138set'] ) < 4 && strlen( $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[0] ) < 12 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商支付接口未设置！".$_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[0].",".strlen( $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[0] ) );
}
if ( strlen( $_obfuscate_jYmIioqIkImSjpGMkY6Hh40� ) == 24 )
{
    $_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_order where `ordernum`='".$_obfuscate_jYmIioqIkImSjpGMkY6Hh40�."' and ordertype=0" );
    if ( empty( $_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单未找到!<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
    }
    if ( isset( $_GET['jsv'] ) && $_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['orderstatus'] == 9 )
    {
        echo "jsvok";
    }
    $_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8� = array( 0 => "未付款", 1 => "已付款", 2 => "您使用的是担保交易，则需要在支付宝中选择 确认收货 后系统才会自动发卡！谢谢！", 3 => "已收货", 6 => "提卡出错", 7 => "提卡出错", 8 => "手动完成", 9 => "自动完成" );
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = $_obfuscate_i5WKkIyJjpKNkY2QlY_HkI8�[$_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['orderstatus']];
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "select * from kss_tb_keyset where id='".$_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['keygroupid']."' and `pid`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid']."'";
    $_obfuscate_kpCGkYyIlJWKk42KjIuNi5M� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
    $_obfuscate_kIuPkIeUjoiTlZKLipWIiog� = $_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['keyname']." 天数".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['cday'] * 1." 点数".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['points']." 通道".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['linknum']." 附属性：".$_obfuscate_kpCGkYyIlJWKk42KjIuNi5M�['extattr1'];
    if ( 7 < $_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['orderstatus'] )
    {
        $_obfuscate_lZCJkIySjI6TipKIio6Ojos� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `keyfix`,`keys`,`keyspassword` from `kss_z_key_".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid']."_".$_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['softid']."` where `ordernum`='".$_obfuscate_jYmIioqIkImSjpGMkY6Hh40�."' limit 0,".$_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['keycount'] );
        if ( empty( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� ) )
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "卡号未找到";
        }
        else
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "";
            foreach ( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� as $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY� )
            {
                $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� .= $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['keyfix'].$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['keys'].$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['keyspassword']."\r\n";
            }
        }
    }
    echo "<table border=0  cellpadding=\"5\" cellspacing=\"5\" class=\"orderkey\">\r\n<tr>\r\n<td align=right>订单号</td>\r\n<td align=left>";
    echo $_obfuscate_jYmIioqIkImSjpGMkY6Hh40�;
    echo "</td>\r\n<td align=right>下单时间</td>\r\n<td align=left>";
    echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_lZKKkIqUkI6SjZWNlYqGlZA�['addtime'] );
    echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡类</td>\r\n<td align=left colspan=3>";
    echo $_obfuscate_kIuPkIeUjoiTlZKLipWIiog�;
    echo "</td>\r\n\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡号</td>\r\n<td align=left colspan=3><textarea style=\"width:450px;height:150px;font-family:Fixedsys,Verdana;color:#666;\">";
    echo $_obfuscate_lImOiY6UiYaUlZKQh4qKiok�;
    echo "</textarea></td>\r\n</tr>\r\n</table><script>";
    echo $_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�;
    echo "</script>\r\n";
    exit( );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "select * from kss_tb_keyset where id=".$_obfuscate_i46NkpCVjoqTipKRlYuVlZE�." and `pid`=".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid'];
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 6 )
{
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "select kss_tb_keyset.*,kss_tb_agentprice.keyprice from kss_tb_keyset inner join kss_tb_agentprice on kss_tb_keyset.`id`=kss_tb_agentprice.`keygroupid` where kss_tb_keyset.`id`=".$_obfuscate_i46NkpCVjoqTipKRlYuVlZE�." and kss_tb_keyset.`pid`=".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid']." and kss_tb_agentprice.`managerid`=".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['id']." and kss_tb_agentprice.`tmpkey`='no'";
}
$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
if ( empty( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要购买的注册卡未找到。" );
}
if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice'] <= 0 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要购买的注册卡没有定价。" );
}
if ( isset( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyprice'] ) )
{
    $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyprice'] = 0;
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "save" )
{
    $_obfuscate_hpCPjIePioeHkYiIhpSPkok� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keynum", "pg", "int", 0 );
    $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "qq", "pg", "num", 10000 );
    $_obfuscate_jI_IlIiIkYuMkJKIiYmNkYk� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "orderimg", "pg", "sql", 4 );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
    $_obfuscate_kJCPi4iRiYaSlYeViJSVkIc� = $_SESSION['orderimg'];
    if ( $_obfuscate_kJCPi4iRiYaSlYeViJSVkIc� != strtoupper( $_obfuscate_jI_IlIiIkYuMkJKIiYmNkYk� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "验证码错误<script>$('#chkimg_1').click();".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
    }
    $_SESSION['orderimg'] = "";
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 6 )
    {
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['rmb'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['touzhirmb'] < $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "代理余额不足，不能售卡。<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid'], $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pmid'] );
        if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
        {
            $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0� = $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['softid']( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['softid']." and `keygroupid`=".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['id']." and `managerid`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id']." and `tmpkey`='no'" );
            if ( empty( $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0� ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级总代无该卡类销售权！" );
            }
            if ( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['touzhirmb'] + $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['rmb'] < $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0�['keyprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok� )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."帐号余额不足，暂时不能销售！" );
            }
        }
        $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid'] );
        if ( empty( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "作者帐号未找到，暂时不能销售！" );
        }
        if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['level'] == 8 )
        {
            $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� = _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] );
            $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'] < $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok� )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号余额不足，暂时不能销售！" );
            }
        }
    }
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 8 )
    {
        $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� = _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] );
        $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
        if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['touzhirmb'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['rmb'] < $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号余额不足，暂时不能销售！" );
        }
    }
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_jY_QjpOPk46MkoqNlZCQiJU�( "S" );
    $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "submit_1", "pg", "sql", "" );
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝机器人" )
    {
        if ( strlen( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1] ) < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用支付宝机器人来完成支付！<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = "<table border=0><tr><td><form method=post action='kss_inc/jqrjamp.php' target=_blank><input type=hidden name=aliusername value='".$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1]."'>";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type=hidden name=rmb value='".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�."'>";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type=hidden name=ordernum value=KKAPP-1-".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�.">";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type=submit class=submitbtn   value='点击支付'></form></td>";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<td><span style='color:#0000ff'>收款人请填写</span><input type=text  onClick='this.select()' style='width:100px;color:#0000ff' value=".$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1].">&nbsp;";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<span style='color:#0000ff'>付款金额请填写</span><input type=text  onClick='this.select()' style='width:50px;color:#0000ff' value=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�."></span>&nbsp;";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<span style='color:#0000ff'>付款说明请填写</span><input type=text  onClick='this.select()' style='width:150px;color:#0000ff' value=KKAPP-1-".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."></span></td></tr></table><br>";
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<script>alert('当前使用的支付宝第三方特殊接口\\r\\n\\r\\n在支付宝转帐页面需要您手动输入【收款人】【付款金额】【付款说明】\\r\\n\\r\\n本页面的【点击支付】按钮右边可以找到\\r\\n三项信息请正确填写，不然会造成购卡失败！');</script>";
    }
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝" )
    {
        if ( strlen( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1] ) < 8 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用支付宝来完成支付！<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        include( KSSINCDIR."alipay_function.php" );
        $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = round( $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, 2 );
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "service" => $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0], "partner" => $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1], "seller_id" => $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1], "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify2.php", "subject" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "body" => $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyname'], "out_trade_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "price" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "payment_type" => "1", "quantity" => "1", "logistics_fee" => "0.00", "logistics_payment" => "SELLER_PAY", "logistics_type" => "EXPRESS", "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return2.php", "show_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( )."/sale.php?uid=".$_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� );
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] != "create_direct_pay_by_user" )
        {
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_name'] = $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg�;
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_address'] = "虚拟物品无需收货地址";
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_zip'] = "100000";
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_phone'] = "010-12345678";
        }
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_koiJjZKKlIqLjZORiYaGjog�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['alikey'] );
    }
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "财付通" )
    {
        if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tenpayset'] ) != 10 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用财付通来完成支付！<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        include( KSSINCDIR."tenpay_function.php" );
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "partner" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tenpayset'], "out_trade_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "total_fee" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� * 100, "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return2.php", "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify2.php", "body" => "注册卡费用", "bank_type" => "DEFAULT", "spbill_create_ip" => $_SERVER['REMOTE_ADDR'], "fee_type" => "1", "subject" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "sign_type" => "MD5", "service_version" => "1.0", "input_charset" => "UTF-8", "sign_key_index" => "1", "transport_fee" => "0", "trade_mode" => "1", "trans_type" => "1" );
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_lZWKjpCLjomHkoyKlZWQi5M�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tenkey'] );
    }
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "网银在线" )
    {
        if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['chinabankset'] ) < 4 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用网银在线来完成支付！<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        include( KSSINCDIR."chinabankpay_function.php" );
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "partner" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['chinabankset'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "rmb" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "cz" => 0, "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return2.php" );
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_jZOUipGMiJKKjZKJkZCIkYk�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['chinabankkey'] );
    }
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "微信扫码" )
    {
        if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['wxpayset'] ) < 15 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用微信扫码来完成支付！<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        include( KSSINCDIR."wxpay_function.php" );
        $_obfuscate_jZOJjY_KiJCRjIeJjYaNlY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft  where `id`=".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['softid'] );
        $_obfuscate_iY2Pho6Li4yQkIaIiYuIios� = array( "appid" => $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[0], "body" => $_obfuscate_jZOJjY_KiJCRjIeJjYaNlY8�['softname'].",".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyname'], "device_info" => "WEB", "mch_id" => $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[1], "nonce_str" => md5( time( ) ), "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify2.php", "out_trade_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "product_id" => $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['softid']."_".$_obfuscate_i46NkpCVjoqTipKRlYuVlZE�, "spbill_create_ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� ), "time_expire" => date( "YmdHis", time( ) + 600 ), "time_start" => date( "YmdHis" ), "total_fee" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� * 100, "trade_type" => "NATIVE" );
        ksort( &$_obfuscate_iY2Pho6Li4yQkIaIiYuIios� );
        $_obfuscate_lIyHjJWRj46SkI6Ik4aNlYk� = _obfuscate_h4yJjZWLkYyMjIqNlYaSjpM�( $_obfuscate_iY2Pho6Li4yQkIaIiYuIios�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['wxpaykey'] );
        $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ� = _obfuscate_lZCGk4mUkY6GhoeIkZWMk5Q�( $_obfuscate_lIyHjJWRj46SkI6Ik4aNlYk�, "https://api.mch.weixin.qq.com/pay/unifiedorder" );
        $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok� = _obfuscate_komQkZGUhomRk4eLipOSkJM�( $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ� );
        $_obfuscate_jYqIiYuQiIuHiYmGkpSQlYg� = _obfuscate_kpWLkoyMhouPipCQiImKjZA�( $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['wxpaykey'] );
        if ( $_obfuscate_jYqIiYuQiIuHiYmGkpSQlYg� !== TRUE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用微信扫码来完成支付！".$_obfuscate_jYqIiYuQiIuHiYmGkpSQlYg�."<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/qrcode.php?data=".urlencode( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok�['code_url'] );
    }
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "易付通" )
    {
        if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138set'] ) < 4 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用易付通来完成支付！<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
        }
        include( KSSINCDIR."e138pay_function.php" );
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "partner" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138set'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "rmb" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return2.php", "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify2.php", "bkid" => $_POST['bkid'] );
        $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_lYuMlYiPko_OkYqUk4qRlJE�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138key'] );
    }
    $_obfuscate_k4qViYqJiJOShpGPjoeNh5M� = array( "pid" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid'], "managerid" => $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['id'], "softid" => $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['softid'], "keygroupid" => $_obfuscate_i46NkpCVjoqTipKRlYuVlZE�, "keycount" => $_obfuscate_hpCPjIePioeHkYiIhpSPkok�, "tags" => $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg�, "payqq" => $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg�, "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "orderamount" => $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�, "agentamount" => $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�, "ordertype" => 0, "orderstatus" => 0, "beginid" => 0, "addtime" => time( ) );
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( "kss_tb_order", $_obfuscate_k4qViYqJiJOShpGPjoeNh5M�, "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单添加失败<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
    }
    echo "ok<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\t\r\n";
    echo $_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�;
    echo "$(\"#sordernum\").val(\"";
    echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
    echo "\");\r\n$(\"#cofok\").bind(\"click\",function(){\r\nvar ourl=\"";
    echo INSTALLPATH;
    echo "kss_inc/sale_cmd.php?action=alino&uid=";
    echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
    echo "&isajax=1&ordernum=";
    echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
    echo "&pagecook=\"+$(\"#pagecook\").val();\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\n";
    echo $_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�;
    echo "if(html.substr(0,2)=='ok'){\r\neval(html.substr(2,55));\r\nwindow.open('https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo='+html.substr(57));\r\n}else{\r\neval(html);\r\nmalert('未能取到支付宝订单号，请<a href=http://www.alipay.com target=_blank>登陆支付宝确认收货</a>');\r\n};\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n\r\n\r\n});\r\n});\r\n</script><table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>订单号</td>\r\n<td align=left ><span style=\"font-size:14px;font-weight:700;color:#f00\">";
    echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
    echo "</span>  &nbsp;&nbsp;&nbsp;订单号已复制到父窗口的订单搜索输入框</td>\r\n</tr>\r\n<tr>\r\n<td align=right>注册卡类</td>\r\n<td align=left> ";
    echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyname'];
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:#aaa'>[";
    echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'];
    echo "天";
    if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['points'] != 0 )
    {
        echo "，&nbsp;&nbsp;".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['points'];
        echo "点";
    }
    if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] != 1 )
    {
        echo "，&nbsp;&nbsp;".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'];
        echo "通道";
    }
    if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['extattr1'] != "" )
    {
        echo "，&nbsp;&nbsp;附加属性：".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['extattr1'];
    }
    echo "]</span></td>\r\n</tr>\r\n<tr>\r\n<td align=right>订单金额</td>\r\n<td align=left><input type=hidden id='tprice_2' value=\"";
    echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
    echo "\">单价";
    echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice']." * 张数".$_obfuscate_hpCPjIePioeHkYiIhpSPkok�." = ".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice'] * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
    echo "*元</td>\r\n</tr>\r\n<tr>\r\n<td align=right>您的QQ号</td>\r\n<td align=left>";
    echo $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg�;
    echo "</td>\r\n</tr>\r\n";
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "易付通" )
    {
        echo "<tr><td align=left colspan=2>".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."</td></tr>";
    }
    else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝机器人" )
    {
        echo "<tr><td align=left colspan=2>".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�;
        echo "<font color=red>付款成功后，发卡程序（值班机器人）会在2分钟内发卡，请稍等一会然后点击下边的查询订单卡号按钮。</font></td></tr>";
    }
    else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "财付通" )
    {
        echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=window.open('".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."') value='点击支付' ></td></tr>";
    }
    else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "网银在线" )
    {
        echo "<tr><td align=left colspan=2>".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."</td></tr>";
    }
    else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝" )
    {
        echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=window.open('".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."') value='点击支付' ><br>";
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "create_partner_trade_by_buyer" )
        {
            if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[2] == "" )
            {
                echo "<font color=red>如果你没有支付宝帐号，为免不必要的麻烦请不要使用支付宝购卡</font><br><br>";
            }
            else
            {
                echo "<font color=red>如果你没有支付宝帐号，在点击支付后，请选非支付宝会员支付方式，并且在Email地址或手机号码栏填写</font><font color=blue>".$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[2]."</font><br>";
                echo "<font color=red>支付成功后，系统会自动将卡号发送到你的QQ邮箱，或者你可以通过订单查询来取得卡号</font><br><br>";
            }
            echo "如果你有支付帐帐号，支付成功后，系统会自动发货，请到支付宝网站的交易管理里<input type=button class=submitbtn value='确认收货' id='cofok'><br>确认收货后，系统会自动将卡号发送到你的QQ邮箱，或者你可以通过订单查询来取得卡号";
        }
        else if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "trade_create_by_buyer" )
        {
            echo "<font color=red>请使用即时到帐方式支付，不要用担宝交易</font>";
        }
        echo "</td></tr>";
    }
    else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "微信扫码" )
    {
        echo "<tr><td align=left colspan=2>请用微信扫描下边的二维码支付<br><img src=".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�." style='width:150px;height:150px;'></td></tr>";
    }
    echo "<tr>\r\n<td align=right>&nbsp</td>\r\n<td align=left><span style=\"color:#f00;font-weight:700;font-size:14px\">在取得卡号之前，请不要关闭本窗口。<br>\r\n如若付款完成后，仍未弹出注册卡号：<input type=button class=submitbtnn value=\"请单击这里，查询订单卡号\" onclick=malert('";
    echo INSTALLPATH;
    echo "kss_inc/sale_cmd.php?isajax=1&sordernum='+encodeURIComponent($(\"#sordernum\").val())+'&uid=";
    echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
    echo "&pagecook='+$(\"#pagecook\").val(),'查询到的订单信息',700,260);></td>\r\n</tr>\r\n</table>\r\n";
    if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "微信扫码" )
    {
        echo "<script type=\"text/javascript\">\r\nvar t\r\nt=setTimeout(\"jsvieworder()\",15000);\r\nfunction jsvieworder(){\r\nvar ourl='";
        echo INSTALLPATH;
        echo "kss_inc/sale_cmd.php?isajax=1&jsv=1&sordernum='+encodeURIComponent($(\"#sordernum\").val())+'&uid=";
        echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
        echo "&pagecook='+$(\"#pagecook\").val();\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\n\r\nif(html.substr(0,5)=='jsvok'){\r\nmalert(html.substr(5),'充值成功',700,260);\t\t\r\n}else{\r\nt=setTimeout(\"jsvieworder()\",3000);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n}\r\n</script>\r\n\r\n";
    }
    exit( );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 6 && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['rmb'] + $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['touzhirmb'] < 1 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "代理余额不足，不能售卡。<script>".$_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�."</script>" );
}
echo "<script>\r\n$(document).ready(function () {\r\n";
echo $_obfuscate_lYeHh4mRkI6HkIuHi4qNjoY�;
echo "$(\"#chkimg_1\").bind(\"click\",function(){\r\n$(\"#chkimg_1\").attr(\"src\",\"";
echo INSTALLPATH;
echo "kss_inc/orderimg.php?rndid=\"+sTime());\r\n});\r\n$(\"input[name='submit_1']\").bind(\"click\",function(){\r\n$('#inorder').attr(\"action\",'";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?action=save&uid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
echo "&pagecook='+$(\"#pagecook\").val());\r\n});\r\n$('#inorder').ajaxForm({\r\n//url:'";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?action=save&uid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
echo "&pagecook='+$(\"#pagecook\").val(),\r\nbeforeSubmit:function (arr, \$form, options) {\r\nvar qqstr=$(\"#qq_1\").val();\r\nvar vcode=$(\"#orderimg_1\").val();\r\nif(qqstr.length<5){\r\nmalert('QQ号码填写错误');\r\nreturn false;\r\n}\r\nif(vcode.length<4){\r\nmalert('验证码填写错误');\r\nreturn false;\r\n}\r\nreturn true;\r\n},\r\nsuccess:function (sdata, statusText, xhr, \$form) {\r\nif(sdata.substr(0,2)=='ok'){\r\n$(\"#inorder\").parents().find(\".malertboxclosebtn\").click();\r\nmalert(sdata.substr(2),'0订单已提交，完成支付前请不要关闭本窗口',800,300); \r\n}else{\t\t\t\t\r\nmalert(sdata); \t\t\t\r\n}\r\n},\r\nerror:function(){alert(\"error!\");}\r\n});\r\n\r\n});\r\n</script>\r\n<form id=\"inorder\" method=\"post\"> \r\n<input name=\"isajax\" value=1 type=\"hidden\" />\r\n<input type=\"hidden\" name=\"keygroupid\" id=\"keygroupid\" value='";
echo $_obfuscate_i46NkpCVjoqTipKRlYuVlZE�;
echo "' />\r\n<table border=0  cellpadding=\"5\" cellspacing=\"10\" >\r\n<tr>\r\n<td align=right>注册卡类</td>\r\n<td align=left> ";
echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['keyname'];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:#aaa'>[";
echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'];
echo "天";
if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['points'] != 0 )
{
    echo "，&nbsp;&nbsp;".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['points'];
    echo "点";
}
if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] != 1 )
{
    echo "，&nbsp;&nbsp;".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'];
    echo "通道";
}
if ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['extattr1'] != "" )
{
    echo "，&nbsp;&nbsp;附加属性：".$_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['extattr1'];
}
echo "]</span></td>\r\n</tr>\r\n<tr>\r\n<td align=right>单价</td>\r\n<td align=left>";
echo $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['retailprice'];
echo "元</td>\r\n</tr>\r\n<tr>\r\n<td align=right>购买张数</td>\r\n<td align=left><input type=\"text\" maxlength=\"2\" name=\"keynum\" id=\"keynum_1\" value='1' style=\"vertical-align:middle;width:100px\" AUTOCOMPLETE=\"off\" />张</td>\r\n</tr>\r\n<tr>\r\n<td align=right>您的QQ号</td>\r\n<td align=left><input type=\"text\" maxlength=\"11\" name=\"qq\" id=\"qq_1\" AUTOCOMPLETE=\"off\" value='' style=\"vertical-align:middle;width:100px\" onkeyup=\"this.value=this.value.replace(/\\D/g, '')\" /> *必填";
if ( 0 < SENDMAILMODE )
{
    echo "，购卡成功后系统会向您的QQ邮箱发送你购得的注册卡号。";
}
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>请输入验证码</td>\r\n<td align=left valign=middle><input type=\"text\" maxlength=\"4\" name=\"orderimg\" id=\"orderimg_1\" AUTOCOMPLETE=\"off\" value='' style=\"vertical-align:middle;width:45px\"/>&nbsp;<img style=\"vertical-align:middle;\" id=\"chkimg_1\" src=\"";
echo INSTALLPATH;
echo "kss_inc/orderimg.php?rndid=";
echo time( );
echo "\"> *看不清？请点击图片刷新验证码</td>\r\n</tr>\r\n<tr>\r\n<td align=right>支付方式</td>\r\n<td align=left>";
if ( isset( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138set'] ) && 10 < strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138set'] ) )
{
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� = "<br>易付通支付请先选择支付银行<select name=bkid>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=BOCB2C>中国银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CMB>招商银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=ICBCB2C>中国工商银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CCB>中国银设银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=ABC>中国农业银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=SPDB>上海浦东发展银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CIB>兴业银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=GDB>广东发展银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=SDB>深圳发展银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CMBC>中国民行银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=COMM>交通银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CITIC>中信银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CEBBANK>中国光大银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=PSBC-DEBIT>中国邮政储蓄银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "</select>";
    echo $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0�;
    echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='易付通'>";
}
if ( 8 < strlen( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1] ) )
{
    if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "alipay_jqr" )
    {
        echo "<input type=submit name=submit_1 class=submitbtn value='支付宝机器人'>";
    }
    else
    {
        echo "<input type=submit name=submit_1 class=submitbtn value='支付宝'>";
    }
}
if ( 15 < strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['wxpayset'] ) )
{
    echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='微信扫码'>";
}
if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tenpayset'] ) == 10 )
{
    echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='财付通'>";
}
if ( 6 < strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['chinabankset'] ) )
{
    echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='网银在线'>";
}
echo "</td>\r\n</tr>\r\n</table>\r\n</form>\r\n\r\n";
?>
