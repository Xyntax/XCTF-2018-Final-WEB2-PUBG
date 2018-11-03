<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_ioiHlIeIkouUiY_JjJWLk5I�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
if ( 8 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    ob_clean( );
    header( "location:admin_manager.php?action=addmanager&id=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
    exit( );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "viewmanager_save" )
{
    _obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
    $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password", "p", "sqljs", "" );
    $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password2", "p", "sqljs", "" );
    if ( substr( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'], 0, 4 ) == "test" && $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� != "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "禁止修改体验帐号密码！" );
    }
    if ( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� != $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您两次输入的新密码不一样" );
    }
    $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "qq", "p", "int", 10000 );
    $_obfuscate_hpKUkIeHh4qLkouMjI2Rh4s� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tel", "p", "sqljs", "" );
    $_obfuscate_hoiHh4iMiY6GkYaQjpOIiIw� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "email", "p", "sqljs", "10000@qq.com" );
    $_obfuscate_jZOUi5GJlY2NkpCPi46Ki4w� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "alipayset", "p", "sqljs", "" );
    $_obfuscate_joeVjZOVjo2Oj4qPh5ORkYc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tenpayset", "p", "sqljs", "" );
    $_obfuscate_jYeNkJSIk5OHjImShpGQh4k� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ext1_payset", "p", "sqljs", "" );
    $_obfuscate_kYaSj4aGlYqOi46LhoySiZI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ext2_payset", "p", "sqljs", "" );
    $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "alikey", "p", "sqljs", "" );
    $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "tenkey", "p", "sqljs", "" );
    $_obfuscate_k4uKkomGkIuTkYiKjoiJhow� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "chinabankset", "p", "sqljs", "" );
    $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "chinabankkey", "p", "sqljs", "" );
    $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "e138key", "p", "sqljs", "" );
    $_obfuscate_kZSGi46Oho2QlZKHiYyMk5M� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "e138set", "p", "sqljs", "" );
    $_obfuscate_j5WNipCGkJSJlJCLk5WJjow� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "wxappid", "p", "sqljs", "" );
    $_obfuscate_koeSjIaGi5OMi4eUi42SipQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "wxshid", "p", "sqljs", "" );
    $_obfuscate_joyJlJSQkomSkoeUipSJioY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "wxpaykey", "p", "sqljs", "" );
    $_obfuscate_jJKLjJCNiZSLkpOKjoeOkZQ� = $_obfuscate_j5WNipCGkJSJlJCLk5WJjow�.",".$_obfuscate_koeSjIaGi5OMi4eUi42SipQ�;
    if ( empty( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) )
    {
        if ( CHINESEPASSWORD == 1 && strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) != _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) * 3 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "密码只能用中文字符！" );
        }
        if ( 15 < _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) || _obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) < 6 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "密码长度必须是6-15个字符，不修改密码请留空！"._obfuscate_ioqHi5WHiJKIkoeIhouHjYw�( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) );
        }
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array( "tel" => $_obfuscate_hpKUkIeHh4qLkouMjI2Rh4s�, "email" => $_obfuscate_hoiHh4iMiY6GkYaQjpOIiIw�, "alipayset" => $_obfuscate_jZOUi5GJlY2NkpCPi46Ki4w�, "tenpayset" => $_obfuscate_joeVjZOVjo2Oj4qPh5ORkYc�, "chinabankset" => $_obfuscate_k4uKkomGkIuTkYiKjoiJhow�, "wxpayset" => $_obfuscate_jJKLjJCNiZSLkpOKjoeOkZQ�, "e138set" => $_obfuscate_kZSGi46Oho2QlZKHiYyMk5M� );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 || LICTYPE < 1000 )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['qq'] = $_obfuscate_ipKLkIaQlY2NiY2ShoaRjIg�;
    }
    $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
    if ( empty( $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你要编辑的帐号不存在" );
    }
    if ( empty( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = md5( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� );
    }
    if ( empty( $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4� ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['alikey'] = $_obfuscate_lYyNhpOOj4aRlYiGi5GTjo4�;
    }
    if ( empty( $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k� ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['tenkey'] = $_obfuscate_lYqUh46Vj4iJho2JkpOGh4k�;
    }
    if ( empty( $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI� ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['e138key'] = $_obfuscate_kpKMkZOSk5CHkouGkZWOlJI�;
    }
    if ( empty( $_obfuscate_joyJlJSQkomSkoeUipSJioY� ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['wxpaykey'] = $_obfuscate_joyJlJSQkomSkoeUipSJioY�;
    }
    if ( empty( $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4� ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['chinabankkey'] = $_obfuscate_io_Ti4mUjoyMlI6KjouJiI4�;
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array_diff_assoc( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, $_obfuscate_joqKkIaJhouMkJWNlJSTjpU� );
    if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "帐号设置未做任何修改" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_tb_manager", $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "id=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "保置设置出错[执行update语句时出错]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "已保存设置！" );
}
else
{
    $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "g", "int", 0 );
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from `kss_tb_manager` where id=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
    if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "这几乎是不可能发生的错误，未找到您的资料" );
    }
    $_obfuscate_iY2HkZGJi5WKj4qLkouThoc� = "保存设置";
    if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['wxpayset'] == "" )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['wxpayset'] = ",";
    }
    $_obfuscate_lJCVk5KGjZOJjI_OjJKTlYk� = str_replace( " ", "", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['wxpayset'] );
    $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M� = explode( ",", $_obfuscate_lJCVk5KGjZOJjI_OjJKTlYk� );
    if ( count( $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M� ) < 2 )
    {
        $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M�[0] = "";
        $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M�[1] = "";
    }
    $_obfuscate_jY6KkJSQlIyViYiGiJGHipE� = str_replace( " ", "", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['alipayset'] );
    $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw� = explode( ",", $_obfuscate_jY6KkJSQlIyViYiGiJGHipE� );
    if ( count( $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw� ) == 3 )
    {
        $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� = $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw�[0];
        $_obfuscate_ipSRjoiLjJKQjI_Jk4aQk44� = $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw�[1];
        $_obfuscate_kYySio2Hi5WKkYyNkoiNjJE� = $_obfuscate_jIiUjZGOkIuRjZWGkY_KjIw�[2];
    }
    else
    {
        $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� = "create_direct_pay_by_user";
        $_obfuscate_ipSRjoiLjJKQjI_Jk4aQk44� = "";
        $_obfuscate_kYySio2Hi5WKkYyNkoiNjJE� = "";
    }
}
foreach ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� as $_obfuscate_jpWPlIySk4qGlY_Ph5SOi44� => $_obfuscate_iYaNiYyJh4_SjoqTi5OGiI0� )
{
    $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�[$_obfuscate_jpWPlIySk4qGlY_Ph5SOi44�] = _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_iYaNiYyJh4_SjoqTi5OGiI0� );
}
echo "\r\n<script type=\"text/javascript\">\t\r\nvar level=";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'];
echo ";\r\nvar spmailtext='';\r\nspmailtext=\t'当用支付宝纯担宝接口时，客户用自己的支付宝帐号付款，必须确认收货后才可以取卡。<br><br>'+\r\n'为了让只有网银但无支付宝帐号的客户购卡支付后可实时取卡，你需要设置特殊邮箱。<br>'+\r\n'特殊邮箱只能填写<font color=#ff0000>你可以控制</font>并且<font color=#ff0000>没有申请过支付宝</font>的邮箱帐号，或者填一个根本不可能存在，但格式合法的邮箱地址。例如：card@card.php<br><br>'+\r\n'客户在支付宝网站支付页面的邮箱或手机号那一栏填写特殊邮箱地址，继续完成支付，回到售卡站界面点击<font color=#ff0000>自助发货</font>后，就可以实时取卡（因为特殊邮箱的规则，客户不可能确认收货）。<br><br>'+\r\n'用特殊邮箱购卡的订单支付宝交易管理里边是已发货状态，因为特殊邮箱没有支付宝帐号所以不能执行确认收货操作，支付宝会在15天后认为该订单已完成，并将该订单的款项打入到你的支付宝帐号。'\r\n\r\n$(document).ready(function() { \t\t\r\n$('#admin_editinfo').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) { \r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nmalert(responseText); \r\n}\r\n});\t\r\n$(\"input[ali='1']\").bind('click',function(){\r\nif($(this).val()=='alipay_jqr'){    \r\n$(\"#lab001\").text(\"支付宝帐号（邮箱或手机号）\");\r\n$(\"#lab002\").text(\"接口效验密钥\");\r\n}else{  \r\n$(\"#lab001\").text(\"支付宝PID（合作者身份）\");\r\n$(\"#lab002\").text(\"支付宝Key（安全效验码）\");\r\n}\t\t\r\n});\t\t\t\r\n});\r\n</script>\r\n\r\n<form id=\"admin_editinfo\" action=\"?action=viewmanager_save\" method=\"post\"> \r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
echo " 修改资料</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" >\r\n<tr><td valign=top>\t\t\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"这是您要添加的用户帐号类型 分作者帐号 员工帐号 代理帐号\">\r\n<td align=right>　帐号类型</td>\r\n<td align=left>";
echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']];
echo "   　 　<span style=\"color:#f00;font-weight:700\">ID:&nbsp;&nbsp;";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
echo "-";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pmid'];
echo "-";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'];
echo "</span></td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的用户帐号\">\r\n<td align=right>帐号名</td>\r\n<td align=left>";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
echo "  </td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的帐号密码，安全起见密码只能用中文，不修改密码请留空\">\r\n<td align=right>新的密码</td>\r\n<td align=left><input class=\"longinputpwd\" cnpassword=1 id=\"cnpwda\" type=\"text\" maxlength=\"15\" name=\"password\" value=\"\"  AUTOCOMPLETE=\"off\"/></td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的帐号密码，安全起见密码只能用中文，不修改密码请留空\">\r\n<td align=right>确认新的密码</td>\r\n<td align=left><input class=\"longinputpwd\" cnpassword=1 id=\"cnpwdb\" type=\"text\" maxlength=\"15\" name=\"password2\" value=\"\"  AUTOCOMPLETE=\"off\"/></td>\r\n</tr>\r\n<tr malt=\"帐号有效期，超出此日期将无法登录后台，如果是作者帐号过期，该作者的软件将不能正常使用\">\r\n<td align=right>帐号有效期</td>\r\n<td align=left>";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['endtime'];
echo "</td>\r\n</tr>\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<tr id='isauthor' malt=\"可管理会员数量指的是所有软件的会员总数，0是指不限制数量\">\r\n<td align=right>可管理会员数量</td>\r\n<td align=left>";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['maxusernum'] == 0 ? "不限" : $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['maxusernum'];
    echo "</td>\r\n</tr>\r\n";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 || $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 && 1000 < LICTYPE )
{
    echo "<tr malt=\"帐号内的还有多少人民币，提卡必须用余额支付\">\r\n<td align=right>帐户余额</td>\r\n<td align=left>";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['rmb'];
    echo "元</td>\r\n</tr>\r\n<tr malt=\"下单提卡时，余额不足时可以透支的金额\">\r\n<td align=right>可透支金额</td>\r\n<td align=left>";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['touzhirmb'];
    echo "元</td>\r\n</tr>\r\n<tr malt=\"历史消费总金额\">\r\n<td align=right>历史消费金额</td>\r\n<td align=left>";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['xfrmb'];
    echo "元</td>\r\n</tr>\r\n";
}
echo "<tr malt=\"腾讯QQ号\">\r\n<td align=right>用户QQ号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"12\" name=\"qq\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['qq'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>电话号码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"tel\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tel'];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>用户邮箱</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"email\" value=\"";
echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['email'];
echo "\" /></td>\r\n</tr>\r\n</table></td>\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['powerlist'], "11" ) )
{
    $_obfuscate_jJSGjJSTjJGRi5WVkYiRi48� = _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."sale.php".( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] == 1 ? "" : "?uid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
    echo "<td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right bgcolor=\"#2B7F0D\">注册卡零售地址</td>\r\n<td align=left>";
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        echo "<span style='color:#f00;font-weight:700'>总代理帐号无零售地址，下边的接口是用来下级代理在线充值用</span>";
    }
    else
    {
        echo "<a href=";
        echo $_obfuscate_jJSGjJSTjJGRi5WVkYiRi48�;
        echo " target=_blank>";
        echo $_obfuscate_jJSGjJSTjJGRi5WVkYiRi48�;
        echo "</a>";
    }
    echo "</td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 需先到支付宝网站上申请接口\">\r\n<td align=right bgcolor=\"#F7DB84\">支付宝接口</td>\r\n<td align=left>\t\t\t\t\t\r\n<input type=radio ali=\"1\" value=\"create_direct_pay_by_user\" id=\"alipayset_1\" name=\"alipayset[]\" ";
    echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "create_direct_pay_by_user" ? " checked" : "";
    echo "><label for=\"alipayset_1\">即时到帐</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"create_partner_trade_by_buyer\" id=\"alipayset_2\" name=\"alipayset[]\" ";
    echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "create_partner_trade_by_buyer" ? " checked" : "";
    echo "><label for=\"alipayset_2\">纯担宝交易</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"trade_create_by_buyer\" id=\"alipayset_3\" name=\"alipayset[]\" ";
    echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "trade_create_by_buyer" ? " checked" : "";
    echo "><label for=\"alipayset_3\">双功能</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"alipay_jqr\" id=\"alipayset_4\" name=\"alipayset[]\" ";
    echo $_obfuscate_iIuTkJKViZSHkI6GlY6KlY4� == "alipay_jqr" ? " checked" : "";
    echo "><label for=\"alipayset_4\">免签约</label>\r\n</td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户ID号，可到商家服务里获取\">\r\n<td align=right bgcolor=\"#F7DB84\" id=\"lab001\">支付宝PID（合作者身份）</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
    echo $_obfuscate_ipSRjoiLjJKQjI_Jk4aQk44�;
    echo "\" /></td>\r\n</tr>\r\n<tr malt=\"该参数只在使用纯担宝交易接口时有效，具体作用请点击详细说明来查看\">\r\n<td align=right bgcolor=\"#F7DB84\">特殊邮箱[<a style=\"cursor:pointer;color:#f00\" onclick=malert(spmailtext,'特殊邮箱详细说明',700,300)>查看说明</a>]</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
    echo $_obfuscate_kYySio2Hi5WKkYyNkoiNjJE�;
    echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户Key，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#F7DB84\" id=\"lab002\">支付宝Key（安全效验码）</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"alikey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户号，需先上财付通申请即时收款服务，然后可到商家服务里获取\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通Partner</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"tenpayset\"  value=\"";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['tenpayset'];
    echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户Key，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通Key</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"tenkey\"  value=\"\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n<td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"微信APPID\">\r\n<td align=right bgcolor=\"#81F9BF\">微信APPID<input title=\"易付通接口停用\" type=\"hidden\" maxlength=\"24\" name=\"e138set\"  value=\"";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['e138set'];
    echo "\" /><input title=\"易付通接口停用\" type=\"hidden\" maxlength=\"50\" name=\"e138key\"  value=\"\" /></td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"wxappid\"  value=\"";
    echo $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M�[0];
    echo "\" /></td>\r\n</tr>\r\n<tr malt=\"微信商户号\">\r\n<td align=right bgcolor=\"#81F9BF\">微信商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"wxshid\"  value=\"";
    echo $_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M�[1];
    echo "\" /></td>\r\n</tr>\r\n<tr malt=\"可到微信商户平台pay.weixin.qq.com 帐户设置->API安全中获取 微信API密钥，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#81F9BF\">微信API密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"wxpaykey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 网银在线商户号，注册网银在线企业帐号后可获取\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"chinabankset\"  value=\"";
    echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['chinabankset'];
    echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 登陆网银在线商户后台，在上面的导航栏里可能找到“B2C”，在二级导航栏里有“MD5密钥设置”<br>建议您设置一个16位以上的密钥或更高，密钥最多32位<br>编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"32\" name=\"chinabankkey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 必须告诉网银在线工作人员此自动对帐地址，并开通自动对帐功能，否则将会不能正常使用本系统的网银在线功能\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线自动对帐地址</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" style=\"color:#aaa\" readOnly value=\"";
    echo _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify.php";
    echo "\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n\r\n";
}
echo "</tr></table>\t\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input type=submit class=\"submitbtn\" value=\"确认修改\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
