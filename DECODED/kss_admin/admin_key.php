<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_koaVjY2UiI2HlIqUlIeRhpI�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = "�����������������";
$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = "�����������������";
$$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = array( "userlist" => "用户列表", "adduser" => "添加用户", "keylist" => "注册卡列表", "report" => "注册卡统计", "dklist" => "多开用户记录", "addkey" => "添加注册卡" );
$$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = array( "userlist" => "用户列表", "adduser" => "添加用户", "edituser" => "编辑用户", "keylist" => "注册卡列表", "report" => "注册卡统计", "dklist" => "多开用户记录", "addkey" => "添加注册卡", "addkey_save" => "添加操作提交", "downkey" => "下载订单卡号" );
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY� ) )
{
    $_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY�[$_obfuscate_lZOThomRipOIi5SRhpWRjY4�];
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."c_head.php" );
}
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_kpWHh5SPio2Gk4qIi4_Ri4k� ) )
{
    $_obfuscate_lI_HiJGJlI2GkI2Ri4qOj40� = explode( "_", $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."k".DIRECTORY_SEPARATOR.$_obfuscate_lI_HiJGJlI2GkI2Ri4qOj40�[0].".php" );
}
else
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未知的action请求！".$_SERVER['QUERY_STRING'] );
}
?>
