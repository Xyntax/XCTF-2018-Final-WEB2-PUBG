<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jpCSk46VlJWJjJKNiIyKlZA�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$$_obfuscate_iIaLiY_UiIaNi4uLlI6Vj4g� = array( "softlist" => "软件列表", "addsoft" => "添加或编辑软件", "keygroup" => "软件卡类设置" );
$$_obfuscate_jIuNj5GTho_UjIiMjYyOh4k� = array( "softlist" => "软件列表", "addsoft" => "添加或编辑软件", "addsoft_save" => "保存软件", "addsoft_rsatest" => "RSA测试", "delsoft" => "删除软件", "softlistbar" => "小软件列表", "keygroup" => "软件卡类设置", "radvapi" => "更新advapi", "signdata" => "取签名数据" );
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY� ) )
{
    $_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = $_obfuscate_koqUi4mUkpWSj4_Kj4eVhoY�[$_obfuscate_lZOThomRipOIi5SRhpWRjY4�];
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."c_head.php" );
}
if ( array_key_exists( $_obfuscate_lZOThomRipOIi5SRhpWRjY4�, $_obfuscate_kpWHh5SPio2Gk4qIi4_Ri4k� ) )
{
    $_obfuscate_lI_HiJGJlI2GkI2Ri4qOj40� = explode( "_", $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."soft".DIRECTORY_SEPARATOR.$_obfuscate_lI_HiJGJlI2GkI2Ri4qOj40�[0].".php" );
}
else
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未知的action请求！" );
}
?>
