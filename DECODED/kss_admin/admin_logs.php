<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_i4mNio2QjpWNiJKNiZWQjoo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "gp", "sql", "" );
$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = "�����������������";
$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = "�����������������";
$$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = array( "managerlogin" => "管理登录日志", "agentrmb" => "财务日志", "user_log" => "会员登陆日志", "userczlog" => "会员充值日志", "pubuser_log" => "公用帐号记录", "witesyncdata" => "待同步数据", "synclogs" => "数据同步日志", "outline" => "强制下线日志", "addcday" => "加时操作日志", "v8data" => "V8卡->新卡" );
$$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = array( "managerlogin" => "管理登录日志", "agentrmb" => "财务日志", "user_log" => "会员登陆日志", "userczlog" => "会员充值日志", "pubuser_log" => "公用帐号记录", "witesyncdata" => "待同步数据", "synclogs" => "数据同步日志", "outline" => "强制下线日志", "addcday" => "加时操作日志", "v8data" => "V8卡->新卡" );
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY� ) )
{
    $_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY�[$_obfuscate_lZOThomRipOIi5SRhpWRjY4�];
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."c_head.php" );
}
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_kpWHh5SPio2Gk4qIi4_Ri4k� ) )
{
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."logs".DIRECTORY_SEPARATOR.$_obfuscate_lZOThomRipOIi5SRhpWRjY4�.".php" );
}
else
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未知的action请求！" );
}
?>
