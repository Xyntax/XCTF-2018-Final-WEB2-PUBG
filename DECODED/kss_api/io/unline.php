<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jpSOlYyLk5OVj4eQj5KHiIo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�, $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_i4aTkI_IjoaJlIyTiIuNkZA� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']( "select count(*) as tnum from kss_z_log_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']." where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."' and `optype` in (5,7)" );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] <= $_obfuscate_i4aTkI_IjoaJlIyTiIuNkZA�['tnum'] )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']( "update `kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."` set `islock`=3,`intro`='非法下线次数超限' where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8�."' ", "sync" );
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 3 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
    }
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( $_obfuscate_jJSNk5SMkY_PiouMko2LkYY� )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�;
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY� .= "('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."',".$_obfuscate_jJSNk5SMkY_PiouMko2LkYY�.",".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4s�."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode']."','".$_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�."',".$_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�.")";
    return $_obfuscate_j4yMjoyKj42Ti5STjo_HjIY�;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], 0, 10 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] != "1" )
{
    exit( "crypteno198" );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' " );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    exit( "crypteno193" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME )
{
    exit( "crypteno199" );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = array( );
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] == 1 )
{
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'];
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lastip'];
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['isrun'] == "1" )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 8 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        exit( "crypteno192" );
    }
    if ( SVRID == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'] ) === FALSE )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 5 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� );
        }
        exit( "crypteno197" );
    }
    if ( SVRID == 1 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 7 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� );
        }
        exit( "crypteno196" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `isonline`=0,`lasttime`=".time( )." where  `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "notsync" );
}
else
{
    $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] );
    if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� ) )
    {
        exit( "crypteno194" );
    }
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['pccode'];
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['lastip'];
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['isrun'] == "1" )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 8 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        exit( "crypteno192" );
    }
    if ( SVRID == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['pccode'] ) === FALSE )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 5 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� );
        }
        exit( "crypteno197" );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" && $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 7 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� );
        }
        exit( "crypteno196" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `isonline`=0,`lasttime`=".time( )." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'], "notsync" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 4 );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
exit( "crypteno199" );
?>
