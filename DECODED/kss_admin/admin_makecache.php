<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYeSi5SNlZSUhoiMjImQi4Yÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_kJCTi4yGi4aMjomOjYmJlYoÿ( $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ, $_obfuscate_hpSVjpOKhouRkpOLjY6MkYYÿ, $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
{
    return preg_replace( "/define\\('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYYÿ."','[^']*'\\)/i", "define('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYYÿ."','".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ."')", $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ );
}

function _obfuscate_jI6Jh5SLiY_Pko6PkYaRk44ÿ( $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ, $_obfuscate_hpSVjpOKhouRkpOLjY6MkYYÿ, $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
{
    return preg_replace( "/define\\('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYYÿ."',[^\\)]*\\)/i", "define('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYYÿ."',".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ.")", $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "action", "gp", "sql", "" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_iY2KjYiVj4aUkpSKkYaPlZMÿ = 0;
if ( isset( $_GET['t'], $_GET['t'] ) )
{
    if ( md5( $_GET['t']."urlkeyIjjeruik987" ) != $_GET['m'] )
    {
        exit( "<script>alert('err:url md5');</script>" );
    }
    if ( time( ) < $_GET['t'] || 20 < time( ) - $_GET['t'] )
    {
        exit( "<script>alert('err:url time');</script>" );
    }
    $_obfuscate_iY2KjYiVj4aUkpSKkYaPlZMÿ = 1;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
}
if ( $_obfuscate_iY2KjYiVj4aUkpSKkYaPlZMÿ == 0 )
{
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 9 );
}
$_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = file_get_contents( "../kss_inc/_config.php" );
$_obfuscate_lZGTiYqOjI_SlJGPkYeNjIgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_config where id=1" );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = _obfuscate_jI6Jh5SLiY_Pko6PkYaRk44ÿ( $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ, "RSACRYPT", $_obfuscate_lZGTiYqOjI_SlJGPkYeNjIgÿ['s_rsamode'] );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = _obfuscate_kJCTi4yGi4aMjomOjYmJlYoÿ( $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ, "RSA_PRVKEY", $_obfuscate_lZGTiYqOjI_SlJGPkYeNjIgÿ['s_rsaekey'] );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = _obfuscate_kJCTi4yGi4aMjomOjYmJlYoÿ( $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ, "RSA_MODULES", $_obfuscate_lZGTiYqOjI_SlJGPkYeNjIgÿ['s_rsankey'] );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ = file_put_contents( "../kss_inc/_config.php", $_obfuscate_ioyNhoyGk5GGlY6UjomGhooÿ );
_obfuscate_k42GhouUh5SVj4uSlYqRlYgÿ( );
if ( $_obfuscate_iY2KjYiVj4aUkpSKkYaPlZMÿ == 0 )
{
    exit( "å…¨å±€RSAã€è½¯ä»¶ç§æœ‰RSAã€è½¯ä»¶ADVAPIã€è½¯ä»¶æ•°ç»„æ•°æ®ç¼“å­˜æ›´æ–°å®Œæ¯•ï¼" );
}
exit( "<script>alert('é‡å»ºç¼“å­˜OK');</script>" );
?>
