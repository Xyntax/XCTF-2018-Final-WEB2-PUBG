<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kIaJlZWOkI_Nj4mQjpSUjok�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
$_obfuscate_iJKRhpSOjIiGkJONkIqIjIg� = file( KSSINCDIR."signdata".DIRECTORY_SEPARATOR."_".rand( 1, 5 ).".php" );
$_obfuscate_iI2PkIeKjpOQjIuVlIiMipA� = trim( $_obfuscate_iJKRhpSOjIiGkJONkIqIjIg�[rand( 1, 100 )] );
echo "signDataǩ������ÿ��ȡ�õĿ��ܻ᲻ͬ����Ӱ��ʹ�ã�<br>\r\n<textarea style=\"width:450px;height:120px\">signData=\"";
echo $_obfuscate_iI2PkIeKjpOQjIuVlIiMipA�;
echo "\"</textarea>\r\n<textarea style=\"display:none\" id=delphisdata>";
echo $_obfuscate_lImJiJKVioeSipWQk4iHlJM�;
echo "</textarea>\r\n<textarea style=\"display:none\" id=vbsdata>";
echo $_obfuscate_kI_TkI6UiIaJko2RlYqIh48�;
echo "</textarea>\r\n<textarea style=\"display:none\" id=vcsdata>";
echo $_obfuscate_kJCMh5OGhpGTkIiTj4iHioY�;
echo "</textarea>\r\n<textarea style=\"display:none\" id=esdata>";
echo $_obfuscate_kJWNiIiOh4uNlI6SkpSUkIw�;
echo "</textarea>\r\n";
?>
