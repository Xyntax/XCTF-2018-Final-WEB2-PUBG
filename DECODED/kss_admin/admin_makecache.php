<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYeSi5SNlZSUhoiMjImQi4Y�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_kJCTi4yGi4aMjomOjYmJlYo�( $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc�, $_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�, $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
{
    return preg_replace( "/define\\('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."','[^']*'\\)/i", "define('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."','".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�."')", $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� );
}

function _obfuscate_jI6Jh5SLiY_Pko6PkYaRk44�( $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc�, $_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�, $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
{
    return preg_replace( "/define\\('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."',[^\\)]*\\)/i", "define('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."',".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�.")", $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "gp", "sql", "" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_iY2KjYiVj4aUkpSKkYaPlZM� = 0;
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
    $_obfuscate_iY2KjYiVj4aUkpSKkYaPlZM� = 1;
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
}
if ( $_obfuscate_iY2KjYiVj4aUkpSKkYaPlZM� == 0 )
{
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 9 );
}
$_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = file_get_contents( "../kss_inc/_config.php" );
$_obfuscate_lZGTiYqOjI_SlJGPkYeNjIg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_config where id=1" );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_jI6Jh5SLiY_Pko6PkYaRk44�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "RSACRYPT", $_obfuscate_lZGTiYqOjI_SlJGPkYeNjIg�['s_rsamode'] );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_kJCTi4yGi4aMjomOjYmJlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "RSA_PRVKEY", $_obfuscate_lZGTiYqOjI_SlJGPkYeNjIg�['s_rsaekey'] );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_kJCTi4yGi4aMjomOjYmJlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "RSA_MODULES", $_obfuscate_lZGTiYqOjI_SlJGPkYeNjIg�['s_rsankey'] );
$_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = file_put_contents( "../kss_inc/_config.php", $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� );
_obfuscate_k42GhouUh5SVj4uSlYqRlYg�( );
if ( $_obfuscate_iY2KjYiVj4aUkpSKkYaPlZM� == 0 )
{
    exit( "全局RSA、软件私有RSA、软件ADVAPI、软件数组数据缓存更新完毕！" );
}
exit( "<script>alert('重建缓存OK');</script>" );
?>
