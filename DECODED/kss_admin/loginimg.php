<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

require( "../kss_inc/inc.php" );
$_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ = "";
$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ = 0;
for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ < 4; ++$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ )
{
    $_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ .= chr( mt_rand( 65, 90 ) );
}
$_obfuscate_jIuGjoaQh5OPiZWQkpGIjpAÿ = str_replace( KSSROOTDIR, "/", dirname( __FILE__ ) );
$_SESSION['loginimg'] = $_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ;
$_obfuscate_lZWLj42QiouPiIaIlYaIjIkÿ = strlen( $_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ );
$_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ = imagecreate( 50, 20 );
$_obfuscate_kouSiIyLjomKiY6Pk4eHi4gÿ = KSSINCDIR."ttf".DIRECTORY_SEPARATOR."ant".mt_rand( 1, 2 ).".ttf";
$_obfuscate_hpCKlI6Qk5KLkYuOiIyVjooÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 225, 245, 255 );
$_obfuscate_k4yMko2SkI6JlYyVlJKVjIYÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 56, 172, 228 );
$_obfuscate_lYyOj4qQjoeUjZSLh5GTj4kÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 6, 110, 240 );
$_obfuscate_k4qGj4eHho_HhpWRk4uQh44ÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 166, 213, 248 );
$_obfuscate_ko_Jh5CNiYmNh5SRkoiNjpAÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 8, 160, 246 );
$_obfuscate_j5OTkY6GjIqPjomMi5KQko0ÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 130, 220, 245 );
$_obfuscate_h4qSio6KjY2OjJKGh4eUiZUÿ = imagecolorallocate( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 225, 245, 255 );
$_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ = 3;
for ( ; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ <= 16; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ += 3 )
{
    imageline( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 2, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ, 48, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ, $_obfuscate_j5OTkY6GjIqPjomMi5KQko0ÿ );
}
$_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ = 2;
for ( ; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ < 52; $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ += mt_rand( 3, 6 ) )
{
    imageline( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ, 2, $_obfuscate_jZKTjoiSho_OlYaGk4_Vi4gÿ - 6, 18, $_obfuscate_h4qSio6KjY2OjJKGh4eUiZUÿ );
}
imagerectangle( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 0, 0, 49, 19, $_obfuscate_k4yMko2SkI6JlYyVlJKVjIYÿ );
$_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ = array( );
$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ = 0;
for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ < $_obfuscate_lZWLj42QiouPiIaIlYaIjIkÿ; ++$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ )
{
    if ( function_exists( "imagettftext" ) )
    {
        $_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ][0] = $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ * 10 + 6;
        $_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ][1] = mt_rand( 15, 18 );
        imagettftext( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, mt_rand( 9, 13 ), mt_rand( 5, 30 ), $_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ][0] + 1, $_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ][1] + 1, $_obfuscate_k4qGj4eHho_HhpWRk4uQh44ÿ, $_obfuscate_kouSiIyLjomKiY6Pk4eHi4gÿ, $_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ] );
    }
    else
    {
        imagestring( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, 5, $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ * 10 + 6, mt_rand( 2, 4 ), $_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ], $_obfuscate_lYyOj4qQjoeUjZSLh5GTj4kÿ );
    }
}
$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ = 0;
for ( ; $_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ < $_obfuscate_lZWLj42QiouPiIaIlYaIjIkÿ; ++$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ )
{
    if ( function_exists( "imagettftext" ) )
    {
        imagettftext( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ, mt_rand( 9, 13 ), mt_rand( 5, 30 ), $_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ][0] - 1, $_obfuscate_jIaSlImIh5WGkZKLioeRlYYÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ][1] - 1, $_obfuscate_ko_Jh5CNiYmNh5SRkoiNjpAÿ, $_obfuscate_kouSiIyLjomKiY6Pk4eHi4gÿ, $_obfuscate_iIaRj46LlIqOlYeNio2GiZEÿ[$_obfuscate_h4mOjJSIkpCRh4yRho_VkIgÿ] );
    }
}
header( "Pragma:no-cache\r\n" );
header( "Cache-Control:no-cache\r\n" );
header( "Expires:0\r\n" );
if ( function_exists( "imagejpeg" ) )
{
    header( "content-type:image/jpeg\r\n" );
    imagejpeg( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ );
}
else
{
    header( "content-type:image/png\r\n" );
    imagepng( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ );
}
imagedestroy( $_obfuscate_j5GIho6TiZSPkpCPj5GLh44ÿ );
?>
