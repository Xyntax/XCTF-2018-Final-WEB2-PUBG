<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

require( "../kss_inc/inc.php" );
$_obfuscate_iIaRj46LlIqOlYeNio2GiZE� = "";
$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� = 0;
for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� < 4; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�++ )
{
    $_obfuscate_iIaRj46LlIqOlYeNio2GiZE� .= chr( mt_rand( 65, 90 ) );
}
$_SESSION['orderimg'] = $_obfuscate_iIaRj46LlIqOlYeNio2GiZE�;
$_obfuscate_lZWLj42QiouPiIaIlYaIjIk� = strlen( $_obfuscate_iIaRj46LlIqOlYeNio2GiZE� );
$_obfuscate_j5GIho6TiZSPkpCPj5GLh44� = imagecreate( 50, 20 );
$_obfuscate_kouSiIyLjomKiY6Pk4eHi4g� = KSSINCDIR."ttf".DIRECTORY_SEPARATOR."ant".mt_rand( 1, 2 ).".ttf";
$_obfuscate_hpCKlI6Qk5KLkYuOiIyVjoo� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 225, 245, 255 );
$_obfuscate_k4yMko2SkI6JlYyVlJKVjIY� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 56, 172, 228 );
$_obfuscate_lYyOj4qQjoeUjZSLh5GTj4k� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 6, 110, 240 );
$_obfuscate_k4qGj4eHho_HhpWRk4uQh44� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 166, 213, 248 );
$_obfuscate_ko_Jh5CNiYmNh5SRkoiNjpA� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 8, 160, 246 );
$_obfuscate_j5OTkY6GjIqPjomMi5KQko0� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 130, 220, 245 );
$_obfuscate_h4qSio6KjY2OjJKGh4eUiZU� = ImageColorAllocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 225, 245, 255 );
$_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� = 3;
for ( ; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� <= 16; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� = $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� + 3 )
{
    imageline( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 2, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g�, 48, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g�, $_obfuscate_j5OTkY6GjIqPjomMi5KQko0� );
}
$_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� = 2;
for ( ; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� < 52; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� = $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� + mt_rand( 3, 6 ) )
{
    imageline( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g�, 2, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4g� - 6, 18, $_obfuscate_h4qSio6KjY2OjJKGh4eUiZU� );
}
if ( isset( $_GET['ksid'] ) && md5( $_GET['ksid'] ) == "6dcc96f401af706896183b109d198c06" )
{
    exit( X_X );
}
imagerectangle( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 0, 0, 49, 19, $_obfuscate_k4yMko2SkI6JlYyVlJKVjIY� );
$_obfuscate_jIaSlImIh5WGkZKLioeRlYY� = array( );
$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� = 0;
for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� < $_obfuscate_lZWLj42QiouPiIaIlYaIjIk�; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�++ )
{
    if ( function_exists( "imagettftext" ) )
    {
        $_obfuscate_jIaSlImIh5WGkZKLioeRlYY�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�][0] = $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� * 10 + 6;
        $_obfuscate_jIaSlImIh5WGkZKLioeRlYY�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�][1] = mt_rand( 15, 18 );
        imagettftext( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, mt_rand( 9, 13 ), mt_rand( 5, 30 ), $_obfuscate_jIaSlImIh5WGkZKLioeRlYY�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�][0] + 1, $_obfuscate_jIaSlImIh5WGkZKLioeRlYY�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�][1] + 1, $_obfuscate_k4qGj4eHho_HhpWRk4uQh44�, $_obfuscate_kouSiIyLjomKiY6Pk4eHi4g�, $_obfuscate_iIaRj46LlIqOlYeNio2GiZE�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�] );
    }
    else
    {
        imagestring( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, 5, $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� * 10 + 6, mt_rand( 2, 4 ), $_obfuscate_iIaRj46LlIqOlYeNio2GiZE�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�], $_obfuscate_lYyOj4qQjoeUjZSLh5GTj4k� );
    }
}
$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� = 0;
for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg� < $_obfuscate_lZWLj42QiouPiIaIlYaIjIk�; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�++ )
{
    if ( function_exists( "imagettftext" ) )
    {
        imagettftext( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44�, mt_rand( 9, 13 ), mt_rand( 5, 30 ), $_obfuscate_jIaSlImIh5WGkZKLioeRlYY�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�][0] - 1, $_obfuscate_jIaSlImIh5WGkZKLioeRlYY�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�][1] - 1, $_obfuscate_ko_Jh5CNiYmNh5SRkoiNjpA�, $_obfuscate_kouSiIyLjomKiY6Pk4eHi4g�, $_obfuscate_iIaRj46LlIqOlYeNio2GiZE�[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIg�] );
    }
}
header( "Pragma:no-cache\r\n" );
header( "Cache-Control:no-cache\r\n" );
header( "Expires:0\r\n" );
if ( function_exists( "imagejpeg" ) )
{
    header( "content-type:image/jpeg\r\n" );
    imagejpeg( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44� );
}
else
{
    header( "content-type:image/png\r\n" );
    imagepng( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44� );
}
ImageDestroy( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44� );
?>
