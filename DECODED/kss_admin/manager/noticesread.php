<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGRlJGUk4qShpWUlZKGkoo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "int", 0 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "int", 0 );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == 3 )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_notices where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未找到公告" );
    }
    $_obfuscate_ipGGjY6TjImLko_IkJKUiZI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into `kss_tb_noticesread` (`noticesid`,`managerid`,`isread`,`readtime`) VALUES (".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�.",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",1,".time( ).")", "notsync" );
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "<textarea name=\"softnotice\" class=\"softtextarea\">".htmlspecialchars( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�['content'] == "" ? "" : base64_decode( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�['content'] ) )."</textarea>" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
{
    $_obfuscate_lZWLio_SiZGJko_PkZWMipM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_notices where pid=10000 and level=8 order by id desc limit 0,10" );
}
else
{
    $_obfuscate_lZWLio_SiZGJko_PkZWMipM� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_notices where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and level<=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']." order by id desc limit 0,10" );
}
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = "";
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<ul id=sysnotice>";
$_obfuscate_lYmJiomHhouOkI6Qko_Pkow� = TRUE;
foreach ( $_obfuscate_lZWLio_SiZGJko_PkZWMipM� as $_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQ� => $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
    {
        $_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQ� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid'];
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_noticesread where managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and noticesid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        $_obfuscate_lYmJiomHhouOkI6Qko_Pkow� = FALSE;
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<li><a class=noticesli1 herf=# noticeid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']." >[".$_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQ�." "._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'], "y-m-d" )."]&nbsp;&nbsp;"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['title'] )."</a></li>";
    }
    else
    {
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<li><a class=noticesli2 herf=# noticeid=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']." >[".$_obfuscate_ipSKiZCJj5OQi5GVj5OMlZQ�." "._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'], "y-m-d" )."]&nbsp;&nbsp;"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['title'] )."</a></li>";
    }
}
$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "</ul>";
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == 0 )
{
    if ( $_obfuscate_lYmJiomHhouOkI6Qko_Pkow� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "allread".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "notread".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� );
}
else
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� );
}
?>
