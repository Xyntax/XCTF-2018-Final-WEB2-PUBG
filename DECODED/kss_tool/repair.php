<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

require( "../kss_inc/inc.php" );
$_obfuscate_ho2IlJWKho_TjJCIjpKKhoc� = "";
if ( isset( $_POST['tb'] ) )
{
    $_obfuscate_ho2IlJWKho_TjJCIjpKKhoc� = $_POST['tb'];
}
if ( preg_match( "/^([a-zA-Z0-9_]*)$/i", $_obfuscate_ho2IlJWKho_TjJCIjpKKhoc� ) )
{
}
else
{
    $_obfuscate_ho2IlJWKho_TjJCIjpKKhoc� = "";
}
echo "<html>\r\n<head>\r\n<title>修复表</title>\r\n</head>\r\n<body>\r\n<form id=\"rep\" action=\"repair.php\" method=\"post\">\r\n请输入要修复的表名<input name='tb' value='";
echo $_obfuscate_ho2IlJWKho_TjJCIjpKKhoc�;
echo "' type=text>\r\n<input type=submit value='修复'>\r\n</form>\r\n";
if ( $_obfuscate_ho2IlJWKho_TjJCIjpKKhoc� != "" )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    $_obfuscate_j42Ki4_OlJOKhpGQiYmJlJE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE ".$_obfuscate_ho2IlJWKho_TjJCIjpKKhoc�, "notsync" );
    if ( $_obfuscate_j42Ki4_OlJOKhpGQiYmJlJE� !== FALSE )
    {
        echo "修复表成功！<br>";
    }
    else
    {
        echo "修复表失败:".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
    }
}
echo "</body>\r\n</html>";
?>
