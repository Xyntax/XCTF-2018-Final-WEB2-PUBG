<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYmQkZSNkIqKjJWHh4_OkYw�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "gp", "sql", "softlist" );
$_obfuscate_jIuGjoaQh5OPiZWQkpGIjpA� = str_replace( KSSROOTDIR, "/", dirname( __FILE__ ) );
$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = "�����������������";
$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = "�����������������";
$$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = array( "managerlist" => "后台用户列表", "notices" => "站内公告管理", "addmanager" => "添加后台用户", "addmanager_edit" => "编辑后台用户", "viewmanager" => "编辑后台用户", "cz" => "代理帐号充值" );
$$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = array( "noticesread" => "面板首页读取", "notices" => "站内公告管理", "notices_del" => "站内公告删除", "notices_add" => "站内公告添加", "notices_view" => "站内公告查看", "mmlogin" => "用其它用户身份登入", "managerlist" => "后台用户列表", "managerlist_saveprice" => "批量保存代理提卡价格", "managerlist_delprice" => "批量删除代理提卡价格", "addmanager" => "添加后台用户", "addmanager_edit" => "编辑后台用户", "addmanager_save" => "后台用户数据保存", "delmanager" => "删除后台用户", "viewmanager" => "编辑后台用户", "viewmanager_save" => "后台用户数据保存", "cz" => "代理帐号充值", "cz_begin" => "代理帐号充值", "cz_senditem" => "自助发货", "cz_alino" => "取支付宝订单号", "cz_sorder" => "取订单状态", "addmanager_addprice" => "添加代理提卡价格", "addmanager_saveprice" => "保存代理提卡价格", "addmanager_delprice" => "删除代理提卡价格" );
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY� ) )
{
    $_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY�[$_obfuscate_lZOThomRipOIi5SRhpWRjY4�];
    include( "./c_head.php" );
}
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_kpWHh5SPio2Gk4qIi4_Ri4k� ) )
{
    $_obfuscate_lI_HiJGJlI2GkI2Ri4qOj40� = explode( "_", $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."manager".DIRECTORY_SEPARATOR.$_obfuscate_lI_HiJGJlI2GkI2Ri4qOj40�[0].".php" );
}
else
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未知的action请求！" );
}
?>
