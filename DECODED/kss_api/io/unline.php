<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jpSOlYyLk5OVj4eQj5KHiIoÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_kZOVhpCShoiIlZCJhoqVlI0ÿ( $_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ, $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_i4aTkI_IjoaJlIyTiIuNkZAÿ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']( "select count(*) as tnum from kss_z_log_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']." where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ."' and `optype` in (5,7)" );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinelock'] <= $_obfuscate_i4aTkI_IjoaJlIyTiIuNkZAÿ['tnum'] )
    {
        $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']( "update `kss_z_user_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['id']."` set `islock`=3,`intro`='éžæ³•ä¸‹çº¿æ¬¡æ•°è¶…é™' where `username`='".$_obfuscate_h4eSk4uGiZCKhoyNkIiTlI8ÿ."' ", "sync" );
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 3 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
    }
}

function _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( $_obfuscate_jJSNk5SMkY_PiouMko2LkYYÿ )
{
    global $_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ;
    global $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    global $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ;
    global $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ;
    global $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ;
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ = "insert into kss_z_log_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ." (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
    $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ .= "('".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."',".$_obfuscate_jJSNk5SMkY_PiouMko2LkYYÿ.",".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'].",".time( ).",".$_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ.",'".$_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ."','".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode']."','".$_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ."',".$_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ.")";
    return $_obfuscate_j4yMjoyKj42Ti5STjo_HjIYÿ;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softmode'] == "KSOFT" )
{
    $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'] = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], 0, 10 );
}
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['chkonline'] != "1" )
{
    exit( "crypteno198" );
}
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "SELECT * from `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' " );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    exit( "crypteno193" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['endtime'] == PETIME )
{
    exit( "crypteno199" );
}
$_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = array( );
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linknum'] == 1 )
{
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pccode'];
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['lastip'];
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['isrun'] == "1" )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 8 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        exit( "crypteno192" );
    }
    if ( SVRID == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pccode'] ) === FALSE )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 5 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0ÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ );
        }
        exit( "crypteno197" );
    }
    if ( SVRID == 1 && $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] != "1" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'] )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 7 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0ÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ );
        }
        exit( "crypteno196" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update `kss_z_user_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `isonline`=0,`lasttime`=".time( )." where  `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."'", "notsync" );
}
else
{
    $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'] );
    if ( empty( $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ ) )
    {
        exit( "crypteno194" );
    }
    $_obfuscate_kJSVj4qJlIyOi5SQiZKRiYkÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['pccode'];
    $_obfuscate_lIyRio6Kho6LiIaVkY_SiZAÿ = $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['lastip'];
    if ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['isrun'] == "1" )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 8 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        exit( "crypteno192" );
    }
    if ( SVRID == 1 && _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ÿ( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sÿ, $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['pccode'] ) === FALSE )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 5 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0ÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ );
        }
        exit( "crypteno197" );
    }
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['dkbindpc'] != "1" && $_obfuscate_k5SIlJCMhoiIjJWMi5WLkY8ÿ['linecode'] != $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['linecode'] )
    {
        $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 7 );
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
        if ( 0 < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['outlinelock'] )
        {
            _obfuscate_kZOVhpCShoiIlZCJhoqVlI0ÿ( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username'], $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ );
        }
        exit( "crypteno196" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update `kss_z_client_".$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsÿ."` set `isonline`=0,`lasttime`=".time( )." where `username`='".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['username']."' and `clientid`=".$_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yÿ['clientid'], "notsync" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = _obfuscate_lJSVj4aKiIaUkJKUioiVjZQÿ( 4 );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync" );
exit( "crypteno199" );
?>
