<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kIaJlZWOkI_Nj4mQjpSUjokÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 8 );
$_obfuscate_iJKRhpSOjIiGkJONkIqIjIgÿ = file( KSSINCDIR."signdata".DIRECTORY_SEPARATOR."_".rand( 1, 5 ).".php" );
$_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ = trim( $_obfuscate_iJKRhpSOjIiGkJONkIqIjIgÿ[rand( 1, 100 )] );
echo "signDataÇ©ÃûÊý¾ÝÃ¿´ÎÈ¡µÃµÄ¿ÉÄÜ»á²»Í¬£¬²»Ó°ÏìÊ¹ÓÃ£¡<br>\r\n<textarea style=\"width:450px;height:120px\">signData=\"";
echo $_obfuscate_iI2PkIeKjpOQjIuVlIiMipAÿ;
echo "\"</textarea>\r\n<textarea style=\"display:none\" id=delphisdata>";
echo $_obfuscate_lImJiJKVioeSipWQk4iHlJMÿ;
echo "</textarea>\r\n<textarea style=\"display:none\" id=vbsdata>";
echo $_obfuscate_kI_TkI6UiIaJko2RlYqIh48ÿ;
echo "</textarea>\r\n<textarea style=\"display:none\" id=vcsdata>";
echo $_obfuscate_kJCMh5OGhpGTkIiTj4iHioYÿ;
echo "</textarea>\r\n<textarea style=\"display:none\" id=esdata>";
echo $_obfuscate_kJWNiIiOh4uNlI6SkpSUkIwÿ;
echo "</textarea>\r\n";
?>
