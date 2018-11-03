<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGRlJGUk4qShpWUlZKGkooÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "id", "gp", "int", 0 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "op", "gp", "int", 0 );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == 3 )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_notices where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªæ‰¾åˆ°å…¬å‘Š" );
    }
    $_obfuscate_ipGGjY6TjImLko_IkJKUiZIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into `kss_tb_noticesread` (`noticesid`,`managerid`,`isread`,`readtime`) VALUES (".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ.",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",1,".time( ).")", "notsync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "<textarea name=\"softnotice\" class=\"softtextarea\">".htmlspecialchars( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ['content'] == "" ? "" : base64_decode( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ['content'] ) )."</textarea>" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 8 )
{
    $_obfuscate_lZWLio_SiZGJko_PkZWMipMÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_notices where pid=10000 and level=8 order by id desc limit 0,10" );
}
else
{
    $_obfuscate_lZWLio_SiZGJko_PkZWMipMÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_notices where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and level<=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level']." order by id desc limit 0,10" );
}
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = "";
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<ul id=sysnotice>";
$_obfuscate_lYmJiomHhouOkI6Qko_Pkowÿ = TRUE;
foreach ( $_obfuscate_lZWLio_SiZGJko_PkZWMipMÿ as $_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQÿ => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 )
    {
        $_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQÿ = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid'];
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_noticesread where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." and noticesid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'] );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        $_obfuscate_lYmJiomHhouOkI6Qko_Pkowÿ = FALSE;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<li><a class=noticesli1 herf=# noticeid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']." >[".$_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQÿ." "._obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['addtime'], "y-m-d" )."]&nbsp;&nbsp;"._obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['title'] )."</a></li>";
    }
    else
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<li><a class=noticesli2 herf=# noticeid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']." >[".$_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQÿ." "._obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['addtime'], "y-m-d" )."]&nbsp;&nbsp;"._obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['title'] )."</a></li>";
    }
}
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "</ul>";
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIYÿ == 0 )
{
    if ( $_obfuscate_lYmJiomHhouOkI6Qko_Pkowÿ )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "allread".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "notread".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ );
}
else
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ );
}
?>
