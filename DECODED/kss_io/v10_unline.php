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

function _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( $_obfuscate_j4qRlY6KjYeVhpSPi4yGkIg� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    global $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�;
    if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlineday'] != date( "d" ) )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."` set `unlineday`=".date( "d" ).",`unlinetimes`=1 where `id`=".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['id'], "notsync" );
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( $_obfuscate_j4qRlY6KjYeVhpSPi4yGkIg� );
        echo "update `kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."` set `unlineday`=".date( "d" ).",`unlinetimes`=1 where `id`=".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['id'];
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
    }
    else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['unlinetimes'] )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']( "update `kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."` set `islock`=3,`intro`='非法下线次数超限' where `username`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."' ", "sync" );
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 3 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
    }
    else
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id']."` set `unlinetimes`=`unlinetimes`+1 where `id`=".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['id'], "notsync" );
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( $_obfuscate_j4qRlY6KjYeVhpSPi4yGkIg� );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
    }
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( $_obfuscate_jJSNk5SMkY_PiouMko2LkYY� )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk�;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA�;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�;
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
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = substr( _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" ), 0, 10 );
}
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "username" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "clientid" );
$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "linecode" );
$_obfuscate_joeUio_LioqSh5WIiI2Pk4s� = _obfuscate_hoaHlYiMh5OOjpGNiYmLk5A�( "pccode" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' " );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "393", "用户未找到，下线失败！" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] == PETIME )
{
    _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "394", "公用帐号，无需执行此操作！" );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = array( );
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'] == 1 )
{
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'];
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['lastip'];
    if ( SVRID == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pccode'] ) === FALSE )
    {
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( 5 );
        }
        else
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 5 );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        }
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "396", "下线失败，机器码不符" );
    }
    if ( SVRID == 1 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
    {
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( 7 );
        }
        else
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 7 );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        }
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "397", "下线失败，在线码不符" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `isonline`=0,`lasttime`=".( time( ) - ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenli'] + 6 ) * 60 )." where  `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."'", "notsync" );
}
else
{
    $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'] );
    if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8� ) )
    {
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "393", "用户未找到，下线失败！" );
    }
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYk� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['pccode'];
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZA� = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['lastip'];
    if ( SVRID == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['pccode'] ) === FALSE )
    {
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( 5 );
        }
        else
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 5 );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        }
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "396", "下线失败，机器码不符" );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['dkbindpc'] != "1" && $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8�['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['linecode'] )
    {
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0�( 7 );
        }
        else
        {
            $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 7 );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
        }
        _obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "397", "下线失败，在线码不符" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = time( )( "update `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs�."` set `isonline`=0,`lasttime`=".( time( ) - $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['connectpenl'] * 60 )." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['clientid'], "notsync" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQ�( 4 );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync" );
_obfuscate_j5CLlY6TlYqUiI_VlI6Vk5Q�( "398", "下线成功" );
?>
